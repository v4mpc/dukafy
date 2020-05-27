@extends('template.template2.layout') 
@section('content')
<nav class="woocommerce-breadcrumb">
        <a href="{{route('start')}}">Home</a>
                <span class="delimiter"><i class="fa fa-angle-right"></i>
                </span>
               
             
                </span>Order Completed
            </nav>


            <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                            <div class="center-block">
                                    <div class="info-404">
                                        <div class="text-xs-center inner-bottom-xs">
                                            <h2 class="display-3">Order Completed! <i class="fa fa-check"></i></h2>
                                            @if($payment_option==1)
                                            <p class="lead">
                                                Thank you for choosing to pay via Mobile money. Once we confirm your order, you can pay us on {{$settings->payment_number}} which is on {{$settings->payment_carrier}} registered as {{$settings->payment_name}} 
                                            </p>
                                            @else 
                                            <p class="lead">
                                                Thank you for choosing the cash on delivery option. We will be in touch as soon as your order is confirmed to give you more information on delivery timings. 
                                            </p>
                                            @endif
                                            <hr class="m-y-2">
                                            <div class="sub-form-row inner-bottom-xs">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </main>
            </div>


            @endsection
 