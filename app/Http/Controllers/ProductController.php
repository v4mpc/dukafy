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
use App\Events\ProductUpdated;

class ProductController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('check.products')->only(['store','create']);
    }
    public function index()
    {
        // $products=Product::where('featured',0)->where('out_stock',0)->get();
        $products=Product::get();
        // dd($products[10]->images);

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
        // dd('ddfsd');
        $product=new Product;
        $product=$this->store_product($request, $product);
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
        // dd($product->images_json_encoded());
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

        $product=$this->store_product($request, $product, 'u');
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
        // dd($request->query);
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

    public function store_product($request, $product, $mode='c') //c for create u for update
    {
        if ($mode=='u') {
            //lets first get the images we want to delete from database
            //then dispatch an event to delete the images from server
            event(new ProductUpdated($product->images));
            //then delete their database record
            foreach ($product->images as $image) {
                $image->delete();
            }
            
            //then we are good to go we can store new imagess
        }
        $product->name=$request->name;
        $product->price=$request->price;
        $product_visibility=0;
        if ($request->price_visibility==='on') {
            $price_visibility=1;
        }
        $product->price_visibility=$price_visibility;
        $product->category_id=$request->category_id;
        $product->description=$request->description;
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

        foreach ($request->images as $image) {
            $filename = Auth::user()->account_id.time().uniqid().".png";
            $location=public_path('images/'.$filename);
            Image::make(file_get_contents($image))->save($location);
            $product_image=new ProductImage;
            $product_image->image=$filename;
            $product_image->product_id=$product->id;
            $product_image->save();
        }
        return $product;
    }
}
