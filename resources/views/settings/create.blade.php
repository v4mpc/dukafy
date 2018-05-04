@extends('layouts.layout')

@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">


  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/switchery.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
 

@endsection



@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/wizard.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/gallery.min.css')}}">

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
                    <form action="#" id="layoutForm" class="number-tab-steps wizard-circle" enctype="multipart/form-data">
                      <!-- Step 1 -->
                      <h6>Step 1</h6>
                    
                      <fieldset class="form-group">
                          {{-- <p>Select Template</p>
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
                              
                            </label> --}}

                            
                              {{-- <tr>
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



                                          {{-- <div class="card-body">
                                              <div class="icheck1">
                                                <fieldset>
                                                  <input type="radio" name="colour" value="green">
                                                  <label for="input-2">
                                                      <div class="badge badge-danger round">
                                                          <i class="la la-file-o font-medium-2"></i>
                                                          <span>Red</span>
                                                        </div>
                                                      <a href="{{route('template1.previews','red')}}" data-toggle="tooltip" data-original-title="Preview" data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a></label>
                                                </fieldset>
                                              </div>
                                            </div> --}}

                                     

                                        <div class="card-body">
                                              <div class="icheck1">
                                                <fieldset>
                                                  <input type="radio" name="colour" value="blue">
                                                  <label for="input-2">
                                                    </label>
                                                      <div class="badge badge-info round">
                                                          <i class="la la-file-o font-medium-2"></i>
                                                          <span>Blue</span>
                                                        </div>   <a href="{{route('template1.previews','blue')}}" data-toggle="tooltip" data-original-title="Preview" data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a>
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
                                              <input type="radio" name="template" value="template1">
                                              <label for="input-2"></label>
                                            </fieldset>
                                          </div>
                                        </div>



                                      </td>
            </tr>

     
                                         
                                  </tbody>
                                </table>
                              </div>

                        
                       
                       
                    
                      
                            
                        </fieldset>
     
                      <!-- Step 2 -->
                      <h6>Step 2</h6>
                      <fieldset>
                        <div class="row">
                         
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="col-md-3 label-control">Company Logo</label>
                                  <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                      <input type="file" id="file" name="logo">
                                      <span class="file-custom"></span>
                                    </label>
                                  </div>
                                </div>
                          </div>

                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="col-md-3 label-control">Home Slider(max 3 images) </label>
                                  <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block" >
                                      <input type="file" id="file" multiple name="images[]">
                                      <span class="file-custom"></span>
                                    </label>
                                  </div>
                                </div>
                          </div>
                        </div>
                      </fieldset>
                      <!-- Step 3 -->
                      <h6>Step 3</h6>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-12">
                         <i>   <h5>Use "|" for multiple value</h5></i>
                            <div class="form-group">
                              <label for="eventName1">Address #</label>
                              <input type="text" class="form-control" name="address" id="eventName1" placeholder="address1|address2">
                            </div>

                            <div class="form-group">
                                <label for="eventName1">Phone #</label>
                                <input type="text" class="form-control" name="phone" id="eventName1" placeholder="phone1|phone2">
                              </div>

                              <div class="form-group">
                                  <label for="eventName1">Mobile #</label>
                                  <input type="text" class="form-control" name="mobile" id="eventName1" placeholder="mobile1|mobile2">
                                </div>

                                <div class="form-group">
                                    <label for="eventName1">Email </label>
                                    <input type="text" class="form-control" name="email" id="eventName1" placeholder="email1|email2">
                                  </div>

                                  <div class="form-group">
                                      <label for="eventName1">Working Hours </label>
                                      <input type="text" class="form-control" name="working_hours" id="eventName1" placeholder="start|close">
                                    </div>
                         
                           
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
  {{-- <script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}

  <script src="{{asset('vendor/vendors/js/gallery/masonry/masonry.pkgd.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}" type="text/javascript"></script>
  
@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/wizard-steps.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/gallery/photo-swipe/photoswipe-script.js')}}" type="text/javascript"></script>

  <script>

    $(document).ready(function () {
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
            
            document.location.href="{!! route('preview.show','1'); !!}";
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
