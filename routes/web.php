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

//Home Routes
Route::get('home', [App\Http\Controllers\visitorController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class], 'logout');
Route::get('cart', [App\Http\Controllers\visitorController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\visitorController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\visitorController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\visitorController::class, 'remove'])->name('remove.from.cart');
Route::get('product-detail/{id}', [App\Http\Controllers\visitorController::class, 'productDetail'])->name('productDetail');
Route::post('reply/{id}', [App\Http\Controllers\visitorController::class, 'storeReplies']);
Route::get('products', [App\Http\Controllers\visitorController::class, 'products'])->name('products');
Route::get('checkout', [App\Http\Controllers\visitorController::class, 'checkout'])->name('checkout');
Route::get('orderControl', [App\Http\Controllers\visitorController::class, 'orderControl'])->name('orderControl');
Route::get('checkCoupon', [App\Http\Controllers\visitorController::class, 'checkCoupon'])->name('checkCoupon');
Route::get('feedbacks', [App\Http\Controllers\VisitorController::class, 'feedbacks'])->name('feedbacks');
Route::get('edit-profile', [App\Http\Controllers\VisitorController::class, 'editProfile'])->name('edit.profile');
Route::post('update-profile', [App\Http\Controllers\VisitorController::class, 'updateProfile']);
Route::post('change-password', [App\Http\Controllers\VisitorController::class, 'changePassword']);
Route::get('orderHistory/{filter}', [App\Http\Controllers\visitorController::class, 'orderHistory'])->name('orderHistory');
Route::get('orderDetail/{id}', [App\Http\Controllers\visitorController::class, 'orderDetail'])->name('orderDetail');
Route::get('orderCancel/{id}/{filter}', [App\Http\Controllers\visitorController::class, 'orderCancel'])->name('orderCancel');
Route::get('review/{id}', [App\Http\Controllers\visitorController::class, 'reviewProduct'])->name('reviewProduct');
Route::get('submitReview', [App\Http\Controllers\visitorController::class, 'submitReview'])->name('submitReview');
Route::get('about-us', [App\Http\Controllers\visitorController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [App\Http\Controllers\visitorController::class, 'contactUs'])->name('contact-us');
Route::post('send-contact', [App\Http\Controllers\visitorController::class, 'sendContact']);
Route::get('faqs', [App\Http\Controllers\visitorController::class, 'faqs'])->name('faqs');
Route::get('term-condition', [App\Http\Controllers\visitorController::class, 'term'])->name('term-condition');
Route::get('privacy', [App\Http\Controllers\visitorController::class, 'privacy'])->name('privacy');
Route::get('site-map', [App\Http\Controllers\visitorController::class, 'site'])->name('site-map');


//Admin Routes
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    //User Management Routes
    Route::get('user-tables', [App\Http\Controllers\adminController::class, 'userTables'])->name('admin.user-tables');
    Route::get('update-roles/{id}', [App\Http\Controllers\adminController::class, 'updateRoles']);
    //Category Management Routes
    Route::get('category-table', [App\Http\Controllers\adminController::class, 'categoryTable'])->name('admin.category-table');
    Route::post('save-categories', [App\Http\Controllers\adminController::class, 'saveCategories']);
    Route::get('update-categories/{id}', [App\Http\Controllers\adminController::class, 'updateCategoriesId']);
    Route::post('update-categories', [App\Http\Controllers\adminController::class, 'updateCategories']);
    //Product Management Routes
    Route::get('product-table', [App\Http\Controllers\adminController::class, 'productTable'])->name('admin.product-table');
    Route::post('save-products', [App\Http\Controllers\adminController::class, 'saveProducts']);
    Route::get('update-products/{id}', [App\Http\Controllers\adminController::class, 'updateProductsId']);
    Route::post('update-products', [App\Http\Controllers\adminController::class, 'updateProducts']);
    Route::get('show-product/{id}', [App\Http\Controllers\adminController::class, 'showProduct']);
    Route::get('hide-product/{id}', [App\Http\Controllers\adminController::class, 'hideProduct']);
    //Coupon Management Routes 
    Route::get('coupon-table', [App\Http\Controllers\adminController::class, 'couponTable'])->name('admin.coupon-table');
    Route::post('save-coupon', [App\Http\Controllers\adminController::class, 'saveCoupon']);
    Route::get('find-coupon/{id}', [App\Http\Controllers\adminController::class, 'findCouponId']);
    Route::post('update-coupon', [App\Http\Controllers\adminController::class, 'updateCoupon']);
    //Order Management Routes
    Route::get('find-order/{id}', [App\Http\Controllers\adminController::class, 'findOrderId']);
    Route::get('oder-tables', [App\Http\Controllers\adminController::class, 'oderTables'])->name('admin.oder-tables');
    Route::get('approve-order/{id}', [App\Http\Controllers\adminController::class, 'approveOrder']);
    Route::get('cancel-order/{id}', [App\Http\Controllers\adminController::class, 'cancleOrder']);
    //Feedback Management Routes 
    Route::get('feedback-tables', [App\Http\Controllers\adminController::class, 'feedbackTables'])->name('admin.feedback-tables');
    Route::get('show-feedback/{id}', [App\Http\Controllers\adminController::class, 'showFeedback']);
    Route::get('hide-feedback/{id}', [App\Http\Controllers\adminController::class, 'hideFeedback']);
    Route::get('show-reply/{id}', [App\Http\Controllers\adminController::class, 'showReply']);
    Route::get('hide-reply/{id}', [App\Http\Controllers\adminController::class, 'hideReply']);
    //Contact Management Routes
    Route::get('contact-table', [App\Http\Controllers\adminController::class, 'contactTable'])->name('admin.contact-table');
});
