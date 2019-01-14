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
                                            <p class="lead">Congratulations! Your order has been placed. We will contact you shortly</p>
                                            <hr class="m-y-2">
                                            <div class="sub-form-row inner-bottom-xs">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </main>
            </div>


            @endsection
 