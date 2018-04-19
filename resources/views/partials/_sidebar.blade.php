<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
       
      <li class=" nav-item {{Request::is('home')?"open":""}} "><a href="{{route('home')}}"><i class="ft-activity"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
         
        </li>

        <li class=" nav-item {{Request::is('products')?"open":""}}"><a href="{{route('products.index')}}"><i class="ft-shopping-cart"></i><span class="menu-title" data-i18n="nav.dash.main">Products</span></a>
         
        </li>

        <li class=" nav-item {{Request::is('categories')?"open":""}}"><a href="{{route('categories.index')}}"><i class="ft-list"></i><span class="menu-title" data-i18n="nav.dash.main">Categories</span></a>
         
        </li>
        <li class=" nav-item {{Request::is('sub_categories')?"open":""}}"><a href="{{route('sub_categories.index')}}"><i class="ft-align-left"></i><span class="menu-title" data-i18n="nav.dash.main">Sub-Categories</span></a>
         
        </li>

        <li class=" nav-item {{Request::is('out_stock')?"open":""}}"><a href="{{route('out_stock.index')}}"><i class="ft-log-out"></i><span class="menu-title" data-i18n="nav.dash.main">Out-Stock</span></a>
         
        </li>

        <li class=" nav-item {{Request::is('featured')?"open":""}}"><a href="{{route('featured.index')}}"><i class="ft-star"></i><span class="menu-title" data-i18n="nav.dash.main">Featured</span></a>
         
        </li>
        {{-- <li class=" nav-item"><a href="{{route('reports.index')}}"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="nav.dash.main">Reports</span></a>
         
        </li> --}}
        <li class=" nav-item {{Request::is('users')?"open":""}}"><a href="{{route('users.index')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="nav.dash.main">User Management</span></a>
         
        </li>
      
       
      </ul>
    </div>
</div>