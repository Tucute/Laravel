<?php

namespace App\Providers;

use App\Models\products;
use App\Models\type_products;
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
        view()->composer('component.header', function($view){
            $loai_sp = type_products::all();
            $view->with('loai_sp',$loai_sp);
        });
        view()->composer('component.product_type', function($view){
            $product_new = products::where('new',1)->orderBy('id','DESC')->skip(1)->take(8)->get();
            $view->with('product_new',$product_new);
        });
    }
}
