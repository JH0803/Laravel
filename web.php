<?php

use App\Http\Controllers\Product_Controller;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Checkout_Controller;
use Illuminate\Support\Facades\Route;

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
 Route::group(['middleware'=>'customAuth'], function() {
   Route::get("user", [UserController::class, 'create']);
   Route::post("user/create", [UserController::class, 'store']);
 });

 Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [Product_Controller::class,'index']);
    Route::get('cart', [Product_Controller::class,'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [Product_Controller::class, 'addToCart'])->name('addToCart');
    Route::patch('update-cart', [Product_Controller::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [Product_Controller::class, 'remove'])->name('remove.from.cart');
 });

 Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', Checkout_Controller::class,'getCheckout')->name('checkout.index');
    Route::post('/checkout/order', Checkout_Controller::class,'placeOrder')->name('checkout.place.order');
 });