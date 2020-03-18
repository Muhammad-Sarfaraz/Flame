<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Basic;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     Schema::defaultStringLength(191);
    //     View::composer('*',function($view){
    //       $basic = Basic::find(1);
    //       $view->with('basic',$basic);
    //     });
    // }
}
