<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         Paginator::useBootstrapFive();
        // categorize the frontend routes
        View::composer(['frontend.*'], function ($view) {
    $view->with('categories', Category::active()->orderBy('id', 'DESC')->get());
    $view->with('banners', \App\Models\Banner::active()->orderBy('id', 'DESC')->get());
    $view->with('services', \App\Models\Service::active()->orderBy('id', 'DESC')->get());
    // $view->with('brand', \App\Models\Brand::active()->orderBy('id', 'DESC')->get());
});

        
    }
}
