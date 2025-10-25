<?php

namespace App\Providers;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
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
    $view->with('cart', [
                'cartCount' => Cart::where('customer_id',auth('customer')->id() ?? 0)->count(),
                'cartTotal' => Cart::where('customer_id',auth('customer')->user()->id ?? 0)->get()
                ->sum(function ($cart){
                    return $cart->qty * ($cart->product->selling_price ?? $cart->product->price ?? 0);
                          }),
            ]);
    // $view->with('brand', \App\Models\Brand::active()->orderBy('id', 'DESC')->get());
});

        
    }
}
