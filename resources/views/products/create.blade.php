@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/file-uploaders/dropzone.min.css')}}">



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
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/file-uploaders/dropzone.min.css')}}"> {{-- //template specific css --}}
<link rel="stylesheet" href="{{asset('template1/css/product.css')}}">
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
          {{-- <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
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
                  {{--
                  <div class="card-text">
                  </div> --}} {{--
                  <h4 class="form-section"><i class="ft-shopping-cart"></i>Product</h4> --}}
                  <div class="row">
                    <div class="col-md-8">
                      <form class="form form-horizontal" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-body">

                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput1">Name</label>
                            <div class="col-md-7">
                              <input type="text" id="name" class="form-control" value="{{old('name')}}" placeholder="Name" name="name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="price">Price</label>
                            <div class="col-md-7">
                              <fieldset>
                                <div class="input-group">
                                  <input type="number" name="price" id="price" class="form-control" value="{{old('price')}}" placeholder="Enter Price then Toggle Show Price"
                                    aria-describedby="radio-addon4">
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="radio-addon4">
                                                <input type="checkbox" id="switchery2" name="price_visibility" class="switchery js-price-visible" data-size="xs" checked/>
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
                                  <input type="text" id="discount" disabled name="discount" disabled class="form-control" value="{{old('price')}}" placeholder="Amount or Percentage eg 40000 or 80%"
                                    aria-describedby="radio-addon4">

                                </div>
                              </fieldset>



                            </div>
                          </div>



                          <div class="form-group row">
                            <label class="col-md-3 label-control" for="projectinput6">Category</label>
                            <div class="col-md-7">
                              <select id="category" class="form-control" name="category_id">
                                    <option value="none" selected="" disabled="">Select Category...</option>
                                    
                                    @foreach($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                   
                                  </select>
                            </div>
                            <div class="col-md-1"> <a data-toggle="tooltip" data-target="#inlineForm" data-original-title="Add Category" data-placement="top"
                                class="btn btn-xm btn-outline-success edit-item-btn" id="add_category"><i class="ft-plus"></i></a></div>
                          </div>

                          {{--
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

                          </div> --}}
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
                                          <input type="file" id="product-picture" required name="images[]" multiple>
                                          <span class="file-custom"></span>
                                        </label>
                            </div>
                          </div>


                          {{--
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
                                        <button type="button" class="btn btn-success" id="add_field"> <i class="ft-plus"></i></button>
                                      </div>
                                    </div>
                                  </fieldset>
                                </div>
                              </div>
                            </div>




                          </div>--}}

                        </div>





                        <div class="form-actions">
                        <a href="{{route('back')}}"  class="btn btn-warning">
                              <i class="ft-x"></i> Cancel
                            </a>
                          <button type="submit" class="btn btn-primary">
                              <i class="ft-save"></i> Save
                            </button>
                        </div>

                      </form>
                    </div>



                    <div class="col-md-4">
                      <!-- Product -->
                      <div class="product">
                        <article>
                          <img class="img-responsive" id="product_image" src="{{asset('images/productplaceholder.png')}}" alt="">
                          <span id="sale_tag"></span>
                          <!-- Content -->
                          <span class="tag" id="category_output"></span>

                          <div> <a href="#." class="tittle" id="name_output"></a></div>
                          <div class="price" id="new_price_output">
                            <span id="old_price_output"></span>
                          </div>
                          <a href="#." class="cart-btn">
                                                <i class="icon-basket-loaded"></i>
                                              </a>
                        </article>
                      </div>

                    </div>
                  </div>

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
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>
{{--
<script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
@endsection
 
@section('page_level_js')
<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
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