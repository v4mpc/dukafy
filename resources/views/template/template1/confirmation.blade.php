@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
        <div class="container">
            <ul class="row">

                <!-- Step 1 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="flaticon-shopping"></i> </div>
                    <div class="media-body"> <span>Step 1</span>
                        <h6>Shopping Cart</h6>
                    </div>
                </li>

                {{--
                <!-- Step 2 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="flaticon-business"></i> </div>
                    <div class="media-body"> <span>Step 2</span>
                        <h6>Payment Methods</h6>
                    </div>
                </li> --}}

                <!-- Step 3 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
                    <div class="media-body"> <span>Step 2</span>
                        <h6>Delivery Information</h6>
                    </div>
                </li>

                <!-- Step 4 -->
                <li class="col-sm-3 current">
                    <div class="media-left"> <i class="fa fa-check"></i> </div>
                    <div class="media-body"> <span>Step 3</span>
                        <h6>Confirmation</h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Payout Method -->
    <section class="padding-bottom-60">
        <div class="container">
            <!-- Payout Method -->
            <div class="pay-method check-out">

                <!-- Shopping Cart -->
                <div class="heading">
                    <h2>Shopping Cart</h2>
                    <hr>
                </div>

                @foreach ($order->products as $product)
                <!-- Check Item List -->
                <ul class="row check-item">
                    <li class="col-xs-6">
                        <p>{{$product->name}}</p>
                    </li>
                    <li class="col-xs-2 text-center">
                        <p>{{number_format($product->price)}} {{$settings->currencyName()}}</p>
                    </li>
                    <li class="col-xs-2 text-center">
                        <p>{{$product->pivot->quantity}}</p>
                    </li>
                    <li class="col-xs-2 text-center">
                        <p>{{number_format($product->pivot->quantity*$product->price)}} {{$settings->currencyName()}}</p>
                    </li>
                </ul>
                @endforeach



                <!-- Payment information -->
                <div class="heading margin-top-50">
                    <h2>Payment information</h2>
                    <hr>
                </div>
                <!-- Check Item List -->
                <ul class="row check-item">
                    <li class="col-xs-6">
                        <p><img class="margin-right-20" src="images/visa-card.jpg" alt=""> Cash On Delivery</p>
                    </li>
                    {{--
                    <li class="col-xs-6 text-center">
                        <p>Card number: XXX-XXX-XXX-6886</p>
                    </li> --}}
                </ul>

                <!-- Delivery infomation -->
                <div class="heading margin-top-50">
                    <h2>Delivery infomation</h2>
                    <hr>
                </div>

                <!-- Information -->
                <ul class="row check-item infoma">
                    <li class="col-sm-3">
                        <h6>Name</h6>
                        <span>{{$order->customer->first_name}} {{$order->customer->last_name}}</span> </li>
                    <li class="col-sm-3">
                        <h6>Phone</h6>
                        <span>{{$order->customer->phone}}</span> </li>
                    {{--
                    <li class="col-sm-3">
                        <h6>Country</h6>
                        <span>USA</span> </li> --}}
                    <li class="col-sm-3">
                        <h6>Email</h6>
                        <span>{{$order->customer->email}}</span> </li>
                    {{--
                    <li class="col-sm-3">
                        <h6>City</h6>
                        <span>NewYork</span> </li>
                    <li class="col-sm-3">
                        <h6>State</h6>
                        <span>NewYork</span> </li>
                    <li class="col-sm-3">
                        <h6>Zipcode</h6>
                        <span>01234</span> </li> --}}
                    <li class="col-sm-3">
                        <h6>Address</h6>
                        <span>{{$order->customer->email}}</span> </li>
                </ul>


                <!-- Information -->
                <ul class="row check-item infoma exp">
                    <li class="col-sm-6"> <span>Free Delivery</span> </li>
                    {{--
                    <li class="col-sm-3">
                        <h6>24 - 48 hours</h6>
                    </li>
                    <li class="col-sm-3">
                        <h5>+25</h5>
                    </li> --}}
                </ul>

                <!-- Totel Price -->
                <div class="totel-price">
                    <h4><small> Total Price: </small> {{number_format($total_cost)}} {{$settings->currencyName()}}</h4>
                </div>
            </div>

            <!-- Button -->
            <div class="pro-btn"> <a href="{{route('check_out.edit',$order->id)}}" class="btn-round btn-light">Back to Delivery</a> <a 
                   id="confirm-order" class="btn-round">Proceed to Checkout</a>
                <form id="confirmation-form" action="{{route('thank_you.store')}}" method="POST">
                    {{csrf_field()}}
                </form>

            </div>
        </div>
    </section>
















</div>
<!-- End Content -->
@endsection