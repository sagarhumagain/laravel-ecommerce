<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use Gloudemans\Shoppingcart\Facades\Cart;




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

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
//category list
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
//individual item of products
Route::get('/shop/{product}', [ShopController::class, 'show'])->name('shop.show');
//cart page 
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
//storing product to cart
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

//distroy or empty cart
Route::get('/empty', function(){
    Cart::destroy();
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
