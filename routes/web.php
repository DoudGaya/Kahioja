<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\CatalogController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\FlutterwaveController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\FlutterwavePaymentController;
use App\Http\Controllers\User\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ************************************ FRONT SECTION **********************************************

Route::get('/', [FrontendController::class, 'index'])->name('front.index');
Route::get('/404', [FrontendController::class, 'pagenotfound']);
Route::get('/500', [FrontendController::class, 'serveerror']);
Route::get('/privacyandsecurity', [FrontendController::class, 'privacyandsecurity'])->name('front.privacyandsecurity');
Route::get('/termsandpolicy', [FrontendController::class, 'termsandpolicy'])->name('front.termsandpolicy');
Route::get('/footer', [FrontendController::class, 'footer'])->name('footer');

// User Register
Route::post('/register', [RegisterController::class, 'register'])->name('user-register-submit');
Route::post('/register/verify/', [RegisterController::class, 'token'])->name('user-register-token');
Route::post('/register/verify/guest', [RegisterController::class, 'guestToken'])->name('guest-register-token');
Route::post('/register/verify/buynow', [RegisterController::class, 'buyNowToken'])->name('buy-now-register-token');
Route::post('/register/vendor/', [RegisterController::class, 'vendor'])->name('vendor-register');
// User Register End

// User Login
Route::get('/user', [LoginController::class ,'user']);
Route::post('/login', [LoginController::class ,'login'])->name('user.login.submit');
Route::post('/forgot', [LoginController::class, 'forgot']);
// User Login End

// User Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('user-logout');
// User Logout Ends

// PRODUCT AUTO SEARCH SECTION
Route::get('/autosearch/product/{slug}',[FrontendController::class, 'autosearch']);
Route::get('/ordertrack/{slug}',[OrderController::class, 'trackorder']);
// PRODCT AUTO SEARCH SECTION ENDS

// CART
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CartController::class, 'checkout']);
Route::post('/addtobag', [CartController::class,'addtobag']);
Route::post('/buynow', [CartController::class,'buynow']);
Route::get('/removeproduct/{id}', [CartController::class,'removeproduct']);
Route::post('/addbyone/{id}/{quantity}', [CartController::class,'addbyone']);
Route::post('/reducebyone/{id}/{quantity}', [CartController::class,'reducebyone']);
// CART ENDS

// PRODCT SECTION
Route::get('/item/{slug}', [CatalogController::class, 'product'])->name('front.product');
Route::get('/afbuy/{slug}', [CatalogController::class, 'affProductRedirect'])->name('affiliate.product');
Route::get('/item/quick/view/{id}/', [CatalogController::class,'quick'])->name('product.quick');
Route::post('/item/review', [CatalogController::class, 'reviewsubmit'])->name('front.review.submit');
Route::get('/item/view/review/{id}', [CatalogController::class, 'reviews'])->name('front.reviews');
// PRODCT SECTION ENDS

// CATEGORY SECTION
Route::get('/lastestproduct/', [CatalogController::class, 'lastestproduct']);
Route::get('/oldestproduct/', [CatalogController::class, 'oldestproduct']);
Route::get('/lowestproduct/', [CatalogController::class, 'lowestproduct']);
Route::get('/highestproduct/', [CatalogController::class, 'highestproduct']);
Route::get('/categories/', [CatalogController::class, 'categories'])->name('front.categories');
Route::get('/allcategories/', [CatalogController::class, 'allcategories']);
Route::get('/allstores/', [CatalogController::class, 'allstores']);
Route::get('/allproducts/', [CatalogController::class, 'allproducts']);
Route::get('/category/{slug}/', [CatalogController::class, 'category'])->name('front.category');
Route::get('/store/{shop_name}/', [CatalogController::class, 'shop']);
Route::get('/category/{slug1}/{slug2}', [CatalogController::class, 'subcategory'])->name('front.subcat');
Route::get('/category/{slug1}/{slug2}/{slug3}', [CatalogController::class, 'childcategory'])->name('front.childcat');
Route::get('/childcategories/{slug}',  [CatalogController::class, 'childcategories'])->name('front.childcategories');
// CATEGORY SECTION ENDS

// Payment Method 
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
Route::post('/flutterwave/submit', [FlutterwaveController::class, 'initialize'])->name('flutterwave.submit');
Route::get('/flutterwave/callback', [FlutterwaveController::class,'callback'])->name('callback');
Route::get('/checkoutfailed', [FlutterwaveController::class, 'checkoutfailed'])->name('front.checkoutfailed');
Route::get('/checkoutcancelled', [FlutterwaveController::class, 'checkoutcancelled'])->name('front.checkoutcancelled');
Route::get('/checkoutsuccess', [FlutterwaveController::class, 'checkoutsuccess'])->name('front.checkoutsuccess');

// User Subscription
Route::get('/package', [UserController::class, 'package'])->name('user-package');
Route::get('/subscription/{id}', [UserController::class, 'vendorrequest'])->name('user-vendor-request');
Route::post('/vendor-request', [UserController::class, 'vendorrequestsub'])->name('user-vendor-request-submit');
Route::get('/vendor/subscription/check', [FlutterwavePaymentController::class, 'check'])->name('user.flutterwave.check');
Route::post('/vendor/subscription/initialize', [FlutterwavePaymentController::class, 'initialize'])->name('user.flutterwave.initialize');
Route::get('/vendor/subscription/submit', [FlutterwavePaymentController::class, 'callback'])->name('user.flutterwave.submit');
// User Subscription Ends

// User Orders 
Route::get('/orders',  [OrderController::class, 'orders'])->name('user-orders');
Route::get('/order/tracking',  [OrderController::class, 'ordertrack'])->name('user-order-track');
Route::get('/order/trackings/{id}', [OrderController::class, 'trackload'])->name('user-order-track-search');
Route::get('/order/{id}',  [OrderController::class, 'order'])->name('user-order');
Route::post('/order/confirm/{order_no}/{vendor_id}/{logistics_id}', [OrderController::class, 'orderconfirm'])->name('user-order-confirm');
// User Orders Ends 

// User Profile
Route::get('/profile', [UserController::class, 'profile'])->name('user-profile');
Route::post('/profile', [UserController::class, 'profileupdate'])->name('user-profile-update');
// User Profile Ends

// User Reset
Route::post('/reset', [UserController::class, 'reset'])->name('user-reset-submit');
// User Reset End