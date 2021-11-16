<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlutterwaveController extends Controller
{
    public function initialize(Request $request)
    {
        return $response = \Response::json('Hit', 200);
    }
}
