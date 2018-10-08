@extends('admin.layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/weather-icons/climacons.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/meteocons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/chartist-plugin-tooltip.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/timeline.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/dashboard-ecommerce.min.css')}}">
@endsection
 
@section('content')
    @include('admin.partials._messages')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Dashboard</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a>
                            </li>


                        </ol>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">



            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="info">{{count($accounts)}}</h3>
                                        <h6>Account Registered</h6>
                                    </div>
                                    <div>
                                        <i class="icon-user-follow info font-large-2 float-right"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        {{-- <h3 class="warning">{{$sms_balance}}</h3>
                                        <h6>SMS Balance</h6> --}}
                                    </div>
                                    <div>
                                        <i class="icon-speech warning font-large-2 float-right"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        {{-- <h3 class="success">{{$sent_email}}</h3>
                                        <h6>Email(s) Sent</h6> --}}
                                    </div>
                                    <div>
                                        <i class="icon-envelope-open success font-large-2 float-right"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        {{-- <h3 class="danger">{{count($categories)}}</h3>
                                        <h6>Categories</h6> --}}
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero configuration table -->


            <!--/ Zero configuration table -->
        </div>
    </div>
</div>
@endsection
 
@section('page_vendor_js')
<script src="{{asset('vendor/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
{{--
<script src="{{asset('vendor/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('vendor/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
@endsection
 
@section('page_level_js')


<script src="{{asset('vendor/js/scripts/pages/dashboard-ecommerce.min.js')}}" type="text/javascript"></script>
@endsection