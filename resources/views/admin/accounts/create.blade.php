@extends('admin.layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/file-uploaders/dropzone.min.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/file-uploaders/dropzone.min.css')}}"> {{-- //template specific css --}}
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

                            <label class="col-md-3 label-control" for="projectinput1">Domain</label>
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
                            <label class="col-md-3 label-control" for="projectinput1">Email</label>
                            <div class="col-md-7">
                              <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email" name="email">
                            </div>
                          </div>

                        

                          <div class="form-group row">

                            <label class="col-md-3 label-control" for="projectinput1">Phone</label>
                            <div class="col-md-7">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon2">+255</span>
                                </div>
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
                              <label class="col-md-3 label-control" for="projectinput1">Package Name</label>
                              <div class="col-md-7">
                                  <select id="projectinput5" name="package_id" class="form-control">
                                      @foreach($packages as $package)
                                  <option value="{{$package->id}}">{{$package->name}}</option>
                                      @endforeach
                                      
                                     
                                    </select>
                              </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput1">Subscription</label>
                                <div class="col-md-7">
                                    <select id="projectinput5" name="subscription_id" class="form-control">
                                        
                                        @foreach($subscriptions as $subscription)
                                    <option value="{{$subscription->id}}">{{$subscription->subscription}} Month(s)</option>
                                        @endforeach
                       
                                        
                                       
                                      </select>
                                </div>
                              </div>



                          <h4 class="form-section"><i class="ft-user"></i> User</h4>






                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Name</label>
                            <div class="col-md-9">
                              <input type="text" id="projectinput1" class="form-control" value="{{old('user_name')}}" placeholder="Name" name="user_name">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Email</label>
                            <div class="col-md-9">
                              <input type="email" id="projectinput1" class="form-control" value="{{old('user_email')}}" placeholder="Email" name="user_email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Password</label>
                            <div class="col-md-9">
                              <input type="password" id="projectinput1" class="form-control" placeholder="Password" name="password">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Confirm Password</label>
                            <div class="col-md-9">
                              <input type="password" id="projectinput1" class="form-control" placeholder="Re-type password" name="password_confirmation">
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
<script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/extensions/dropzone.min.js')}}" type="text/javascript"></script>



<script>
  function remove_income_fields(rid) {
        $('.removeclass' + rid).remove();
    }

$(document).ready(function () {
  
  // $("#switchery3").click(function() {
    var changeCheckbox = document.querySelector('.js-check-change');
  // , changeField = document.querySelector('.js-check-change-field');
  var old1_price_output=$("#new_price_output").text();
  //added
  
changeCheckbox.onchange = function() {
  if (changeCheckbox.checked) {
    $("#discount").prop('disabled', false);
    $("#sale_tag").show();
    $("#old_price_output").show();
    //added
    done_typing();
    // $("#new_price_output").text(addCommas(old1_price_output))
  }else{
    $("#discount").prop('disabled', true);
    $("#sale_tag").hide();
    $("#new_price_output").text(addCommas($("#price").val())).append('<span id="old_price_output">'+old_price_output+'</span>'); 
    $("#old_price_output").hide(); 
  }
};

var togglePrice=document.querySelector('.js-price-visible');
  togglePrice.onchange=function(){
    if (togglePrice.checked) {
    $("#new_price_output").show();
    //added
    $("#sale_tag").show();
    } else {

      $("#new_price_output").hide();
      //added
      $("#sale_tag").hide();
      
    }
  }

///input binding to a preview
$("#name").keyup(function(event) {
  var stt = $(this).val();
  $("#name_output").text(stt);
});

$("#price").keyup(function(event) {
  var stt = $(this).val();
  if (!isNaN(stt) && stt!=0) {
    $("#new_price_output").text(addCommas(stt));
  done_typing();
  }
 
});

var wait_time=1000;
var wait_key_stroke=3;
var count_time;
var count_key_stroke;
$('#discount').keyup(function(){
    clearTimeout(count_time);
    count_time=setTimeout(done_typing,wait_time);
});

  function done_typing(params) {
   var discount=$('#discount').val();

   
      // alert(input);
    var lastChar = discount[discount.length-1];
      if (lastChar=='%' && discount!=0) {
        var percentage='-'+discount;
        var numerice_percentage=discount.replace('%','');
        // var old_price_output=$("#new_price_output").text();
        // var new_price_output=$("#new_price_output").text().replace(/,/g , '');

        var old_price_output=$("#price").val();
        var new_price_output=$("#price").val();
        new_price_output=new_price_output-((new_price_output*numerice_percentage)/100);
        //added
        if(new_price_output==old1_price_output)
          $("#new_price_output").text(addCommas(new_price_output));
        else
          $("#new_price_output").text(addCommas(new_price_output)).append('<span id="old_price_output">'+old_price_output+'</span>');
        $("#sale_tag").addClass('sale-tag').text(percentage);
      } else {
        if(!isNaN(discount) && discount!=0){
        // alert('its not a percentage');
        var price=$('#price').val();
        console.log(price);
        var numeric_percentage=Math.ceil((discount/price)*100);
        var percentage='-'+numeric_percentage+'%';

        //var old_price_output=$("#new_price_output").text();
       // var new_price_output=$("#new_price_output").text().replace(/,/g , '');
        var old_price_output=price;
        var new_price_output=price;
        new_price_output=new_price_output-discount;
        //added
        if(new_price_output==old1_price_output)
        $("#new_price_output").text(addCommas(new_price_output));
        else
        $("#new_price_output").text(addCommas(new_price_output)).append('<span id="old_price_output">'+old_price_output+'</span>');
       
        $("#sale_tag").addClass('sale-tag').text(percentage);
        }

      }
   
   
    }
  

// $("#category").on('change',function () {
//   alert("this.value");
// }):
$('select[name="category_id"]').on('change', function () {
  var category=$("#category option:selected").text();
  $("#category_output").text(category);

});


function addCommas(nStr) {
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}



$("#product-picture").change(function(){
                    readURL(this);
                });
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#product_image').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }




        // this is the id of the form



});


// });

</script>
@endsection