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

    public function addbyone(Request $request)
    {     
        $bagId = $request->id;
        $quantity = $request->quantity;
        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity]);          
        return response()->json('added');          
    }  
    
    public function reducebyone(Request $request)
    {
        $bagId = $request->id;
        $quantity = $request->quantity;
        $updateBag = Bag::where('id', $bagId)->update(['quantity' => $quantity]);          
        return response()->json('removed');
    }
}
