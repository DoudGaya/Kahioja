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
        // $bag = Bag::where('user_id','=',$user_id)->get();
        $bag = DB::table('bags')
                ->join('products','bags.product_id', '=', 'products.id')
                ->where('bags.paid','=','unpaid')
                ->where('bags.user_id','=',$user_id)
                ->get();
        return $response = \Response::json($bag, 200);
    }
}
