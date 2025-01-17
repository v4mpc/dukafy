<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item mr-auto">
          <a class="navbar-brand" href="index-2.html">
            {{-- <img class="brand-logo" alt="modern admin logo" src="../../../app-assets/images/logo/logo.png"> --}}
           
          <h3 class="brand-text">{{env('APP_NAME')}}</h3>
       
          </a>
        </li>
        <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
        <li class="nav-item d-md-none">
          <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
        </li>
      </ul>
    </div>
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

          
         
        </ul>
        <ul class="nav navbar-nav float-right">
          
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class="mr-1">Hello,
              <span class="user-name text-bold-700">{{Auth::user()->name}}</span>
              </span>
              <span class="avatar avatar-online">
                <img src="{{is_null(Auth::user()->image)?asset('images/person.png'):asset('images/'.Auth::user()->image)}}" alt="avatar"><i></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{route('admin.get.user')}}"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="{{route('admin.update.password')}}"><i class="ft-lock"></i> Change Password</a>
  
              <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout
          </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </li>

          <li class="dropdown dropdown-notification nav-item">
            <a class="nav-link nav-link-label" href="#" id="notification" data-toggle="dropdown"><i class="ficon ft-bell"></i>
            @if(Auth::user()->unreadNotifications)<span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">{{count(Auth::user()->unreadNotifications)!=0?count(Auth::user()->unreadNotifications):""}}</span>@endif
            </a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">

              <li class="scrollable-container media-list w-100">
                @forelse (Auth::user()->unreadNotifications as $notification) @if ($notification->type=='App\Notifications\OrderCompleted')
                <a href="{{route('orders.show',$notification->data['order_id'])}}">
                  <div class="media">
                    <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                    <div class="media-body">
                      <h6 class="media-heading">You have new order!</h6>
                      {{--
                      <p class="notification-text font-small-3 text-muted">{{$notification->type}}</p> --}}
                      <small>
        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">{{$notification->created_at->diffForHumans()}}</time>
        </small>
                    </div>
                  </div>
                </a>
                @endif @empty
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-danger float-right m-0">No New</span>
                </li>@endforelse





              </li>
              {{--
              <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li> --}}
            </ul>
          </li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>