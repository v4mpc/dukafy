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
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products=Product::where('featured',0)->where('out_stock',0)->get();
        $products=Product::get();

        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
       
        return view('products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
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
        $product->account_id=Auth::user()->account_id;
        
        
        $product->save();


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                $img=Image::make($image);
                $image_width=$img->width();
                $image_height=$img->height();

                if ($image_height>=$image_width) {
                    $img->resize(null, 600, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($location);
                } else {
                    $img->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($location);
                }
        
        
       
                //    dd('original height= '.$orignal_height.' new height='.$new_height.' original width= '.$orignal_width.' new width='.$new_width);
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



        Session::flash('success', 'Product Saved');
        return redirect()->route('products.show', $product->id);
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
        return view('products.show')->with('product', $product);
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

        return view('products.edit')->with('product', $product)->with('categories', $categories);
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


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                $location=public_path('images/'.$filename);
                Image::make($image)->resize(400, 400)->save($location);
                $product_image=ProductImage::where('product_id', $id)->get();
                $product_image->image=$filename;
       
                $product_image->save();
            }
        }



        for ($i=0; $i<count($request->variation);$i++) {
            $productVariation=ProductVariation::where('product_image', $id)->get();
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




        Session::flash('success', 'Product Saved');
        return redirect()->route('products.show', $product->id);
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
     
        $sub_categories = SubCategory::where("category_id", $id)->pluck("name", "id");
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

    public function search(Request $request)
    {
        //  dd($request->query);
        $request->validate([
                'query'=>'required|min:3'
            ]);
        $category=$request->input('category_name');
        ;
        $query=$request->input('query');

        
        if ($category=='all') {
            $products = Product::where('out_stock', 0)->search($query)->paginate(20);
          
            $min_price=Product::where('out_stock', 0)->search($query)->min('price');
            $max_price=Product::where('out_stock', 0)->search($query)->max('price');
            $checked_categories=array();
            foreach ($products as $product) {
                $checked_categories[]=$product->category->id;
            }
        } elseif (config('app.settings')->layout=='template3') {
            $products = Product::where('out_stock', 0)->search($query)->paginate(20);
            $min_price=Product::where('out_stock', 0)->search($query)->min('price');
            $max_price=Product::where('out_stock', 0)->search($query)->max('price');
            $checked_categories=array();
            foreach ($products as $product) {
                $checked_categories[]=$product->category->id;
            }
        } else {
            // dd('it came');
            $products = Product::where('out_stock', 0)->where('category_id', $category)->search($query)->paginate(20);
            $min_price=Product::where('out_stock', 0)->where('category_id', $category)->search($query)->min('price');
            $max_price=Product::where('out_stock', 0)->where('category_id', $category)->search($query)->max('price');
            $checked_categories=array();
            foreach ($products as $product) {
                $checked_categories[]=$product->category->id;
            }
        }

        // $products = Product::search($query)->paginate(20);
        if (config('app.settings')->layout=='template2') {
            $body_class="left-sidebar";
            return view('template.template2.search')->with('products', $products)->with('checked_categories', $checked_categories)->with('min_price', $min_price)->with('max_price', $max_price)->with('body_class', $body_class);
        } elseif (config('app.settings')->layout=='template1') {
            return view('template.template1.search')->with('products', $products)->with('checked_categories', $checked_categories)->with('min_price', $min_price)->with('max_price', $max_price);
        } elseif (config('app.settings')->layout=='template3') {
            // dd($products);
            return view('template.template3.search')->with('products', $products)->with('checked_categories', $checked_categories)->with('min_price', $min_price)->with('max_price', $max_price);
        }
    }

    public function category(Request $request, $id)
    {
        $products=Product::where('out_stock', 0)->where('category_id', $id)->paginate(20);
        // dd($products);
        $checked_categories=array();
        $checked_categories[]=$id;
        $min_price=Product::where('out_stock', 0)->where('category_id', $id)->min('price');
        $max_price=Product::where('out_stock', 0)->where('category_id', $id)->max('price');



//      if($request->is('template3/*')){
//         $row_class='single-product outer-bottom-sm';
//        return view('template.template3.search')->with('products',$products)->with('row_class',$row_class)->with('min_price',$min_price)->with('max_price',$max_price);
//    }

        if (config('app.settings')->layout=='template2') {
            $body_class="left-sidebar";
            return view('template.template2.search')->with('products', $products)->with('checked_categories', $checked_categories)->with('min_price', $min_price)->with('max_price', $max_price)->with('body_class', $body_class);
        } elseif (config('app.settings')->layout=='template1') {
            return view('template.template1.search')->with('products', $products)->with('checked_categories', $checked_categories)->with('min_price', $min_price)->with('max_price', $max_price);
        } elseif (config('app.settings')->layout=='template3') {
            $row_class='single-product outer-bottom-sm';
            return view('template.template3.search')->with('products', $products)->with('row_class', $row_class)->with('min_price', $min_price)->with('max_price', $max_price);
        }
    }

    public function filterProduct(Request $request)
    {


        //  dd($request->all());

        if (config('app.settings')->layout=='template3') {
            $price=explode(",", $request->price);
            $min_price=$price[0];
            $max_price=$price[1];
            $products=Product::where('out_stock', 0)->where('price', '>=', $min_price)->where('price', '<=', $max_price)->paginate(20);
            return view('template.template3.search')->with('products', $products)->with('min_price', $min_price)->with('max_price', $max_price);
        } else {
            $min_price=$request->min_price;
            $max_price=$request->max_price;
            $checked_categories=array();
            $checked_categories=$request->category_id;
            $products=Product::where('out_stock', 0)->whereIn('category_id', $request->category_id)->where('price', '>=', $min_price)->where('price', '<=', $max_price)->paginate(20);
            return view('template.template1.search')->with('products', $products)->with('checked_categories', $checked_categories)->with('min_price', $min_price)->with('max_price', $max_price);
        }
    }
}
