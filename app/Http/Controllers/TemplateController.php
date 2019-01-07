<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Setting;
use App\SliderImage;
use App\BrandImage;
use App\Timer;
use Carbon\Carbon;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index(Request $request)
    {


          // here i should use .env app_url
        if ($request->url()==env('APP_URL')) {
            // its dukafy
            //lets check if timer has exired
            $timer = Timer::findOrFail(1);
            if ($timer->created_at < Carbon::now()) {
                return view('dukafy.index');
            } else {
                return view('dukafy.timer')->with('timer', $timer);
            }
            

            //its comming soon
        }

        // dd(config('app.settings'));
        if (!count(Setting::all())) {
            return view('maintanance');
        }
      


        // if($request->is('template3/*')){
         
        //     return view('template.template3.index');
        // }
        if (config('app.settings')->layout=='template2') {
            return view('template.template2.index');
        } elseif (config('app.settings')->layout=='template1') {
            return view('template.template1.index');
        } elseif (config('app.settings')->layout=='template3') {
            return view('template.template3.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $products=Product::paginate(20);
        // dd($products);
        $min_price=Product::min('price');
        $max_price=Product::max('price');

     
        
        return view('template.template1.products')->with('products', $products)->with('min_price', $min_price)->with('max_price', $max_price);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productshow(Request $request, $id)
    {
        $product=Product::findOrFail($id);


        //  if($request->is('template3/*')){
        //      $row_class='single-product outer-bottom-sm';
        //     return view('template.template3.productshow')->with('product',$product)->with('row_class',$row_class);
        // }

        if (config('app.settings')->layout=='template2') {
            $body_class="single-product full-width extended";
            return view('template.template2.productshow')->with('product', $product)->with('body_class', $body_class);
        } elseif (config('app.settings')->layout=='template1') {
            return view('template.template1.productshow')->with('product', $product);
        } elseif (config('app.settings')->layout=='template3') {
            $row_class='single-product outer-bottom-sm';
            return view('template.template3.productshow')->with('product', $product)->with('row_class', $row_class);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('template.template1.cart');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function contact(Request $request)
    {
        if (config('app.settings')->layout=='template2') {
            $body_class="single-product full-width extended";
            return view('template.template2.contact');
        } elseif (config('app.settings')->layout=='template1') {
            return view('template.template1.contact');
        } elseif (config('app.settings')->layout=='template3') {
            return view('template.template3.contact');
        }
    }

    public function about(Request $request)
    {
        if (config('app.settings')->layout=='template2') {
            $body_class="single-product full-width extended";
            return view('template.template2.about');
        } elseif (config('app.settings')->layout=='template1') {
            return view('template.template1.about');
        } elseif (config('app.settings')->layout=='template3') {
            return view('template.template3.about');
        }
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
