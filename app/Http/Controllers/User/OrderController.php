<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Order;
use App\Models\Bag;
use DB;
use Session;
use App\Models\User;
use App\Models\Product;
use App\Models\VendorOrder;
use App\Models\LogisticsDelivery;
use App\Models\Logistic;
use App\Models\Withdraw;

use App\Models\PaymentGateway;
use Illuminate\Support\Facades\Input;

use Mail;
use App\Mail\UserOrderCompleteMsg;

class OrderController extends Controller
{

    public function orders()
    {
        $user = Auth::user();
        $user_id = Auth::user()->id;
        $bags = DB::table('bags')
                ->join('products', 'bags.product_id','=','products.id')
                ->join('users', 'products.user_id', '=', 'users.id')
                ->join('vendor_orders', 'bags.product_id', '=', 'vendor_orders.product_id')
                ->select(
                    ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                    'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                    'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number',
                    'bags.vendor_id AS vendor_id', 'bags.logistics_id AS logistics_id',
                    // 'vendor_orders.id AS vendor_order_id', 
                    DB::raw('1 as active')
                ])
                ->distinct('vendor_orders.id')
                ->distinct('bags.id')
                ->where('bags.user_id','=',$user->id)
                ->orderBy('bags.created_at', 'desc')
                ->get();
        // $bags = DB::select("SELECT DISTINCT bags.quantity AS quantity, bags.amount AS amount, bags.ship_fee AS ship_fee, bags.status AS order_status, bags.paid AS paid, bags.order_no AS order_no, bags.created_at AS time_ordered, bags.vendor_id AS vendor_id, bags.logistics_id AS logistics_id, products.id AS product_id, products.name AS product_name, products.photo AS product_photo, products.name AS product_name, users.shop_name AS shop_name, users.shop_address AS shop_address, users.shop_number AS shop_number, vendor_orders.id AS vendor_order_id FROM `bags`, `products`, `users`, `vendor_orders` WHERE bags.product_id = products.id && bags.vendor_id = users.id && bags.user_id = '$user_id'");
        
