<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\User;
use App\Models\Bag;
use App\Models\Product;
use App\Classes\GeniusMailer;
use App\Models\Notification;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Mail;
use Session;
use Illuminate\Support\Str;
use App\Mail\verifyEmail;
use DB;

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
	        
			$email = $request->email;
			
			$send_data = [
				'name' => $request->name,
				'verification_code' => $verification_code
			];

			try{
            	\Mail::to($email)->send(new verifyEmail($send_data)); 
				try{
					$user->fill($input)->save();
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
						if(Session::has('guest')){
							$guest = Session::get('guest');
							$update_bag = DB::select("UPDATE `bags` SET `user_id`=Auth::guard('web')->user()->id, `user_type`='user' WHERE `user_id`='$guest' && `user_type`='guest'");
						}
						return response()->json('Please check your email for your account verification code');  
					}
				}catch(Exception $e){
					return response()->json('Please try again in a while');
				}
            }catch(Exception $e){
				return response()->json('Please try again in a while');
			}

    }

	public function token(Request $request){
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

	public function guestToken(Request $request)
    {
        $user = User::where('verification_link','=',$request->verification_link)->first();
			if(isset($user)){
				if(Session::has('guest')){
					$guest = Session::get('guest');
					$update_bag = DB::select("UPDATE `bags` SET `user_id`='$user->id', `user_type`='user' WHERE `user_id`='$guest' && `user_type`='guest'");
				}
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

	public function buyNowToken(Request $request)
    {
		$gs = Generalsetting::findOrFail(1);
		$user = User::where('verification_link','=',$request->verificationCode)->first();
			if(isset($user)){
				$user->email_verified = 'Yes';
				$user->update();
				$notification = new Notification;
				$notification->user_id = $user->id;
				$notification->save();
				
				Auth::guard('web')->login($user); 
				$product_id = $request->product_id;
				$quantity = $request->quantity;
							
				try{
					$product = Product::where('id', $product_id)->first();
					return view('front.buynow', compact('product', 'gs', 'quantity'));
				}catch(Exception $e){
					return $response = \Response::json($e, 500);                    
				}
			
			}else{
				return response()->json('Verification Code not matched!');
			}
    }

	public function vendor(Request $request){
		//--- Validation Section
		$rules = [
			'shop_name' => 'unique:users',
		];
		
		$validator = Validator::make($request->all(), $rules);
		if($validator->fails()) {
			return response()->json($validator->errors()->all());
		}

		$user = User::where('id','=', Auth::guard('web')->user()->id)->first();
		if(isset($user)){
			$user->shop_name = $request->shop_name;
			$user->owner_name = $request->owner_name;
			$user->shop_number = $request->shop_number;
			$user->shop_address = $request->shop_address;
			$user->bank_name = $request->bank_name;
			$user->account_no = $request->account_no;
			$user->account_name = $request->account_name;
			$user->is_vendor = 2;
			$user->update();
			return response()->json('Congratulations! Your vendor account is ready!');
		}else{
			return response()->json('Please try again later');
		}		
	}
}
