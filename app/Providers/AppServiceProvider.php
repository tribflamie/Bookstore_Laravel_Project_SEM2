<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Product;
use App\Models\Author;
use App\Models\Country;
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
        //Khởi tạo thân trang 
        Paginator::useBootstrap();
        //Khởi tạo biến public
        view()->composer('*', function ($view) {
            $categories = Category::all();
            $authors = Author::all();
            $countries = Country::all();
            $products = Product::all();
            $view->with('categories', $categories)->with('products', $products)->with('countries', $countries)->with('authors', $authors);
        });
    }
}
