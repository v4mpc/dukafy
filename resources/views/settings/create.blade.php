@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/file-uploaders/dropzone.min.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/images/cropper/cropper.min.css')}}"> {{--
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}


<script>
  tinymce.init({ selector:'textarea' });


  // Dropzone.autoDiscover = false;
// or disable for specific dropzone:
// Dropzone.options.myDropzone = false;

// $(function() {
//   // Now that the DOM is fully loaded, create the dropzone, and setup the
//   // event listeners
//   $("div#logoDropZone").dropzone({ 
//             url: "/manage/upload",
//             maxFilesize: 7,
//             });
// });

</script>
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/wizard.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/gallery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/file-uploaders/dropzone.min.css')}}">
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
              <li class="breadcrumb-item active">Layout Wizard
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">

          <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
            <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
            <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="demo">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <form action="{{route('settings.store')}}" method="POST" id="layoutForm" class="number-tab-steps wizard-circle" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <!-- Step 1 -->
                    <h6>Step 1</h6>

                    <fieldset class="form-group">
                      {{--
                      <p>Select Template</p>
                      <label class="btn">
                            
                            <input type="checkbox" name="chk5" id="item5" value="val1" class="hidden">
                            <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                          </label>
                      <label class="btn">
                            <input type="checkbox" name="chk6" id="item6" value="val2" class="hidden">
                            <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="check img-thumbnail">
                          </label>
                      <label class="btn">
                            <input type="checkbox" name="chk7" id="item7" value="val3" class="hidden" checked>
                            <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                          </label>
                      <label class="btn">
                            <input type="checkbox" name="chk8" id="item8" value="val4" class="hidden">
                          
                            <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                            
                          </label>
                      <label class="btn">
                              <input type="checkbox" name="chk8" id="item8" value="val4" class="hidden">
                            
                              <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                              
                            </label> --}} {{--
                      <tr>
                        <td align="center"><label class="btn">
                            
                                    <input type="checkbox" name="chk5" id="item5" value="val1" class="hidden">
                                    <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                                  </label></td>
                        <td align="center"><label class="btn">
                            
                                  <input type="checkbox" name="chk5" id="item5" value="val1" class="hidden">
                                  <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                                </label></td>
                        <td align="center"><label class="btn">
                            
                                  <input type="checkbox" name="chk5" id="item5" value="val1" class="hidden">
                                  <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                                </label></td>
                        <td align="center"><label class="btn">
                            
                                  <input type="checkbox" name="chk5" id="item5" value="val1" class="hidden">
                                  <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                                </label></td>
                        <td align="center"><label class="btn">
                            
                                  <input type="checkbox" name="chk5" id="item5" value="val1" class="hidden">
                                  <img src="{{asset('images/template.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                                </label></td>
                      </tr>
                      <tr>
                        <td align="center"><button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Preview</button></td>
                        <td align="center"><button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Preview</button></td>
                        <td align="center"><button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Preview</button></td>
                        <td align="center"><button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Preview</button></td>
                        <td align="center"><button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Preview</button></td>

                      </tr> --}}

                      <div class="table-responsive">
                        {{--
                        <table class="table">
                          <thead>
                            <tr>

                              <th>Layout</th>
                              <th>Colour Theme</th>
                              <th>Select</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>

                              <td>
                                <div class="card-body">
                                  <div class="icheck1">
                                    <fieldset>
                                      <img src="{{asset('template1/images/home-1.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
                                    </fieldset>
                                  </div>
                                </div>
                              </td>
                              <td>




                                <div class="card-body">
                                  <div class="icheck1">
                                    <fieldset>
                                      <input type="radio" name="colour" value="blue">
                                      <label for="input-2">
                                                    </label>
                                      <div class="badge badge-info round">
                                        <i class="la la-file-o font-medium-2"></i>
                                        <span>Blue</span>
                                      </div> <a href="{{route('template1.previews','blue')}}" data-toggle="tooltip" data-original-title="Preview"
                                        data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a>
                                    </fieldset>
                                  </div>
                                </div>

                                <div class="card-body">
                                  <div class="icheck1">
                                    <fieldset>
                                      <input type="radio" name="colour" value="green">
                                      <label for="input-2">
                                                        <div class="badge badge-primary round">
                                                            <i class="la la-file-o font-medium-2"></i>
                                                            <span>Navy</span>
                                                          </div>
                                                      <a href="{{route('template1.previews','navy')}}" data-toggle="tooltip" data-original-title="Preview" data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a></label>
                                    </fieldset>
                                  </div>
                                </div>

                                <div class="card-body">
                                  <div class="icheck1">
                                    <fieldset>
                                      <input type="radio" name="colour" value="navy">
                                      <label for="input-2">
                                                        <div class="badge badge-success round">
                                                        <i class="la la-file-o font-medium-2"></i>
                                                        <span>Green</span>
                                                      </div> <a href="{{route('template1.previews','green')}}" data-toggle="tooltip" data-original-title="Preview" data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a></label>
                                    </fieldset>
                                  </div>
                                </div>


                              </td>

                              <td>
                                <div class="card-body">
                                  <div class="icheck1">
                                    <fieldset>
                                      <input type="radio" name="layout" value="template1">
                                      <label for="input-2"></label>
                                    </fieldset>
                                  </div>
                                </div>



                              </td>
                            </tr>



                          </tbody>
                        </table> --}}

                        <table>
                          <tr>
                            <td align="center"><label class="btn">
                                  
                                          <input type="hidden" name="colour" id="colour" value="">
                                          <input type="hidden" name="layout" id="layout" value="" >
                                          <img src="{{asset('template1/images/home-1.jpg')}}" width="150" height="150" alt="..." class="img-thumbnail">
      
                                          
                                        </label></td>


                          </tr>
                          <tr>
                            <td align="center">
                              <button type="button" data-layout="template1" data-colour="blue" class="btn btn-info colour"></button>
                              <button type="button" data-layout="template1" data-colour="green" class="btn btn-success colour"></button>
                              <button type="button" data-layout="template1" data-colour="navy" class="btn btn-primary colour"></button>

                            </td>
                          </tr>
                          <tr>

                            {{--
                            <td align="center">
                              <button type="button" class="btn btn-outline-info">Preview</button>
                            </td> --}}

                          </tr>
                        </table>

                      </div>







                    </fieldset>

                    <!-- Step 2 -->
                    <h6>Step 2</h6>
                    <fieldset>
                      <h4 class="form-section"><i class="ft-layers"></i>Logo</h4>
                      <div class="row">

                        <div class="col-md-9">
                          <div class="img-container overflow-hidden">
                            <img class="main-demo-image img-fluid" src="{{asset('vendor/images/crop-pic.jpg')}}" alt="Picture">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <div class="docs-preview clearfix">
                              <div class="img-preview preview-lg img-fluid"></div>

                            </div>
                          </div>
                          <div class="docs-data">
                            <fieldset class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Width</span>
                                </div>
                                <input type="text" class="form-control main-demo-dataWidth" placeholder="width">
                                <div class="input-group-append">
                                  <span class="input-group-text">px</span>
                                </div>
                              </div>
                            </fieldset>
                            <fieldset class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Height</span>
                                </div>
                                <input type="text" class="form-control main-demo-dataHeight" placeholder="height">
                                <div class="input-group-append">
                                  <span class="input-group-text">px</span>
                                </div>
                              </div>
                            </fieldset>
                          </div>
                        </div>




                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="col-md-3 label-control">Home Slider(max 3 images) </label>
                            <div class="col-md-9">

                              <label id="projectinput8" class="file center-block">
                                      <input type="file" id="file" multiple name="slider_images[]">
                                      <span class="file-custom"></span>
                                    </label>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="col-md-3 label-control">Brand Images </label>
                            <div class="col-md-9">
                              <label id="projectinput8" class="file center-block">
                                      <input type="file" id="file" multiple name="brand_images[]">
                                      <span class="file-custom"></span>
                                    </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>


                    <h6>Step 3</h6>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-12">

                          <div class="form-group">
                            <label for="eventName1">About Us</label>
                            <textarea name="about" rows="20">Describe your business!</textarea>
                          </div>
                    </fieldset>
                    <!-- Step 4 -->
                    <h6>Step 4</h6>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-12">
                          {{-- <i>   <h5>Use "|" for multiple value</h5></i> --}}

                          <div class="form-group">
                            <label for="eventName1">Store Name</label>
                            <input type="text" class="form-control" name="store_name" id="eventName1" placeholder="Store Name">
                          </div>

                          <div class="form-group">
                            <label for="eventName1">Longitude</label>
                            <input type="text" class="form-control" name="longitude" id="eventName1" placeholder="Longitude">
                          </div>

                          <div class="form-group">
                            <label for="eventName1">Latitude</label>
                            <input type="text" class="form-control" name="latitude" id="eventName1" placeholder="Latitude">
                          </div>

                          <div class="form-group">
                            <label for="eventName1">Address #</label>
                            <input type="text" class="form-control" name="address" id="eventName1" placeholder="address">
                          </div>

                          {{--
                          <div class="form-group">
                            <label for="eventName1">Phone #</label>
                            <input type="text" class="form-control" name="phone" id="eventName1" placeholder="phone1|phone2">
                          </div> --}}

                          <div class="form-group">
                            <label for="eventName1">Mobile #</label>
                            <input type="text" class="form-control" name="mobile" id="eventName1" placeholder="hot line">
                          </div>

                          <div class="form-group">
                            <label for="eventName1">Email </label>
                            <input type="text" class="form-control" name="email" id="eventName1" placeholder="email">
                          </div>

                          <div class="form-group">
                            <label for="eventName1">Working Hours </label>
                            <input type="text" class="form-control" name="working_hours" id="eventName1">
                          </div>

                          <h4 class="form-section"><i class="ft-share"></i>Social Links</h4>

                          <div class="form-group">
                            <label for="timesheetinput1">Facebook</label>
                            <div class="position-relative has-icon-left">
                              <input type="text" id="timesheetinput1" class="form-control" name="facebook" placeholder="facebook link">
                              <div class="form-control-position">
                                <i class="ft-facebook"></i>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="timesheetinput1">Twitter</label>
                            <div class="position-relative has-icon-left">
                              <input type="text" id="timesheetinput1" class="form-control" placeholder="twitter link" name="twitter">
                              <div class="form-control-position">
                                <i class="ft-twitter"></i>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="timesheetinput1">Instagram</label>
                            <div class="position-relative has-icon-left">
                              <input type="text" id="timesheetinput1" class="form-control" placeholder="instagram link" name="instagram">
                              <div class="form-control-position">
                                <i class="ft-instagram"></i>
                              </div>
                            </div>
                          </div>


                          {{--
                          <div class="form-group">
                            <label for="timesheetinput1">Youtube</label>
                            <div class="position-relative has-icon-left">
                              <input type="text" id="timesheetinput1" class="form-control" placeholder="youtube link" name="employeename">
                              <div class="form-control-position">
                                <i class="ft-instagram"></i>
                              </div>
                            </div>
                          </div> --}}


                        </div>
                        <fieldset>
                          <div class="row">
                            <button type="button" id="preview" class="btn btn-outline-info btn-min-width mr-1 mb-1">Preview</button>

                          </div>
                        </fieldset>
                    </fieldset>
                    <!-- Step 4 -->

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
 
