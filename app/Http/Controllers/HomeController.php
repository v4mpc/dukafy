<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $available_products=Product::where('out_stock',0)->get();
        $outstock=Product::where('out_stock',1)->get();;

        return view('home')->with('products',$products)->with('available_products',$available_products)->with('outstock',$outstock);
    }
}
