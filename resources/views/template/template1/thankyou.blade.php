@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

    <!-- Oder-success -->
    <section>
        <div class="container">
            <!-- Payout Method -->

            <div class="order-success"> <i class="fa fa-check"></i>
                <h6>Congratulations! Your order has been placed.</h6>
                
                @if($payment_option==1)
                                            <p>
                                                Thank you for choosing to pay via Mobile money. Once we confirm your order, you can pay us on {{$settings->payment_number}} which is on {{$settings->payment_carrier}} registered as {{$settings->payment_name}} 
                                            </p>
                                            @else 
                                            <p>
                                                Thank you for choosing the cash on delivery option. We will be in touch as soon as your order is confirmed to give you more information on delivery timings. 
                                            </p>
                                            @endif
                <a href="{{route('start')}}" class="btn-round">Return to Shop</a> </div>
        </div>
    </section>
















</div>
<!-- End Content -->
@endsection