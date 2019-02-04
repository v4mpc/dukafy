<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

      {{-- <li class=" nav-item {{Request::is('/dashboard')?" open ":" "}} "><a href="{{route('dashboard')}}"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>

      </li> --}}

      <li class=" nav-item {{Request::is('/accounts')?" open ":" "}} "><a href="{{route('accounts.index')}}"><i class="ft-users"></i><span class="menu-title" data-i18n="nav.dash.main">Accounts</span></a>

      </li>



      <li class=" nav-item {{Request::is('/currency')?" open ":" "}} "><a href="{{route('currency.index')}}"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="nav.dash.main">Currency</span></a>

      </li>





      {{-- <li class=" nav-item {{Request::is('/dashboard')?" open ":" "}} "><a href="{{route('admin.logs')}}"><i class="ft-activity"></i><span class="menu-title" data-i18n="nav.dash.main">Logs</span></a>

      </li> --}}
      {{-- <li class=" nav-item {{Request::is('users')?" open ":" "}}"><a href="{{route('users.index')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="nav.dash.main">User Management</span></a>

      </li> --}}
      





    </ul>
  </div>
</div>