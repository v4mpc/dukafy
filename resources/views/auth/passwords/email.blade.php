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
@endsection
 
@section('topbar')
@endsection
 
@section('sidebar')
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
            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
              <div class="card-header border-0 pb-0">
                <div class="card-title text-center">
                  @if($settings->logo!=null)
                  <img src="{{asset('images/'.$settings->logo)}}" class="responsive"  lt="branding logo"> 
                  @elseif($settings->logo_text!=null)
               
            <h3 style="color:{{$colour_code}};margin-top: 30px;" id="logo">{{$settings->logo_text}}</h3>
            @else

            @endif
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                  <span>We will send you a link to reset password.</span>
                </h6>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form-horizontal"  method="POST" action="{{ route('password.email') }}"
                    novalidate>
                    {{ csrf_field() }}
                    <fieldset class="form-group position-relative has-icon-left">
                      <input type="email" class="form-control form-control-lg input-lg" name="email" value="{{ old('email') }}" id="user-email" placeholder="Your Email Address" required>
                      @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                      <div class="form-control-position">
                        <i class="ft-mail"></i>
                      </div>
                    </fieldset>
                    <button type="submit" class="btn btn-outline-info btn-lg btn-block"><i class="ft-unlock"></i> Recover Password</button>
                  </form>
                </div>
              </div>
              <div class="card-footer border-0">
                <p class="float-sm-left text-center"><a href="{{route('login')}}" class="card-link">Login</a></p>
                {{--
                <p class="float-sm-right text-center">New to Member ? <a href="{{route('register')}}" class="card-link">Create Account</a></p> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection
 
@section('footer')
@endsection
 
@section('page_vendor_js')
<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/validation/jqBootstrapValidation.js')}}" type="text/javascript"></script>
@endsection
 
@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/form-login-register.min.js')}}" type="text/javascript"></script>
@endsection