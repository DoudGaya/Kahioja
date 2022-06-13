<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Order;
use App\Models\Bag;
use DB;
use App\Models\User;
use App\Models\Product;
use App\Models\VendorOrder;
use App\Models\LogisticsDelivery;
use App\Models\Logistic;
use App\Models\PaymentGateway;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{

    public function orders()
    {
        $user = Auth::user();
        $bags = DB::table('bags')
                ->join('products', 'bags.product_id','=','products.id')
                ->join('users', 'products.user_id', '=', 'users.id')
                ->select(
                    ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                    'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                    'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number' 
                ])
                ->where('bags.user_id','=',$user->id)
                ->get();
        return response()->json($bags);
    }

    public function trackorder($slug)
    {
        $user = Auth::user();

        if(mb_strlen($slug,'utf-8') > 1){
            $search = '%'.$slug.'%';
            $order = Bag::where('user_id','=',$user->id)->where('order_no', 'like', $search)->count();
            if($order > 0){
                $bags = DB::table('bags')
                        ->join('products', 'bags.product_id','=','products.id')
                        ->join('users', 'products.user_id', '=', 'users.id')
                        ->select(
                            ['products.id AS product_id', 'products.name AS product_name', 'products.photo AS product_photo', 'products.name AS product_name',
                            'bags.id AS bag_id', 'bags.quantity AS quantity', 'bags.amount AS amount', 'bags.ship_fee AS ship_fee', 'bags.status AS order_status', 'bags.paid AS paid', 'bags.order_no AS order_no', 'bags.created_at AS time_ordered', 
                            'users.shop_name AS shop_name', 'users.shop_address AS shop_address', 'users.shop_number AS shop_number' 
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
        $order_number = $request->order_number;
        $vendor_id = $request->vendor_id;
        $logistics_id = $request->logistics_id;
        
        $data = Order::where('order_number','=',$order_number)->first();

        $updateVendorOrderStatus = VendorOrder::where('order_number','=',$order_number)->where('user_id','=',$vendor_id)->update(['status' => 'delivered','logistics_id'=>$logistics_id]);
        $updateDeleiveryStatus = LogisticsDelivery::where('order_number','=',$order_number)->where('vendor_id','=',$vendor_id)->update(['delivery_status' => 3]);
        
        // The vendor will get his money when the customer has recieved his products! 
        $uprice = User::where('id','=',$vendor_id)->first();
        $total_sell = VendorOrder::where('user_id','=',$vendor_id)->where('order_number','=',$order_number)->where('status','!=','pending')->where('status','!=','processing')->where('status','!=','declined')->sum('price');    
        $uprice->current_balance = $uprice->current_balance + $total_sell;
        $uprice->update();
        
        // Logistic get his money
        $company = Logistic::where('id','=',$logistics_id)->first();
        $total_sell = VendorOrder::where('logistics_id','=',$logistics_id)->where('user_id','=',$vendor_id)->where('order_number','=',$order_number)->where('status','=','delivered')->sum('ship_fee');    
        $company->current_balance = $company->current_balance + $total_sell;
        $company->update();

        $checkVendorOrderCount = VendorOrder::where('order_number','=',$order_number)->where('status','=','picked up for delivery')->get();
        
        if(count($checkVendorOrderCount) == 0){
            $updateOrderStatus = Order::where('order_number','=',$order_number)->update(['status' => 'delivered']);
        }
        
        return redirect()->route('user-orders');
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
