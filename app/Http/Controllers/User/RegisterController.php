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
          	return response()->json($validator->getMessageBag());
        }
        //--- Validation Section Ends

	        $user = new User;
	        $input = $request->all();        
	        $input['password'] = bcrypt($request['password']);
	        $token = md5(time().$request->name.$request->email);
	        $input['verification_link'] = $token;
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
			\Mail::to($email)->send(new verifyEmail());
			
			if(count(Mail::failures()) > 0 ){
				session::flash('message','There seems to be a problem. Please try again in a while'); 
				return response()->json('There seems to be a problem. Please try again in a while');
			}else{                      
				// Attempt to log the user in
				if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
					// if successful, then redirect to their intended location
			
					// Check If Email is verified or not
					if(Auth::guard('web')->user()->ban == 1){
						Auth::guard('web')->logout();
						return response()->json('Your Account Has Been Banned');   
					}

					// Login as User
					$request->session()->flash('flash', 'User successfully created.');
					return response()->json('Please check your mail to verify your account');  
				}
			}

    }

    public function token($token)
    {
        $gs = Generalsetting::findOrFail(1);

        if($gs->is_verification_email == 1){    	
			$user = User::where('verification_link','=',$token)->first();
			if(isset($user)){
				$user->email_verified = 'Yes';
				$user->update();
				$notification = new Notification;
				$notification->user_id = $user->id;
				$notification->save();
				Auth::guard('web')->login($user); 
				return redirect()->route('front.index')->with('success','Email Verified Successfully');
			}
    	}else{
    		return redirect()->back();	
    	}
    }
}
