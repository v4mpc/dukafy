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
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>

    <!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('initial_screen/css/themify-icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}"> {{--
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/loaders/loaders.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-loader.min.css')}}"> --}}



    <style>
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }


        #geocomplete { width: 200px}

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

.btn-yellow,
.btn-yellow:hover,
.btn-yellow:active,
.btn-yellow:visited,
.btn-yellow:focus {
    background-color: #fed700;
    border-color: #fed700;

    /* #ce1d76 */
}

.btn-pink,
.btn-pink:hover,
.btn-pink:active,
.btn-pink:visited,
.btn-pink:focus {
    background-color:#ce1d76;
    border-color:#ce1d76;

  
}


.btn-black,
.btn-black:hover,
.btn-black:active,
.btn-black:visited,
.btn-black:focus {
    background-color:#000;
    border-color:#000;

  
}




.btn-red,
.btn-red:hover,
.btn-red:active,
.btn-red:visited,
.btn-red:focus {
    background-color: #ff6c6c;
    border-color: #ff6c6c;

    /* #ce1d76 */
}

.btn-orange,
.btn-orange:hover,
.btn-orange:active,
.btn-orange:visited,
.btn-orange:focus {
    background-color:#f39c12;
    border-color:#f39c12;

  
}


.btn-dark_green,
.btn-dark_green:hover,
.btn-dark_green:active,
.btn-dark_green:visited,
.btn-dark_green:focus {
    background-color:#12cca7;
    border-color:#12cca7;




    

  
}



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




