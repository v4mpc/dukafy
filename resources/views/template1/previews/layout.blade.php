@include('template.template1.previews.header')
  
@include('template.template1.previews.topbar')

@include('template.template1.previews.cartsection')

@include('template.template1.previews.nav') 



@if(Request::is('/')||Request::is('manage/template/*'))

@include('template.template1.previews.slide')

@endif
 
@yield('content')

@include('template.template1.previews.footer')
  
@include('template.template1.previews.scripts')
