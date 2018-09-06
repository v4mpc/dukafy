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
                <li class="col-sm-3 current">
                    <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
                    <div class="media-body"> <span>Step 2</span>
                        <h6>Delivery Information</h6>
                    </div>
                </li>

                <!-- Step 4 -->
                <li class="col-sm-3">
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
            <div class="pay-method">
                <div class="row">
                    <div class="col-md-6">

                        <!-- Your information -->
                        <div class="heading">
                            <h2>Your information</h2>
                            <hr>
                        </div>
                        <form action="{{route('order.store')}}" id="checkout-form" method="POST">
                            {{csrf_field()}}
                            <div class="row">

                                <!-- Name -->
                                <div class="col-sm-6">
                                    <label> <span class="required">*</span> First name
                    <input class="form-control" type="text" name="first_name" required>
                  </label>
                                </div>

                                <!-- Number -->
                                <div class="col-sm-6">
                                    <label> <span class="required">*</span> Last Name
                    <input class="form-control" type="text" name="last_name" required>
                  </label>
                                </div>

                                {{--
                                <!-- Card Number -->
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label> Country </label>
                                            <select class="selectpicker">
                        <option> USA</option>
                        <option> USA</option>
                        <option> USA</option>
                        <option> USA</option>
                        <option> USA</option>
                        <option> USA</option>
                      </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <label> City </label>
                                            <select class="selectpicker">
                        <option> City</option>
                        <option> City</option>
                        <option> City</option>
                        <option> City</option>
                        <option> City</option>
                        <option> City</option>
                      </select>
                                        </div>
                                    </div>
                                </div> --}} {{--
                                <div class="col-sm-5">
                                    <label> State
                    <input class="form-control" type="text">
                  </label>
                                </div>

                                <!-- Zip code -->
                                <div class="col-sm-4">
                                    <label> Zip code
                    <input class="form-control" type="text">
                  </label>
                                </div> --}}

                                <!-- Address -->
                                <div class="col-sm-8">
                                    <label>  <span class="required">*</span>Address
                    <input class="form-control" type="text" name="address" required>
                  </label>
                                </div>

                                <!-- Phone -->
                                <div class="col-sm-6">
                                    <label> <span class="required">*</span> Phone
                    <input class="form-control" type="text" name="phone" required>
                  </label>
                                </div>

                                <!-- Number -->
                                <div class="col-sm-6">
                                    <label> <span class="required">*</span> Email
                    <input class="form-control" type="email" name="email" required>
                  </label>
                                </div>

                                <div class="col-sm-10">
                                    <label for="">Comment</label>
                                    <textarea class="form-control" name="comment" cols="40" rows="8" id="" placeholder="Add Your Comment"></textarea>
                                </div>

                                <div class="col-sm-10">
                                    <p> <span class="required">*</span><i> Means the field is required!</i></p>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Select Your Transportation -->
                    <div class="col-md-6">
                        <div class="heading">
                            <h2>Delivery Method</h2>
                            <hr>
                        </div>
                        <div class="transportation">
                            <div class="row">

                                <!-- Free Delivery -->
                                <div class="col-sm-6">
                                    <div class="charges">
                                        <h6>Free Delivery</h6>
                                        <br> {{-- <span>7 - 12 days</span> --}}
                                    </div>
                                </div>

                                {{--
                                <!-- Free Delivery -->
                                <div class="col-sm-6">
                                    <div class="charges select">
                                        <h6>Fast Delivery</h6>
                                        <br>
                                        <span>4 - 7 days</span> <span class="deli-charges"> +$25 </span> </div>
                                </div> --}} {{--
                                <!-- Expert Delivery -->
                                <div class="col-sm-6">
                                    <div class="charges">
                                        <h6>Expert Delivery</h6>
                                        <br>
                                        <span>24 - 48 Hours</span> <span class="deli-charges"> +$75 </span> </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="pro-btn"> <a href="{{route('cart.index')}}" class="btn-round btn-light">Back to Shopping Cart</a> <a href="{{route('order.store')}}"
                    onclick="event.preventDefault();document.getElementById('checkout-form').submit();" class="btn-round">Go Confirmation</a>                {{--
                <form action="{{route('order.store')}}" method="post"></form> --}}

            </div>
        </div>
    </section>

</div>
<!-- End Content -->
@endsection