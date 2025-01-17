@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/under-maintenance.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/dashboard-ecommerce.min.css')}}">
@endsection
 
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">

        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 box-shadow-3 m-0">
                            <div class="card-body">
                                <span class="card-title text-center">
                            {{-- <img src="{{asset('images/logo.png')}}" class="img-fluid mx-auto d-block pt-2"
                            width="250" alt="logo"> --}}
                          </span>
                            </div>
                            <div class="card-body text-center">
                                <h3>This page is under maintenance</h3>
                                <p>We're sorry for the inconvenience.
                                    <br> Please check back later.</p>
                                <div class="mt-2"><i class="la la-cog spinner font-large-2"></i></div>
                            </div>
                          
                            <hr>
                            <p class="socialIcon card-text text-center pt-2 pb-2">
                                <a href="https://dukafy.co.tz" target="__blank" >
                            Powered By Dukafy
                          </a>
                            </p>

                            {{--
                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                            <span class="la la-twitter"></span>
                          </a>
                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                            <span class="la la-linkedin font-medium-4"></span>
                          </a>
                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                            <span class="la la-github font-medium-4"></span>
                          </a>
                            </p> --}}


                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
 
@section('page_vendor_js')
        <script src="{{asset('vendor/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
@endsection