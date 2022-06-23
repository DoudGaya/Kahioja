<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bag;
use App\Models\Product;
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

        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
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
        $product_delivery_fee = Product::select('ship_fee')->where('id', $product_id)->pluck('ship_fee')->first();
        $vendor_id = Product::select('user_id')->where('id', $product_id)->pluck('user_id')->first();
        
        $is_product_in_bag = Bag::where('product_id', $product_id)->where('user_id', $user_id)->count();
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
                    
                    $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
                    
                    return $response = \Response::json($bag, 200);
                
                }catch(Exception $e){
                    return $response = \Response::json($e, 500);                    
                }
            }else{
                $quantity_check = DB::select("SELECT `quantity`, `id` FROM bags WHERE bags.product_id='$product_id' && bags.user_id='$user_id'");
                $quantity_add = $quantity_check[0]->quantity + $quantity;
                $bag_id = $quantity_check[0]->id;
                
                    try{
                        // Bag::where('product_id', $product_id)->where('user_id', $user_id)->update(['quantity' => $quantity_add]);
                        $update_bag = DB::select("UPDATE `bags` SET `quantity`='$quantity_add' WHERE `id`='$bag_id' && `user_id`='$user_id'");
                        // return $response = \Response::json($update_bag, 200);

                        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
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
            // dd($product);
            return view('front.buynow', compact('product', 'gs', 'quantity'));
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
        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity]);          
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
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
        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity]);          
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
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
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);
    }

    public function checkout()
    {
        $gs = Generalsetting::findOrFail(1);
        return view('front.checkout', compact('gs'));
    }
}
