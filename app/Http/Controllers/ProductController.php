<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\SubCategory;
use App\ProductImage;
use App\ProductVariation;
use App\Http\Requests\StoreProduct;
use Illuminate\Http\Request;
use Image;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::where('featured',0)->where('out_stock',0)->get();
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
       
      return view('products.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $product=new Product;
        $product->name=$request->name;
        $product->price=$request->price;
        if ($request->price_visibility==='on') {
            $price_visibility=1;
        } else {
            $product_visibility=0;
        }
        
        $product->price_visibility=$price_visibility;
        $product->category_id=$request->category_id;
        // $product->sub_category_id=$request->sub_category_id;
        $product->description=$request->description;

        //temp data
        $product->featured=0;
        $product->out_stock=0;
            if (substr($request->discount, -1)==='%') {
                //validate here
                $discount = rtrim($request->discount, '%'); 
            } else {
            $discount=round((($request->discount)/($request->price))*100);
            }
        $product->discount=$discount;
        
        
        $product->save();


if($request->hasFile('images')) {
    foreach($request->file('images') as $image) {
        $filename = $image->getClientOriginalName();
        $location=public_path('images/'.$filename);

        // $orignal_width=Image::make($image)->width();
        // $orignal_height=Image::make($image)->height();
        // $new_width=$orignal_width;
        // $new_height=$orignal_height;
       
        // if ($orignal_height>=$orignal_width) {
        //     $scale_ratio=$orignal_width/$orignal_height;
        //     while($new_height>=629){
        //         $new_height=$new_height-($new_height*$scale_ratio);
        //      }
        //      while($new_width>=462){
        //         $new_width=$new_width-($new_width*$scale_ratio);
        //      }
        // } else {
        //     $scale_ratio=$orignal_height/$orignal_width;

        //     while($new_height>=462){
        //         $new_height=$new_height-($new_height*$scale_ratio);
        //      }
        //      while($new_width>=629){
        //         $new_width=$new_width-($new_width*$scale_ratio);
        //      }
        // }
        
    // dd('original height= '.$orignal_height.' new height='.$new_height.' original width= '.$orignal_width.' new width='.$new_width);

        

        Image::make($image)->save($location);
        $product_image=new ProductImage;
        $product_image->image=$filename;
        $product_image->product_id=$product->id;

        $product_image->save();

    }
}


// if (count($request->variation)===0) {
    
// for ($i=0; $i<count($request->variation);$i++) {
//     $productVariation=new ProductVariation;
//     $productVariation->variation=$request->variation[$i];
//     $productVariation->value=$request->variation_value[$i];
//     $productVariation->price=$request->variation_price[$i];
//     $productVariation->product_id=$product->id;
//     $productVariation->save();
// }

// if($request->hasFile('variation_images')) {
//     foreach($request->file('variation_images') as $image) {
//         $filename = $image->getClientOriginalName();
//         $location=public_path('images/'.$filename);
//         Image::make($image)->resize(400, 400)->save($location);
//         $variation_image=new VariationImage;
//         $variation_image->image=$filename;
//         $variation_image->variation_id=$variation->id;
//         $variation_image->save();

//     }
// }

// }



Session::flash('success','Product Saved');
return redirect()->route('products.show',$product->id);
       

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::findOrFail($id);
        return view('products.show')->with('product',$product);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $product=Product::findOrFail($id);
    $categories=Category::all();

    return view('products.edit')->with('product',$product)->with('categories',$categories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, $id)
    {
        $product=Product::findOrFail($id);
        $product->name=$request->name;
        $product->price=$request->price;
        if ($request->price_visibility==='on') {
            $price_visibility=1;
        } else {
            $product_visibility=0;
        }
        
        $product->price_visibility=$price_visibility;
        $product->category_id=$request->category_id;
        $product->sub_category_id=$request->sub_category_id;
        $product->description=$request->description;

        // //temp data
        // $product->featured=0;
        // $product->out_stock=0;

        $product->save();


if($request->hasFile('images')) {
    foreach($request->file('images') as $image) {
        $filename = $image->getClientOriginalName();
        $location=public_path('images/'.$filename);
        Image::make($image)->resize(400, 400)->save($location);
        $product_image=ProductImage::where('product_id',$id)->get();
        $product_image->image=$filename;
       
        $product_image->save();

    }
}



for ($i=0; $i<count($request->variation);$i++) {
    $productVariation=ProductVariation::where('product_image',$id)->get();
    $productVariation->variation=$request->variation[$i];
    $productVariation->value=$request->variation_value[$i];
    $productVariation->price=$request->variation_price[$i];
   
    $productVariation->save();
}

// if($request->hasFile('variation_images')) {
//     foreach($request->file('variation_images') as $image) {
//         $filename = $image->getClientOriginalName();
//         $location=public_path('images/'.$filename);
//         Image::make($image)->resize(400, 400)->save($location);
//         $variation_image=VariationImage::where('product_id',$id)->get();
//         $variation_image->image=$filename;
//         $variation_image->variation_id=$variation->id;
//         $variation_image->save();

//     }
// }




Session::flash('success','Product Saved');
return redirect()->route('products.show',$product->id);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
         return response()->json($product);
    }

    public function getSubCategories($id)
    {
        // dd('helo');
     
        $sub_categories = SubCategory::where("category_id",$id)->pluck("name","id");
        // sleep(50000);
        return json_encode($sub_categories);

    }

    public function makeFeatured($id)
    {
     
       $product=Product::findOrFail($id);
       $product->featured=1;
       $product->save();
        // sleep(50000);
        return json_encode($product);

    }

    public function removeFeatured($id)
    {
     
       $product=Product::findOrFail($id);
       $product->featured=0;
       $product->save();
        // sleep(50000);
        return json_encode($product);

    }

    public function removeOutstock($id)
    {
     
       $product=Product::findOrFail($id);
       $product->out_stock=0;
       $product->save();
        // sleep(50000);
        return json_encode($product);

    }

    public function makeOutstock($id)
    {
     
       $product=Product::findOrFail($id);
       $product->out_stock=1;
       $product->save();
        // sleep(50000);
        return json_encode($product);

    }
}
