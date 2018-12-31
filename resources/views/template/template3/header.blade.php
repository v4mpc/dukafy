
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">
        <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>{{$settings->store_name}}</title>



		<link rel="stylesheet" type="text/css" href="{{asset('template1/rs-plugin/css/settings.css')}}" media="screen" />
	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="{{asset('template3/assets/css/bootstrap.min.css')}}">
	    
	    <!-- Customizable CSS -->
		<link rel="stylesheet" href="{{asset('template3/assets/css/main.css')}}">
		@if($settings->colour=="dark_green")
		<link rel="stylesheet" href="{{asset('template3/assets/css/dark-green.css')}}">
        @endif @if($settings->colour=="red")
        <link rel="stylesheet" href="{{asset('template3/assets/css/red.css')}}">
        @endif @if($settings->colour=="orange")
		<link rel="stylesheet" href="{{asset('template3/assets/css/orange.css')}}">
        @endif
	   
	    <link rel="stylesheet" href="{{asset('template3/assets/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('template3/assets/css/owl.transitions.css')}}">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="{{asset('template3/assets/css/lightbox.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('template3/assets/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('template3/assets/css/rateit.css')}}">
		<link rel="stylesheet" href="{{asset('template3/assets/css/bootstrap-select.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/toaster/toaster.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/sweetalert.css')}}">




		{{-- <!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="{{asset('template3/assets/css/green.css')}}" rel="alternate stylesheet" title="Green color">
		<link href="{{asset('template3/assets/css/blue.css')}}" rel="alternate stylesheet" title="Blue color">
		<link href="{{asset('template3/assets/css/red.css')}}" rel="alternate stylesheet" title="Red color">
		<link href="{{asset('template3/assets/css/orange.css')}}" rel="alternate stylesheet" title="Orange color">
		<link href="{{asset('template3/assets/css/dark-green.css')}}" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END --> --}}

		
		<!-- Icons/Glyphs -->
		{{-- <link rel="stylesheet" href="{{asset('template3/assets/css/font-awesome.min.css')}}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<style>

			h4,h5{
				font-size: 16px;
			}

			.product-price{
				font-size:18px;
				weight:bolder;
			}
		
		.thumb {
	float: left;
	width: 70px;
	display: inline-block !important;
	border: 2px solid #fff;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}


.copyright-bar {
    background: #f4f4f4;
    padding: 20px 0px;
}
		


		@media only screen and (max-width: 980px) {
			.main-header{
				padding: 0px 0px 60px 0px
			}
			#logo{
				margin-top: 0px !important;
			}
}


.img-height{
	height:250px;
}

.product .cart {
    opacity: 1;
}

 .product .cart .action ul li.add-cart-button .btn.btn-primary.icon{
	 background: #25d366;

}
	

	@if(Request::is('/'))
	.section-hack{
		margin-top: 35%;
	}
	@endif

	@media (max-width: 768px) {
.item-col-4 .product {
    width: 50%;
}
#rectangle{
    display:block !important;
}

.dropdown-cart{
    display:none !important;
}

}


	#rectangle{
    width: 100%;
    background-color: {{$colour_code}};
    position: fixed;
	display:none;
    bottom: 0;
    height: 58px;
    z-index: 90;
    margin: 0; 
    padding-top: 14px;
    text-align: center;
    color: #FFF;
}



.tag.sale{
	background-color: {{$colour_code}};

}

.container {
    margin-left: 10px;
}

.products{
	margin-bottom: 30px;
}
</style>



	</head>