@section('page_vendor_js')

      <script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/gallery/masonry/masonry.pkgd.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/vendors/js/extensions/cropper.min.js')}}" type="text/javascript"></script>
@endsection
 
@section('page_level_js')

      <script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/js/scripts/forms/wizard-steps.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/js/scripts/gallery/photo-swipe/photoswipe-script.js')}}" type="text/javascript"></script>
      <script src="{{asset('vendor/js/scripts/extensions/image-cropper.min.js')}}" type="text/javascript"></script>



      <script>
        $(document).ready(function () {
     
          
     
   







        


        
          $(".colour").click(function () {
            $(".colour").find('i').remove();
            $(this).append('<i class="ft-check"></i>');
            var colour= $(this).data('colour');
            var layout= $(this).data('layout');
            $('input[name="layout"]').val(layout);
            $('input[name="colour"]').val(colour);
           
            // alert("the template "+layout+" is and the colour is "+colour)
            
          });
      //start
      $('input').iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    // increaseArea: '20%' // optional
  });//end 


$('#preview').on('click', function(e){
  e.preventDefault();
var myForm = document.getElementById('layoutForm');
        $.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
          type: "POST",
        
					url: '/manage/preview',
          data:new FormData(myForm),
          contentType:false,
          processData:false,
          cache:false,
					success: function (data) {
            // console.log(data);
            
            document.location.href="{{ route('preview.index') }}";
                e.preventDefault(); //
					}
        });
        // var template=$('input[name="template"]').val();
        // var colour=$('input[name="colour"]').val();
        // var address=$('input[name="address"]').val();
        // var mobile=$('input[name="mobile"]').val();
        // var phone=$('input[name="phone"]').val();
        // var email=$('input[name="email"]').val();
        // var workinig=$('input[name="workinig"]').val();
        
        
        
        
        
        


});


    }); //end document .ready
      </script>
@endsection