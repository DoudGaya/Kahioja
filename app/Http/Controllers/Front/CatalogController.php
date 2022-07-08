<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Comment;
use App\Models\Generalsetting;
use App\Models\Currency;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductClick;
use App\Models\Rating;
use App\Models\Reply;
use App\Models\Report;
use App\Models\Subcategory;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Session;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;


class CatalogController extends Controller
{

    // CATEGORIES SECTOPN

    public function categories()
    {
      $gs = Generalsetting::findOrFail(1);
      $products = Product::where('status','=',1)->orderBy('id','desc')->paginate(30);
      return view('front.categories', compact('products','gs'));
    }

    public function allcategories(){
        $category = Category::select('name', 'photo', 'slug')->where('status', 1)->orderBy('name', 'asc')->get();
      
        return $response = \Response::json($category, 200);
    }

    public function allproducts(){
        $data = Product::orderBy('id', 'desc')->paginate(10);
        dd($data);
        return response()->json($data);
    }

    public function allstores(){

      $stores = User::select('shop_name')->where('is_vendor', 1)->orderBy('shop_name', 'asc')->get();
      
      return $response = \Response::json($stores, 200);
    }

    // -------------------------------- CATEGORY SECTION ----------------------------------------
    //
    // public function filteredProducts(Request $request, $slug=null, $slug1=null, $slug2=null)
    // {
    //
    //
    //   return $products;
    // }

    // -------------------------------- CATEGORY SECTION ----------------------------------------

    public function category(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);

      $category_slug = $request->slug;
      $category_id = Category::select('id')->where('slug', $category_slug)->first();
      $products = Product::where('category_id', $category_id->id)->where('status', 1)->orderBy('id','desc')->paginate(12);
      
