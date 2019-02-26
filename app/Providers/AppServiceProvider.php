<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // share all
        // $menuA = 'This is menu 1234';
        // View::share('menu',$menuA);

        //share only layout.header
        // View::composer('layout.header',function($view){
        //     $menuA = 'This is menu A';
        //     $view->with('menu',$menuA);
        // });
        

        View::composer(['layout.header','index'],function($view){
            $menuA = 'This is menu A';
            $menuB = '12345';
            $view->with([
                'menu'=>$menuA,
                'menub' => $menuB
            ]);
        });

        // share all
        View::composer('*',function($view){
            $menuA = 'This is menu A';
            $view->with('menu',$menuA);
        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
