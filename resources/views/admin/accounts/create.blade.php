@extends('admin.layouts.layout') 
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

 
@endsection
 
@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Add New Account</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Account</a>
              </li>
              <li class="breadcrumb-item active"><a href="#">Add</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-12 col-12">
        <div class="dropdown float-md-right">

        </div>
      </div>
    </div>
    <div class="content-body">
  @include('partials._messages')
      <!-- Basic form layout section start -->
      <section id="horizontal-form-layouts">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">

                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collpase show">
                <div class="card-body">
                  {{--
                  <div class="card-text">
                  </div> --}} {{--
                  <h4 class="form-section"><i class="ft-shopping-cart"></i>Product</h4> --}}
                  <div class="row">
                    <div class="col-md-12">
                      <form class="form form-horizontal form-boardered" action="{{route('accounts.store')}}" method="POST">

                        {{csrf_field()}}
                        <h4 class="form-section"><i class="ft-align-left"></i> Account Details</h4>
                        <div class="form-body">

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Name</label>
                            <div class="col-md-7">
                              <input type="text" id="name" class="form-control" value="{{old('name')}}" placeholder="Name" name="name">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Account Type</label>
                            <div class="col-md-7">
                              <select class="form-control account-type" name="account_type">
                                                                                        <option>Select Account Type</option>
                                                                                       
                                                                <option value="1">With Domain</option>
                                                                <option value="2">With Subdomain</option>
                                                                                        
                                                                                   
                                                                                      </select>
                            </div>
                          </div>


                          <div class="form-group row hidden subdomain">
                            <label class="col-md-3 label-control" >Sub domain</label>
                            <div class="col-md-7">
                              <input type="text"  class="form-control" value="{{old('name')}}" placeholder="xyz.abc.com" name="subdomain">
                            </div>
                          </div>

                          <div class="form-group row hidden domain">
                            <label class="col-md-3 label-control" >Domain</label>
                            <div class="col-md-7">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="abc" aria-describedby="basic-addon2" name="domain" value="{{old('sub_domain')}}">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="basic-addon2">.co.tz</span>
                                </div>
                              </div>

                            </div>
                          </div>

                         

                        

                          <div class="form-group row">

                            <label class="col-md-3 label-control" >Phone</label>
                            <div class="col-md-7">
                              <div class="input-group">
                
                                <input type="number" class="form-control" placeholder="XXX XXXX XXXX" aria-describedby="basic-addon2" value="{{old('phone')}}"
                                  name="phone">

                              </div>

                            </div>
                          </div>
                     
                         


                       

                          <h4 class="form-section"><i class="ft-box"></i> Package Details</h4>

                          {{-- <div class="row">
                            @foreach($packages as $package)
                          <div class="col-md-3">
                            <h3>{{$package->name}}</h3>
                          <p>{{$package->description}}</p>
                          <div class="form-group">
                              <label for="projectinput5">Interested in</label>
                              <select id="projectinput5" name="interested" class="form-control">
                                <option value="none" selected="" disabled="">Interested in</option>
                                <option value="design">design</option>
                                <option value="development">development</option>
                                <option value="illustration">illustration</option>
                                <option value="branding">branding</option>
                                <option value="video">video</option>
                              </select>
                            </div>
                          </div>
                            @endforeach
                          
                          </div> --}}

                          <div class="form-group row">
                              <label class="col-md-3 label-control" >Package Name</label>
                              <div class="col-md-7">
                                  <select name="package_id" class="form-control">
                                      @foreach($packages as $package)
                                  <option value="{{$package->id}}">{{$package->name}}</option>
                                      @endforeach
                                      
                                     
                                    </select>
                              </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" >Subscription <i>(End Date)</i> </label>
                                <div class="col-md-7">
                                    {{-- <select name="subscription_id" class="form-control">
                                        
                                        @foreach($subscriptions as $subscription)
                                        @if(!in_array($subscription->subscription,['1','6']))
                                        <option value="{{$subscription->id}}">{{$subscription->subscription}} Month(s)</option>
                                        @endif
                                    
                                        @endforeach
                       
                                        
                                       
                                      </select> --}}

                                      <input type="date" class="form-control" name="ended_at" id="">
                                </div>
                              </div>



                          <h4 class="form-section"><i class="ft-user"></i> User</h4>





                          <div class="form-group row">
                            <label class="col-md-3 label-control" >Email</label>
                            <div class="col-md-7">
                              <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email" name="email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Password</label>
                            <div class="col-md-9">
                              <input type="password"  class="form-control" placeholder="Password" name="password">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Confirm Password</label>
                            <div class="col-md-9">
                              <input type="password"  class="form-control" placeholder="Re-type password" name="password_confirmation">
                            </div>
                          </div>






                        </div>





                        <div class="form-actions">
                          <a href="{{route('accounts.index')}}" class="btn btn-warning">
                              <i class="ft-x"></i> Cancel
                            </a>
                          <button type="submit" class="btn btn-primary">
                              <i class="ft-save"></i> Save
                            </button>
                        </div>

                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>



      </section>

    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
 
@section('page_vendor_js')

<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>
{{--
<script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
@endsection
 
@section(
  'page_level_js') <script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>


<script>
$(document).ready(function () {
  $('select[name="account_type"]').on('change',function(){
    
    var selected = $(this).val();
   if (selected=='1') {
     console.log('with domain');
     $('.domain').removeClass('hidden');
     $('.subdomain').addClass('hidden');
     
   } else if(selected=='2') {
    console.log('with subdomain');
    $('.domain').addClass('hidden');
    $('.subdomain').removeClass('hidden');
     
   }
  })

});
</script>
@endsection