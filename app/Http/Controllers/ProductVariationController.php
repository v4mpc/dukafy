<?php

namespace App\Http\Controllers;

use App\ProductVariation;
use Illuminate\Http\Request;
use Session;
// use App\Http\Requests;
use App\Http\Requests\StoreCategory;


class ProductVariationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('df');
        $variations=ProductVariation::all();
        return view('variations.index')->with('variations',$variations);
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
     * @param  StoreCategory $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {


       $variation=new Variation;

       $variation->name=$request->name;
       $variation->save();

        Session::flash('success', 'Variation Saved!');
         return redirect()->route('variations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function show(Variation $variation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variation=Variation::FindOrFail($id);
        return view('variations.edit')->with('variation',$variation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        $variation=Variation::findOrFail($id);
        $variation->name=$request->name;
        $variation->save();
        Session::flash('success', 'Variation Saved!');
         return redirect()->route('variations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Variation  $variation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $variation=Variation::findOrFail($id);
        $variation->delete();
        return response()->json($variation);
    }
}
