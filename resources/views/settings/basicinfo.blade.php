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
              <li class="breadcrumb-item active">Basic Info
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
                <form action="{{route('settings.update',$settings->id)}}" method="POST" >
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                   

                  <div class="row">
                     
                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                              <label>Store Name</label>
                          <input type="text" class="form-control" name="store_name" id="exampleInputEmail1" value="{{$settings->store_name}}" placeholder="What is your place store name?">
                          </div>
                      </div>
                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                              <label>Working Hours </label><span> <i class="ft-info" data-toggle="tooltip" data-placement="right" title="e.g 9 AM to 9PM (Thursday's closed)"></i></span>
                              <input type="text" class="form-control" name="working_hours" id="exampleInputEmail1" value="{{$settings->working_hours}}" placeholder="When is your store opened?">
                          </div>
                      </div>
                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" value="{{$settings->email}}" id="exampleInputEmail1" placeholder="what is your email ?">
                          </div>
                      </div>
                      <div class="col-sm-5 col-sm-offset-1">


                          <div class="form-group">
                              <label>Hotline</label>
                              <div class="input-group">

                                  <span class="input-group-addon" id="basic-addon1">+255</span>
                                  <input type="number" class="form-control" placeholder="XXX XXX XXX" value="{{$settings->mobile}}" name="mobile" aria-describedby="basic-addon1">
                              </div>
                          </div>
                      </div>

                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                              <label>Location</label>
                          <input type="text" class="form-control location_trigger" value="{{$settings->location_name}}" name="formatted_address" placeholder="where should your customer reach you?">
                          </div>
                      </div>
                      {{-- <form > --}}
                          <input type="hidden" id="lat" name="lat">
                          <input type="hidden" id="lon" name="lng">
{{-- </form> --}}
                      

                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                                  <label>Postal Address</label>
                              <div class="input-group">

                                  <span class="input-group-addon" id="basic-addon1">P O BOX</span>
                                  <input type="number" class="form-control" placeholder="XXX.." value="{{$settings->address}}" name="address" aria-describedby="basic-addon1">
                              </div>
                          </div>
                      </div>


                  </div>


                    <div class="form-actions">
                      <button type="button" class="btn btn-warning mr-1">
                                  <i class="ft-x"></i> Cancel
                                </button>
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
        <div id="location-modal" class="modal" role="dialog">
          <div class="modal-dialog modal-lg">
  
  
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
  

                    <h4 class="modal-title">Locate Your Business</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                     
  
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label>Location</label>
                                          {{-- <form> --}}
                                          <input type="text" class="form-control location_trigger" id="geocomplete" style="width: 500px;" value="{{$settings->location_name}}" placeholder="Start Typing...">
                                          {{-- <p id="see">Click me</p> --}}
                                          {{-- </form> --}}
                                          
  
                                      </div>
                                  </div>
  
                              </div>
                              <hr>
                              {{-- <div class="row">
                                  <div id="somecomponent" style="width: 590px; height: 400px;"></div>
                              </div> --}}
  
                              <div class="map_canvas" ></div>
  
  
                              {{-- <form> --}}
                                      {{-- <input id="geocomplete" type="text" placeholder="Type in an address" value="Dar es Salaam,Tanzania" /> --}}
                                      {{-- <input id="find" type="button" value="find" /> --}}
                                      
                                      {{-- <fieldset>
                                        <label>Latitude</label>
                                        <input name="lat" type="text" value="">
                                      
                                        <label>Longitude</label>
                                        <input name="lng" type="text" value="">
                                      
                                        <label>Formatted Address</label>
                                        <input name="formatted_address" type="text" value="">
                                      </fieldset>
                                      
                                      <a id="reset" href="#" style="display:none;">Reset Marker</a>
                                    </form> --}}
                              <hr>
  
                              <button type="button" id="located" class="btn btn-info pull-right" id="button">Done</button>
  
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
  

$('.location_trigger').focus(function(params) {

//      $('#somecomponent').locationpicker({

// location: {
//            latitude:-6.792354,
//            longitude:39.208328
//        },
//        radius: 300,
//        inputBinding: {
//            latitudeInput: $('#lat'),
//            longitudeInput: $('#lon'),
//            radiusInput: $('#us2-radius'),
//            locationNameInput: $('.location_trigger')
//        }


// });
    
    $('#location-modal').modal('show');
});

$('#located').click(function(params) {

      $('#location-modal').modal('hide');
    
});

</script>


<script>
        $(function(){
          $("#geocomplete").geocomplete({
            map: ".map_canvas",
            details: "form ",
            location: "Dar es Salaam, Tanzania",
            markerOptions: {
              draggable: true,
              zoom:60
            }

            
          });
          
          $("#geocomplete").bind("geocode:dragged", function(event, latLng){
            // $("input[name=lat]").val(latLng.lat());
            // $("input[name=lng]").val(latLng.lng());

             $("#lat").val(latLng.lat());
            $("#lon").val(latLng.lng());

            console.log('longitude: '+$('#lon').val()+' latitude: '+$('#lat').val())
            $("#reset").show();
          });
          
          
          $("#reset").click(function(){
            $("#geocomplete").geocomplete("resetMarker");
            $("#reset").hide();
            return false;
          });
          
          $("#see").click(function(){
           
            console.log('longitude: '+$('#lon').val()+' latitude: '+$('#lat').val())
          });

          $("#find").click(function(){
            $("#geocomplete").trigger("geocode");
          }).click();
        });
      </script>
@endsection