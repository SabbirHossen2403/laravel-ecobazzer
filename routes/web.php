<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\CustomerController;

Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/shop/{category_url?}', 'categoryArchive')->name('category_archive');
    Route::get('/cart' , 'cart')->name('cart');
    // Route::get('/checkout' , 'checkout')->name('checkout');
    Route::get('/product/{slug}', 'showProduct')->name('product.show');
    Route::get('/details', 'details')->name('details');
    Route::post('/review-submite', 'reviewSubmite')->name('review.submite');
    Route::get('/search', 'searchProduct')->name('search'); 
    

});


// cart 
Route::get('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('cart.add')->middleware('customer');
Route::get('/checkout', [CheckoutController::class,'checkout'])->name('checkout');

// Customer Auth


Route::get('/sing-in', [CustomerController::class, 'showLoginForm'])->name('customer.login'); 
Route::post('/customer-login', [CustomerController::class, 'login'])->name('customer.login.submit');
Route::get('/sing-up', [CustomerController::class, 'showRegisterForm'])->name('customer.register');
Route::post('/customer-register', [CustomerController::class, 'register'])->name('customer.register.submit');
Route::get('/customer-logout', [CustomerController::class, 'logout'])->name('customer.logout');
Route::get('/customer-password/reset', [CustomerController::class, 'showLinkRequestForm'])->name('customer.password.forgot');

Route::get('/google/login', [CustomerController::class, 'googleLogin'])->name('google.login');
 
Route::get('/google/redirect-url', [CustomerController::class, 'googleRedirectUrl'])->name('google.redirect');

Route::get('/customer-account',[CustomerController::class, 'viewDashboard'])->middleware('customer')->name('customer.account');



Route::get('auth/facebook', [CustomerController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [CustomerController::class, 'handleFacebookCallback']);
