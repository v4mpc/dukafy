<?php

namespace App\Http\Controllers;

use App\Preview;
use App\PreviewImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class PreviewController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request);
        // return json_encode($request->template);
        $preview=new Preview;
        
        $preview->user_id=Auth::id();
        $preview->template=$request->template;
        $preview->colour=$request->colour;
        $preview->address=$request->address;
        $preview->phone=$request->phone;
        $preview->mobile=$request->mobile;
        $preview->email=$request->email;
        $preview->working_hours=$request->working_hours;

        if($request->hasFile('logo')) {
           
                $filename = $request->logo->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($request->logo)->resize(400, 400)->save($location);
                $preview->logo=$filename;
        }

        $preview->save();

        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($image)->resize(400, 400)->save($location);
                $preview_image=new PreviewImage;
                $preview_image->image=$filename;
                $preview_image->preview_id=$preview->id;
           
                $preview_image->save();
            }

            dd($preview_image);
        }
        return json_encode($preview);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preview  $preview
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $template=Preview::where('user_id',Auth::id())->orderBy('id', 'desc')->first();
        // dd($template);
        return view('template.template1.samples.index')->with('template',$template);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preview  $preview
     * @return \Illuminate\Http\Response
     */
    public function edit(Preview $preview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preview  $preview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preview $preview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preview  $preview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preview $preview)
    {
        //
    }
}
