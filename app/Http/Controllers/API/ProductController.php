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
        // sleep(4);
        return ProductsResource::collection(Product::withoutGlobalScopes()->where('account_id', $account_id)->get());
    }

    public function show($account_id, $id)
    {
        // sleep(4);
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
        $product->price=$request->price;
        $price_visibility=0;
        if ($request->price_visibility==='true') {
            $price_visibility=1;
        }
        $product->category_id=$request->category_id;
        $product->description=$request->description;
        $product->featured=0;
        $product->out_stock=0;
        $discount=0;
        if ($request->discount) {
            if (substr($request->discount, -1)==='%') {
                //validate here
                $discount = rtrim($request->discount, '%');
            } else {
                $discount=round((($request->discount)/($request->price))*100);
            }
        }

      
        $product->discount=$discount;
        $product->price_visibility=$price_visibility;
        
        $product->account_id=$account_id;
     
        $product->save();


        foreach ($request->images as $image) {
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
}
