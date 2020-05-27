@extends('template.template3.layout')
@section('content')

<div class="body-content outer-top-bd">
        <div class="container">
            <div class="x-page inner-bottom-sm">
                <div class="row">
                    <div class="col-md-12 x-text text-center">
                        <h2>Success</h2>
                        @if($payment_option==1)
                        <p>
                            Thank you for choosing to pay via Mobile money. Once we confirm your order, you can pay us on {{$settings->payment_number}} which is on {{$settings->payment_carrier}} registered as {{$settings->payment_name}} 
                        </p>
                        @else 
                        <p>
                            Thank you for choosing the cash on delivery option. We will be in touch as soon as your order is confirmed to give you more information on delivery timings. 
                        </p>
                        @endif
                        <a href="{{route('start')}}"><i class="fa fa-home"></i> Continue shopping</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection