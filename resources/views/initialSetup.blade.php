<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> {{--
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" /> --}}
    <title>Setup</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
    <link href="{{asset('initial_screen/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('initial_screen/css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('initial_screen/css/demo.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('initial_screen/Croppie/croppie.css')}}">

    <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('initial_screen/css/themify-icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}"> {{--
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/loaders/loaders.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-loader.min.css')}}"> --}}


    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>


    <script>
        tinymce.init({ 
  selector:'textarea',
  plugins: "lists",
  branding: false,
  height : 200,
  menubar:false,
  statusbar:false,
   toolbar: "undo redo | fontsizeselect bold italic | underline strikethrough |numlist bullist",	
  
   });
    </script>
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url({{asset('initial_screen/img/paper-2.jpeg')}})">
        <!-- Creative Tim Branding  
		<a href="http://creative-tim.com">
			<div class="logo-container">
				<div class="logo">
					<img src="assets/img/new_logo.png">
				</div>
				<div class="brand">
					Creative Tim
				</div>
			</div>
		</a> -->

        <!--  Made With Paper Kit  -->
        <!-- <a href="http://demos.creative-tim.com/paper-kit?ref=paper-bootstrap-wizard" class="made-with-pk">
			<div class="brand">PK</div>
			<div class="made-with">Made with
				<strong>Paper Kit</strong>
			</div>
		</a> -->

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizard">
                            <form action="{{route('settings.store')}}" method="POST" enctype='multipart/form-data'>
                                <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->
                                {{csrf_field()}}
                                <div class="wizard-header">
                                    <h3 class="wizard-title">Describe Your business</h3>
                                    <p class="category">This information will help us set up your business.</p>
                                </div>
                                <div class="wizard-navigation">
                                    <div class="progress-with-circle">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#location" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-shopping-cart-full"></i>
                                                </div>
                                                Basic Info
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#type" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-info"></i>
                                                </div>
                                                About Store
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#facilities" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-layout"></i>
                                                </div>
                                                Layout
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#slider" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-layout-media-left"></i>
                                                </div>
                                                Logo
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#slider-images" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-layers-alt"></i>
                                                </div>
                                                Slider Images
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="location">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text"> Let's start with the basic details</h5>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Store Name</label>
                                                    <input type="text" class="form-control" name="store_name" id="exampleInputEmail1" placeholder="What is your place store name?">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Working Hours</label>
                                                    <input type="text" class="form-control" name="working_hours" id="exampleInputEmail1" placeholder="When is your store opened?">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="what email ?">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Hotline</label>
                                                    <input type="text" class="form-control" name="mobile" id="exampleInputEmail1" placeholder="what email ?">
                                                </div>
                                            </div>

                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <input type="text" class="form-control location_trigger" placeholder="where should your customer reach you?">
                                                </div>
                                            </div>
                                            <input type="hidden" id="lat" name="latitude">
                                            <input type="hidden" id="lon" name="longitude">


                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="where should your customer reach you?">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane" id="type">
                                        <h5 class="info-text">Describe your business</h5>
                                        <div class="tab-pane" id="description">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>About Us</label>
                                                        <textarea class="form-control" placeholder="" name="about" rows="9"></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" class="form-control" name="facebook" id="exampleInputEmail1" placeholder="Facebook page link?">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" class="form-control" name="twitter" id="exampleInputEmail1" placeholder="Twitter page link?">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" class="form-control" name="instagram" id="exampleInputEmail1" placeholder="Instagram page link?">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>LinkedIn</label>
                                                        <input type="text" class="form-control" name="linkedin" id="exampleInputEmail1" placeholder="LinkedIn page link?">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="facilities">
                                        <h5 class="info-text">Design the look of your store. </h5>
                                        <div class="row">
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group" align="center">
                                                    <label>Select Template and Colour</label>
                                                    <a id="img-link" href="{{asset('template1/previews/blue/1.png')}}" data-fancybox="blue-preview" data-width="1366" data-height="768"
                                                        data-thumbs='{"autoStart":true}'> <img id="img-thumb" src="{{asset('template1/previews/blue/1.png')}}" alt="..." class="img-thumbnail"></a>
                                                    <div>
                                                        <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="navy" title="Navy" class="btn btn-primary colour active"></button>
                                                        <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="green" title="Green" class="btn btn-success colour active"></button>
                                                        <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="blue" title="Blue" class="btn btn-info colour active"></button>
                                                        <input type="hidden" name="layout">
                                                        <input type="hidden" name="colour">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- navy previews --}}

                                        <div style="display: none;">


                                            <a href="{{asset('template1/previews/navy/2.png')}}" data-fancybox="navy-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/navy/2.png')}}"></a>

                                            <a href="{{asset('template1/previews/navy/3.png')}}" data-fancybox="navy-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/navy/3.png')}}"></a>

                                            <a href="{{asset('template1/previews/navy/4.png')}}" data-fancybox="navy-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/navy/4.png')}}"></a>


                                        </div>

                                        {{-- green previews --}}
                                        <div style="display: none;">


                                            <a href="{{asset('template1/previews/green/2.png')}}" data-fancybox="green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/green/2.png')}}"></a>

                                            <a href="{{asset('template1/previews/green/3.png')}}" data-fancybox="green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/green/3.png')}}"></a>

                                            <a href="{{asset('template1/previews/green/4.png')}}" data-fancybox="green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/green/4.png')}}"></a>


                                        </div>


                                        {{-- blue previews --}}

                                        <div style="display: none;">


                                            <a href="{{asset('template1/previews/blue/2.png')}}" data-fancybox="blue-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/blue/2.png')}}"></a>

                                            <a href="{{asset('template1/previews/blue/3.png')}}" data-fancybox="blue-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/blue/3.png')}}"></a>

                                            <a href="{{asset('template1/previews/blue/4.png')}}" data-fancybox="blue-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/blue/4.png')}}"></a>


                                        </div>

                                    </div>
                                    <div class="tab-pane" id="slider">
                                        <div class="row" align="center">
                                            <div class="col-sm-4 col-sm-offset-4">
                                                <div class="form-group">
                                                    <label>Logo</label>
                                                    <img src="{{asset('images/productplaceholder.png')}}" id="cropped-logo" class="img-thumbnail" alt="" srcset="">
                                                    <input type="file" id="logo-input" style="display: none;">
                                                    <input type="hidden" name="logo">
                                                    <br>
                                                    <br>
                                                    <input type="file" id="logo-input" style="display: none;" name="logo">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" id="logo-input-button" class="btn btn-primary">
															<span class="ti-plus"></span>
														</button>
                                                        <button type="button" id="remove-logo" class="btn btn-danger">
															<span class="ti-close"></span>
														</button>

                                                    </div>

                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="tab-pane" id="slider-images">
                                        <div class="row">
                                            <h5 class="info-text"> Upload Your Slider Images</h5>
                                            <div class="col-sm-4">
                                                <div class="form-group" align="center">

                                                    <img src="{{asset('images/productplaceholder.png')}}" id="cropped-slider1" class="img-thumbnail" alt="" srcset="">
                                                    <input type="file" id="slider1-input" style="display: none;">
                                                    <input type="hidden" name="slider_one">
                                                    <br>
                                                    <br>

                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" id="slider1-input-button" class="btn btn-primary">
															<span class="ti-plus"></span>
														</button>
                                                        <button type="button" id="remove-slider1" class="btn btn-danger">
															<span class="ti-close"></span>
														</button>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group" align="center">

                                                    <img src="{{asset('images/productplaceholder.png')}}" id="cropped-slider2" class="img-thumbnail" alt="" srcset="">
                                                    <input type="file" id="slider2-input" style="display: none;">
                                                    <input type="hidden" name="slider_two">
                                                    <br>
                                                    <br>

                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" id="slider2-input-button" class="btn btn-primary">
															<span class="ti-plus"></span>
														</button>
                                                        <button type="button" id="remove-slider2" class="btn btn-danger">
															<span class="ti-close"></span>
														</button>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group" align="center">

                                                    <img src="{{asset('images/productplaceholder.png')}}" id="cropped-slider3" class="img-thumbnail" alt="" srcset="">
                                                    <input type="file" id="slider3-input" style="display: none;">
                                                    <input type="hidden" name="slider_three">
                                                    <br>
                                                    <br>

                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" id="slider3-input-button" class="btn btn-primary">
															<span class="ti-plus"></span>
														</button>
                                                        <button type="button" id="remove-slider3" class="btn btn-danger">
															<span class="ti-close"></span>
														</button>

                                                    </div>

                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- wizard container -->


                    <!-- logo modal -->


                    <!-- end of logal modal -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                Made by
                <a href="#">Lengendary IT</a>.

            </div>
        </div>
    </div>



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
                            <button type="button" id="crop-image" class="btn btn-info" id="button">Done</button>
                            <button type="button" id="rotate" class="btn btn-info" id="button">Rotate</button>
                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- slider modal -->


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
                            <div id="slider1-demo" class="img-container overflow-hidden">
                                <!-- <img src="IMG_0024.JPG" style="display:none" class="img-thumbanail" id="logo-getter" alt=""> -->
                            </div>
                            <button type="button" id="crop-slider1" class="btn btn-info" id="button">Done</button>
                            <button type="button" id="rotate" class="btn btn-info" id="button">Rotate</button>
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
                            <button type="button" id="crop-slider2" class="btn btn-info" id="button">Done</button>
                            <button type="button" id="rotate" class="btn btn-info" id="button">Rotate</button>
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
                            <div id="slider3-demo" class="img-container overflow-hidden">
                                <!-- <img src="IMG_0024.JPG" style="display:none" class="img-thumbanail" id="logo-getter" alt=""> -->
                            </div>
                            <button type="button" id="crop-slider3" class="btn btn-info" id="button">Done</button>
                            <button type="button" id="rotate" class="btn btn-info" id="button">Rotate</button>
                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>

    <div id="location-modal" class="modal" role="dialog">
        <div class="modal-dialog">


            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Use Pointer To Locate Your Business</h4>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control location_trigger" autocomplete="off" placeholder="Search location...">

                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div id="somecomponent" style="width: 590px; height: 400px;"></div>
                            </div>
                            <hr>

                            <button type="button" id="located" class="btn btn-info pull-right" id="button">Done</button>

                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>







</body>

<!--   Core JS Files   -->
<script src="{{asset('initial_screen/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('initial_screen/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('initial_screen/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{asset('initial_screen/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{asset('initial_screen/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('initial_screen/Croppie/croppie.min.js')}}"></script>
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="{{asset('initial_screen/js/locationpicker.jquery.min.js')}}"></script>

<script>
    $(function () {
$('.location_trigger').focus(function(params) {

     $('#somecomponent').locationpicker({

location: {
           latitude:-6.792354,
           longitude:39.208328
       },
       radius: 300,
       inputBinding: {
           latitudeInput: $('#lat'),
           longitudeInput: $('#lon'),
           radiusInput: $('#us2-radius'),
           locationNameInput: $('.location_trigger')
       }


});
    
    $('#location-modal').modal('show');
});

$('#located').click(function(params) {

      $('#location-modal').modal('hide');
    
});



		//layout colour seletor

		$(".colour").click(function () {
			$(".colour").find('i').remove();
			$(this).append('<i class="ti-check"></i>');
			var colour = $(this).data('colour');
			var layout = $(this).data('layout');
            if (colour=="navy") {
                $('#img-thumb').attr('src',"{{asset('template1/previews/navy/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/navy/1.png')}}");
                $('#img-link').attr('href',"{{asset('template1/previews/navy/1.png')}}");
                // $('#img-link').data('fancybox','navy-preview');
                $('#img-link').attr('data-fancybox','navy-preview');
            } else if(colour=="green") {
                $('#img-thumb').attr('src',"{{asset('template1/previews/green/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/green/1.png')}}");
                $('#img-link').attr('data-fancybox','green-preview');
                $('#img-link').attr('href',"{{asset('template1/previews/green/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else{
                $('#img-thumb').attr('src',"{{asset('template1/previews/blue/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/blue/1.png')}}");
                $('#img-link').attr('data-fancybox','blue-preview');
                $('#img-link').attr('href',"{{asset('template1/previews/blue/1.png')}}");
                
    
            
            }
			$('input[name="layout"]').val(layout);
			$('input[name="colour"]').val(colour);

			// alert("the template "+layout+" is and the colour is "+colour)

		});

		$('#remove-logo').click(function () {
			$('#cropped-logo').attr('src', 'productplaceholder.png');
		});
		$('#logo-input-button').click(function () {
			$('#logo-input').click();
		});
		var basic = $('#image-demo').croppie({
			viewport: {
				width: 205,
				height: 47,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 300,
				height: 300

			}
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
				$('#logo-modal').modal('hide');
                $('input[name="logo"]').val(response);
			})
		});
		$('#rotate').click(function (params) {
			basic.croppie('rotate', 90);

		})


		//slider image 1
		$('#remove-slider1').click(function () {
			$('#cropped-slider1').attr('src', 'productplaceholder.png');
		});
		$('#slider1-input-button').click(function () {
			$('#slider1-input').click();
		});

		$('#remove-slider2').click(function () {
			$('#cropped-slider2').attr('src', 'productplaceholder.png');
		});
		$('#slider2-input-button').click(function () {
			$('#slider2-input').click();
		});

		$('#remove-slider3').click(function () {
			$('#cropped-slider3').attr('src', 'productplaceholder.png');
		});
		$('#slider3-input-button').click(function () {
			$('#slider3-input').click();
		});
		var slider1 = $('#slider1-demo').croppie({
			viewport: {
				width: 570,
				height: 250,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 600,
				height: 400

			}
		});


		var slider2 = $('#slider2-demo').croppie({
			viewport: {
				width: 570,
				height: 250,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 600,
				height: 400

			}
		});

		var slider3 = $('#slider3-demo').croppie({
			viewport: {
				width: 570,
				height: 250,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 600,
				height: 400

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
				$('#slider3-modal').modal('hide');
                $('input[name="slider_three"]').val(response);
                
			})
		});


	});

</script>

</html>