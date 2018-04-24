<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\Category;
use Session;
use App\Http\Requests\StoreSubCategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories=SubCategory::all();
        $categories=Category::all();
        return view('subcategories.index')->with('sub_categories',$sub_categories)->with('categories',$categories);
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
    public function store(StoreSubCategory $request)
    {
        $sub_category=new SubCategory;

        $sub_category->name=$request->name;
        $sub_category->category_id=$request->category_id;
        $sub_category->save();
        Session::flash('success','Sub-Category Saved!');
        return redirect()->route('sub_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(subCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_category=SubCategory::findOrFail($id);
        $categories=Category::all();
        return view('subcategories.edit')->with('sub_category',$sub_category)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(storeSubCategory $request, $id)
    {
        $sub_category=SubCategory::findOrFail($id);
        $sub_category->name=$request->name;
        $sub_category->category_id=$request->category_id;
        $sub_category->save();
        Session::flash('success', 'Sub Category Saved!');
         return redirect()->route('sub_categories.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_category=SubCategory::findOrFail($id);
        $sub_category->delete();
         return response()->json($sub_category);
    }
}