.modal-lg {
    max-width: 1118px !important;
}


    </style>
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
                            <form action="{{route('settings.store')}}" method="POST" >
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
                                                    <label>Working Hours </label><span> <i class="ti-info-alt" data-toggle="tooltip" data-placement="right" title="e.g 9 AM to 9PM (Thursday's closed)"></i></span>
                                                    <input type="text" class="form-control" name="working_hours" id="exampleInputEmail1" placeholder="When is your store opened?">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="what is your email ?">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-sm-offset-1">


                                                <div class="form-group">
                                                    <label>Hotline</label>
                                                    <div class="input-group">

                                                        <span class="input-group-addon" id="basic-addon1">+255</span>
                                                        <input type="number" class="form-control" placeholder="XXX XXX XXX" name="mobile" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <input type="text" class="form-control location_trigger" name="formatted_address" placeholder="where should your customer reach you?">
                                                </div>
                                            </div>
                                            {{-- <form > --}}
                                                <input type="hidden" id="lat" name="lat">
                                                <input type="hidden" id="lon" name="lng">
                                                <input type="hidden" name="location_name"  id="location_name">
    {{-- </form> --}}
                                            

                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="form-group">
                                                        <label>Postal Address</label>
                                                    <div class="input-group">

                                                        <span class="input-group-addon" id="basic-addon1">P O BOX</span>
                                                        <input type="number" class="form-control" placeholder="XXX.." name="address" aria-describedby="basic-addon1">
                                                    </div>
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
                                                        <label>About Us </label>
                                                        <small><i id="test2"></i></small>
                    
                                                        <textarea class="form-control" id="editor1" maxlength="65535" placeholder=""  name="about" rows="9"></textarea>

                                                        <script>
                                                            // Replace the <textarea id="editor1"> with a CKEditor
                                                            // instance, using default configuration.
                                                            CKEDITOR.replace('editor1');
                                                        </script>
                                                        
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                   
                                                        <label>Facebook</label>
                                                     

                                                    <div class="input-group">

                                                        <span class="input-group-addon" id="basic-addon1">https://</span>
                                                        <input type="text" class="form-control" name="facebook" id="exampleInputEmail1" placeholder="Facebook page link?">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <label>Twitter</label>
                                                     

                                                    <div class="input-group">

                                                        <span class="input-group-addon" id="basic-addon1">https://</span>
                                                        <input type="text" class="form-control" name="twitter" id="exampleInputEmail1" placeholder="Twitter page link?">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <label>Instagram</label>
                                                     

                                                    <div class="input-group">

                                                        <span class="input-group-addon" id="basic-addon1">https://</span>
                                                        <input type="text" class="form-control" name="instagram" id="exampleInputEmail1" placeholder="Instagram page link?">
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Whatsapp</label>
                                                        <div class="input-group">

                                                            <span class="input-group-addon" id="basic-addon1">+255</span>
                                                            <input type="number" class="form-control" placeholder="XXX XXX XXX" name="whatsapp" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="facilities">
                                        <h5 class="info-text">Select Template and Colour. </h5>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group" align="center">
                                            
                                                    <div id="loader" class="loader hidden"></div>

                                                    <div id="template-buttons"><a id="img-link" href="{{asset('template1/previews/blue/1.png')}}" data-fancybox="blue-preview"
                                                            data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb" src="{{asset('template1/previews/blue/1.png')}}" alt="..." class="img-thumbnail"></a>
                                                            <hr>
                                                        <div>
                                                            <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="navy" title="Navy" class="btn btn-primary colour active"></button>
                                                            <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="green" title="Green" class="btn btn-success colour active"></button>
                                                            <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="blue" title="Blue" class="btn btn-info colour active"><i class="ti-check"></i></button>
                                                            <input type="hidden" value="template1" name="layout">
                                                            <input type="hidden" value="blue"  name="colour">
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                    <div class="form-group" align="center">
                                                
                                                        <div id="loader" class="loader hidden"></div>
    
                                                        <div id="template-buttons"><a id="img-link-2" href="{{asset('template2/previews/yellow/1.png')}}" data-fancybox="yellow-preview"
                                                                data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb-2" src="{{asset('template2/previews/yellow/1.png')}}" alt="..." class="img-thumbnail"></a>
                                                                <hr>
                                                            <div>
                                                                <button type="button" data-toggle="tooltip" data-layout="template2" data-colour="black" title="Black" class="btn btn-black colour"></button>
                                                                <button type="button" data-toggle="tooltip" data-layout="template2" data-colour="pink" title="Pink" class="btn btn-pink colour"></button>
                                                                <button type="button" data-toggle="tooltip" data-layout="template2" data-colour="yellow" title="Yellow" class="btn btn-yellow colour"></button>
                                                                {{-- <input type="hidden" name="layout">
                                                                <input type="hidden" name="colour"> --}}
                                                            </div>
                                                        </div>
    
    
                                                    </div>
                                                </div>



                                            <div class="col-sm-4">
                                                    <div class="form-group" align="center">
                                                
                                                        <div id="loader" class="loader hidden"></div>
    
                                                        <div id="template-buttons"><a id="img-link-3" href="{{asset('template3/previews/dark_green/1.png')}}" data-fancybox="dark_green-preview"
                                                                data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb-3" src="{{asset('template3/previews/dark_green/1.png')}}" alt="..." class="img-thumbnail"></a>
                                                                <hr>
                                                            <div>
                                                                <button type="button" data-toggle="tooltip" data-layout="template3" data-colour="dark_green" title="Dark Green" class="btn btn-dark_green colour "></button>
                                                                <button type="button" data-toggle="tooltip" data-layout="template3" data-colour="red" title="Red" class="btn btn-red colour "></button>
                                                                <button type="button" data-toggle="tooltip" data-layout="template3" data-colour="orange" title="Orange" class="btn btn-orange colour "></button>
                                                                {{-- <input type="hidden" name="layout">
                                                                <input type="hidden" name="colour"> --}}
                                                            </div>
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
                                        {{-- template 2 starts here --}}
                                        {{-- yellow --}}
                                        <div style="display: none;">


                                                <a href="{{asset('template2/previews/yellow/2.png')}}" data-fancybox="yellow-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/yellow/2.png')}}"></a>
    
                                                <a href="{{asset('template2/previews/yellow/3.png')}}" data-fancybox="yellow-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/yellow/3.png')}}"></a>
    
                                                <a href="{{asset('template2/previews/yellow/4.png')}}" data-fancybox="yellow-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/yellow/4.png')}}"></a>
    
    
                                            </div>



                                             {{-- black--}}
                                        <div style="display: none;">


                                                <a href="{{asset('template2/previews/black/2.png')}}" data-fancybox="black-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/black/2.png')}}"></a>
    
                                                <a href="{{asset('template2/previews/black/3.png')}}" data-fancybox="black-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/black/3.png')}}"></a>
    
                                                <a href="{{asset('template2/previews/black/4.png')}}" data-fancybox="black-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/black/4.png')}}"></a>
    
    
                                            </div>


                                                {{-- pink--}}
                                        <div style="display: none;">


                                                <a href="{{asset('template2/previews/pink/2.png')}}" data-fancybox="pink-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/pink/2.png')}}"></a>
    
                                                <a href="{{asset('template2/previews/pink/3.png')}}" data-fancybox="pink-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/pink/3.png')}}"></a>
    
                                                <a href="{{asset('template2/previews/pink/4.png')}}" data-fancybox="pink-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/pink/4.png')}}"></a>
    
    
                                            </div>





                                             {{-- template 3 starts here --}}
                                        {{-- dark_green --}}
                                        <div style="display: none;">


                                            <a href="{{asset('template3/previews/dark_green/2.png')}}" data-fancybox="dark_green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/dark_green/2.png')}}"></a>

                                            <a href="{{asset('template3/previews/dark_green/3.png')}}" data-fancybox="dark_green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/dark_green/3.png')}}"></a>

                                            <a href="{{asset('template3/previews/dark_green/4.png')}}" data-fancybox="dark_green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/dark_green/4.png')}}"></a>


                                        </div>



                                         {{-- red--}}
                                    <div style="display: none;">


                                            <a href="{{asset('template3/previews/red/2.png')}}" data-fancybox="red-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/red/2.png')}}"></a>

                                            <a href="{{asset('template3/previews/red/3.png')}}" data-fancybox="red-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/red/3.png')}}"></a>

                                            <a href="{{asset('template3/previews/red/4.png')}}" data-fancybox="red-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/red/4.png')}}"></a>


                                        </div>


                                            {{-- orange --}}
                                    <div style="display: none;">


                                            <a href="{{asset('template3/previews/orange/2.png')}}" data-fancybox="orange-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/orange/2.png')}}"></a>

                                            <a href="{{asset('template3/previews/orange/3.png')}}" data-fancybox="orange-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/orange/3.png')}}"></a>

                                            <a href="{{asset('template3/previews/orange/4.png')}}" data-fancybox="orange-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/orange/4.png')}}"></a>


                                        </div>

                                    </div>
                                    <div class="tab-pane" id="slider">
                                        {{-- <div class="row" align="center">
                                            <div class="col-sm-4 col-sm-offset-4">
                                                <div class="form-group">
                                                        <h5 class="info-text"> Upload Your Logo</h5>
                                                    <a href="#" class="logo-input-button">  <img src="{{asset('images/productplaceholder.png')}}" id="cropped-logo" class="img-thumbnail" alt="" srcset=""></a>
                                                    <input type="file" id="logo-input" style="display: none;">
                                                    <input type="hidden" name="logo">
                                                    <br>
                                                    <br>
                                                   

                                                    <button type="button" id="logo-input-button" class="btn btn-primary logo-input-button">
															Upload
														</button>
                                                    <button type="button" id="remove-logo" class="btn btn-danger disabled">
															Remove
														</button>



                                                </div>
                                            </div>



                                        </div> --}}
                                        <h5 class="info-text"> Upload Your Logo</h5>
                                        <div class="row row-divided" align="center">
                                            <div class="col-xs-6 column-one">
                                                <h6>Logo</h6>
                                                
                                                <a href="#" class="logo-input-button">  <img src="{{asset('images/productplaceholder.png')}}" width="200" id="cropped-logo" class="img-thumbnail" alt="" srcset=""></a>
                                                    <input type="file" id="logo-input" style="display: none;">
                                                    <input type="hidden" name="logo">
                                                    <br>
                                                    <br>
                                                   

                                                    <button type="button" id="logo-input-button" class="btn btn-primary logo-input-button">
															Upload
														</button>
                                                    <button type="button" id="remove-logo" class="btn btn-danger disabled">
															Remove
														</button>
                                            </div>
                                              <div class="vertical-divider">or</div>
                                            <div class="col-xs-6 column-two">
                                                {{-- <h4>Logo Text</h4> --}}
                                                <div class="form-group">
                                                    <h6>Logo Text</h6>
                                                    
                                                    <input type="text" class="form-control" name="logo_text" onkeyup="countChar(this)"  id="exampleInputEmail1" maxlength="8" title="maximum 8 character" placeholder=" Text to Display as logo">
                                                    <i><small id="test"></small></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="slider-images">
                                        <div class="row">
                                            <h5 class="info-text"> Upload Your Slider Images</h5>
                                            <div class="col-sm-4">
                                                <div class="form-group" align="center">