        // dd($bags);
        return response()->json($bags);
    }

    public function print(){
        $orderNo = Session::get('orderNo');
        $bags = DB::table('bags')
                ->join('products', 'bags.product_id','=','products.id')
                ->join('users', 'products.user_id', '=', 'users.id')
                ->select(
                    ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                    'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                    'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number',
                    'bags.vendor_id AS vendor_id', 'bags.logistics_id AS logistics_id' 
                ])
                ->where('bags.order_no','=',$orderNo)
                ->orderBy('bags.created_at', 'desc')
                ->get();
        $orderDetails = Order::where('order_number', $orderNo)->first();
        return view('front.print', compact('bags', 'orderNo', 'orderDetails'));
    }

    public function trackorder($slug)
    {
        $user = Auth::user();

        if(mb_strlen($slug,'utf-8') > 1){
            $search = '%'.$slug.'%';
            $order = Bag::where('order_no', 'like', $search)->count();
            if($order > 0){
                $bags = DB::table('bags')
                        ->join('products', 'bags.product_id','=','products.id')
                        ->join('users', 'products.user_id', '=', 'users.id')
                        ->select(
                            ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                            'bags.id AS bag_id', 'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                            'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number', 
                        ])
                        ->where('bags.order_no','=',$slug)
                        ->get();
                return response()->json($bags);
            }
        }
        return "";
    }

    public function trackload($id)
    {
        $order = Order::where('order_number','=',$id)->first();
        $datas = array('Pending','Processing','Ready for Pick Up','Pick Up for Packaging','Fulfilment Center','Ready for Delivery','On Delivery','Delivered','Completed','Declined');
        return view('load.track-load',compact('order','datas'));

    }

    public function order($id)
    {
        $user = Auth::guard('web')->user();
        $order = Order::findOrfail($id);
        $cart = unserialize(bzdecompress(utf8_decode($order->cart)));
        $order_number = $order->order_number;
        
        // $datas = DB::select("SELECT DISTINCT vendor_orders.order_number, vendor_orders.user_id, users.owner_name, users.shop_name, users.shop_address, users.shop_number FROM vendor_orders, users WHERE vendor_orders.order_number='$order_number' AND vendor_orders.status='picked up for delivery' AND vendor_orders.user_id = users.id ORDER BY users.id");
        
        $datas = DB::select("SELECT DISTINCT logistics_deliveries.vendor_id, logistics.company, logistics_deliveries.delivery_status, logistics.id, logistics.phone, logistics.address, users.owner_name, users.shop_name, users.shop_address, users.shop_number 
            FROM logistics_deliveries, logistics, users 
            WHERE logistics_deliveries.order_number='$order_number' 
            AND logistics_deliveries.logistics_id=logistics.id 
            AND logistics_deliveries.vendor_id=users.id 
            ORDER BY logistics_deliveries.id DESC");

        // $logistics_company = DB::table('logistics_deliveries')
        // ->join('logistics','logistics_deliveries.logistics_id','=','logistics.id')
        // ->where('order_number',$order_number)->first();
        
        return view('user.order.details',compact('user','order','cart','datas'));
    }
    
    public function orderconfirm(Request $request)
    {
            
        $order_number = $request->order_no;
        $vendor_id = $request->vendor_id;
        // $vendor_order_id = $request->vendor_order_id;
        $product_order_id = $request->product_id;
        $logistics_id = $request->logistics_id;
        
        $vendor_order_id = VendorOrder::where('order_number', $order_number)->where('product_id', $product_order_id)->where('user_id', $vendor_id)->pluck('id')->first();
        
        $data = Order::where('order_number','=',$order_number)->first();
    
        $updateVendorOrderStatus = VendorOrder::where('id', $vendor_order_id)->where('order_number','=',$order_number)->where('user_id','=',$vendor_id)->update(['status' => 'delivered', 'logistics_id'=>$logistics_id]);
        $updateBagStatus = Bag::where('product_id', $product_order_id)->where('order_no','=',$order_number)->where('vendor_id','=',$vendor_id)->update(['status' => 'delivered']);
        $updateDeleiveryStatus = LogisticsDelivery::where('order_number','=',$order_number)->where('vendor_id','=',$vendor_id)->update(['delivery_status' => 3]);
        
        // The vendor will get his money when the customer has recieved his products! 
        $vendor = User::where('id','=',$vendor_id)->first();
        $total_sell_vendor = VendorOrder::where('id', $vendor_order_id)->where('user_id','=',$vendor_id)->where('order_number','=',$order_number)->where('status','=','delivered')->sum('price');    
        $vendor->current_balance = $vendor->current_balance + $total_sell_vendor;
        $vendor->update();

        //Initiate Vendor withdrawal Request
        if($total_sell_vendor != 0){
            
            $vendor->current_balance = $vendor->current_balance - $total_sell_vendor;
            $vendor->update();
            
            $check_if_for_pending_request = Withdraw::where('user_id', $vendor_id)->where('order_no', $order_number)->where('type', 'vendor')->get();

            if(count($check_if_for_pending_request) == 0){
                $newwithdraw = new Withdraw();
                $newwithdraw['user_id'] = $vendor_id;
                $newwithdraw['acc_name'] = $vendor->account_name;
                $newwithdraw['bank_name'] = $vendor->bank_name;
                $newwithdraw['iban'] = $vendor->account_no;
                $newwithdraw['amount'] = $total_sell_vendor;
                $newwithdraw['fee'] = 0;
                $newwithdraw['method'] = 'Automatic';
                $newwithdraw['order_no'] = $order_number;
                $newwithdraw['type'] = 'vendor';
                $newwithdraw->save();
            }else{
                $pending_amount = Withdraw::where('user_id', $vendor_id)->where('order_no', $order_number)->where('type', 'vendor')->sum('amount');
                $new_withdrawal_amount = $pending_amount + $total_sell_vendor;
                $update_withdrawal_request = Withdraw::where('user_id', $vendor_id)->where('order_no', $order_number)->where('type', 'vendor')->update(['amount' => $new_withdrawal_amount]);
            }
        
        }
        
        // Logistic get his money
        $company = Logistic::where('id','=',$logistics_id)->first();
        $total_sell_logistics = VendorOrder::where('id', $vendor_order_id)->where('logistics_id','=',$logistics_id)->where('user_id','=',$vendor_id)->where('order_number','=',$order_number)->where('status','=','delivered')->sum('ship_fee');    
        $company->current_balance = $company->current_balance + $total_sell_logistics;
        $company->update();

        //Initiate Logistics withdrawal Request
        if($total_sell_logistics != 0){
            
            $company->current_balance = $company->current_balance - $total_sell_logistics;
            $company->update();
            
            $check_if_for_pending_request_logistics = Withdraw::where('user_id', $logistics_id)->where('order_no', $order_number)->where('type', 'logistics')->get();

            if(count($check_if_for_pending_request_logistics) == 0){
                $newwithdraw = new Withdraw();
                $newwithdraw['user_id'] = $logistics_id;
                $newwithdraw['acc_name'] = $company->account_name;
                $newwithdraw['bank_name'] = $company->bank_name;
                $newwithdraw['iban'] = $company->account_no;
                $newwithdraw['amount'] = $total_sell_logistics;
                $newwithdraw['fee'] = 0;
                $newwithdraw['type'] = 'logistics';
                $newwithdraw['order_no'] = $order_number;
                $newwithdraw->save();
            }else{
                $pending_amount_logistics = Withdraw::where('user_id', $logistics_id)->where('order_no', $order_number)->where('type', 'logistics')->sum('amount');
                $new_withdrawal_amount_logistics = $pending_amount_logistics + $total_sell_logistics;
                $update_withdrawal_request_logistics = Withdraw::where('user_id', $logistics_id)->where('order_no', $order_number)->where('type', 'logistics')->update(['amount' => $new_withdrawal_amount_logistics]);
                
            }
        }

        $checkVendorOrderCount = VendorOrder::where('order_number','=',$order_number)->where('status','=','completed')->orwhere('status','=','pending')->orwhere('status','=','accept delivery')->orwhere('status','=','picked up for delivery')->get();
        
        if(count($checkVendorOrderCount) == 0){
            $updateOrderStatus = Order::where('order_number','=',$order_number)->update(['status' => 'delivered']);

            //Send User Notification
            $checkout_user_id = Auth::user()->id;
            $cust_email = Auth::user()->email;
            $total_amount = Order::where('order_no', $order_number)->sum('pay_amount');

            $user_items = DB::table('bags')
                ->join('products', 'bags.product_id','=','products.id')
                ->join('users', 'products.user_id', '=', 'users.id')
                ->select(
                    ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                    'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                    'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number',
                ])
                ->where('bags.user_id', $checkout_user_id)
                ->where('bags.order_no', $order_number)
                ->orderBy('bags.created_at', 'desc')
                ->get();
                
                $send_data = Array(
                    'order_no' => $order_number,
                    'amount' => $total_amount,
                    'cart' => $user_items
                );
    
                try{
                    \Mail::to($cust_email)->send(new UserOrderCompleteMsg($send_data)); 
                }catch(Exception $e){
                    return response()->json('Please try again in a while');
                }
        }
        
        return response()->json('completed');
    }

    public function orderdownload($slug,$id)
    {
        $user = Auth::guard('web')->user();
        $order = Order::where('order_number','=',$slug)->first();
        $prod = Product::findOrFail($id);
        if(!isset($order) || $prod->type == 'Physical' || $order->user_id != $user->id)
        {
            return redirect()->back();
        }
        return response()->download(public_path('assets/files/'.$prod->file));
    }

    public function orderprint($id)
    {
        $user = Auth::guard('web')->user();
        $order = Order::findOrfail($id);
        $cart = unserialize(bzdecompress(utf8_decode($order->cart)));
        return view('user.order.print',compact('user','order','cart'));
    }

    public function trans()
    {
        $id = $_GET['id'];
        $trans = $_GET['tin'];
        $order = Order::findOrFail($id);
        $order->txnid = $trans;
        $order->update();
        $data = $order->txnid;
        return response()->json($data);            
    }  

}
