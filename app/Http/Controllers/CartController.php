<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd(Cart::content());
        

        if(config('app.settings')->layout=='template2'){
            return view('template.template2.cart');
        }elseif (config('app.settings')->layout=='template1'){
            return view('template.template1.cart');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=Product::FindOrFail($request->id);
        Cart::add($request->id,$product->name,$request->quantity,$product->price)->associate('App\Product');
        return redirect()->back()->with('message', 'Item was added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        Cart::remove($id);
        // dd($id);
        return back()->with('message','Item has been removed!');
    }

    public function addToCart(Request $request)
    {
       
        $product=Product::findOrFail($request->id);
        Cart::add($product->id,$product->name,1,$product->price)->associate('App\Product');
        $cart_html='';

     
        sleep(3);

        if(config('app.settings')->layout=='template2'){
            $cart_html.='<div class="widget_shopping_cart_content"><ul class="cart_list product_list_widget cart-glance-content ">';
            foreach(Cart::content() as $item){
               
                $cart_html.='<li class="mini_cart_item"><a title="Remove this item" class="remove" href="#">×</a>';
                $cart_html.='<a href="'.route("product.show",$item->model->id).'">';
                $cart_html.='<img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="'.asset("images/".$item->model->images[0]->image).'" alt="">'.$item->name.'</a>';
                $cart_html.='<span class="quantity">'.$item->qty.' × <span class="amount">'.number_format($item->price) .'TZS</span></span></li>';
                
            }
            $cart_html.=' </ul><p class="total"><strong>Subtotal:</strong> <span class="amount">'.Cart::subtotal().' TZS</span></p>';
                $cart_html.='<p class="buttons"><a class="button wc-forward" href="'.route('cart.index').'">View Cart</a>';
                $cart_html.=' <a class="button checkout wc-forward" href="#">Checkout</a></p></div>';

        }else{
            foreach(Cart::content() as $item){
                $cart_html.='<li><div class="media-left"><a href="'.route('product.show',$item->model->id).'" class="thumb"> <img src="'.asset("images/".$item->model->images[0]->image).'" class="img-responsive" alt="" > </a></div>';
                $cart_html.='<div class="media-body"> <a href="'.route('product.show',$item->model->id).'" class="tittle">'.$item->name.'</a> <span>'.number_format($item->price).' TZS x '.$item->qty.'</span></div></li>';
            }
            $cart_html.=' <li class="btn-cart"> <a href="'.route('cart.index').'" class="btn-round">View Cart</a> </li>';
        }
        return response()->json(['cart_count'=>Cart::count(),
                                 'sub_total'=>Cart::subtotal(),
                                 'cart_content'=>$cart_html

        ]);
    }


    public function removeFromCart($id)
    {
        sleep(3);
        Cart::remove($id);
        // dd($id);
        // return back()->with('message','Item has been removed!');
        return response()->json(['cart_count'=>Cart::count(),
                                 'sub_total'=>Cart::subtotal()   
        ]);
    
    }


}
