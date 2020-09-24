<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SaveForLaterController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\EsewaController;


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
//removing item from cart
Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
//save for later
Route::post('/cart/switchToSaveForLater/{product}', [CartController::class, 'switchToSaveToLater'])->name('cart.switchToSaveToLater');
//removing item from save fro later
Route::delete('/saveForLater/{product}', [SaveForLaterController::class, 'destroy'])->name('saveForLater.destroy');
//move to cart from save for later
Route::post('/cart/switchToCart/{product}', [SaveForLaterController::class, 'switchToCart'])->name('switchToCart.switchToCart');
//checkout
Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout.index');
//esewa
Route::get('/checkout/success', [EsewaController::class, 'store'])->name('esewa.success');





//distroy or empty cart
Route::get('/empty', function(){
    Cart::destroy();
});
Route::get('/savedempty', function(){
    Cart::instance("saveForLater")->destroy();
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