      return view('front.category', compact('products','gs'));
    }

    public function shop(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);
      $shop_name = $request->shop_name;
      $user_id = User::select('id')->where('shop_name', $shop_name)->first();
      $products = Product::where('user_id', $user_id->id)->where('status', 1)->orderBy('id','desc')->paginate(12);
      return view('front.category', compact('products','gs'));
    }

    public function lastestproduct(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);
      $products = Product::where('status', 1)->orderBy('created_at','desc')->paginate(12);
      return view('front.category', compact('products','gs'));
    }

    public function oldestproduct(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);
      $products = Product::where('status', 1)->orderBy('created_at','asc')->paginate(12);
      return view('front.category', compact('products','gs'));
    }

    public function lowestproduct(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);
      $products = Product::where('status', 1)->orderBy('price','asc')->paginate(12);
      return view('front.category', compact('products','gs'));
    }

    public function highestproduct(Request $request)
    {
      $gs = Generalsetting::findOrFail(1);
      $products = Product::where('status', 1)->orderBy('price','desc')->paginate(12);
      return view('front.category', compact('products','gs'));
    }

    public function getsubs(Request $request) {
      $category = Category::where('slug', $request->category)->firstOrFail();
      $subcategories = Subcategory::where('category_id', $category->id)->get();
      return $subcategories;
    }


    // -------------------------------- PRODUCT DETAILS SECTION ----------------------------------------

    public function report(Request $request)
    {

        //--- Validation Section
            $rules = [
                   'note' => 'max:400',
                    ];
            $customs = [
                   'note.max' => 'Note Must Be Less Than 400 Characters.',
                       ];
            $validator = Validator::make($request->all(), $rules, $customs);
            if ($validator->fails()) {
              return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
            }
        //--- Validation Section Ends

        //--- Logic Section
        $data = new Report;
        $input = $request->all();
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section
        $msg = 'New Data Added Successfully.';
        return response()->json($msg);
        //--- Redirect Section Ends

    }

    public function product($slug)
    {
        // $this->code_image();
        $gs = Generalsetting::findOrFail(1);
        $productt = Product::where('slug','=',$slug)->firstOrFail();
        $vendor_id = Product::where('slug', $slug)->pluck('user_id')->first();
        $store = User::where('id', $productt->user_id)->pluck('shop_name')->first();
        
        if($productt->status == 0){
          return response()->view('errors.404')->setStatusCode(404); 
        }
        $productt->views+=1;
        $productt->update();
        if (Session::has('currency'))
        {
            $curr = Currency::find(Session::get('currency'));
        }
        else
        {
            $curr = Currency::where('is_default','=',1)->first();
        }
        $product_click =  new ProductClick;
        $product_click->product_id = $productt->id;
        $product_click->date = Carbon::now()->format('Y-m-d');
        $product_click->save();

        if($productt->user_id != 0)
        {
            $vendors = Product::where('status','=',1)->where('user_id','=',$productt->user_id)->take(8)->get();
        }
        else
        {
            $vendors = Product::where('status','=',1)->where('user_id','=',0)->take(8)->get();
        }
        
        // dd($store);
        return view('front.product',compact('productt','curr','vendors','gs','store'));

    }

    public function quick($id)
    {
        $product = Product::findOrFail($id);
        if (Session::has('currency'))
        {
            $curr = Currency::find(Session::get('currency'));
        }
        else
        {
            $curr = Currency::where('is_default','=',1)->first();
        }
        return view('load.quick',compact('product','curr'));

    }

    public function affProductRedirect($slug)
    {
        $product = Product::where('slug','=',$slug)->first();
//        $product->views+=1;
//        $product->update();


        return redirect($product->affiliate_link);

    }
    // -------------------------------- PRODUCT DETAILS SECTION ENDS----------------------------------------



    // -------------------------------- PRODUCT COMMENT SECTION ----------------------------------------

        public function comment(Request $request)
        {
            $comment = new Comment;
            $input = $request->all();
            $comment->fill($input)->save();
            $comments = Comment::where('product_id','=',$request->product_id)->get()->count();
            $data[0] = $comment->user->photo ? url('assets/images/users/'.$comment->user->photo):url('assets/images/noimage.png');
            $data[1] = $comment->user->name;
            $data[2] = $comment->created_at->diffForHumans();
            $data[3] = $comment->text;
            $data[4] = $comments;
            $data[5] = route('product.comment.delete',$comment->id);
            $data[6] = route('product.comment.edit',$comment->id);
            $data[7] = route('product.reply',$comment->id);
            $data[8] = $comment->user->id;
            return response()->json($data);
        }

        public function commentedit(Request $request,$id)
        {
            $comment =Comment::findOrFail($id);
            $comment->text = $request->text;
            $comment->update();
            return response()->json($comment->text);
        }

        public function commentdelete($id)
        {
            $comment =Comment::findOrFail($id);
            if($comment->replies->count() > 0)
            {
                foreach ($comment->replies as $reply) {
                    $reply->delete();
                }
            }
            $comment->delete();
        }

    // -------------------------------- PRODUCT COMMENT SECTION ENDS ----------------------------------------

    // -------------------------------- PRODUCT REPLY SECTION ----------------------------------------

        public function reply(Request $request,$id)
        {
            $reply = new Reply;
            $input = $request->all();
            $input['comment_id'] = $id;
            $reply->fill($input)->save();
            $data[0] = $reply->user->photo ? url('assets/images/users/'.$reply->user->photo):url('assets/images/noimage.png');
            $data[1] = $reply->user->name;
            $data[2] = $reply->created_at->diffForHumans();
            $data[3] = $reply->text;
            $data[4] = route('product.reply.delete',$reply->id);
            $data[5] = route('product.reply.edit',$reply->id);
            return response()->json($data);
        }

        public function replyedit(Request $request,$id)
        {
            $reply = Reply::findOrFail($id);
            $reply->text = $request->text;
            $reply->update();
            return response()->json($reply->text);
        }

        public function replydelete($id)
        {
            $reply =Reply::findOrFail($id);
            $reply->delete();
        }

    // -------------------------------- PRODUCT REPLY SECTION ENDS----------------------------------------


    // ------------------ Rating SECTION --------------------

        public function reviewsubmit(Request $request)
        {
            $ck = 0;
            $orders = Order::where('user_id','=',$request->user_id)->where('status','=','completed')->get();

            foreach($orders as $order)
            {
            $cart = unserialize(bzdecompress(utf8_decode($order->cart)));
                foreach($cart->items as $product)
                {
                    if($request->product_id == $product['item']['id'])
                    {
                        $ck = 1;
                        break;
                    }
                }
            }
            if($ck == 1)
            {
                $user = Auth::guard('web')->user();
                $prev = Rating::where('product_id','=',$request->product_id)->where('user_id','=',$user->id)->get();
                if(count($prev) > 0)
                {
                return response()->json(array('errors' => [ 0 => 'You Have Reviewed Already.' ]));
                }
                $Rating = new Rating;
                $Rating->fill($request->all());
                $Rating['review_date'] = date('Y-m-d H:i:s');
                $Rating->save();
                $data[0] = 'Your Rating Submitted Successfully.';
                $data[1] = Rating::rating($request->product_id);
                return response()->json($data);
            }
            else{
                return response()->json(array('errors' => [ 0 => 'Buy This Product First' ]));
            }
        }


        public function reviews($id){
            $productt = Product::find($id);
            return view('load.reviews',compact('productt','id'));

        }

    // ------------------ Rating SECTION ENDS --------------------
}
