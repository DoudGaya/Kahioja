<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontendController;


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


  // PRODCT SECTION
  Route::get('/item/{slug}', [CatalogController::class, 'product'])->name('front.product');
//   Route::get('/afbuy/{slug}','Front\CatalogController@affProductRedirect')->name('affiliate.product');
//   Route::get('/item/quick/view/{id}/','Front\CatalogController@quick')->name('product.quick');
//   Route::post('/item/review','Front\CatalogController@reviewsubmit')->name('front.review.submit');
//   Route::get('/item/view/review/{id}','Front\CatalogController@reviews')->name('front.reviews');
  // PRODCT SECTION ENDS