<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Using closure-based composers
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $cartItems = Auth::user()->cart()->with('course')->get();
                $view->with('cartItems', $cartItems);
            } else {
                $view->with('cartItems', collect());
            }
        });
    }
}
