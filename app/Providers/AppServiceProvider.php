<?php

namespace App\Providers;

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
        // categorize the frontend routes
        View::composer(['frontend.*'], function ($view) {
    $view->with('categories', Category::where('status', 1)->orderBy('id', 'DESC')->get());
});

        
    }
}
