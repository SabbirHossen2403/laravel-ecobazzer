<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/shop', 'shop')->name('shop');
});




