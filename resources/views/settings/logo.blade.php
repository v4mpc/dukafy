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
<link rel="stylesheet" href="{{asset('initial_screen/Croppie/croppie.css')}}">

<style>

  .vertical-divider {
  position: absolute;
  z-index: 10;
  top: 50%;
  left: 50%;
  margin: 0;
  padding: 0;
  width: auto;
  height: 50%;
  line-height: 0;
  text-align:center;
  text-transform: uppercase;
  transform: translateX(-50%);
}

.vertical-divider:before, 
.vertical-divider:after {
  position: absolute;
  left: 50%;
  content: '';
  z-index: 9;
  border-left: 1px solid rgba(34,36,38,.15);
  border-right: 1px solid rgba(255,255,255,.1);
  width: 0;
  height: calc(100% - 1rem);
}

.row-divided > .vertical-divider {
  height: calc(50% - 1rem);    
}

.vertical-divider:before {
  top: -100%;
}

.vertical-divider:after {
  top: auto;
  bottom: 0;
}

.row-divided {
  position:relative;
}

.row-divided > [class^="col-"],
.row-divided > [class*=" col-"] {
  padding-left: 30px;  /* gutter width (give a little extra room) 2x default */
  padding-right: 30px; /* gutter width (give a little extra room) 2x default */
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
              <li class="breadcrumb-item active">Logo
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
                <form action="{{route('update.logo',$settings->id)}}" method="POST" >
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                   

                  <div class="row row-divided" align="center">
                    <div class="col-xs-6 column-one">
                         
                      <h4 class="info-text">Logo </h4>
                      <br>
                              <a href="#" class="logo-input-button">  <img src="{{is_null($settings->logo)?asset('images/productplaceholder.png'):asset('images/'.$settings->logo)}}" id="cropped-logo" class="img-thumbnail" width="200" alt="" srcset=""></a>
                              <input type="file" id="logo-input" style="display: none;">
                              <input type="hidden" name="logo" value="{{is_null($settings->logo)?"":Image::make(Storage::disk('images')->get($settings->logo))->encode('data-url')}}">
                              <br>
                              <br>
                             

                              <button type="button" id="logo-input-button" class="btn btn-primary logo-input-button">
        Upload
      </button>
                              <button type="button" id="remove-logo" class="btn btn-danger ">
        Remove
      </button>



                          
                      </div>
                      <div class="vertical-divider">or</div>
                      <div class="col-xs-5 column-two">
                        <h4 class="info-text">Logo Text </h4>
                        <br>
                        <div class="form-group">
                            {{-- <label>Logo Text</label> --}}
                        <input type="text" class="form-control" value="{{$settings->logo_text}}" name="logo_text" id="exampleInputEmail1" maxlength="15" title="maximum 15 characters" placeholder=" Text to Display as logo">
                        </div>
                    </div>



                  </div>

                    <div class="form-actions">
                      {{-- <button type="button" class="btn btn-warning mr-1">
                                  <i class="ft-x"></i> Cancel
                                </button> --}}
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

      <!-- Modal -->
    <div id="logo-modal" class="modal" role="dialog">
        <div class="modal-dialog modal-md">


            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="image-demo" class="img-container overflow-hidden">
                                <!-- <img src="IMG_0024.JPG" style="display:none" class="img-thumbanail" id="logo-getter" alt=""> -->
                                
                            </div>


                            
                            
                        </div>


                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                          <button type="button" id="crop-image" class="btn btn-info btn-block" id="button">Done</button>
                      </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

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
<script src="{{asset('initial_screen/Croppie/croppie.min.js')}}"></script>

<script>
  $('#remove-logo').click(function () {
      $('#cropped-logo').attr('src', "{{asset('images/productplaceholder.png')}}");
      $('input[name="logo"]').removeAttr('value');
		});
		$('.logo-input-button').click(function () {
			$('#logo-input').click();
		});
		var basic = $('#image-demo').croppie({
			viewport: {
				// width: 205,
				// height: 47,
                width: 205,
				height: 100,
				type: 'square',
				enableOrientation: true,
				enableExif: true
               
			},
			boundary: {
				width: 300,
				height: 300

			},

            
    

		})

		$("#logo-input").change(function () {
			readURL(this);
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {

					basic.croppie('bind', {
						url: e.target.result,

					});

				};
				reader.readAsDataURL(input.files[0]);

				$('#logo-modal').modal('show');
			}
		}


		$('#crop-image').click(function (params) {
			basic.croppie('result', {
				type: 'canvas',
				size: 'viewport',

			}).then(function (response) {
				$('#cropped-logo').attr('src', response);
                $('#remove-logo').removeClass('disabled');
				$('#logo-modal').modal('hide');
                $('input[name="logo"]').val(response);
                console.log();
			})
		});
		$('#rotate').click(function (params) {
			basic.croppie('rotate', 90);

		})


</script>
@endsection