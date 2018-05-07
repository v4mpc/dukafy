<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Setting;
use App\SliderImage;
use App\BrandImage;


class Template1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $featured=Product::where('featured','1')->get();
        // $categories=Category::all();
        // $settings=Setting::orderBy('id','desc')->first();
        // // dd($settings->working_hours);
        // $brand_images=BrandImage::all();
        // $slider_images=SliderImage::all();
        // return view('template.template1.index')->with('products',$products)
        //                                         ->with('categories',$categories)
        //                                         ->with('settings',$settings)
        //                                         ->with('brand_images',$brand_images)
        //                                         ->with('slider_images',$slider_images);


        return view('template.template1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        return view('template.template1.products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productshow($id)
    {
     
        return view('template.template1.productshow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('template.template1.cart');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function contact()
     {
        return view('template.template1.contact');   
     }

     public function about()
     {
        return view('template.template1.about');   
     }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
