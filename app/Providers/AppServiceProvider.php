<?php

namespace App\Providers;
use View;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // View::share('key', 'value');
        View::composer('front-end.includes.header', function ($view) {
            $view->with('categories', Category::where('publicationStatus', 1)->get());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
