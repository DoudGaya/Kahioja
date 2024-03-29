<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Product;
use App\Models\Category;
use App\Models\Generalsetting;
use App\Models\Page;
use App\Models\Bag;
use DB;
use Auth;
use Response;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function __construct()
    {
        // $this->auth_guests();
        if(isset($_SERVER['HTTP_REFERER'])){
            $referral = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
            if ($referral != $_SERVER['SERVER_NAME']){

                $brwsr = Counter::where('type','browser')->where('referral',$this->getOS());
                if($brwsr->count() > 0){
                    $brwsr = $brwsr->first();
                    $tbrwsr['total_count']= $brwsr->total_count + 1;
                    $brwsr->update($tbrwsr);
                }else{
                    $newbrws = new Counter();
                    $newbrws['referral']= $this->getOS();
                    $newbrws['type']= "browser";
                    $newbrws['total_count']= 1;
                    $newbrws->save();
                }

                $count = Counter::where('referral',$referral);
                if($count->count() > 0){
                    $counts = $count->first();
                    $tcount['total_count']= $counts->total_count + 1;
                    $counts->update($tcount);
                }else{
                    $newcount = new Counter();
                    $newcount['referral']= $referral;
                    $newcount['total_count']= 1;
                    $newcount->save();
                }
            }
        }else{
            $brwsr = Counter::where('type','browser')->where('referral',$this->getOS());
            if($brwsr->count() > 0){
                $brwsr = $brwsr->first();
                $tbrwsr['total_count']= $brwsr->total_count + 1;
                $brwsr->update($tbrwsr);
            }else{
                $newbrws = new Counter();
                $newbrws['referral']= $this->getOS();
                $newbrws['type']= "browser";
                $newbrws['total_count']= 1;
                $newbrws->save();
            }
        }
    }

    function getOS() {

        $user_agent     =   !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "Unknown";

        $os_platform    =   "Unknown OS Platform";

        $os_array       =   array(
            '/windows nt 10/i'     =>  'Windows 10',
            '/windows nt 6.3/i'     =>  'Windows 8.1',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );

        foreach ($os_array as $regex => $value) {

            if (preg_match($regex, $user_agent)) {
                $os_platform    =   $value;
            }

        }
        return $os_platform;
    }

    public function index(Request $request)
	{
        $gs = Generalsetting::findOrFail(1);
        $ps = DB::table('pagesettings')->find(1);
        $fashion =  Product::where('category_id','=',20)->where('status','=',1)->orderBy('id','desc')->take(16)->get();
        $groceries =  Product::where('category_id','=',21)->where('status','=',1)->orderBy('id','desc')->take(16)->get();
        $perfumes =  Product::where('category_id','=',91)->where('status','=',1)->orderBy('id','desc')->take(16)->get();
        $toiletries =  Product::where('category_id','=',22)->where('status','=',1)->orderBy('id','desc')->take(16)->get();
        $drinks =  Product::where('category_id','=',23)->where('status','=',1)->orderBy('id','desc')->take(16)->get();
        $categories = Category::select('name', 'photo', 'slug')->where('status', 1)->orderBy('id', 'desc')->get();

        
        $products = Product::where('status', 1)->orderby('id', 'desc')->paginate(8);
        
        if($request->ajax()){
            $view = view('includes.data',compact('products'))->render();
            return response()->json(['html'=>$view]);
        }
        // dd($products);
        return view('welcome',compact('ps','gs','categories', 'fashion', 'groceries', 'toiletries', 'drinks', 'products', 'perfumes'));
	}

    public function pagenotfound()
    {
        $gs = Generalsetting::findOrFail(1);
        return view('errors.404', compact('gs'));
    }
    
    public function serveerror()
    {
        $gs = Generalsetting::findOrFail(1);
        return view('errors.500', compact('gs'));
    }

    public function privacyandsecurity()
    {
        $gs = Generalsetting::findOrFail(1);
        $privacyandsecuritypage = Page::where('slug', 'privacy')->first();
        return view('front.privacyandsecurity', compact('gs', 'privacyandsecuritypage'));
    }

    public function termsandpolicy()
    {
        $gs = Generalsetting::findOrFail(1);
        $termsandpolicypage = Page::where('slug', 'terms')->first();
        return view('front.termsandpolicy', compact('gs', 'termsandpolicypage'));
    }
    
    public function printproduct()
    {
        $products = Product::orderby('id', 'desc')->get();
        return view('printproduct', compact('products'));
    }

    public function footer()
    {
        $gs = Generalsetting::orderby('id', 'desc')->first();
        return $response = \Response::json($gs, 200);
    }

    public function autosearch($slug)
    {
        if(mb_strlen($slug,'utf-8') > 1){
            $search = '%'.$slug.'%';
            $prods = Product::where('status','=',1)->where('name', 'like', $search)->orWhere('name', 'like', $slug . '%')->take(10)->get();
            return $response = \Response::json($prods, 200);
        }
        return "";
    }

}
