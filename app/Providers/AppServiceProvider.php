<?php

namespace App\Providers;

use App\Models\products;
use App\Models\type_products;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
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

          view()->composer('component.header', function ($view) {
            if (Session::has('cart')) {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with([
                    'cart' => Session::get('cart'),
                    'product_cart' => $cart->items,
                    'totalPrice' => $cart->totalPrice,
                    'totalQty' => $cart->totalQty
                ]);
            } else {
                $view->with([
                    'product_cart' => [], // Truyền một mảng rỗng khi không có giỏ hàng trong session
                ]);
            }
        });
    }
}
