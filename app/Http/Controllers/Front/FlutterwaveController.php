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
use App\Models\UserNotification;
use App\Models\VendorOrder;
use Auth;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Str;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use DB;

class FlutterwaveController extends Controller
{
    public function initialize(Request $request)
    {
        if(Auth::user()){
            $user_id = Auth::user()->id;
        }

        $gs = Generalsetting::findOrFail(1);
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.id FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        
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

        return $response = \Response::json($bag, 200);
        
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => $request->amount,
            'email' => $request->email,
            'tx_ref' => $reference,
            'currency' => "NGN",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => $request->email,
                "phone_number" => $request->phone,
                "name" => $request->name
            ],

            "customizations" => [
                "title" => 'Checkout Payment',
                "description" => "Payment for items purchased at Kahioja Stores"
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if($payment['status'] !== 'success') {
            return redirect()->route('front.checkoutfailed');
        }

        $order = new Order;

        $item_name = $gs->title." Order";
        $item_number = Str::random(4).time();
        
        $order['user_id'] = $request->user_id;
        $order['cart'] = utf8_encode(bzcompress(serialize($bag), 9)); 
        $order['totalQty'] = $request->totalQty;
        $order['pay_amount'] = $request->amount;
        $order['customer_email'] = $request->email;
        $order['customer_name'] = $request->name;
        $order['customer_phone'] = $request->phone;
        $order['order_number'] = Str::random(4).time();
        $order['customer_address'] = $request->address;
        $order['customer_city'] = $request->city;
        $order['payment_status'] = "Pending";
        $order['currency_sign'] = $curr->sign;
        $order['currency_value'] = $curr->value;

        if($order['dp'] == 1){
            $order['status'] = 'completed';
        }

        $order->save();

        if($order->dp == 1){
            $track = new OrderTrack;
            $track->title = 'Completed';
            $track->text = 'Your order has completed successfully.';
            $track->order_id = $order->id;
            $track->save();
        }else {
            $track = new OrderTrack;
            $track->title = 'Pending';
            $track->text = 'You have successfully placed your order.';
            $track->order_id = $order->id;
            $track->save();
        }

        $notification = new Notification;
        $notification->order_id = $order->id;
        $notification->save();
            
        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {
        
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
        
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);

        dd($data);
        }
        elseif ($status ==  'cancelled'){
            //Put desired action/code after transaction has been cancelled here
        }
        else{
            //Put desired action/code after transaction has failed here
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
    
    public function checkoutfailed()
    {
        return view('front.checkoutfailed');
    }
}
