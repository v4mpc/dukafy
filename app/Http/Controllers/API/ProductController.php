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
        return ProductsResource::collection(Product::withoutGlobalScopes()->where('account_id', $account_id)->get());
    }
}
