<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bag;
use App\Models\Product;
use App\Models\Wholesale;
use App\Models\Generalsetting;
use Auth;
use DB;
use Illuminate\Support\Str;
use Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::user()){
            $user_id = Auth::user()->id;
        }else if(Session::has('guest')){
            $user_id = Session::get('guest');
        }else{
            $user_id = 'guest_'.Str::random(5).time();
            Session::put('guest', $user_id);
        }

        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, bags.ship_fee, products.photo, bags.amount as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);

    }

    public function addtobag(Request $request)
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
            Session::put('guest', $user_id);
        }

        $product_id = $request->product_id;
        
        $product_delivery_fee = $request->product_delivery_fee;
        $quantity = $request->quantity;
        
        $product_price = Product::select('price')->where('id', $product_id)->pluck('price')->first();
        $product_price = round((($product_price * $quantity) * 0.15) + ($product_price * $quantity), 2);
        
        $product_delivery_fee = Product::select('ship_fee')->where('id', $product_id)->pluck('ship_fee')->first();
        $product_delivery_fee = round((($product_delivery_fee) * 0.15) + ($product_delivery_fee), 2);

        $vendor_id = Product::select('user_id')->where('id', $product_id)->pluck('user_id')->first();

        //Wholesale
        $check_if_wholesale = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->count();

        if($check_if_wholesale > 0){
            $min_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->first();
            $max_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'desc')->first();
                if($quantity < $min_qty->qty){
                    $product_price = $product_price;
                }else if($quantity >= $max_qty->qty){
                    $discount = $max_qty->discount;
                    $product_price = $product_price - (($discount/100) * $product_price);
                }else{
                    $discount_price = Wholesale::where('product_id', $product_id)->where('qty','<=', $quantity)->orderby('id', 'desc')->first();
                    $discount = $discount_price->discount;
                    $product_price = $product_price - (($discount/100) * $product_price);
                }
        }

        $is_product_in_bag = Bag::where('product_id', $product_id)->where('user_id', $user_id)->where('paid', 'unpaid')->where('vendor_id', $vendor_id)->count();
            if($is_product_in_bag == 0){
                try{
                    Bag::create([
                        'product_id'=> $product_id,
                        'amount'=> $product_price,
                        'ship_fee'=> $product_delivery_fee,
                        'user_id'=> $user_id,
                        'vendor_id'=> $vendor_id,
                        'user_type'=> $user_type,
                        'quantity'=> ($quantity == 0) ? 1 : $quantity,
                        'paid'=> 'unpaid'
                    ]);
                    
                    $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, bags.amount as 'subTotal', products.name, products.price, bags.ship_fee, products.photo FROM bags, products, users WHERE bags.vendor_id = '$vendor_id' && bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
                    
                    return $response = \Response::json($bag, 200);
                
                }catch(Exception $e){
                    return $response = \Response::json($e, 500);                    
                }
            }else{
                $quantity_check = DB::select("SELECT `quantity`, `id` FROM bags WHERE bags.vendor_id = '$vendor_id' &&  bags.product_id='$product_id' && bags.user_id='$user_id' && bags.paid='unpaid'");
                
                if($quantity == 1){
                    $quantity = $quantity_check[0]->quantity + $quantity;
                }

                $bag_id = $quantity_check[0]->id;
                
                    try{
                        $update_bag = DB::select("UPDATE `bags` SET `quantity`='$quantity', `amount`='$product_price' WHERE `id`='$bag_id' && `user_id`='$user_id'  && `paid`='unpaid' && `vendor_id` = '$vendor_id'");
                        
                        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, bags.ship_fee, products.photo, bags.amount as 'subTotal' FROM bags, products, users WHERE bags.vendor_id = '$vendor_id' &&  bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
                        return $response = \Response::json($bag, 200);
                    
                    }catch(Exception $e){
                        return $response = \Response::json($e, 500);                    
                    }                    
            }
    }

    public function buynow(Request $request)
    {
        $gs = Generalsetting::findOrFail(1);

        if(Auth::user()){
            $user_id = Auth::user()->id;
            $user_type = 'user';
        }else if(Session::has('guest')){
            $user_id = Session::get('guest');
            $user_type = 'guest';
        }else{
            $user_id = 'guest_'.Str::random(5).time();
            $user_type = 'guest';
            Session::put('guest', $user_id);
        }
        
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        
        try{
            $product = Product::where('id', $product_id)->first();
            $product_price = Product::select('price')->where('id', $product_id)->pluck('price')->first();
            $product_price = round((($product_price * $quantity) * 0.15) + ($product_price * $quantity), 2);
            $product_delivery_fee = Product::select('ship_fee')->where('id', $product_id)->pluck('ship_fee')->first();
            $product_delivery_fee = round((($product_delivery_fee) * 0.15) + ($product_delivery_fee), 2);
            
            //Wholesale
            $check_if_wholesale = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->count();

            if($check_if_wholesale > 0){
                $min_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->first();
                $max_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'desc')->first();
                    if($quantity < $min_qty->qty){
                        $product_price = $product_price;
                    }else if($quantity >= $max_qty->qty){
                        $discount = $max_qty->discount;
                        $product_price = $product_price - (($discount/100) * $product_price);
                    }else{
                        $discount_price = Wholesale::where('product_id', $product_id)->where('qty','<=', $quantity)->orderby('id', 'desc')->first();
                        $discount = $discount_price->discount;
                        $product_price = $product_price - (($discount/100) * $product_price);
                    }
            }
            return view('front.buynow', compact('product', 'gs', 'quantity', 'product_delivery_fee', 'product_price'));
        }catch(Exception $e){
            return $response = \Response::json($e, 500);                    
        }
    }

    public function addbyone(Request $request)
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
            Session::put('guest', $user_id);
        }

        $bagId = $request->id;
        $quantity = $request->quantity;
        $product_id = Bag::select('product_id')->where('id', $bagId)->pluck('product_id')->first();
        $product_price = Product::select('price')->where('id', $product_id)->pluck('price')->first();
        $product_price = round((($product_price * $quantity) * 0.15) + ($product_price * $quantity), 2);

        //Wholesale
        $check_if_wholesale = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->count();

        if($check_if_wholesale > 0){
            $min_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->first();
            $max_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'desc')->first();
                if($quantity < $min_qty->qty){
                    $product_price = $product_price;
                }else if($quantity >= $max_qty->qty){
                    $discount = $max_qty->discount;
                    $product_price = $product_price - (($discount/100) * $product_price);
                }else{
                    $discount_price = Wholesale::where('product_id', $product_id)->where('qty','<=', $quantity)->orderby('id', 'desc')->first();
                    $discount = $discount_price->discount;
                    $product_price = $product_price - (($discount/100) * $product_price);
                }
        }

        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity, 'amount' => $product_price]);          
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, bags.ship_fee, products.photo, bags.amount as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);          
    }  
    
    public function reducebyone(Request $request)
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
            Session::put('guest', $user_id);
        }

        $bagId = $request->id;
        $quantity = $request->quantity;
        
        $product_id = Bag::select('product_id')->where('id', $bagId)->pluck('product_id')->first();
        $product_price = Product::select('price')->where('id', $product_id)->pluck('price')->first();
        $product_price = round((($product_price * $quantity) * 0.15) + ($product_price * $quantity), 2);

        //Wholesale
        $check_if_wholesale = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->count();

        if($check_if_wholesale > 0){
            $min_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'asc')->first();
            $max_qty = Wholesale::where('product_id', $product_id)->orderby('id', 'desc')->first();
                if($quantity < $min_qty->qty){
                    $product_price = $product_price;
                }else if($quantity >= $max_qty->qty){
                    $discount = $max_qty->discount;
                    $product_price = $product_price - (($discount/100) * $product_price);
                }else{
                    $discount_price = Wholesale::where('product_id', $product_id)->where('qty','<=', $quantity)->orderby('id', 'desc')->first();
                    $discount = $discount_price->discount;
                    $product_price = $product_price - (($discount/100) * $product_price);
                }
        }

        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity, 'amount' => $product_price]);          
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, bags.ship_fee, products.photo, bags.amount as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);
    }

    public function removeproduct(Request $request)
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
            Session::put('guest', $user_id);
        }
        
        $bagId = $request->id;
        $removeProduct = Bag::where('id', $bagId)->delete();          
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, bags.ship_fee, products.photo, bags.amount as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);
    }

    public function checkout()
    {
        $gs = Generalsetting::findOrFail(1);
        return view('front.checkout', compact('gs'));
    }
}
