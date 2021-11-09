<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bag;
use App\Models\Product;
use Auth;
use DB;

class CartController extends Controller
{
    public function index(Request $request){
        $user_id = Auth::user()->id;
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);
    }

    public function addtobag(Request $request){
        $user_id = Auth::user()->id;
        $product_id = $request->product_id;
        $is_product_in_bag = Bag::where('product_id', $product_id)->where('user_id', $user_id)->count();
            if($is_product_in_bag == 0){
                try{
                    Bag::create([
                        'product_id'=> $product_id,
                        'user_id'=> $user_id,
                        'quantity'=> 1,
                        'paid'=> 'unpaid'
                    ]);
                    return $response = \Response::json('Added to Cart', 200);    
                }catch(Exception $e){
                    return $response = \Response::json($e, 500);                    
                }
            }else{
                $quantity = DB::select("SELECT `quantity` FROM bags WHERE bags.product_id='$product_id' && bags.user_id='$user_id'");
                $quantity = $quantity[0]->quantity + 1;
                    try{
                        Bag::where('product_id', $product_id)->where('user_id', $user_id)->update(['quantity' => $quantity]);
                        return $response = \Response::json('Added to Cart +1', 200);    
                    }catch(Exception $e){
                        return $response = \Response::json($e, 500);                    
                    }                    
            }
        return $response = \Response::json($bag, 200);    
    }

    public function addbyone(Request $request)
    {     
        $bagId = $request->id;
        $quantity = $request->quantity;
        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity]);          
        $user_id = Auth::user()->id;
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);          
    }  
    
    public function reducebyone(Request $request)
    {
        $bagId = $request->id;
        $quantity = $request->quantity;
        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity]);          
        $user_id = Auth::user()->id;
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);
    }

    public function removeproduct(Request $request)
    {
        $bagId = $request->id;
        $removeProduct = Bag::where('id', $bagId)->delete();          
        $user_id = Auth::user()->id;
        $bag = DB::select("SELECT DISTINCT bags.id as 'bagId', bags.quantity, products.name, products.price, products.ship_fee, products.photo, bags.quantity * products.price as 'subTotal' FROM bags, products, users WHERE bags.product_id = products.id && bags.user_id = '$user_id' && bags.paid = 'unpaid' ORDER BY bags.id DESC");
        return $response = \Response::json($bag, 200);
    }
}
