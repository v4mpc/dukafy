<?php

namespace App\Http\Controllers;

use App\Setting;
use Image;
use Session;
use App\BrandImage;
use App\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Account;

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

        $request->validate([
                'colour' => 'required',
                'layout'=>'required',
               
            ]);

        $setting=new Setting;
        $setting->layout=$request->layout;
        $setting->colour=$request->colour;
        $setting->store_name=$request->store_name;
       
        $setting->working_hours=$request->working_hours;
        $setting->address=$request->address;
        $setting->mobile=$request->mobile;
        $setting->email=$request->email;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->instagram=$request->instagram;
        $setting->whatsapp=$request->whatsapp;
        $setting->about=$request->about;
        $setting->longitude=$request->lng;
        $setting->latitude=$request->lat;
        $setting->location_name=$request->location_name;
        $setting->account_id=Account::where('domain', preg_replace('/\.dukafy/', "", $request->getHost()))->first()->id;
        // dd($request->all());

        if ($request->logo) {
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

        if ($request->logo_text) {
            $setting->logo_text=$request->logo_text;
        } else {
            $setting->logo_text=null;
        }
     

        $setting->save();

        if ($request->has('brand_images')) {
            foreach ($request->file('brand_images') as $image) {
                $filename = $image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($image)->save($location);
                $brand_image=new BrandImage;
                $brand_image->image=$filename;
                $brand_image->save();
            }
        }

        $slider_images=SliderImage::get();

        $image=$slider_images[0]->image;
        

        
       
        if ($request->slider_one) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_one))->save($location);
            $id=$slider_images[0]->id;
            $slider_image=SliderImage::findOrFail($id);
            $slider_image->image=$png_url;
            $slider_image->save();
        }

        if ($request->slider_two) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_two))->save($location);
            $id=$slider_images[1]->id;
            $slider_image=SliderImage::findOrFail($id);
            $slider_image->image=$png_url;
            $slider_image->save();
        }
        if ($request->slider_three) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_three))->save($location);
            $id=$slider_images[2]->id;
            $slider_image=SliderImage::findOrFail($id);
            $slider_image->image=$png_url;
            $slider_image->save();
        }



        Session::flash('initial_screen', 'Welcome! Please Activate your Site in the Settings menu!');
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
        // abort(404,'usdf');
        // dd($request->location_name);
        // if($request->store_name){
        // $setting->store_name=$request->store_name;
        // $setting->working_hours=$request->working_hours;
        // $setting->address=$request->address;
        // $setting->longitude=$request->lng;
        // $setting->latitude=$request->lat;
        // $setting->email=$request->email;
        // }
  
        // if($request->about){
        
       
        // $setting->about=$request->about;
       

        // }else{
        //     $setting->about=null;
        // }

        // if($request->mobile){
        //     $setting->mobile=$request->mobile;
        // }else{
        //    $setting->mobile=null;
        // }

        // if($request->location_name){
        //     $setting->location_name=$request->location_name;
        // }else{
        //    $setting->location_name=null;
        // }

        // if($request->logo_text){
        //     $setting->logo_text=$request->logo_text;
        // }

        // if($request->facebook){
        //     $setting->facebook=$request->facebook;
        // }else{
        //    $setting->facebook=null;
        // }

        // if($request->twitter){
        //     $setting->twitter=$request->twitter;
        // }else{
        //     $setting->twitter=null;
        // }

        // if($request->instagram){
        //     $setting->instagram=$request->instagram;
        // }else{
        //     $setting->instagram=null;
        // }

        // if( $request->whatsapp){
        //     $setting->whatsapp=$request->whatsapp;
        // }else{
        //     $setting->whatsapp=null;
        // }

        if ($request->layout) {
            $setting->layout=$request->layout;
            $setting->colour=$request->colour;
        }
        // if($request->logo){
        //     $png_url = "logo-".time().".png";
        //     $location = public_path('images/' . $png_url);
        //     // Image::make(file_get_contents($request->logo))->save($location);

        //     $img=Image::make(file_get_contents($request->logo));
        // $image_width=$img->width();
        // $image_height=$img->height();

        
        //     $img->resize(null, 50, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($location);
        
        
        // // else {
        // //     $img->resize(, null, function ($constraint) {
        // //         $constraint->aspectRatio();
        // //     })->save($location);
        // // }
        //     $setting->logo=$png_url;
        // }elseif(config('app.settings')->logo&&$request->logo){

        // }
     

        $setting->save();

        if ($request->has('brand_images')) {
            foreach ($request->file('brand_images') as $image) {
                $filename = $image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($image)->save($location);
                $brand_image=new BrandImage;
                $brand_image->image=$filename;
                $brand_image->save();
            }
        }

        if ($request->slider_one) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_one))->save($location);
            $slider_image=new SliderImage;
            $slider_image->image=$png_url;
            $slider_image->save();
        }

        if ($request->slider_two) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_two))->save($location);
            $slider_image=new SliderImage;
            $slider_image->image=$png_url;
            $slider_image->save();
        }
        if ($request->slider_three) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_three))->save($location);
            $slider_image=new SliderImage;
            $slider_image->image=$png_url;
            $slider_image->save();
        }



        Session::flash('success_settings', 'Setting Saved!');
        return redirect()->back();
    }

    public function updateBasicInfo(Request $request, $id)
    {
        $setting=Setting::findOrFail($id);

        // dd($request->location_name);
        if ($request->store_name) {
            $setting->store_name=$request->store_name;
            $setting->working_hours=$request->working_hours;
            $setting->address=$request->address;
            $setting->longitude=$request->lng;
            $setting->latitude=$request->lat;
            $setting->email=$request->email;
            $setting->mobile=$request->mobile;
            $setting->location_name=$request->location_name;
        }
        $setting->save();

        Session::flash('success_settings', 'Setting Saved!');
        return redirect()->back();
    }
    public function updateAbout(Request $request, $id)
    {
        $setting=Setting::findOrFail($id);
        if ($request->about) {
            $setting->about=$request->about;
        } else {
            $setting->about=null;
        }
    
         
    
    
        // if($request->logo_text){
        //     $setting->logo_text=$request->logo_text;
        // }
    
        if ($request->facebook) {
            $setting->facebook=$request->facebook;
        } else {
            $setting->facebook=null;
        }
    
        if ($request->twitter) {
            $setting->twitter=$request->twitter;
        } else {
            $setting->twitter=null;
        }
    
        if ($request->instagram) {
            $setting->instagram=$request->instagram;
        } else {
            $setting->instagram=null;
        }
    
        if ($request->whatsapp) {
            $setting->whatsapp=$request->whatsapp;
        } else {
            $setting->whatsapp=null;
        }
    
        $setting->save();

        Session::flash('success_settings', 'Setting Saved!');
        return redirect()->back();
    }
    public function updateLogo(Request $request, $id)
    {
        // abort(404,'usdf');
        $setting=Setting::findOrFail($id);
       
        if ($request->logo) {
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
        } else {
            $setting->logo=null;
            if (Storage::disk('images')->exists($setting->logo)) {
                Storage::disk('images')->delete($setting->logo);
            }
        }
        if ($request->logo_text) {
            $setting->logo_text=$request->logo_text;
        } else {
            $setting->logo_text=null;
        }

        $setting->save();

     

    



        Session::flash('success_settings', 'Setting Saved!');
        return redirect()->back();
    }


    public function updateSlider(Request $request, $id)
    {
        $slider_images=SliderImage::get();

        $image=$slider_images[0]->image;
        

        
       
        if ($request->slider_one) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_one))->save($location);
            $id=$slider_images[0]->id;
            $slider_image=SliderImage::findOrFail($id);
            $slider_image->image=$png_url;
            $slider_image->save();
        } else {
            $id=$slider_images[0]->id;
            $slider=SliderImage::findOrFail($id);
            if (Storage::disk('images')->exists($slider->image)) {
                Storage::disk('images')->delete($slider->image);
            }
  
            $slider->image=null;
            $slider->save();
        }

        if ($request->slider_two) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_two))->save($location);
            $id=$slider_images[1]->id;
            $slider_image=SliderImage::findOrFail($id);
            $slider_image->image=$png_url;
            $slider_image->save();
        } else {
            $id=$slider_images[1]->id;
            $slider=SliderImage::findOrFail($id);
            if (Storage::disk('images')->exists($slider->image)) {
                Storage::disk('images')->delete($slider->image);
            }
            $slider->image=null;
            $slider->save();
        }
        if ($request->slider_three) {
            $png_url = "slider-".time(). uniqid().".png";
            $location = public_path('images/' . $png_url);
            Image::make(file_get_contents($request->slider_three))->save($location);
            $id=$slider_images[2]->id;
            $slider_image=SliderImage::findOrFail($id);
            $slider_image->image=$png_url;
            $slider_image->save();
        } else {
            $id=$slider_images[2]->id;
            $slider=SliderImage::findOrFail($id);
            if (Storage::disk('images')->exists($slider->image)) {
                Storage::disk('images')->delete($slider->image);
            }
            $slider->image=null;
            $slider->save();
        }


   

     

    



        Session::flash('success_settings', 'Setting Saved!');
        return redirect()->back();
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

    public function getBasicInfoForm()
    {
        return view('settings.basicinfo');
    }

    public function getAboutForm()
    {
        return view('settings.about');
    }

    public function getLogoForm()
    {
        return view('settings.logo');
    }

    public function getSliderForm()
    {
        return view('settings.slider');
    }

    public function upload()
    {
        return response()->json('ok');
    }
}
