<body>

  <!-- Page Wrapper -->
<div id="wrap" class="layout-1"> 
    



<!-- Top bar -->
<div class="top-bar">
    <div class="container">
        @if($settings->working_hours===null)
    <p>{{$settings->working_hours}}</p>
        @endif
     
      <div class="right-sec">
        <ul>
        <li><a href="{{route('login')}}">Login </a></li>
          <li><a href="#.">Store Location </a></li>
        <li><a href="{{route('contact')}}">Contact Us </a></li>
        <li><a href="{{route('about')}}">About Us </a></li>
          {{-- <li><a href="#.">FAQ </a></li> --}}
          {{-- <li><a href="#.">Newsletter </a></li> --}}
          {{-- <li>
            <select class="selectpicker">
              <option>French</option>
              <option>German</option>
              <option>Italian</option>
              <option>Japanese</option>
            </select>
          </li> --}}
          {{-- <li>
            <select class="selectpicker">
              <option>(USD)Dollar</option>
              <option>GBP</option>
              <option>Euro</option>
              <option>JPY</option>
            </select>
          </li> --}}
        @if(count($settings->mobile)!=null)
        <li><i class="fa fa-phone"></i> <strong>Hotline:</strong> {{$settings->mobile}}</span> </li>
        @endif
        </ul>
        {{-- <div class="social-top"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> (+100) 123 456 7890</span> </div> --}}
        {{-- <div class="social-top"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> </div> --}}
      </div>
    </div>
  </div>
  
  <header>
    <div class="container">
      <div class="logo"> <a href="index-2.html"><img src="images/logo.png" alt="" ></a> </div>
      <div class="search-cate">
        <select class="selectpicker">
          

          @foreach($categories as $category)
        <option>{{$category->name}}</option>
            @endforeach
        </select>
        <input type="search" placeholder="Search entire store here...">
        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
      </div>