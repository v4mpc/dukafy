<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
  
<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{$settings->store_name}}</title>

        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/bootstrap.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/font-awesome.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/animate.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/font-electro.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/owl-carousel.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/style.css')}}" media="all" />


        @if($settings->colour=="black")
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/colors/black.css')}}" media="all" />
        @endif @if($settings->colour=="pink")
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/colors/pink.css')}}" media="all" />
        @endif @if($settings->colour=="yellow")
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/colors/yellow.css')}}" media="all" />
        @endif
       

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="template2/assets/css/config.css">

        <link href="{{asset('template2/assets/css/colors/green.css')}}" rel="alternate stylesheet" title="Green color">
        <link href="{{asset('template2/assets/css/colors/pink.css')}}" rel="alternate stylesheet" title="Pink color">
        <link href="{{asset('template2/assets/css/colors/blue.css')}}" rel="alternate stylesheet" title="Blue color">
        <link href="{{asset('template2/assets/css/colors/red.css')}}" rel="alternate stylesheet" title="Red color">
        <link href="{{asset('template2/assets/css/colors/orange.css')}}" rel="alternate stylesheet" title="Orange color">
        <link href="{{asset('template2/assets/css/colors/black.css')}}" rel="alternate stylesheet" title="Black color">
        <link href="{{asset('template2/assets/css/colors/gold.css')}}" rel="alternate stylesheet" title="Gold color">
        <link href="{{asset('template2/assets/css/colors/yellow.css')}}" rel="alternate stylesheet" title="Yellow color">
        <link href="{{asset('template2/assets/css/colors/flat-blue.css')}}" rel="alternate stylesheet" title="Flat Blue color">
        <!-- Demo Purpose Only. Should be removed in production : END -->

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="assets/images/fav-icon.png">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/toaster/toaster.min.css')}}">


        <style>
        
        

.map-wrapper {
    height: 350px;
    margin-bottom: 0px;
}

.social-icons{
    font-size: 22px;
}
        
        </style>
    </head>
