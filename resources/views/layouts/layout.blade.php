@include('partials._header')
@if(Auth::check())
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
 @else
 <body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page"
 data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
 @endif
{{-- fixed-top --}}
@if(Auth::check())
    @include('partials._topbar')
    {{-- end fixed-top --}}
    @include('partials._sidebar')
@endif

@yield('content')

@if(Auth::check())
    @include('partials._footer')
@endif


<!-- BEGIN VENDOR JS-->
<script src="{{asset('vendor/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/extensions/sweet-alerts.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
@yield('page_vendor_js')
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('vendor/js/core/app-menu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/core/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/extensions/toastr.min.js')}}" type="text/javascript"></script>



<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
@yield('page_level_js')
<!-- END PAGE LEVEL JS-->
</body>
</html>

