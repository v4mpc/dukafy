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
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    {{-- <img src="../../../app-assets/images/logo/logo-dark.png" alt="branding logo"> --}}
                    system logo goes here
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Create Account</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                  <form class="form-horizontal form-simple" method="POST" action="{{route('register')}}" novalidate>
                    {{ csrf_field() }}
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input type="text" class="form-control form-control-lg input-lg" name="name" id="user-name" placeholder="User Name">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input type="email" class="form-control form-control-lg input-lg" name="email" id="user-email"
                        placeholder="Your Email Address" required>
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg input-lg" name="password" id="user-password"
                        placeholder="Enter Password" required>
                        <div class="form-control-position">
                          <i class="ft-lock"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg input-lg" name="password_confirmation" id="user-password-confirm"
                        placeholder="Confirm Password" required>
                        <div class="form-control-position">
                          <i class="ft-lock"></i>
                        </div>
                      </fieldset>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
                    </form>
                  </div>
                <p class="text-center">Already have an account ? <a href="{{route('login')}}" class="card-link">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
    
  </div>
@endsection

@section('footer')

@endsection

@section('page_vendor_js')
<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/validation/jqBootstrapValidation.js')}}"
  type="text/javascript"></script>
@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/form-login-register.min.js')}}" type="text/javascript"></script>

@endsection
