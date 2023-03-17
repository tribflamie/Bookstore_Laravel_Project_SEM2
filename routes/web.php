<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class], 'logout');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\HomeController::class, 'addToCart']);
