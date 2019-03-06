<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Resources\Categories as CategoriesResource;

class CategoryController extends Controller
{
    public function index($account_id)
    {
        sleep(4);
        return CategoriesResource::collection(Category::withoutGlobalScopes()->where('account_id', $account_id)->get());
    }

    public function create(Request $request)
    {
        $category=Category::firstOrCreate(['name'=>$request->name,'account_id'=>$request->account_id]);
        return response()->json([
            'id'=>$category->id,
            'name'=>$category->name
        ]);
    }
}