<a href="#" class="slider1-input-button"><img src="{{asset('images/productplaceholder.png')}}" id="cropped-slider1" class="img-thumbnail " alt="" srcset=""></a>
                                                    
                                                    <input type="file" id="slider1-input" style="display: none;">
                                                    <input type="hidden" name="slider_one">
                                                    <br>
                                                    <br>


                                                    <button type="button" id="slider1-input-button" class="btn btn-primary slider1-input-button">
															Upload
														</button>
                                                    <button type="button" id="remove-slider1" class="btn btn-danger disabled">
															Remove
														</button>



                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group" align="center">

                                                        <a href="#" class="slider2-input-button"> <img src="{{asset('images/productplaceholder.png')}}" id="cropped-slider2" class="img-thumbnail" alt="" srcset=""></a>
                                                    <input type="file" id="slider2-input" style="display: none;">
                                                    <input type="hidden" name="slider_two">
                                                    <br>
                                                    <br>


                                                    <button type="button" id="slider2-input-button" class="btn btn-primary slider2-input-button">
															Upload
														</button>
                                                    <button type="button" id="remove-slider2" class="btn btn-danger disabled">
														Remove
														</button>



                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group" align="center">

                                                        <a href="#" class="slider3-input-button"> <img src="{{asset('images/productplaceholder.png')}}" id="cropped-slider3" class="img-thumbnail" alt="" srcset=""></a>
                                                    <input type="file" id="slider3-input" style="display: none;">
                                                    <input type="hidden" name="slider_three">
                                                    <br>
                                                    <br>


                                                    <button type="button" id="slider3-input-button" class="btn btn-primary slider3-input-button">
															Upload
														</button>
                                                    <button type="button" id="remove-slider3" class="btn btn-danger disabled">
														Remove
														</button>



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

        {{--
        <div class="footer">
            <div class="container text-center">
                Made by
                <a href="#">Lengendary IT</a>.

            </div>
        </div> --}}
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
                    <h4 class="modal-title">Locate Your Business</h4>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Location</label>
                                        {{-- <form> --}}
                                            <input type="text" class="form-control location_trigger" id="geocomplete" style="width: 500px;" value="" placeholder="Start Typing...">
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
<script type="text/javascript" src='http://maps.google.com/maps/api/js?key={{$maps_api_key}}&sensor=false&libraries=places'></script>
{{-- <script src="{{asset('initial_screen/js/locationpicker.jquery.min.js')}}"></script> --}}
<script src="{{asset('initial_screen/js/jquery.geocomplete.min.js')}}"></script>


