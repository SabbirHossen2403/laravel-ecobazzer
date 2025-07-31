<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;


Auth::routes();




Route::name('backend.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



        //* category 
   Route::controller(CategoryController::class)->name('category.')->prefix('/backend/category')->group( function () {

    Route::get( '/' , 'index')->name('index');
    Route::get( '/create' , 'create')->name('create');
    Route::post( '/store' , 'store')->name('store');
    Route::get( '/status-update/{id}' , 'statusUpdate')->name('status.update');
    Route::get( '/edit/{id}' , 'edit')->name('edit');
    Route::post('/category/update/{id}',  'update')->name('update');



    });


    //* banner 
       Route::controller(BannerController::class)->name('banner.')->prefix('/backend/banner')->group( function () {

         Route::get( '/' , 'banner_index')->name('banner_index');
         Route::get( '/banner_create' , 'banner_create')->name('banner_create');
         Route::post( '/banner_store' , 'banner_store')->name('banner_store');
         Route::get( '/banner_status_update/{id}' , 'banner_status_update')->name('banner_status_update');
         Route::get( '/banner-edit/{id}' , 'edit')->name('edit');
         Route::post( '/banner/delete/{id}' , 'banner_delete')->name('banner_delete');



    });


});