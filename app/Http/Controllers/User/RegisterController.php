<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\User;
use App\Classes\GeniusMailer;
use App\Models\Notification;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Mail;
use Session;
use Illuminate\Support\Str;
use App\Mail\verifyEmail;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
    	$gs = Generalsetting::findOrFail(1);

        //--- Validation Section

        $rules = [
			'email'   => 'required|email|unique:users',
			'password' => [
					'required',
					'min:8',             // must be at least 8 characters in length
					'max:16',             // must be at least 16 characters in length
					// 'regex:/[a-z]/',       must contain at least one lowercase letter
					// 'regex:/[A-Z]/',       must contain at least one uppercase letter
					// 'regex:/[0-9]/',       must contain at least one digit
				],
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if($validator->fails()) {
          	return response()->json($validator->errors()->all());
        }
        //--- Validation Section Ends

	        $user = new User;
	        $input = $request->all();        
	        $input['password'] = bcrypt($request['password']);
	        $token = md5(time().$request->name.$request->email);
			$verification_code = Str::random(6);
	        $input['verification_link'] = $verification_code;
	        $input['affilate_code'] = md5($request->name.$request->email);

	        if(!empty($request->vendor)){
				//--- Validation Section
				$rules = [
					'shop_name' => 'unique:users',
				// 	'shop_number'  => 'max:10'
						];
				$customs = [
					'shop_name.unique' => 'This Shop Name has already been taken.',
				// 	'shop_number.max'  => 'Shop Number Must Be Less Then 10 Digit.'
				];

				$validator = Validator::make($request->all(), $rules, $customs);
				
				if($validator->fails()) {
					return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
				}
				$input['is_vendor'] = 1;

			}
			  
			$user->fill($input)->save();
	        
			$email = $request->email;
			
			$send_data = [
				'name' => $request->name,
				'verification_code' => $verification_code
			];

			try{
            	// \Mail::to($email)->send(new verifyEmail($send_data)); 
				// Attempt to log the user in
				if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
					// if successful, then redirect to their intended location
					//Verify User Email redirect
					
					if(Auth::guard('web')->user()->email_verified == 'No'){
						Auth::guard('web')->logout();
						return response()->json('You need to verify your account');   
					}

					// Check If Email is verified or not
					if(Auth::guard('web')->user()->ban == 1){
						Auth::guard('web')->logout();
						return response()->json('Your Account Has Been Banned');   
					}

					// Login as User
					return response()->json('Please check your email for your account verification code');  
				}
            }catch(Exception $e){
				return response()->json('Please try again in a while');
			}

    }

    public function token(Request $request)
    {
        $user = User::where('verification_link','=',$request->verification_link)->first();
			if(isset($user)){
				$user->email_verified = 'Yes';
				$user->update();
				$notification = new Notification;
				$notification->user_id = $user->id;
				$notification->save();
				Auth::guard('web')->login($user); 
				return response()->json('Your Email has been Verified Successfully');
			}else{
				return response()->json('Verification Code not matched!');
			}
    }
}
