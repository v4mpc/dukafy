<?php

namespace App\Http\Controllers;

use App\Setting;
use Image;
use Session;
use App\BrandImage;
use App\SliderImage;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("sfd");
        $setting=new Setting;
        $setting->layout=$request->layout;
        $setting->colour=$request->colour;
        $setting->store_name=$request->store_name;
       
        $setting->working_hours=$request->working_hours;
        $setting->address="P O BOX ".$request->address;
        $setting->mobile="+255".$request->mobile;
        $setting->email=$request->email;
        $setting->facebook="https://".$request->facebook;
        $setting->twitter="https://".$request->twitter;
        $setting->instagram="https://".$request->instagram;
        $setting->about=$request->about;
        $setting->longitude=$request->lng;
        $setting->latitude=$request->lat;
        // dd($request->all());

        if($request->has('logo')){
            $png_url = "logo-".time().".png";
            $location = public_path('images/' . $png_url);
            // Image::make(file_get_contents($request->logo))->save($location);

            $img=Image::make(file_get_contents($request->logo));
        $image_width=$img->width();
        $image_height=$img->height();

        
            $img->resize(null, 50, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);
        
        
        // else {
        //     $img->resize(, null, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($location);
        // }
            $setting->logo=$png_url;
        }
     

        $setting->save();

        if($request->has('brand_images')) {
            foreach($request->file('brand_images') as $image) {
                $filename = $image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($image)->save($location);
                $brand_image=new BrandImage;
                $brand_image->image=$filename;
                $brand_image->save();      
            }

    }

    if($request->has('slider_one')) {
    
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_one))->save($location);
            $slider_image=new SliderImage;
            $slider_image->image=$png_url;
            $slider_image->save();      
        

}

if($request->has('slider_two')) {
    
    $png_url = "slider-".time(). uniqid().".png";
    $location = public_path('images/' . $png_url);
    Image::make(file_get_contents($request->slider_two))->save($location);
    $slider_image=new SliderImage;
    $slider_image->image=$png_url;
    $slider_image->save();      


}
if($request->has('slider_three')) {
    
    $png_url = "slider-".time(). uniqid().".png";
    $location = public_path('images/' . $png_url);
    Image::make(file_get_contents($request->slider_three))->save($location);
    $slider_image=new SliderImage;
    $slider_image->image=$png_url;
    $slider_image->save();      


}
  return redirect()->route('home');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }

    public function getLayoutForm()
    {
        return view('settings.layout');
    }

    public function getLogoForm()
    {
        return view('settings.logo');
    }

    public function getCompanyAddressForm()
    {
        return view('settings.companyaddress');
    }

    public function upload()
    {
        return response()->json('ok');
    }
}
