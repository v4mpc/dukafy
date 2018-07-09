@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/login-register.min.css')}}">
<style>
.responsive {
    width: 100%;
    height: auto;
}

</style>
@endsection
 
@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
              <div class="card-header border-0">
                <div class="card-title text-center">
                  <div class="p-1">
                      @if($settings->logo!=null)
                  <img src="{{asset('images/'.$settings->logo)}}" class="responsive"  lt="branding logo"> 
                  @elseif($settings->logo_text!=null)
               
            <h3 style="color:{{$colour_code}};margin-top: 30px;" id="logo">{{$settings->logo_text}}</h3>
            @else

            @endif
                  </div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                  <span>Login</span>
                </h6>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}" novalidate>
                    {{ csrf_field() }}
                    <fieldset class="form-group position-relative has-icon-left mb-0">
                      <input type="email" class="form-control form-control-lg input-lg" id="user-name" name="email" placeholder="Your Email" required>
                      <div class="form-control-position">
                        <i class="ft-user"></i>
                      </div>
                    </fieldset>
                    <br>
                    <fieldset class="form-group position-relative has-icon-left">
                      <input type="password" class="form-control form-control-lg input-lg" name="password" id="user-password" placeholder="Enter Password"
                        required>
                      <div class="form-control-position">
                        <i class="ft-lock"></i>
                      </div>
                    </fieldset>
                    
                    <div class="form-group row">
                      <div class="col-md-6 col-12 text-center text-md-left">
                        <fieldset>
                          <input type="checkbox" id="remember-me" name="remember" class="chk-remember">
                          <label for="remember-me"> Remember Me</label>
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-12 text-center text-md-right"><a href="{{route('password.request')}}" class="card-link">Forgot Password?</a></div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                  </form>
                </div>
              </div>
              <div class="card-footer">
                {{--
                <div class="">

                  <p class="float-sm-right text-center m-0">New Member? <a href="{{route('register')}}" class="card-link">Sign Up</a></p>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection
 
@section('page_vendor_js')
<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>
@endsection
 
@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/form-login-register.min.js')}}" type="text/javascript"></script>
@endsection