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

Route::get('home', [App\Http\Controllers\visitorController::class, 'index'])->name('home');
Route::get('cart', [App\Http\Controllers\visitorController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\visitorController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\visitorController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\visitorController::class, 'remove'])->name('remove.from.cart');
Route::get('product-detail/{id}', [App\Http\Controllers\visitorController::class, 'productDetail'])->name('productDetail');
Route::get('orderControl',[App\Http\Controllers\visitorController::class, 'orderControl'])
->name('orderControl');
