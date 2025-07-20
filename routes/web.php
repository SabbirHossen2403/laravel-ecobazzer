<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/shop', 'shop')->name('shop');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
