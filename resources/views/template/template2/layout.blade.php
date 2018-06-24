@include('template.template2.header')


<body class="{{$body_class}}">
        <div id="page" class="hfeed site">
           

  
@include('template.template2.topbar')

{{-- @include('template.template2.cartsection') --}}

@include('template.template2.nav') 


<div id="content" class="site-content" tabindex="-1">
        <div class="container">
            {{-- <div id="primary" class="content-area">
                <main id="main" class="site-main"> --}}


@if(Request::is('start'))

@include('template.template2.slide')

@endif
 
@yield('content')


{{-- </main><!-- #main -->
</div><!-- #primary --> --}}

</div><!-- .container -->
</div><!-- #content -->

@include('template.template2.footer')


</div>
  
@include('template.template2.scripts')

</body>

</html>
