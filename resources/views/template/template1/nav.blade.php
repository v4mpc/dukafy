<nav class="navbar ownmenu">
  <div class="container">

    <!-- Categories -->
    <div class="cate-lst"> <a data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Our Categories </a>
      <div class="cate-bar-in">
        <div id="cater" class="collapse">
          <ul>
            @foreach($categories as $category) @if(count($category->products))
            <li><a href="{{route('category',$category->id)}}"> {{$category->name}}</a></li>
            @endif @endforeach {{--
            <li><a href="#."> Home Audio & Theater</a></li>
            <li><a href="#."> TV & Video</a></li>
            <li><a href="#."> Camera, Photo & Video</a></li>
            <li class="sub-menu"><a href="#."> Cell Phones & Accessories</a>
              <ul>
                <li><a href="#."> TV & Video</a></li>
                <li><a href="#."> Camera, Photo & Video</a></li>
                <li><a href="#."> Cell Phones & Accessories</a>
              </ul>
              </li>
              <li><a href="#."> Headphones</a></li>
              <li><a href="#."> Video Games</a></li>
              <li class="sub-menu"><a href="#."> Bluetooth & Wireless Speakers</a>
                <ul>
                  <li><a href="#."> TV & Video</a></li>
                  <li><a href="#."> Camera, Photo & Video</a></li>
                  <li><a href="#."> Cell Phones & Accessories</a>
                </ul>
                </li>
                <li class="sub-menu"><a href="#."> Gaming Console</a>
                  <ul>
                    <li><a href="#."> TV & Video</a></li>
                    <li><a href="#."> Camera, Photo & Video</a></li>
                    <li><a href="#."> Cell Phones & Accessories</a>
                  </ul>
                  </li>
                  <li><a href="#."> Computers & Tablets</a></li>
                  <li><a href="#."> Monitors</a></li>
                  <li><a href="#."> Home Appliances</a></li>
                  <li><a href="#."> Office Supplies</a></li> --}}
          </ul>
        </div>
      </div>
    </div>

    <!-- Navbar Header -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
    </div>
    <!-- NAV -->
    <div class="collapse navbar-collapse" id="nav-open-btn">
      <ul class="nav">
        {{--
        <li class="dropdown megamenu active"> <a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown">Home </a>
          <div class="dropdown-menu animated-2s fadeInUpHalf">
            <div class="mega-inside scrn">
              <ul class="home-links">
                <li><a href="index-2.html"><img class="img-responsive" src="images/home-1.jpg" alt="" > <span>Home Version 1</span></a></li>
                <li><a href="index-3.html"><img class="img-responsive" src="images/home-2.jpg" alt="" > <span>Home Version 2</span></a>                  </li>
                <li><a href="index-4.html"><img class="img-responsive" src="images/home-3.jpg" alt="" > <span>Home Version 3</span></a></li>
                <li><a href="index-5.html"><img class="img-responsive" src="images/home-4.jpg" alt="" > <span>Home Version 4</span></a></li>
                <li><a href="index-6.html"><img class="img-responsive" src="images/home-5.jpg" alt="" > <span>Home Version 5</span></a></li>
                <li><a href="index-7.html"><img class="img-responsive" src="images/home-6.jpg" alt="" > <span>Home Version 6</span></a></li>
                <li><a href="index-8.html"><img class="img-responsive" src="images/home-7.jpg" alt="" > <span>Home Version 7</span></a></li>
                <li><a href="index-9.html"><img class="img-responsive" src="images/home-8.jpg" alt="" > <span>Home Version 8</span></a></li>
                <li><a href="index-10.html"><img class="img-responsive" src="images/home-9.jpg" alt="" > <span>Home Version 9</span></a></li>
                <li><a href="index-11.html"><img class="img-responsive" src="images/home-10.jpg" alt="" > <span>Home Version 10</span></a></li>
                <li><a href="index-12.html"><img class="img-responsive" src="images/home-11.jpg" alt="" > <span>Home Version 11</span></a></li>
                <li><a href="index-13.html"><img class="img-responsive" src="images/home-12.jpg" alt="" > <span>Home Version 12</span></a></li>
                <li><a href="index-14.html"><img class="img-responsive" src="images/home-13.jpg" alt="" > <span>Home Version 13</span></a></li>
                <li><a href="index-15.html"><img class="img-responsive" src="images/home-14.jpg" alt="" > <span>Home Version 14</span></a></li>
                <li><a href="index-16.html"><img class="img-responsive" src="images/home-15.jpg" alt="" > <span>Home Version 15</span></a></li>
                <li><a href="index-17.html"><img class="img-responsive" src="images/home-16.jpg" alt="" > <span>Home Version 16</span></a></li>
                <li><a href="index-18.html"><img class="img-responsive" src="images/home-17.jpg" alt="" > <span>Home Version 17</span></a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="dropdown"> <a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
          <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
            <li><a href="About.html"> About </a></li>
            <li><a href="LoginForm.html"> Login Form </a></li>
            <li><a href="GridProducts_3Columns.html"> Products 3 Columns </a></li>
            <li><a href="GridProducts_4Columns.html"> Products 4 Columns </a></li>
            <li><a href="ListProducts.html"> List Products </a></li>
            <li><a href="Product-Details.html"> Product Details </a></li>
            <li><a href="ShoppingCart.html"> Shopping Cart</a></li>
            <li><a href="PaymentMethods.html"> Payment Methods </a></li>
            <li><a href="DeliveryMethods.html"> Delivery Methods</a></li>
            <li><a href="Confirmation.html"> Confirmation </a></li>
            <li><a href="CheckoutSuccessful.html"> Checkout Successful </a></li>
            <li><a href="Error404.html"> Error404 </a></li>
            <li><a href="contact.html"> Contact </a></li>
            <li class="dropdown-submenu"><a href="#."> Dropdown Level </a>
              <ul class="dropdown-menu animated-2s fadeInRight">
                <li><a href="#.">Level 1</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- Mega Menu Nav -->--}} {{--
        <li class="dropdown"> <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
          <ul class="dropdown-menu multi-level animated-2s fadeInUpHalf">
            <li><a href="Blog-2.html">Blog </a></li>
            <li><a href="Blog_details.html">Blog Single </a></li>
          </ul>
        </li>
        <li> <a href="shop.html">Buy theme! </a></li> --}}
      </ul>
    </div>

    <div class="nav-right">
      <ul>
        @if($settings->facebook!=null)
        <li><a href="https://{{$settings->facebook}}"><i  class="fa fa-facebook white-fonts"></i></a></li>
        @endif @if($settings->instagram!=null)
        <li><a href="https://{{$settings->instagram}}"><i  class="fa fa-instagram white-fonts"></i></a></li>
        @endif @if($settings->twitter!=null)
        <li><a href="https://{{$settings->twitter}}"><i  class="fa fa-twitter white-fonts"></i></a></li>
        @endif





      </ul>

    </div>

    <!-- NAV RIGHT -->
    {{--
    <div class="nav-right"> <a href="#."><i  class="fa fa-facebook white-fonts"></i></a> <a href="#."><i class="fa fa-twitter white-fonts"></i></a>      <a href="#."><i class="fa fa-linkedin white-fonts"></i></a> <a href="#."><i class="fa fa-dribbble white-fonts"></i></a>      <a href="#."><i class="fa fa-pinterest white-fonts"></i></a> </div> --}} {{--
    <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> (+100) 123 456 7890</span> </div> --}}

  </div>
</nav>
</header>