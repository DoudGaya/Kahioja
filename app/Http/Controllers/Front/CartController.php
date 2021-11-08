<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bag;
use App\Models\Product;
use Auth;

class CartController extends Controller
{
    public function index(Request $request){
        $user_id = Auth::user()->id;
        return $response = \Response::json($user_id, 200);
    }
}
