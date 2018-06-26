<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Cart;
use App\User;
use Notification;
use Mail;
// use App\Notifications\OrderCompleted;
use App\Setting;
use App\Mail\OrderCompleted;


class ThankYouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // dd('am here');
          $order=Order::findOrFail(session('id'));

          //send mail here
  
  
          $order->status='completed';
          $order->save();
  
          Cart::destroy();
          session()->forget('id');
  
          $users=User::all();
  
          // Notification::route('mail', 'taylor@laravel.com')
          //     ->notify(new OrderCompleted($order));
       $settings=Setting::orderBy('id','desc')->first();
          // Notification::send($users, new OrderCompleted($order,$settings->email));
  
           Mail::send(new OrderCompleted($order,$settings->email));
  
  
        //  dd($users);
          if(config('app.settings')->layout=='template2'){
              return view('template.template2.thankyou');
          }else{
              return view('template.template1.thankyou');
          }
  
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

        // dd('am here');
        $order=Order::findOrFail(session('id'));

        //send mail here


        $order->status='completed';
        $order->save();

        Cart::destroy();
        session()->forget('id');

        $users=User::all();

        // Notification::route('mail', 'taylor@laravel.com')
        //     ->notify(new OrderCompleted($order));
     $settings=Setting::orderBy('id','desc')->first();
        // Notification::send($users, new OrderCompleted($order,$settings->email));

         Mail::send(new OrderCompleted($order,$settings->email));


    //    dd($users);
        if(config('app.settings')->layout=='template2'){
            return view('template.template2.thankyou');
        }else{
            return view('template.template1.thankyou');
        }
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
        //
    }
}
