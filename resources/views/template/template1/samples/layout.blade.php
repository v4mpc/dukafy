@include('template.template1.samples.header')
  
@include('template.template1.samples.topbar')

@include('template.template1.samples.cartsection')

@include('template.template1.samples.nav') 



@if(Request::is('/')||Request::is('manage/template/*'))

@include('template.template1.samples.slide')

@endif
 
@yield('content')

@include('template.template1.samples.footer')
  
@include('template.template1.samples.scripts')
