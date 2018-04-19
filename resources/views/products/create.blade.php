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
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/forms/checkboxes-radios.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/forms/switch.min.css')}}">

@endsection




@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Add New Product</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Products</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Add</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
            {{-- <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
            <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
              <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
              <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="content-body">
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
                    <div class="card-text">
                    </div>
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-shopping-cart"></i>Product</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">Name</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput1" class="form-control" placeholder="Name"
                            name="fname">
                          </div>
                        </div>
                    

                        {{-- <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput2">Price</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput2" class="form-control" placeholder="Price"
                            name="lname">
                          </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput2">Price</label>
                            <div class="col-md-9">
                              
                                  
                                      <span class="input-group-text" id="radio-addon3">
                                        <input type="checkbox" id="switchery" class="switchery" data-size="xs" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-xsmall switchery-default" style="background-color: rgb(55, 188, 155); border-color: rgb(55, 188, 155); box-shadow: rgb(55, 188, 155) 0px 0px 0px 9px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 12px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span>
                                      </span>
                                    
                                    <input type="text" class="form-control" placeholder="Input with Left switchery" aria-describedby="radio-addon3">
                                  
                            </div>
                          </div> --}}

                          <div class="form-group row">
                              <label class="col-md-3 label-control" for="projectinput2">Price</label>
                              <div class="col-md-9">
                                  <fieldset>
                                      <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter Price then Toggle Show Price" aria-describedby="radio-addon4">
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="radio-addon4">
                                            <input type="checkbox" id="switchery2" class="switchery" data-size="xs" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-xsmall switchery-default" style="background-color: rgb(55, 188, 155); border-color: rgb(55, 188, 155); box-shadow: rgb(55, 188, 155) 0px 0px 0px 9px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                                          </span>
                                        </div>
                                      </div>
                                    </fieldset>
                                    
                                        
                                    
                              </div>
                            </div>
                         
                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput6">Category</label>
                            <div class="col-md-9">
                              <select id="projectinput6" name="interested" class="form-control">
                                <option value="none" selected="" disabled="">Select Categoty...</option>
                                <option value="design">Men</option>
                                <option value="development">Electronic</option>
                                <option value="illustration">Cars</option>
                                <option value="branding">House</option>
                                <option value="video">Food</option>
                              </select>
                            </div>
                          </div>
                        
                          <div class="form-group row">
                              <label class="col-md-3 label-control" for="projectinput6">Sub-category</label>
                              <div class="col-md-9">
                                <select id="projectinput6" name="interested" class="form-control">
                                  <option value="none" selected="" disabled="">Select Sub-categoty...</option>
                                  <option value="design">Men</option>
                                  <option value="development">Electronic</option>
                                  <option value="illustration">Cars</option>
                                  <option value="branding">House</option>
                                  <option value="video">Food</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="userinput8">Description</label>
                                <div class="col-md-9">
                                  <textarea id="userinput8" rows="6" class="form-control" name="bio" placeholder="Describe your product..."></textarea>
                                </div>
                              </div>

                              <div class="form-group row">
                                  <label class="col-md-3 label-control">Product Image(s)</label>
                                  <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                      <input type="file" id="file">
                                      <span class="file-custom"></span>
                                    </label>
                                  </div>
                                </div>
                        <h4 class="form-section"><i class="ft-layers"></i>Product Variation</h4>
                        
                        <div id="variation_fields">
                          </div>

                        <div class="form-group row">
                            <div class="col-sm-3 nopadding">
                                <div class="form-group">
                                  <input type="text" class="form-control" id="Degree" name="" value="" placeholder="Title">
                                </div>
                              </div>
                              <div class="col-sm-3 nopadding">
                                <div class="form-group">
                                  <div class="input-group">
                                    <input type="file" class="form-control" id="Degree" name="" value="" placeholder="Images"> 
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-3 nopadding">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="Degree" name="" value="" placeholder="Description">
                                  </div>
                                </div>
                                <div class="col-sm-3 nopadding">
                                  <div class="form-group">
                                    <div class="input-group">
                                        <fieldset>
                                            <div class="input-group">
                                              <input type="text" class="form-control" placeholder="Price" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button type="button" class="btn btn-success" onclick="variation_fields()">+</button>
                                              </div>
                                            </div>
                                          </fieldset>
                                    </div>
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
         
         
        
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


@endsection



@section('page_vendor_js')

<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
  {{-- <script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
  
@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>

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
