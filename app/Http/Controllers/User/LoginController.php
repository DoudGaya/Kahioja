<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        //--- Validation Section
        $rules = [
                  'email'   => 'required|email',
                  'password' => 'required'
                ];

        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array($validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

      // Attempt to log the user in
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location

        // Check If Email is verified or not
          if(Auth::guard('web')->user()->email_verified == 'No'){
            Auth::guard('web')->logout();
            return response()->json('Your Email is not Verified!');   
          }

          if(Auth::guard('web')->user()->ban == 1){
            Auth::guard('web')->logout();
            return response()->json('Your Account Has Been Banned');   
          }

          // Login as User
          return redirect()->route('front.index');
      }

        // if unsuccessful, then redirect back to the login with the form data
        return response()->json('Wrong Email and Password Combination');     
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
