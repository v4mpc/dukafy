<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Resources\Products as ProductsResource;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    public function index($account_id='2', Request $request)
    {
        sleep(4);
        return ProductsResource::collection(Product::withoutGlobalScopes()->where('account_id', $account_id)->get());
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
}
