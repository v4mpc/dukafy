@include('partials._header')
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
 
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
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
@yield('page_vendor_js')
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('vendor/js/core/app-menu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/core/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/customizer.min.js')}}" type="text/javascript"></script>


<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
@yield('page_level_js')
<!-- END PAGE LEVEL JS-->
</body>
</html>

