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
    public function index()
    {
        //dd(Cart::content());
        return view('template.template1.cart');
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
        Cart::add($request->id,$request->name,$request->quantity,$request->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('message', 'Item was added to your cart!');
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
        return response()->json(['cart_count'=>Cart::count(),
                                 'sub_total'=>Cart::subtotal()   
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
