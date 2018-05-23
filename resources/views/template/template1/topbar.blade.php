<body>

  <!-- Page Wrapper -->
  <div id="wrap" class="layout-1 {{$settings->colour}}">




    <!-- Top bar -->
    <div class="top-bar">
      <div class="container">
        <p>Welcome to {{$settings->store_name}}</p>
        @if($settings->working_hours===null)
        <p>{{$settings->working_hours}}</p>
        @endif

        <div class="right-sec">
          <ul>
            <li><a href="{{route('login')}}">Login </a></li>
            <li><a data-fancybox data-src="#hidden-content" href="javascript:;">Store Location </a></li>
            <li><a href="{{route('contact')}}">Contact Us </a></li>
            <li><a href="{{route('about')}}">About Us </a></li>

            @if(count($settings->mobile)!=null)
            <li><i class="fa fa-phone"></i> <strong>Hotline:</strong> {{$settings->mobile}}</span>
            </li>
            @endif
          </ul>
          {{--
          <div class="social-top"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> (+100) 123 456 7890</span> </div>
          --}} {{--
          <div class="social-top"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a>            <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> </div> --}}
        </div>
      </div>
    </div>





    <header>
      <div class="container">
        @if($settings->logo!=null)
        <div class="logo"> <a href="{{route('start')}}"><img src="{{asset('images/'.$settings->logo)}}" alt="" ></a> </div>
        @endif
        <form action="{{route('search')}}" method="GET" style="display:inline!important;">
          {{csrf_field()}}
          <div class="search-cate">
            <select class="selectpicker" name="category_name">
          
            <option value="all">All Categories</option>
          @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
            <input type="search" name="query" value="{{request()->input('query')}}" placeholder="Search entire store here...">
            <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
          </div>
        </form>