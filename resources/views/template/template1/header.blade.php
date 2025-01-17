<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Document Title -->
    <title>{{$settings->store_name}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('template1/rs-plugin/css/settings.css')}}" media="screen" />

    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{asset('template1/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template1/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template1/css/main.css')}}">
    @if($settings->colour[0]!='n' && $settings->colour[0]!='g' && $settings->colour[0]!='b')
    <link rel="stylesheet" href="{{asset('template1/css/'.explode("#",$settings->colour)[1].'.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('template1/css/style.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('template1/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/toaster/toaster.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/sweetalert.css')}}">


    <style>
        .media-body{
            vertical-align: middle;
        }

        .required {
            color: red;
            font-weight: bold;


        }

        #hidden-content {
            width: 600px;
            height: 400px;
        }

        .img-height{
	height:250px;
}

.crop {
 height: 100px;
 width: 200px;
 overflow: hidden;
}
.crop img {
 height: auto;
 width: 200px;
}
.whatsapp-area{
    display: block;
    padding-top: 1.071em;
    border-top: 1px solid #eaeaea;
    border: none;
    position: relative;
    text-align: center;
    background-color: #FFF;
}


.img-alig{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;
}
/* .hotline{
    display:block;
} */

@media (max-width: 768px) {
    .search-cate {
    display:block !important;
}
.hotline{
    display:none;
}
    .cate-style {
    background:none;
}
.min-height: {341px;}
.item-col-4 .product {
    width: 50%;
}
#rectangle{
    display:block !important;
}

.cart-pop{
    display:none !important;
}

.logo{
    text-align: center;
}

}

@if($settings->id==27)
.navy header nav {
    background: #5f3394 !important;
}

@endif


#rectangle{
    width: 100%;
    background-color: {{$colour_code}};
    position: fixed;
    bottom: 0;
    display:none;
    height: 55px;
    z-index: 90;
    margin: 0; 
    padding-top: 8px;
    text-align: center;
    color: #FFF;
}




    </style>


    <!-- Fonts Online -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


    <!-- JavaScripts -->
    <script src="{{asset('template1/js/vendors/modernizr.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>