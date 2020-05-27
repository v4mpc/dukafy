@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/wizard.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}">

<style>

   #geocomplete { width: 100px}

.map_canvas { 
  width: 550px; 
  height: 400px; 
  margin: 10px 20px 10px 0;
}

.pac-container {
    z-index: 1051 !important;
}


.mce-notification-inner{
    display:none;
}
</style>

@endsection
 
@section('content')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Settings</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Settings</a>
              </li>
              <li class="breadcrumb-item active">Payment
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">

          {{-- <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
            <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
            <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="content-body">
        @include('partials._messages')
      <section id="demo">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements">
                  {{-- <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul> --}}
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                <form action="{{route('update.payment',$settings->id)}}" method="POST" >
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                   
                  <h4 class="info-text" align="center" >Payment </h4>
                  <br>
                 
                  <div class="row">
                     
                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                              <label>Mobile Money Number</label>
                          <input type="text" class="form-control" name="payment_number" id="exampleInputEmail1" value="{{$settings->payment_number}}" required placeholder="mobile money number">
                          </div>
                      </div>
                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                              <label>Network </label>
                              <select id="category" class="form-control" name="payment_network" required>
                                <option value selected disabled>Select Network...</option>
                                
                             
                              <option value="AIRTEL" {{$settings->payment_carrier=='AIRTEL'?"selected=selected":""}}>AIRTEL</option>
                              <option value="VODACOM" {{$settings->payment_carrier=='VODACOM'?"selected=selected":""}}>VODACOM</option>
                              <option value="TIGO" {{$settings->payment_carrier=='TIGO'?"selected=selected":""}}>TIGO</option>
                              <option value="ZANTEL" {{$settings->payment_carrier=='ZANTEL'?"selected=selected":""}}>ZANTEL</option>
                              <option value="HALOTEL" {{$settings->payment_carrier=='HALOTEL'?"selected=selected":""}}>HALOTEL</option>
                              <option value="TTCL" {{$settings->payment_carrier=='TTCL'?"selected=selected":""}}>TTCL</option>



 
                               
                              </select>
                          </div>
                      </div>
                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                              <label>Registered Name</label>
                              <input type="text" class="form-control" name="payment_name" value="{{$settings->payment_number}}" required  placeholder="registed number">
                          </div>
                      </div>
        



                  </div>


                    <div class="form-actions">
                     
                      <button type="submit" class="btn btn-success">
                                  <i class="ft-save"></i> Save
                                </button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
     
     

    </div>
  </div>
</div>


@endsection


















<!-- jQuery -->

















@section('page_vendor_js')



<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

<script src="{{asset('vendor/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
{{--
<script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
@endsection
 
@section('page_level_js') 
<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/wizard-steps.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/fancybox/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src='http://maps.google.com/maps/api/js?key={{$maps_api_key}}&sensor=false&libraries=places'></script>
<script src="{{asset('initial_screen/js/jquery.geocomplete.min.js')}}"></script>
<script>
 
@endsection