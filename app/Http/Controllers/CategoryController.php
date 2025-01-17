<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Session;
// use App\Http\Requests;
use App\Http\Requests\StoreCategory;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('categories.index')->with('categories', $categories);
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
    public function store(Request $request)
    {
        // dd(getAccountId($request));
        $category=new Category;
        $category->account_id=getAccountId($request);
        $category->name=$request->name;
        $category->save();

        Session::flash('success', 'Category Saved!');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::FindOrFail($id);
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        $category=Category::findOrFail($id);
        $category->name=$request->name;
        $category->save();
        Session::flash('success', 'Category Saved!');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Product::where('category_id', $id)->get();
        if (count($products)==0) {
            $category=Category::findOrFail($id);
            $category->delete();
            return response()->json($category);
        }
    }

    public function addCategory(Request $request)
    {
        $new_category=new Category;
        $new_category->name=$request->name;
        $new_category->account_id=getAccountId($request);
        $new_category->save();
        $categories=Category::get();
        $categories_html='';
        foreach ($categories as $category) {
            $categories_html.='<option '.(($new_category->id==$category->id)?'selected':'').' value="'.$category->id.'">'.$category->name.'</option>';
        }
   
        $category_id=$category->id;
        return response()->json(['categories'=>$categories_html,'category_name'=>$request->name]);
    }
}
