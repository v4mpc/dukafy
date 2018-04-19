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
                    <form action="#" class="number-tab-steps wizard-circle">
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

                            <table>
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

                              </tr>
                            </table>
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
                                      <input type="file" id="file">
                                      <span class="file-custom"></span>
                                    </label>
                                  </div>
                                </div>
                          </div>

                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="col-md-3 label-control">Home Slider </label>
                                  <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                      <input type="file" id="file">
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
                            <div class="form-group">
                              <label for="eventName1">Address #</label>
                              <input type="text" class="form-control" id="eventName1">
                            </div>

                            <div class="form-group">
                                <label for="eventName1">Phone #</label>
                                <input type="text" class="form-control" id="eventName1">
                              </div>

                              <div class="form-group">
                                  <label for="eventName1">Mobile #</label>
                                  <input type="text" class="form-control" id="eventName1">
                                </div>

                                <div class="form-group">
                                    <label for="eventName1">Email </label>
                                    <input type="text" class="form-control" id="eventName1">
                                  </div>

                                  <div class="form-group">
                                      <label for="eventName1">Working Hours</label>
                                      <input type="text" class="form-control" id="eventName1">
                                    </div>
                         
                           
                        </div>
                        <fieldset>
                          <div class="row">
                              <button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Preview</button>

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
  <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('vendor/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
  {{-- <script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
  
@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/wizard-steps.min.js')}}" type="text/javascript"></script>
  

  <script>

    $(document).ready(function () {
      var room = 1;
   function variation_fields() {

     alert('heloo');

room++;
// var objTo = document.getElementById('variation_fields');
// var divtest = document.createElement("div");
// divtest.setAttribute("class", "form-group removeclass" + room);
// var rdiv = 'removeclass' + room;
// divtest.innerHTML =
//     '<div class="form-group row">
//      \                       <div class="col-sm-3 nopadding">
//                            \     <div class="form-group">
//                             \      <input type="text" class="form-control" id="Degree" name="" value="" placeholder="Title">
//                              \   </div>
//                             \  </div>
//                             \  <div class="col-sm-3 nopadding">
//                             \    <div class="form-group">
//                             \      <div class="input-group">
//                              \       <input type="file" class="form-control" id="Degree" name="" value="" placeholder="Images"> 
//                              \     </div>
//                              \   </div>
//                             \  </div>
//                             \  <div class="col-sm-3 nopadding">
//                             \      <div class="form-group">
//                              \       <input type="text" class="form-control" id="Degree" name="" value="" placeholder="Description">
//                              \     </div>
//                              \   </div>
//                              \   <div class="col-sm-3 nopadding">
//                               \    <div class="form-group">
//                                \     <div class="input-group">
//                                \         <fieldset>
//                                 \            <div class="input-group">
//                                 \              <input type="text" class="form-control" placeholder="Price" aria-describedby="button-addon2">
//                                  \             <div class="input-group-append">
//                                   \              <button class="btn btn-danger" "onclick="remove_variation_fields(' +room +')" type="button">-</button>
//                                   \            </div>
//                                   \          </div>
//                                   \        </fieldset>
//                                   \  </div>
//                                 \  </div>
//                                \ </div>                          
//                          \ </div>';

// objTo.appendChild(divtest);
// }

// function remove_variation_fields(rid) {
// $('.removeclass' + rid).remove();
// }
  

    }
    });
  </script>

@endsection
