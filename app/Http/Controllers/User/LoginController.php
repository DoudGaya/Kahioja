<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use App\Models\Product;
use App\Models\Generalsetting;
use Illuminate\Support\Facades\Input;
use Validator;
use Mail;
use DB;
use App\Mail\forgotPassword;
use Illuminate\Support\Str;

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
        if(Session::has('guest')){
          $guest = Session::get('guest');
        }
      $request->session()->invalidate();
      // Attempt to log the user in
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location

          // Check If Email is verified or not
          if(Auth::guard('web')->user()->email_verified == 'No'){
            // Auth::guard('web')->logout();
            return response()->json('Your Email is not Verified!');   
          }

          if(Auth::guard('web')->user()->ban == 1){
            Auth::guard('web')->logout();
            return response()->json('Your Account Has Been Banned');   
          }

          $user_id = Auth::guard('web')->user()->id;
          // Login as User
          if(!empty($guest)){
            $update_bag = DB::select("UPDATE `bags` SET `user_id`='$user_id', `user_type`='user' WHERE `user_id`='$guest' && `user_type`='guest'");
          }
          
          return response()->json('Login Successful');
      }

        // if unsuccessful, then redirect back to the login with the form data
      return response()->json('Wrong Email and Password Combination');     
    }

    public function loginBuyNow(Request $request)
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
        if(Session::has('guest')){
          $guest = Session::get('guest');
        }
      $request->session()->invalidate();
      // Attempt to log the user in
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location

          // Check If Email is verified or not
          if(Auth::guard('web')->user()->email_verified == 'No'){
            // Auth::guard('web')->logout();
            return response()->json('Your Email is not Verified!');   
          }

          if(Auth::guard('web')->user()->ban == 1){
            Auth::guard('web')->logout();
            return response()->json('Your Account Has Been Banned');   
          }

          $user_id = Auth::guard('web')->user()->id;
          // Login as User
          if(!empty($guest)){
            $update_bag = DB::select("UPDATE `bags` SET `user_id`='$user_id', `user_type`='user' WHERE `user_id`='$guest' && `user_type`='guest'");
          }
    
          $gs = Generalsetting::findOrFail(1);
          // dd($request->product_id);

          $product_id = $request->product_id;
          $quantity = $request->quantity;
          try{
            $product = Product::where('id', $product_id)->first();
            return view('front.buynow', compact('product', 'gs', 'quantity'));
          }catch(Exception $e){
            return $response = \Response::json($e, 500);                    
          }
          
          return response()->json('Login Successful');
      }

        // if unsuccessful, then redirect back to the login with the form data
      return response()->json('Wrong Email and Password Combination');     
    }

    public function user(){
      if(Auth::user()){
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        return $response = \Response::json($user, 200);
      }else{
        return $response = \Response::json('', 200);
      }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function forgot(Request $request)
    {
      $input =  $request->all();
      
      if(User::where('email', '=', $request->email)->count() > 0) {
        // user found
        $admin = User::where('email', '=', $request->email)->firstOrFail();
        $autopass = Str::random(8);
        $input['password'] = bcrypt($autopass);
        Session::put('password', $autopass);
        $admin->update($input);
        
        $email = $request->email;
			  \Mail::to($email)->send(new forgotPassword());
			
        if(count(Mail::failures()) > 0 ){
          return response()->json('There seems to be a problem. Please try again in a while');
        }else{                      
          return response()->json('Please Check your email for your new Password');
        }
      }else{
        // user not found
        return response()->json('No Account Found With This Email');    
      }  
    }
}
