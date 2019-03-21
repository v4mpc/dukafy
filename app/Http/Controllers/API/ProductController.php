<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Resources\Products as ProductsResource;
use App\Http\Resources\Product as ProductResource;
use App\ProductImage;
use Image;

class ProductController extends Controller
{
    public function index($account_id, Request $request)
    {
        // dd('am here');
        return ProductsResource::collection(Product::withoutGlobalScopes()->where('account_id', $account_id)->orderBy('created_at', 'desc')->paginate(10));
    }

    public function show($account_id, $id)
    {
        return ProductResource::collection(Product::withoutGlobalScopes()->where('account_id', $account_id)->where('id', $id)->get());
    }


    public function toggleFeatured($account_id, $id)
    {
        $product=Product::where('account_id', $account_id)->where('id', $id)->first();
        
        if ($product->featured) {
            $product->featured=0;
        } else {
            $product->featured=1;
        }
       
        $product->save();
        return response()->json(['success']);
    }

    public function toggleOutStock($account_id, $id)
    {
        $product=Product::where('account_id', $account_id)->where('id', $id)->first();
        if ($product->out_stock) {
            $product->out_stock=0;
        } else {
            $product->out_stock=1;
        }
        $product->save();
        return response()->json('success');
    }

    public function store(Request $request, $account_id)
    {
        $product=new Product;
        $product->name=$request->name;
        $price_visibility=0;
        if ($request->price_visibility=='true') {
            $product->price=$request->price;
            $price_visibility=1;
            $discount=0;
            if ($request->discount) {
                if (substr($request->discount, -1)==='%') {
                    //validate here
                    $discount = rtrim($request->discount, '%');
                    $discount = round(($discount*$request->price)/100);
                } else {
                    $discount=$request->discount;
                }
            }
        } else {
            $product->price=0;
            $discount=0;
        }
        $product->category_id=$request->category_id;
        $product->description=$request->description;
        $product->featured=0;
        $product->out_stock=0;
        $product->discount=$discount;
        $product->price_visibility=$price_visibility;
        $product->account_id=$account_id;
        $product->save();
        foreach ($request->images as $key=>$image) {
            $filename = $account_id.time().uniqid().".png";
            $location=public_path('images/'.$filename);
           
                Image::make(file_get_contents($image))->save($location);
            
            
            
            $product_image=new ProductImage;
            $product_image->image=$filename;
            $product_image->product_id=$product->id;
            $product_image->save();
        }

       

        return response()->json($product);
    }


    public function edit(Request $request, $account_id, $product_id)
    {
        $product=Product::findOrFail($product_id);
        $product=$this->save_product($request, $product, 1);
        return response()->json($product);
    }
   
    private function save_product($request, $product, $edit=0, $account_id=null)
    {
        $product->name=$request->name;
        $product->price=$request->price;
        $price_visibility=0;
        if ($request->price_visibility=='true') {
            $product->price=$request->price;
            $price_visibility=1;
            $discount=0;
            if ($request->discount) {
                if (substr($request->discount, -1)==='%') {
                    //validate here
                    $discount = rtrim($request->discount, '%');
                    $discount = round(($discount*$request->price)/100);
                } else {
                    $discount=$request->discount;
                }
            }
        } else {
            $product->price=0;
            $discount=0;
        }
        if ($edit!=1) {
            $product->category_id=$request->category_id;
            $product->description=$request->description;
            $product->account_id=$account_id;
            $product->featured=0;
            $product->out_stock=0;
        }
        
        $product->discount=$discount;
        $product->price_visibility=$price_visibility;
        $product->save();
        foreach ($product->images as $image) {
            $image->delete();
        }
        if (1 || $edit!=1) {
            foreach ($request->images as $key=>$image) {
                $filename = $account_id.time().uniqid().".png";
                $location=public_path('images/'.$filename);
                Image::make(file_get_contents($image))->save($location);
                $product_image=new ProductImage;
                $product_image->image=$filename;
                $product_image->product_id=$product->id;
                $product_image->save();
            }
        }

        return $product;
    }



    public function search($account_id, Request $request)
    {
        return ProductsResource::collection(Product::withoutGlobalScopes()->where('account_id', $account_id)->search($request->term)->get());
    }
    public function destroy(Request $request,$product_id)
    {
        $product=Product::findOrFail($product_id);
        $product->delete();
        return response()->json($product);
        
    }
}
