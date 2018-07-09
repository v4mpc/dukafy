<!DOCTYPE html>
<html lang="en">
@include('template.template3.header')
<body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
@include('template.template3.topbar')
@include('template.template3.nav')

</header>

<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">
@if(!Request::is('cart')&&!Request::is('check_out/create')&&!Request::is('about_us')&&!Request::is('contact_us')&&!Request::is('thank_you'))
@include('template.template3.sidebar')
@endif
@yield('content')
	</div>
	{{-- brand carosal --}}
</div>
</div>
@include('template.template3.footer')
@include('template.template3.scripts')
</body>

<!-- Mirrored from demo2.chethemes.com/html/unicase/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Apr 2018 21:24:16 GMT -->
</html>
