<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product;
use App\Category;
use App\Setting;
use App\Preview;
use App\SliderImage;
use App\BrandImage;
use App\Order;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Validator;
use App\Currency;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');


        Schema::defaultStringLength(191);
        //production
        $maps_api_key="AIzaSyDF4QoRQKs5jt2XXeREKK8jB0cbrB3dhEw";
        //local
        // $maps_api_key="AIzaSyDYm_K4n3phi3UVgSM-CANgdZ7iWMLtgIY";
        
        View::share('maps_api_key', $maps_api_key);
        if (count(Setting::all())) {
            $max_price=0;
            $min_price=0;
            $start_max_price=Product::max('price');
            $start_min_price=Product::min('price');
            $featureds=Product::where('featured', '1')->where('out_stock', '0')->get();
            $on_sales=Product::where('discount', '>', '1')->where('out_stock', '0')->get();
            $products=Product::all();
            $orders=Order::all();
            $out_stocks=Product::where('out_stock', '1')->get();
            $recent_products=Product::orderBy('id', 'desc')->where('out_stock', '0')->take(15)->get();
            $product_count=count($products);
            $featured_count=count($featureds);
            $out_stock_count=count($out_stocks);
            $order_count=count($orders);
            $categories=Category::all();
            $category_count=count($categories);
            $settings=Setting::orderBy('id', 'desc')->first();
            // dd($settings->currency->name);
            $previews=Preview::orderBy('id', 'desc')->first();
            config(['app.settings' => $settings]);
            // dd($settings->working_hours);
            $brand_images=BrandImage::all();
            $slider_images=SliderImage::all();
            // $currencies = Currency::all();
            // dd($slider_images);
            switch ($settings->colour) {
            case 'navy':
                $colour_code='#424378';
                break;
            
                case 'green':
                $colour_code='#7a9b08';
                break;


                case 'blue':
                $colour_code='#0088cc';
                break;

                case 'yellow':
                $colour_code='#fed700';
                break;

                case 'pink':
                $colour_code='#ce1d76';
                break;

                case 'black':
                $colour_code='#000';
                break;
                case 'red':
                $colour_code='#ff6c6c';
                break;

                case 'orange':
                $colour_code='#f39c12';
                break;

                case 'dark_green':
                $colour_code='#12cca7';
                break;
           
        }
            //this is for template2
            $body_class="page home page-template-default";

            //this is for template3
            $row_class='';

            View::share('featureds', $featureds);
            // View::share('currencies', $currencies);
            View::share('body_class', $body_class);
            View::share('row_class', $row_class);
            View::share('products_count', $products);
            View::share('on_sales', $on_sales);
            View::share('categories', $categories);
            View::share('settings', $settings);
            View::share('previews', $previews);
            View::share('colour_code', $colour_code);
            View::share('brand_images', $brand_images);
            View::share('slider_images', $slider_images);
            View::share('min_price', $min_price);
            View::share('max_price', $max_price);
            View::share('start_min_price', $start_min_price);
            View::share('start_max_price', $start_max_price);
            View::share('recent_products', $recent_products);
            View::share('product_count', $product_count);
            View::share('featured_count', $featured_count);
            View::share('order_count', $order_count);
            View::share('category_count', $category_count);
            View::share('out_stock_count', $out_stock_count);
            View::share('category_count', $category_count);
        }

        Resource::withoutWrapping();
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
