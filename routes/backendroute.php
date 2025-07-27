<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;


Auth::routes();




Route::name('backend.')->middleware('auth')->group(function () {
    Route::get('/backend/dashboard', [DashboardController::class, 'index'])->name('dashboard');



        //* category 
   Route::controller(CategoryController::class)->name('category.')->prefix('/backend/category')->group( function () {

    Route::get( '/' , 'index')->name('index');
    Route::get( '/create' , 'create')->name('create');


    });



});