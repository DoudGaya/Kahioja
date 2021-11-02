<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Front\CatalogController;


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
  Route::get('/afbuy/{slug}', [CatalogController::class, 'affProductRedirect'])->name('affiliate.product');
  Route::get('/item/quick/view/{id}/', [CatalogController::class,'quick'])->name('product.quick');
  Route::post('/item/review', [CatalogController::class, 'reviewsubmit'])->name('front.review.submit');
  Route::get('/item/view/review/{id}', [CatalogController::class, 'reviews'])->name('front.reviews');
  // PRODCT SECTION ENDS

