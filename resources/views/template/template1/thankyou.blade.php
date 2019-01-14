@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

    <!-- Oder-success -->
    <section>
        <div class="container">
            <!-- Payout Method -->

            <div class="order-success"> <i class="fa fa-check"></i>
                <h6>Congratulations! Your order has been placed. We will contact you shortly</h6>
                {{--
                <p>Aenean dui mi, tempus non volutpat eget, molestie a orci. Nullam eget sem et eros laoreet rutrum. Quisque
                    sem ante, feugiat quis lorem in.</p> --}}
                <a href="{{route('start')}}" class="btn-round">Return to Shop</a> </div>
        </div>
    </section>
















</div>
<!-- End Content -->
@endsection