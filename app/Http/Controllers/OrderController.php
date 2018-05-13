<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customer;
use Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::orderBy('id','desc')->get();
        return view('orders.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //check if order is already present

        if(session('id')){
            return redirect()->route('order.update',session('id'));
        }
        // dd(Cart::content());
        $customer= new Customer;
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->phone=$request->phone;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->comment=$request->comment;
         $customer->save();

        $order=new Order;
        $order->customer_id=$customer->id;
        $order->status='pending';
        $order->save();

session(['id'=>$order->id]);
foreach (Cart::content() as $item) {
    $order->products()->attach($item->id,['quantity'=>$item->qty]);
}
       
     return redirect()->route('confirmation.show',$order->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=Order::FindOrFail($id);
        return view('orders.show')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $order=Order::findOrFail($id);
        $customer=Customer::findOrFail($order->customer->id);
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->phone=$request->phone;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->comment=$request->comment;
        $customer->save();

       
        


foreach (Cart::content() as $item) {
    $order->products()->sync($item->id,['quantity'=>$item->qty]);
}
       
     return redirect()->route('confirmation.show',$order->id);
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
