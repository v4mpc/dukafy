<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard"> --}}
  {{-- <meta name="author" content="PIXINVENT"> --}}
  @if(count(App\Setting::all()))
  <title>{{$settings->store_name}}
  </title>
  @endif
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/line-awesome/css/line-awesome.min.css')}}">
  {{-- <link rel="shortcut icon" type="image/x-icon" href="http://www.pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/ico/favicon.ico"> --}}
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  {{-- <link href="../../../../../maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.html"
  rel="stylesheet"> --}}
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  @yield('vendor_css')
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/app.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-callout.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/toastr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/extensions/toastr.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/toaster/toaster.min.css')}}">
 
  
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  @yield('page_level_css')
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/style.css')}}">
  <!-- END Custom CSS-->


  <style>
    #loader1{
    visibility:hidden;
    }

    .badge-sidebar{
        background-color:#fff;
    }

    .badges{
        color: #000;

    }

           .img-height{
	height:250px;
    width:auto;
}


.btn-yellow,
.btn-yellow:hover,
.btn-yellow:active,
.btn-yellow:visited,
.btn-yellow:focus {
    background-color: #fed700;
    border-color: #fed700;

    
}

.btn-pink,
.btn-pink:hover,
.btn-pink:active,
.btn-pink:visited,
.btn-pink:focus {
    background-color:#ce1d76;
    border-color:#ce1d76;

  
}


.btn-black,
.btn-black:hover,
.btn-black:active,
.btn-black:visited,
.btn-black:focus {
    background-color:#000;
    border-color:#000;

  
}




.btn-red,
.btn-red:hover,
.btn-red:active,
.btn-red:visited,
.btn-red:focus {
    background-color: #ff6c6c;
    border-color: #ff6c6c;

    
}

.btn-orange,
.btn-orange:hover,
.btn-orange:active,
.btn-orange:visited,
.btn-orange:focus {
    background-color:#f39c12;
    border-color:#f39c12;

  
}


.btn-dark_green,
.btn-dark_green:hover,
.btn-dark_green:active,
.btn-dark_green:visited,
.btn-dark_green:focus {
    background-color:#12cca7;
    border-color:#12cca7;

  
}

#visit-store{
    background: #075e54;
}

.img-middle{
    margin-right:auto;
    margin-left:auto;
    display: block;
}


.modal-lg {
    max-width: 1250px !important;
}

    </style>

</head>
