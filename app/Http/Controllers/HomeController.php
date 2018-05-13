<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

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

        $products_sold=Product::has('orders')->get();
        $available_products=Product::where('out_stock',0)->get();
        $orders=Order::take(5)->get();
        $outstock=Product::where('out_stock',1)->get();

        $total_sales=0;
        $completed_orders=Order::where('status','Completed')->get();

        foreach ($completed_orders as $order) {
            $total_sales+=$order->totalCost();
        }
// dd($total_sales);

        return view('home')->with(['products'=>$products,
                                    'available_products'=>$available_products,
                                    'outstock'=>$outstock,
                                    'orders'=>$orders,
                                    'products_sold'=>$products_sold,
                                    'total_sales'=>$total_sales
        ]);
    }
}
