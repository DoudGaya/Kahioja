<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Front\CatalogController;
use App\Http\Controllers\User\LoginController;


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

    // PRODCT AUTO SEARCH SECTION
    Route::get('/autosearch/product/{slug}',[FrontendController::class, 'autosearch']);
    // PRODCT AUTO SEARCH SECTION ENDS

    // PRODCT SECTION
    Route::get('/item/{slug}', [CatalogController::class, 'product'])->name('front.product');
    Route::get('/afbuy/{slug}', [CatalogController::class, 'affProductRedirect'])->name('affiliate.product');
    Route::get('/item/quick/view/{id}/', [CatalogController::class,'quick'])->name('product.quick');
    Route::post('/item/review', [CatalogController::class, 'reviewsubmit'])->name('front.review.submit');
    Route::get('/item/view/review/{id}', [CatalogController::class, 'reviews'])->name('front.reviews');
    // PRODCT SECTION ENDS
    
    // CATEGORY SECTION
    Route::get('/category/{category?}/{subcategory?}/{childcategory?}', [CatalogController::class, 'category'])->name('front.category');
    Route::get('/category/{slug1}/{slug2}', [CatalogController::class, 'subcategory'])->name('front.subcat');
    Route::get('/category/{slug1}/{slug2}/{slug3}', [CatalogController::class, 'childcategory'])->name('front.childcat');
    Route::get('/categories/', [CatalogController::class, 'categories'])->name('front.categories');
    Route::get('/childcategories/{slug}',  [CatalogController::class, 'childcategories'])->name('front.childcategories');
    // CATEGORY SECTION ENDS

    // User Login
    Route::post('/login', [LoginController::class ,'login'])->name('user.login.submit');
    // User Login End

    // User Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('user-logout');
    // User Logout Ends