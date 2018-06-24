@extends('template.template2.layout') 
@section('content')
<nav class="woocommerce-breadcrumb">
        <a href="{{route('start')}}">Home</a>
                <span class="delimiter"><i class="fa fa-angle-right"></i>
                </span>
               
             
                </span>About Us
            </nav>
            <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        {!!$settings->about!!}
                    </main>
            </div>                   
@endsection