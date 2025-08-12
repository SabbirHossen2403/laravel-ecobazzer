<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


Route::controller(FrontendController::class)->name('frontend.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/shop/{category_url?}', 'categoryArchive')->name('category_archive');
    Route::get('/product/{slug}', 'showProduct')->name('product.show');
    Route::get('/details', 'details')->name('details');

});




