<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

      <li class=" nav-item {{Request::is('home')?" open ":" "}} "><a href="{{route('home')}}"><i class="ft-activity"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>

      </li>

    <li class=" nav-item {{Request::is('products')?" open ":" "}}"><a href="{{route('products.index')}}"><i class="ft-shopping-cart"></i><span class="menu-title" data-i18n="nav.dash.main">Products</span>
    @if($product_count)
    <span class="badges badge badge-sidebar float-right">{{$product_count}}</span>
    @endif
    </a>

      </li>
      {{--
      <li class=" nav-item {{Request::is('products')?" open ":" "}}"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="nav.dash.main">Product Variations</span></a>

      </li> --}}

      <li class=" nav-item {{Request::is('orders')?" open ":" "}}"><a href="{{route('orders.index')}}"><i class="ft-package"></i><span class="menu-title" data-i18n="nav.dash.main">Orders</span>
        @if($order_count)
        <span class="badges badge badge-sidebar float-right">{{$order_count}}</span>
        @endif
      </a>

      </li>

      <li class=" nav-item {{Request::is('categories')?" open ":" "}}"><a href="{{route('categories.index')}}"><i class="ft-list"></i><span class="menu-title" data-i18n="nav.dash.main">Categories</span>
        @if($category_count)
        <span class="badges badge badge-sidebar float-right">{{$category_count}}</span>
        @endif
      </a>

      </li>
      {{--
      <li class=" nav-item {{Request::is('sub_categories')?" open ":" "}}"><a href="{{route('sub_categories.index')}}"><i class="ft-align-left"></i><span class="menu-title" data-i18n="nav.dash.main">Sub-Categories</span></a>

      </li> --}}

      <li class=" nav-item {{Request::is('out_stock')?" open ":" "}}"><a href="{{route('out_stock.index')}}"><i class="ft-log-out"></i><span class="menu-title" data-i18n="nav.dash.main">Out-Stock</span>
        @if($out_stock_count)
        <span class="badges badge badge-sidebar float-right">{{$out_stock_count}}</span>
        @endif
      </a>

      </li>

      <li class=" nav-item {{Request::is('featured')?" open ":" "}}"><a href="{{route('featured.index')}}"><i class="ft-star"></i><span class="menu-title" data-i18n="nav.dash.main">Featured</span>
        @if($featured_count)
        <span class="badges badge badge-sidebar float-right">{{$featured_count}}</span>
        @endif

      </a>

      </li>
      {{--
      <li class=" nav-item"><a href="{{route('reports.index')}}"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="nav.dash.main">Reports</span></a>

      </li> --}}
      {{-- <li class=" nav-item {{Request::is('users')?" open ":" "}}"><a href="{{route('users.index')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="nav.dash.main">User Management</span></a>

      </li> --}}


      <li class=" nav-item "><a id="visit-store" ><i class="ft-corner-up-right"></i><span class="menu-title" data-i18n="nav.dash.main">Visit Site</span></a>

      </li>


     

      
    <li class=" nav-item has-sub {{Request::is('manage/basic_info')||Request::is('manage/about_store')||Request::is('manage/layout')||Request::is('manage/logo')||Request::is('manage/slider_images')?"menu-collapsed-open":""}}"><a href=""><i class="ft-settings"></i><span class="menu-title" data-i18n="nav.dash.main">Settings</span></a>
        <ul class="menu-content">

        <li class="{{Request::is('manage/basic_info')?"active":""}}"><a class="menu-item" href="{{route('settings.basic_info_form')}}" data-i18n="nav.cards.card_statistics">Basic Info</a>
          </li>
          
          <li class="{{Request::is('manage/about_store')?"active":""}}" ><a href="{{route('settings.about_store_form')}}" class="menu-item "  data-i18n="nav.cards.card_statistics">About Store</a>
          </li>
          <li class="{{Request::is('manage/layout')?"active":""}}"><a class="menu-item " href="{{route('settings.layout_form')}}" data-i18n="nav.cards.card_weather">Layout</a>
          </li>
         <li class="{{Request::is('manage/logo')?"active":""}}"><a class="menu-item" href="{{route('settings.logo_form')}}" data-i18n="nav.cards.card_charts">Logo</a>
          </li>
          
          <li class="{{Request::is('manage/slider_images')?"active":""}}"><a class="menu-item" href="{{route('settings.slider_form')}}" data-i18n="nav.cards.card_interactive">Slider Images</a>
          </li>

        </ul>
      </li>


    </ul>
  </div>
</div>