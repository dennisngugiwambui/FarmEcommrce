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
Route::post('/auth/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');

Route::post('auth/register', [App\Http\Controllers\Api\AuthController::class, 'register']);

Route::get('logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);

// Post
