<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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



});