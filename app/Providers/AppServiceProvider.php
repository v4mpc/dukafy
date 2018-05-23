<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product;
use App\Category;
 use App\Setting;
 use App\Preview;
use App\SliderImage;
use App\BrandImage;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(count(Setting::all())){
        $featured=Product::where('featured','1')->get();
        $categories=Category::all();
        $settings=Setting::orderBy('id','desc')->first();
        $previews=Preview::orderBy('id','desc')->first();
        
        // dd($settings->working_hours);
        $brand_images=BrandImage::all();
        $slider_images=SliderImage::all();

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
           
        }

        View::share('products',$featured);
        View::share('categories',$categories);
        View::share('settings',$settings);
        View::share('previews',$previews);
        View::share('colour_code',$colour_code);
        
        View::share('brand_images',$brand_images);
        View::share('slider_images',$slider_images);
        
    }
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
