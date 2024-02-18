<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home.index');
});
//Route::post('/auth/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');
//
//Route::post('auth/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
//
//Route::get('auth/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);


//Route::get('/cart', [App\Http\Controllers\Api\SellerController::class, 'cart'])->name('cart');
Route::get('/productDetail', [App\Http\Controllers\Api\BuyerController::class, 'productDetail'])->name('productDetail');
Route::get('/cart', [App\Http\Controllers\Api\BuyerController::class, 'cart'])->name('cart');
Route::get('/contact', [App\Http\Controllers\Api\BuyerController::class, 'contact'])->name('contact');

// Post

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
