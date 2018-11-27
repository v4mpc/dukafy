<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customer;
use Cart;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\StoreOrder;
use App\User;
use Notification;
use Mail;
use App\Notifications\OrderCompleted as OrderCompletedNotification;
use App\Setting;
use App\Mail\OrderCompleted;
use App\Account;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::orderBy('created_at', 'desc')->get();
        
        return view('orders.index')->with('orders', $orders);
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
    public function store(StoreOrder $request)
    {
        // dd();
        //check if order is already present
        // if (config('app.settings')->layout=='template1') {
        //     if (session('id')) {
        //         return redirect()->route('order.update', session('id'));
        //     }
        // }
        // dd(Cart::content());
        $customer= new Customer;
        $customer->first_name=$request->first_name;
        $customer->phone=$request->phone;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->comment=$request->comment;
        $customer->save();

        $order=new Order;
        $order->customer_id=$customer->id;
        $order->status='completed';
        $order->account_id=Account::where('domain', preg_replace('/\.dukafy/', "", $request->getHost()))->first()->id;
        $order->save();

        session(['id'=>$order->id]);
        foreach (Cart::content() as $item) {
            $order->products()->attach($item->id, ['quantity'=>$item->qty]);
        }
        Cart::destroy();
        session()->forget('id');
  
        // dd($request);


        $users=User::all();
        //phone notification
        #TODO
        //should queue the notification so as not to delay the web system
        send_notification($order->account_id, 'Order Completed', 'Order Completed Total '.number_format($order->totalCost()).' TZS', ['orderId'=>$order->id]);

        $settings=Setting::where('account_id', $order->account_id)->orderBy('id', 'desc')->first();
        //dashboard notification
        Notification::send($users, new OrderCompletedNotification($order, $settings->email));
        //email Notification
        Mail::to($request->email)->cc($settings->email)->send(new OrderCompleted($order, $settings));
  

        // if (config('app.settings')->layout=='template2') {
        //     return redirect()->action('ThankYouController@index');
        // } elseif (config('app.settings')->layout=='template1') {
        //     return redirect()->action('ThankYouController@index');
        // } elseif (config('app.settings')->layout=='template3') {
        //     return redirect()->action('ThankYouController@index');
        // }
        if (config('app.settings')->layout=='template2') {
            return view('template.template2.thankyou');
        } elseif (config('app.settings')->layout=='template1') {
            return view('template.template1.thankyou');
        } elseif (config('app.settings')->layout=='template3') {
            return view('template.template3.thankyou');
        }
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
        return view('orders.show')->with('order', $order);
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
            $order->products()->sync($item->id, ['quantity'=>$item->qty]);
        }
       
        return redirect()->route('confirmation.show', $order->id);
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

    public function cancelOrder(Request $request, $id)
    {
        $order=Order::findOrFail($id);
        $order->status='cancelled';
        $order->save();

        return response()->json('ok');
    }

    public function markOrderAsRead()
    {
        $user=Auth::user();
        $user->unreadNotifications->markAsRead();
        return response()->json(200);
    }
}
