<?php

namespace App\Http\Controllers\Front;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Currency;
use App\Models\Generalsetting;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderTrack;
use App\Models\Pagesetting;
use App\Models\PaymentGateway;
use App\Models\Pickup;
use App\Models\Product;
use App\Models\User;
use App\Models\Bag;
use App\Models\UserNotification;
use App\Models\VendorOrder;
use DB;
use Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Mail;
use App\Mail\vendorOrderNotification;
use App\Mail\userOrderNotification;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        if(Auth::user()){
            $user_id = Auth::user()->id;
            $user_type = 'user';
        }else if(Session::has('guest')){
            $user_id = Session::get('guest');
            $user_type = 'guest';
        }else{
            $user_id = 'guest_'.Str::random(5).time();
            $user_type = 'guest';
            // Cookie::queue('guest', $user_id, 525600);
            $request->session()->put(['guest' => $user_id]);
            // Session::put('guest', $user_id);
        }

        // Cookie::queue('user_id', $user_id, 525600);
        $request->session()->put(['user_id', $user_id]);
        // Session::put('user_id', $user_id);

        if(Session::has('currency')) {
            $curr = Currency::find(Session::get('currency'));
            $currency_name = $curr->name;
        }else{
            $curr = Currency::where('is_default','=',1)->first();
            $currency_name = $curr->name;
        }

        $gs = Generalsetting::findOrFail(1);
        $orderId = Str::random(4).time();
        $words = 'KahIoJaSma';
        $reference = str_shuffle($words).time();
        
        $amount = ($request->amount / 100); 
        $email = $request->email; 
        $name = $request->name; 
        $phone = $request->phone; 
        $address = $request->address; 
        $city = $request->city; 
        $serviceFee = $request->serviceFee; 
        $deliveryFee = $request->deliveryFee;
        
        
        if($request->productid == null){
            //Checkout from cart
            $update_order_id = DB::select("UPDATE `bags` SET `order_no`='$orderId' WHERE `user_id`='$user_id' && `paid`='unpaid'");
            $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.product_id AS 'product_id', bags.vendor_id AS 'vendor_id', bags.quantity, bags.paid, products.id, products.user_id, products.ship_fee, products.price FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        
        }else{
            //Buy Now
            $product = Product::where('id', $request->productid)->first();
            // dd($product->price);
            Bag::create([
                'product_id'=> $request->productid,
                'user_id'=> $user_id,
                'user_type'=> $user_type,
                'quantity'=> $request->productquantity,
                'vendor_id'=> $product->user_id,
                'paid'=> 'unpaid',
                'order_no'=> $orderId,
                'amount'=> $product->price,
                'ship_fee'=> $product->ship_fee,
            ]);
            $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.product_id AS 'product_id', bags.vendor_id AS 'vendor_id', bags.quantity, bags.paid, products.id, products.user_id, products.ship_fee, products.price FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC LIMIT 1");
        }

        $totalQty = Bag::where('order_no', $orderId)->sum('quantity');

        $order = new Order;

            $order['user_id'] = $user_id;
            $order['cart'] = ''; 
            $order['totalQty'] = $totalQty;
            $order['pay_amount'] = $amount;
            $order['delivery_fee'] = $deliveryFee;
            $order['service_fee'] = $serviceFee;
            $order['customer_email'] = $email;
            $order['customer_name'] = $name;
            $order['shipping_cost'] = 1;
            $order['packing_cost'] = 1;
            $order['tax'] = 1;
            $order['customer_phone'] = $phone;
            $order['order_number'] = $orderId;
            $order['customer_address'] = $address;
            $order['customer_country'] = 'Nigeria';
            $order['customer_city'] = $city;
            $order['payment_status'] = "unpaid";
            $order['currency_sign'] = 'NGN';
            $order['currency_value'] = 1;

            if($order['dp'] == 1){
                $order['status'] = 'completed';
            }

        $order->save();
        
        $data = array(
            "amount" => 90,
            "reference" => $reference,
            "email" => $request->email,
            "currency" => "NGN",
            "orderID" => $orderId,
        );

        $request->session()->put(['total_qty' => $totalQty]);
        $request->session()->put(['user_id' => $user_id]);
        $request->session()->put(['bag' => $bag]);
        $request->session()->put(['gs' => $gs]);
        $request->session()->put(['orderId' => $orderId]);
        
        try{
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    public function handleGatewayCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        
        if($paymentDetails['data']['status'] == 'success'){
            
            $gs = $request->session()->get('gs');
            $user_id = $request->session()->get('user_id');
            $orderNo = $request->session()->get('orderId');
            $bag = $request->session()->get('bag');
        
            $total_qty = Bag::where('order_no', $orderNo)->sum('quantity');
            $email = Order::where('order_number', $orderNo)->pluck('customer_email')->first();
            $name = Order::where('order_number', $orderNo)->pluck('customer_name')->first();
            $phone = Order::where('order_number', $orderNo)->pluck('customer_phone')->first();
            $address = Order::where('order_number', $orderNo)->pluck('customer_address')->first();
            $city = Order::where('order_number', $orderNo)->pluck('customer_city')->first();
            $pay_amount = Order::where('order_number', $orderNo)->pluck('pay_amount')->first();
            $deliveryFee = Order::where('order_number', $orderNo)->pluck('delivery_fee')->first();
            $serviceFee = Order::where('order_number', $orderNo)->pluck('service_fee')->first();
            $order = Order::where('order_number', $orderNo)->first();
            
            //Updating Order
            $order_count = Order::where('order_number', $orderNo)->count();
            
            if($order_count == 1){
                $notification = new Notification;
                $notification->order_id = $order->id;
                $notification->save();
    
                // Substracting From Stock
                foreach($bag as $prod){
                    $quantity_purchased = $prod->quantity;
                    if($quantity_purchased != null){
                        $product = Product::findOrFail($prod->id);
                        $quantity_left = $product->stock - $quantity_purchased;
                        $product->stock = $quantity_left;
                        $product->update();  
                        
                        if($product->stock <= 5){
                            $notification = new Notification;
                            $notification->product_id = $product->id;
                            $notification->save();                    
                        }              
                    
                    }
                }
                
                // dd($bag);
    
                //Sending vendor notification
                foreach($bag as $prod){
                    if($prod->user_id != 0){
                        $vorder =  new VendorOrder;
                        $vorder->order_id = $order->id;
                        $vorder->user_id = $prod->user_id;
                        $vorder->product_id = $prod->product_id;
                        $notf[] = $prod->user_id;
                        $vorder->qty = $prod->quantity;
                        $vorder->price = $prod->price;
                        $vorder->ship_fee = $prod->ship_fee;
                        $vorder->order_number = $order->order_number;             
                        $vorder->save();
                    }
                }
        
                // Sending User Notification
                if(!empty($notf)){
                    $users = array_unique($notf);
                    foreach ($users as $user) {
                        $notification = new UserNotification;
                        $notification->user_id = $user;
                        $notification->order_number = $order->order_number;
                        $notification->save();    
                    }
                }
    
                // Updating Bag 
                foreach($bag as $prod){
                    $cart = Bag::findOrFail($prod->bagId);
                    $payment_status = 'paid';
                    $cart->paid = $payment_status;
                    $cart->order_no = $orderNo;
                    $cart->update();
                }

                //Send Vendors Notification
                $vendors = DB::select("SELECT DISTINCT bags.vendor_id as 'vendor_id' FROM bags WHERE bags.order_no = '$orderNo'");
    
                foreach($vendors as $vendor){
                    
                    $vendor_id = $vendor->vendor_id;
                    $seller = User::where('id', $vendor_id)->first();
                
                    $vendor_email = $seller->email;
                    

                    $vendor_total_amount = Bag::where('vendor_id', $vendor_id)->where('order_no', $orderNo)->sum('amount');

                    
                    $cart = DB::table('bags')
                        ->join('products', 'bags.product_id','=','products.id')
                        ->join('users', 'products.user_id', '=', 'users.id')
                        ->select(
                            ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                            'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                            'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number',
                        ])
                        ->where('bags.vendor_id', $vendor_id)
                        ->where('bags.order_no', $orderNo)
                        ->orderBy('bags.created_at', 'desc')
                        ->get();
                        
                        $send_data = Array(
                            'order_no' => $orderNo,
                            'cust_name' => $name,
                            'cust_email' => $email,
                            'cust_phone' => $phone,
                            'cust_address' => $address,
                            'amount' => $vendor_total_amount,
                            'cart' => $cart);
            
                        try{
                            \Mail::to($vendor_email)->send(new vendorOrderNotification($send_data)); 
                        }catch(Exception $e){
                            return response()->json('Please try again in a while');
                        }
                }

                //Send User Notification
                $checkout_user_id = $user_id;
                $total_amount_paid = $pay_amount;
                
                $user_items = DB::table('bags')
                    ->join('products', 'bags.product_id','=','products.id')
                    ->join('users', 'products.user_id', '=', 'users.id')
                    ->select(
                        ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                        'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                        'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number',
                    ])
                    ->where('bags.user_id', $checkout_user_id)
                    ->where('bags.order_no', $orderNo)
                    ->orderBy('bags.created_at', 'desc')
                    ->get();
                    
                    $send_data = Array(
                        'order_no' => $orderNo,
                        'cust_name' => $name,
                        'cust_email' => $email,
                        'cust_phone' => $phone,
                        'cust_address' => $address,
                        'amount' => $total_amount_paid,
                        'cart' => $user_items
                    );
        
                    try{
                        \Mail::to($email)->send(new userOrderNotification($send_data)); 
                    }catch(Exception $e){
                        return response()->json('Please try again in a while');
                    }
            }
        
            // $request->session()->put(['temporder' => $order]);
            $request->session()->put(['tempbag' => $bag]);
            $request->session()->put(['orderNo'=> $orderNo]);

            $transactID = $paymentDetails['data']['id'];
            $tx_ref = $paymentDetails['data']['reference'];
            $amount_collected = ($paymentDetails['data']['amount'] / 100);
            $charge_fee = ($paymentDetails['data']['fees'] / 100);
            $amount_paid = $pay_amount;
            $currency = $paymentDetails['data']['currency'];
            $date = date("D M j Y G:i:s",  strtotime($paymentDetails['data']['createdAt'])  + 1 * 3600);
            
            $payment_type = $paymentDetails['data']['channel'];

            if($payment_type == 'card'){
                $last_4digits = $paymentDetails['data']['authorization']['last4'];
                $card_type = $paymentDetails['data']['authorization']['card_type'];
                $card_details = $payment_type.'-'.$card_type.'-'.$last_4digits;
            }else{
                $card_details = $payment_type;
            }
            
            $customer_email = $email;
            $customer_phone = $phone;
            
            $request->session()->put(['transactID' => $transactID]);
            $request->session()->put(['payment_type' => $payment_type]);
            $request->session()->put(['customer_email' => $customer_email]);
            $request->session()->put(['customer_phone' => $customer_phone]);
            
            $orderNo = $request->session()->get('orderNo');
            $user = $request->session()->get('user_id');

            $order = Order::where('order_number', $orderNo)->update(
                [
                    'user_id'=> $user,
                    'payment_status'=> 'completed',
                    'method'=> $card_details,
                    'txnid'=> $transactID,
                    'currency_sign'=> $currency,
                ]
            );

            $bag = Bag::where('order_no', $orderNo)->update([
                    'paid' => 'paid', 'order_no' => $orderNo
            ]);
            
            return redirect()->route('front.checkoutsuccess');

        }else{
            return redirect()->route('front.checkoutfailed');
        }

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function checkoutsuccess()
    {
        $gs = Generalsetting::findOrFail(1);
        
        if(Session::has('orderNo')){
            $orderNo = Session::get('orderNo');
            $transactID = Session::get('transactID');
            $payment_type = Session::get('payment_type');
            $order = Order::where('order_number', $orderNo)->first();
            
            $order_no = $order->order_number;
            $deliveryFee = $order->delivery_fee;
            $serviceFee = $order->service_fee;

            //Getting the items in the bag
            $bags = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, bags.order_no, bags.paid, products.id, products.name, products.photo, products.price, orders.status, orders.created_at 
                FROM bags, products, orders
                WHERE bags.order_no = '$order_no' && bags.product_id = products.id && orders.order_number = bags.order_no
                ORDER BY bags.id DESC");
        
            return view('front.checkoutsuccess', compact('gs', 'order', 'transactID', 'deliveryFee', 'serviceFee', 'bags'));
        }

    }

    public function checkoutfailed()
    {
        $gs = Generalsetting::findOrFail(1);

        return view('front.checkoutfailed', compact($gs));
    }

    public function checkoutcancelled()
    {
        $gs = Generalsetting::findOrFail(1);

        return view('front.checkoutcancelled', compact($gs));
    }
}
