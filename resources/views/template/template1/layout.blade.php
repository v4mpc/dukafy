@include('template.template1.header')
  
@include('template.template1.topbar')

@include('template.template1.cartsection')

@include('template.template1.nav') 



@if(Request::is('start')||Request::is('manage/template/*'))

@include('template.template1.slide')

@endif
 
@yield('content')

@include('template.template1.footer')
  
@include('template.template1.scripts')