<script>
    $(function () {
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
      var location_name=$('#geocomplete').val();
    
      $("#location_name").val(location_name);
    
});



		//layout colour seletor

		$(".colour").click(function () {
			$(".colour").find('i').remove();
			$(this).append('<i class="ti-check"></i>');
			var colour = $(this).data('colour');
			var layout = $(this).data('layout');
            $('#loader').removeClass('hidden');
            $('#template-buttons').addClass('hidden');
            if (colour=="navy") {
                $('#img-thumb').attr('src',"{{asset('template1/previews/navy/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/navy/1.png')}}");
                $('#img-link').attr('href',"{{asset('template1/previews/navy/1.png')}}");
                // $('#img-link').data('fancybox','navy-preview');
                $('#img-link').attr('data-fancybox','navy-preview');
            }else if(colour=="yellow") {
                $('#img-thumb-2').attr('src',"{{asset('template2/previews/yellow/1.png')}}");
                $('#img-link-2').attr('src',"{{asset('template2/previews/yellow/1.png')}}");
                $('#img-link-2').attr('data-fancybox','yellow-preview');
                $('#img-link-2').attr('href',"{{asset('template2/previews/yellow/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="black") {
                $('#img-thumb-2').attr('src',"{{asset('template2/previews/black/1.png')}}");
                $('#img-link-2').attr('src',"{{asset('template2/previews/black/1.png')}}");
                $('#img-link-2').attr('data-fancybox','black-preview');
                $('#img-link-2').attr('href',"{{asset('template2/previews/black/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="pink") {
                $('#img-thumb-2').attr('src',"{{asset('template2/previews/pink/1.png')}}");
                $('#img-link-2').attr('src',"{{asset('template2/previews/pink/1.png')}}");
                $('#img-link-2').attr('data-fancybox','pink-preview');
                $('#img-link-2').attr('href',"{{asset('template2/previews/pink/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="green") {
                $('#img-thumb').attr('src',"{{asset('template1/previews/green/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/green/1.png')}}");
                $('#img-link').attr('data-fancybox','green-preview');
                $('#img-link').attr('href',"{{asset('template1/previews/green/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="blue"){
                $('#img-thumb').attr('src',"{{asset('template1/previews/blue/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/blue/1.png')}}");
                $('#img-link').attr('data-fancybox','blue-preview');
                $('#img-link').attr('href',"{{asset('template1/previews/blue/1.png')}}");
            }else if(colour=="dark_green") {
                $('#img-thumb-3').attr('src',"{{asset('template3/previews/dark_green/1.png')}}");
                $('#img-link-3').attr('src',"{{asset('template3/previews/dark_green/1.png')}}");
                $('#img-link-3').attr('data-fancybox','dark_green-preview');
                $('#img-link-3').attr('href',"{{asset('template3/previews/dark_green/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="red") {
                $('#img-thumb-3').attr('src',"{{asset('template3/previews/red/1.png')}}");
                $('#img-link-3').attr('src',"{{asset('template3/previews/red/1.png')}}");
                $('#img-link-3').attr('data-fancybox','red-preview');
                $('#img-link-3').attr('href',"{{asset('template3/previews/red/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="orange") {
                $('#img-thumb-3').attr('src',"{{asset('template3/previews/orange/1.png')}}");
                $('#img-link-3').attr('src',"{{asset('template3/previews/orange/1.png')}}");
                $('#img-link-3').attr('data-fancybox','orange-preview');
                $('#img-link-3').attr('href',"{{asset('template3/previews/orange/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }
			$('input[name="layout"]').val(layout);
			$('input[name="colour"]').val(colour);
            $('#loader').addClass('hidden');
            $('#template-buttons').removeClass('hidden');

			// alert("the template "+layout+" is and the colour is "+colour)

		});

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

                    console.log(e.target.result)

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


		//slider image 1
		$('#remove-slider1').click(function () {
			
            $('#cropped-slider1').attr('src', "{{asset('images/productplaceholder.png')}}");
            $('input[name="slider_one"]').removeAttr('value');
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
				width: 1000,
				height: 450,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 1080,
				height: 500

			}
		});


		var slider2 = $('#slider2-demo').croppie({
			viewport: {
				width: 1000,
				height: 450,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 1080,
				height: 500

			}
		});

		var slider3 = $('#slider3-demo').croppie({
			viewport: {
				width: 1000,
				height: 450,
				type: 'square',
				enableOrientation: true,
				enableExif: true
			},
			boundary: {
				width: 1080,
				height: 500

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


        function countChar(val) {
            
        var len = val.value.length;
        if (len >= 9) {
          val.value = val.value.substring(0, 9);
        } else {
            console.log(val.value.length)
          $("#test").text(8-len+" Character Remainig");
        }
      };

      function countCharAbout(val) {

          console.log(val.value.length)
            
            var len = val.value.length;
            if (len >= 65536) {
              val.value = val.value.substring(0, 65536);
            } else {
                
              $("#test2").text(65535-len+" Character Remainig");
            }
          };
      </script>

</html>