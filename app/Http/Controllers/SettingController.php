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
        $setting=new Setting;
        $setting->layout=$request->layout;
        $setting->colour=$request->colour;
        $setting->logo=$request->logo;
        $setting->working_hours=$request->working_hours;
        $setting->address=$request->address;
        $setting->mobile=$request->mobile;
        $setting->email=$request->email;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->instagram=$request->instagram;
        $setting->about=$request->about;
        
        
        $settin->save();

        if($request->hasFile('brand_images')) {
            foreach($request->file('brand_images') as $image) {
                $filename = $image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($image)->save($location);
                $brand_image=new BrandImage;
                $brand_image->image=$filename;
                $brand_image->save();      
            }

    }

    if($request->hasFile('slider_images')) {
        foreach($request->file('slider_images') as $image) {
            $filename = $image->getClientOriginalName();
            $location=public_path('images/'.$filename);
            Image::make($image)->save($location);
            $slider_image=new SliderImage;
            $slider_image->image=$filename;
            $slider_image->save();      
        }

}

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
}
