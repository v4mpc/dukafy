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
                    <div class="card-text">
                    </div>
                  <form class="form form-horizontal" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">


                      {{csrf_field()}}
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-shopping-cart"></i>Product</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">Name</label>
                          <div class="col-md-7">
                          <input type="text" id="projectinput1" class="form-control" value="{{old('name')}}" placeholder="Name" name="name">
                          </div>
                        </div>
                    

                          <div class="form-group row">
                              <label class="col-md-3 label-control" for="projectinput2">Price</label>
                              <div class="col-md-7">
                                  <fieldset>
                                      <div class="input-group">
                                      <input type="text" name="price" class="form-control" value="{{old('price')}}" placeholder="Enter Price then Toggle Show Price" aria-describedby="radio-addon4">
                                        <div class="input-group-append">
                                          <span class="input-group-text" id="radio-addon4">
                                            <input type="checkbox" id="switchery2" name="price_visibility" class="switchery" data-size="xs" checked/>
                                          </span>
                                        </div>
                                      </div>
                                    </fieldset>
                                    
                                        
                                    
                              </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput2">Discount</label>
                                <div class="col-md-7">
                                    <fieldset>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="radio-addon4">
                                                  <input type="checkbox" id="switchery3" name="price_visibility" class="switchery js-check-change" data-size="xs"/>
                                                </span>
                                              </div>
                                        <input type="text" id="discount" disabled name="discount" disabled class="form-control" value="{{old('price')}}" placeholder="Amount or Percentage eg 40000 or 80%" aria-describedby="radio-addon4">
                                          
                                        </div>
                                      </fieldset>
                                      
                                          
                                      
                                </div>
                              </div>

                          
                         
                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput6">Category</label>
                            <div class="col-md-7">
                              <select id="projectinput6" name="category_id" class="form-control" name="category_id">
                                <option value="none" selected="" disabled="">Select Categoty...</option>
                                @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                               
                              </select>
                            </div>
                          </div>
                        
                          <div class="form-group row">
                              <label class="col-md-3 label-control" for="projectinput6">Sub-category</label>
                              <div class="col-md-7">
                                <select id="projectinput6" name="sub_category_id" class="form-control" name="sub_category_id">
                                  <option value="none" selected="" disabled="">Select Sub-categoty...</option>
                                  
                                </select>
                              </div>
                              <div class="col-md-2">
                                <span id="loader1">
                                  <i class="fa fa-spinner fa-2x fa-spin"></i>
                                </span>
                              </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="userinput8">Description</label>
                                <div class="col-md-7">
                                <textarea id="userinput8" rows="6" class="form-control" name="description" placeholder="Describe your product...">{{old('description')}}</textarea>
                                </div>
                              </div>

                              <div class="form-group row">
                                  <label class="col-md-3 label-control">Product Image(s)</label>
                                  <div class="col-md-7">
                                    <label id="projectinput8" class="file center-block">
                                      <input type="file" id="file" name="images[]" multiple>
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
                                  <input type="text" class="form-control" id="Degree" name="variation[]" value="" placeholder="Title">
                                </div>
                              </div>
                              <div class="col-sm-3 nopadding">
                                <div class="form-group">
                                  <div class="input-group">
                                    <input type="file" class="form-control" id="Degree" name="variation_images[]" value="" placeholder="Images"> 
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-3 nopadding">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="Degree" name="variation_value[]" value="" placeholder="Description">
                                  </div>
                                </div>
                                <div class="col-sm-3 nopadding">
                                  <div class="form-group">
                                    <div class="input-group">
                                        <fieldset>
                                            <div class="input-group">
                                              <input type="text" class="form-control" name="variation_price[]" placeholder="Price" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button type="button" class="btn btn-success" id="add_field" > <i class="ft-plus"></i></button>
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
  function remove_income_fields(rid) {
        $('.removeclass' + rid).remove();
    }

$(document).ready(function () {
  
  // $("#switchery3").click(function() {
    var changeCheckbox = document.querySelector('.js-check-change');
  // , changeField = document.querySelector('.js-check-change-field');

changeCheckbox.onchange = function() {
  if (changeCheckbox.checked) {
    $("#discount").prop('disabled', false);
  }else{
    $("#discount").prop('disabled', true);
  }
};

});


// });
   
  </script>

@endsection
