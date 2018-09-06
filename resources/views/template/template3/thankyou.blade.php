@extends('template.template3.layout')
@section('content')

<div class="body-content outer-top-bd">
        <div class="container">
            <div class="x-page inner-bottom-sm">
                <div class="row">
                    <div class="col-md-12 x-text text-center">
                        <h2>Success</h2>
                        <p>Your Order Has be Processed You will receive an email soon. </p>
                        
                        <a href="{{route('start')}}"><i class="fa fa-home"></i> Continue shopping</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection