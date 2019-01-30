<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Charts\ProductSalesChart;
use App\Setting;

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
        if (count(Setting::all())) {
            $products=Product::all();

            $products_sold=Product::has('orders')->get();
            $available_products=Product::where('out_stock', 0)->get();
            $orders=Order::where('status', 'Completed')->orderBy('created_at', 'desc')->take(5)->get();
            $outstock=Product::where('out_stock', 1)->get();
    
            $total_sales=0;
            $completed_orders=Order::where('status', 'Completed')->get();
    
            foreach ($completed_orders as $order) {
                $total_sales+=$order->totalCost();
            }
            $year=date('Y');
            $monthly_gross_order=array();
            for ($i=1; $i<=12; $i++) {
                $month_orders=Order::whereYear('created_at', $year)->whereMonth('created_at', $i)->where('status', 'Completed')->get();
                $monthly_total=0;
              
                foreach ($month_orders as $month_order) {
                    $monthly_total+=$month_order->totalCost();
                }
    
                $monthly_gross_order[]=($monthly_total);
            }
            //  dd($monthly_gross_order);
            $chart = new ProductSalesChart;
            $chart->dataset('Amount', 'line', $monthly_gross_order);
            $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun', 'Jul','Aug','Sept','Oct','Nov','Dec']);
    
    
            return view('home')->with(['products'=>$products,
                                        'available_products'=>$available_products,
                                        'outstock'=>$outstock,
                                        'orders'=>$orders,
                                        'products_sold'=>$products_sold,
                                        'total_sales'=>$total_sales,
                                        'chart' => $chart
            ]);
        } else {
            return redirect()->route('initial_setup');
        }
    }

    public function initialSetup(Request $request)
    {
        if (count(Setting::all()) || $request->getHost()=='demostore.dukafy.co.tz') {
            return redirect()->route('home');
        }
        return view('initialSetup');
    }
}
