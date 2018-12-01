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
              <li class="breadcrumb-item active">Slider Images
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
                <form action="{{route('update.slider',$settings->id)}}" method="POST" >
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                  <h4 class="info-text" align="center"> Upload Your Slider Images (1920 x 466 pixels)</h4>
                  <br>

                  <div class="row">
                        
                        <div class="col-sm-4">
                            <div class="form-group" align="center">
<a href="#" class="slider1-input-button"><img src="{{$slider_images->has(0) && is_null($slider_images[0]->image)?asset('images/productplaceholder.png'):asset('images/'.$slider_images[0]->image)}}" id="cropped-slider1" class="img-thumbnail " alt="" srcset=""></a>
                                
                                <input type="file" id="slider1-input" style="display: none;">
                            <input type="hidden" name="slider_one" value="{{$slider_images->has(0) && is_null($slider_images[0]->image)?"":Image::make(Storage::disk('images')->get($slider_images[0]->image))->encode('data-url')}}" >
                                <br>
                                <br>


                                <button type="button" id="slider1-input-button" class="btn btn-primary slider1-input-button">
                                        Upload
                                    </button>
                                <button type="button" id="remove-slider1" class="btn btn-danger">
                                        Remove
                                    </button>



                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group" align="center">

                                    <a href="#" class="slider2-input-button"> <img src="{{$slider_images->has(1) && is_null($slider_images[1]->image)?asset('images/productplaceholder.png'):asset('images/'.$slider_images[1]->image)}}" id="cropped-slider2" class="img-thumbnail" alt="" srcset=""></a>
                                <input type="file" id="slider2-input" style="display: none;">
                                <input type="hidden" name="slider_two" value="{{$slider_images->has(1) && is_null($slider_images[1]->image)?"":Image::make(Storage::disk('images')->get($slider_images[1]->image))->encode('data-url')}}">
                                <br>
                                <br>


                                <button type="button" id="slider2-input-button" class="btn btn-primary slider2-input-button">
                                        Upload
                                    </button>
                                <button type="button" id="remove-slider2" class="btn btn-danger">
                                    Remove
                                    </button>



                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group" align="center">

                                    <a href="#" class="slider3-input-button"> <img src="{{$slider_images->has(2) && is_null($slider_images[2]->image)?asset('images/productplaceholder.png'):asset('images/'.$slider_images[2]->image)}}" id="cropped-slider3" class="img-thumbnail" alt="" srcset=""></a>
                                <input type="file" id="slider3-input" style="display: none;">
                                <input type="hidden" name="slider_three" value="{{$slider_images->has(2) && is_null($slider_images[2]->image)?"":Image::make(Storage::disk('images')->get($slider_images[2]->image))->encode('data-url')}}">
                                <br>
                                <br>


                                <button type="button" id="slider3-input-button" class="btn btn-primary slider3-input-button">
                                        Upload
                                    </button>
                                <button type="button" id="remove-slider3" class="btn btn-danger">
                                    Remove
                                    </button>



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

    <!-- Modal -->
    <div id="slider1-modal" class="modal" role="dialog">
            <div class="modal-dialog modal-lg">
    
    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
    
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="slider1-demo" class="img-container">
                                    <!-- <img src="IMG_0024.JPG" style="display:none" class="img-thumbanail" id="logo-getter" alt=""> -->
                                </div>
                                
                                
                            </div>
    
    
                        </div>
                        <div class="row">
                                <div class="col-sm-12">
                                        <button type="button" id="crop-slider1" class="btn btn-info btn-block" id="button">Done</button>
                                </div>
                              </div>
                    </div>
    
                </div>
    
            </div>
        </div>
        <!-- slider 2 -->
        <div id="slider2-modal" class="modal" role="dialog">
            <div class="modal-dialog modal-lg">
    
    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
    
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
    
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="slider2-demo" class="img-container overflow-hidden slider2-demo">
                                    <!-- <img src="IMG_0024.JPG" style="display:none" class="img-thumbanail" id="logo-getter" alt=""> -->
                                </div>
                               
                                
                            </div>
    
    
                        </div>

                        <div class="row">
                                <div class="col-sm-12">
                                        <button type="button" id="crop-slider2" class="btn btn-info btn-block" id="button">Done</button>
                                </div>
                              </div>
                    </div>
    
                </div>
    
            </div>
        </div>
        <!-- slider 3-->
        <div id="slider3-modal" class="modal" role="dialog">
            <div class="modal-dialog modal-lg">
    
    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
    
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
    
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="slider3-demo"  overflow-hidden">
                                    <!-- <img src="IMG_0024.JPG" style="display:none" class="img-thumbanail" id="logo-getter" alt=""> -->
                                </div>
                               
                                
                            </div>
    
    
                        </div>

                        <div class="row">
                                <div class="col-sm-12">
                                        <button type="button" id="crop-slider3" class="btn btn-info btn-block" id="button">Done</button>
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
 	//slider image 1
     $('#remove-slider1').click(function () {
			
            $('#cropped-slider1').attr('src', "{{asset('images/productplaceholder.png')}}");
            $('input[name="slider_one"]').removeAttr('value');
            // console.log($('input[name="slider_one"]').val());

		});
		$('.slider1-input-button').click(function () {
			$('#slider1-input').click();
		});

		$('#remove-slider2').click(function () {
			
            $('#cropped-slider2').attr('src', "{{asset('images/productplaceholder.png')}}");
            $('input[name="slider_two"]').removeAttr('value');
            
		});
		$('.slider2-input-button').click(function () {
			$('#slider2-input').click();
		});

		$('#remove-slider3').click(function () {
			
            $('#cropped-slider3').attr('src', "{{asset('images/productplaceholder.png')}}");
            $('input[name="slider_three"]').removeAttr('value');
		});
		$('.slider3-input-button').click(function () {
			$('#slider3-input').click();
		});
		var slider1 = $('#slider1-demo').croppie({
			viewport: {
				width: 1150,
				height: 600,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 1200,
				height: 650

			}
		});


		var slider2 = $('#slider2-demo').croppie({
			viewport: {
				width: 1150,
				height: 600,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 1200,
				height: 650

			}
		});

		var slider3 = $('#slider3-demo').croppie({
			viewport: {
				width: 1150,
				height: 600,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 1200,
				height: 650

			}
		});

		$("#slider1-input").change(function () {
			readSlider1URL(this);
		});

		$("#slider2-input").change(function () {
			readSlider2URL(this);
		});

		$("#slider3-input").change(function () {
			readSlider3URL(this);
		});

		function readSlider1URL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {

					slider1.croppie('bind', {
						url: e.target.result,

					});

				};
				reader.readAsDataURL(input.files[0]);

				$('#slider1-modal').modal('show');
			}
		}

		function readSlider2URL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {

					slider2.croppie('bind', {
						url: e.target.result,

					});

				};
				reader.readAsDataURL(input.files[0]);

				$('#slider2-modal').modal('show');
			}
		}

		function readSlider3URL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {

					slider3.croppie('bind', {
						url: e.target.result,

					});

				};
				reader.readAsDataURL(input.files[0]);

				$('#slider3-modal').modal('show');
			}
		}


		$('#crop-slider1').click(function (params) {

			slider1.croppie('result', {
				type: 'canvas',
				size: 'viewport',

			}).then(function (response) {
				$('#cropped-slider1').attr('src', response);
                $('#remove-slider1').removeClass('disabled');
				$('#slider1-modal').modal('hide');
                $('input[name="slider_one"]').val(response);
			})
		});

		$('#crop-slider2').click(function (params) {
			slider2.croppie('result', {
				type: 'canvas',
				size: 'viewport',

			}).then(function (response) {
				$('#cropped-slider2').attr('src', response);
                $('#remove-slider2').removeClass('disabled');
				$('#slider2-modal').modal('hide');
                $('input[name="slider_two"]').val(response);
                
			})
		});


		$('#crop-slider3').click(function (params) {
			slider3.croppie('result', {
				type: 'canvas',
				size: 'viewport',

			}).then(function (response) {
				$('#cropped-slider3').attr('src', response);
                $('#remove-slider3').removeClass('disabled');
				$('#slider3-modal').modal('hide');
                $('input[name="slider_three"]').val(response);
                
			})
		});






</script>
@endsection