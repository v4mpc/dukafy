@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">

<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>



@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
 {{-- //template specific css --}}
<link rel="stylesheet" href="{{asset('template1/css/product.css')}}">
<link rel="stylesheet" href="{{asset('initial_screen/Croppie/croppie.css')}}">


<style>

.dropzone {
    min-height: 72px;
    border: 2px dashed #28D094;
    /* border: 2px dashed red; */


    background: #F4F5FA;
    cursor: pointer;
}

.dropzone .dz-message {
    /* font-size: 0.rem; */
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    
    margin-top: -30px;
    color: black;
    text-align: center;
}


.visually-hidden {
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden;
  clip: rect(1px, 1px, 1px, 1px);
}

input.visually-hidden:focus + label {
  outline: thin dotted;
}




.dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
    cursor: pointer;
}

</style>
@endsection
 
@section('content')
<div id="logo-modal" class="modal" role="dialog">
    <div class="modal-dialog modal-md">


        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <h1>Crop Show Case Image</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="image-demo" class="img-container overflow-hidden">

                        </div>
                        <button type="button" id="crop-image" class="btn btn-info" id="button" style="
                        margin-top: -12%;
                    ">Done</button>
                      <button type="button" id="rotate-left"  class="btn btn-info"  style="
                      margin-top: -12%;
                      ">Rotate Left</button>

                      <button type="button" id="rotate-right"  class="btn btn-info"  style="
                      margin-top: -12%;
                      ">Rotate Right</button>

                    </div>


                </div>
            </div>

        </div>

    </div>
</div>
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
                {{-- <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div> --}}
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
                                <label class="col-md-3 label-control">Product Image(s)</label>
                                <div class="col-md-7">
                                    <input type="file" id="product-pictures" multiple accept="image/*" class="visually-hidden">
                                    
                                    <label for="product-pictures" id="file-container" class="dropzone dz-message col-md-12">

                                        {{-- <div class="dz-message">Click to select Image(s)</div> --}}
                                        <ul>
                                          <li><i id="image-title">Click to Select Image(s)</i></li>
                                          <li>Image(s): <b><i id="images">0</i></b></li>
                                          <li>Size: <b><i id="size">0 KB</i></b></li>
                                        </ul>
                                    </label>
                                </div>
                                <div class="col-md-1 remove-images" style="display:none;"> <a data-toggle="tooltip" data-target="#inlineForm" data-original-title="Remove all images" data-placement="top"
                                  class="btn btn-xm btn-outline-danger edit-item-btn" id="removeImages"><i class="ft-minus"></i></a></div>
                            
                              </div>

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
                              <select id="category" class="form-control" name="category_id" required>
                                    <option value selected disabled>Select Category...</option>
                                    
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
                              <textarea id="editor1" rows="6" class="form-control" name="description" placeholder="Describe your product...">{{old('description')}}</textarea>
                              <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                // instance, using default configuration.
                                CKEDITOR.replace('editor1',{
                                  removeButtons:'Subscript,Superscript,Image,Anchor,Table,SpecialChar,Source,RemoveFormat,About,Link,Unlink,HorizontalRule',
                                  wordcount:{

                                    showWordCount: false,

                                    // Whether or not you want to show the Char Count
                                    showCharCount: true,

                                    countSpacesAsChars: true,

                                    countHTML: true,

                                    // Maximum allowed Word Count
                                    maxWordCount: -1,

                                    // Maximum allowed Char Count
                                    maxCharCount: 65535

                                  }
                                });
                            </script>
                            </div>
                          </div>

                          

                        </div>





                        <div class="form-actions">
                        <a href="{{route('products.index')}}"  class="btn btn-warning">
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
                      <div class="row">
<h4 class="text-center">Show Case</h4>
                        <div class="col-sm-12">
                            <div class="product img-height">
                                <article>
                                  <img class="img-responsive img-middle img-src-0" id="product_image" height="250px" width="auto"  src="#." alt="">
                                  <span id="sale_tag"></span>
                                  <!-- Content -->
                                  <span class="tag" id="category_output"></span>
        
                                  <div> <a href="#." class="tittle" id="name_output"></a></div>
                                  <div class="price" id="new_price_output">
                                    <span id="old_price_output"></span>
                                  </div>
                                  <a href="#." class="cart-btn">
                                                        BUY
                                                      </a>
                                </article>
                              </div>
                        </div>
                      </div>

                      <div class="row" style="margin-top:50%;" >
            <div class="col-md-6 image-1" style="display:none;">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="logo-input-button"> <img src="http://ecommerce.local/images/item-img-1-1.jpg"
                                width="200" id="1" class="img-thumbnail img-src-1" alt="" srcset=""></a>
                    </div>

                </div>
                
                <div class="row" style="margin-top:5%;">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-success show-case" data-index="1" data-toggle="tooltip" data-original-title="Make show case for this product"
                            data-placement="top"><i class="ft-star"></i> </button>
                            <button type="button" class="btn btn-outline-danger remove-image" data-index="1" data-toggle="tooltip" data-original-title="Remove Image"
                            data-placement="top"><i class="ft-trash"></i></button>
                            
                          </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 image-2" style="display:none;">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="logo-input-button"> <img src="http://ecommerce.local/images/item-img-1-1.jpg"
                                width="200" id="2" class="img-thumbnail img-src-2" alt="" srcset=""></a>
                    </div>

                </div>
                <div class="row" style="margin-top:5%;">
                    {{-- <div class="col-md-6">
                        <a href="http://ecommerce.local/manage/products/5" data-toggle="tooltip" data-original-title="Make show case for this product"
                            data-placement="top" class="btn btn-outline-warning btn-sm edit-item-btn btn-block"><i class="ft-star"></i></a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://ecommerce.local/manage/products/5" data-toggle="tooltip" data-original-title="Remove Image"
                            data-placement="top" class="btn btn-outline-danger btn-sm edit-item-btn btn-block"><i class="ft-trash
                            "></i></a>
                    </div> --}}

                    <div class="col-md-12">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-success show-case" data-index="2" data-toggle="tooltip" data-original-title="Make show case for this product"
                            data-placement="top"><i class="ft-star"></i> </button>
                            <button type="button" class="btn btn-outline-danger remove-image" data-index="2" data-toggle="tooltip" data-original-title="Remove Image"
                            data-placement="top"><i class="ft-trash"></i></button>
                            
                          </div>
                    </div>
                </div>
            </div>
        </div>

<br>
        <div class="row"  >
            <div class="col-md-6 image-3" style="display:none;">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="logo-input-button"> <img src="http://ecommerce.local/images/item-img-1-1.jpg"
                                width="200" id="3" class="img-thumbnail img-src-3" alt="" srcset=""></a>
                    </div>

                </div>
                
                <div class="row" style="margin-top:5%;">
                    <div class="col-md-12">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-success show-case" data-index="3" data-toggle="tooltip" data-original-title="Make show case for this product"
                            data-placement="top"><i class="ft-star"></i> </button>
                            <button type="button" class="btn btn-outline-danger remove-image" data-index="3" data-toggle="tooltip" data-original-title="Remove Image"
                            data-placement="top"><i class="ft-trash"></i></button>
                            
                          </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 image-4" style="display:none;">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="logo-input-button"> <img src="http://ecommerce.local/images/item-img-1-1.jpg"
                                width="200" id="4" class="img-thumbnail img-src-4" alt="" srcset=""></a>
                    </div>

                </div>
                <div class="row" style="margin-top:5%;">
                    {{-- <div class="col-md-6">
                        <a href="http://ecommerce.local/manage/products/5" data-toggle="tooltip" data-original-title="Make show case for this product"
                            data-placement="top" class="btn btn-outline-warning btn-sm edit-item-btn btn-block"><i class="ft-star"></i></a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://ecommerce.local/manage/products/5" data-toggle="tooltip" data-original-title="Remove Image"
                            data-placement="top" class="btn btn-outline-danger btn-sm edit-item-btn btn-block"><i class="ft-trash
                            "></i></a>
                    </div> --}}
                    <div class="col-md-12">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-success show-case" data-index="4" data-toggle="tooltip" data-original-title="Make show case for this product"
                            data-placement="top"><i class="ft-star"></i> </button>
                            <button type="button" class="btn btn-outline-danger remove-image" data-index="4" data-toggle="tooltip" data-original-title="Remove Image"
                            data-placement="top"><i class="ft-trash"></i></button>
                            
                          </div>
                    </div>
                </div>
            </div>
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

{{--
<script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
@endsection
 
@section('page_level_js')
<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/exif-js/2.3.0/exif.min.js"></script>
<script src="{{asset('initial_screen/Croppie/croppie.min.js')}}"></script>




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




});


// });

</script>
<script>

    $(document).ready(function () {



        //lets declare the images object here
        var images = {
            image: [],
            size: 0,
            cropping: NaN //the size should be in kilobites
        }

           var basic = $('#image-demo').croppie({
            viewport: {
                width: 400,
                height: 400,
                type: 'square',
            },
            enableOrientation: true,
            enableExif: true,
            boundary: {
                width: 500,
                height: 500
            },
        })

        //#########################IMAGE LOGICS################



          $('#rotate-left').click(function() {
          console.log('left');
          basic.croppie('rotate',90);
        });
          $('#rotate-right').click( function() {
          console.log('right');
          basic.croppie('rotate',-90);
        });

        

       
        //FUNCTIONS

        function removeAllImages() {
          console.log('removed all the images');
          images.image=[];
          //reload images
          load_image();

        
        }



       

        function get_size(string) {

          return ((string.length ) / 1.37);
          
        }


             function toDataUrl(url, callback) {
            var xhr = new XMLHttpRequest();
            xhr.onload = function () {
                var reader = new FileReader();
                reader.onloadend = function () {
                    callback(reader.result);
                }
                reader.readAsDataURL(xhr.response);
            };
            xhr.open('GET', url);
            xhr.responseType = 'blob';
            xhr.send();
        }

        function handleFiles(files) {
          if(files.length<=5 && images.image.length+files.length<=5){
            var promises=[]
            for (let index = 0; index < files.length; index++) {
           promises.push(new Promise((resolve,reject)=>{
             var reader=new FileReader();
             reader.onload=(e)=>{
              resolve(e.target.result)
             }
             reader.readAsDataURL(files[index]);
           }))            
          }

           Promise.all(promises).then(values=>{

            //we should append to the existing array 
            //also if the length is greater or equal to one
            if (images.image.length>=1) {
              images.image.push(values);
              load_image();
            } else {
              images.image=values;
             croppie_bind(0);
              
            }
             
             

           }).catch(error=>{
             console.log(error)
           })

          }else{

            console.log('only five images');
            //we cant allow more than five images
                    toastr.options = {
                "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "30",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
            
            toastr.error('Maximum of 5 Images Required');




                  }

         
        }

        function croppie_bind(image_index) {
             console.log(images.image)
            basic.croppie('bind', {
                url: images.image[image_index],
            });

            images.cropping = image_index

            $('#logo-modal').modal('show');
        }

        function load_image() {

          for (let index = 0; index < 5; index++) {
            $('.image-' + index).css('display', 'none')
          }
           
           images.size=0

            //let check if we have images at all
            //if we have we will display the remove button

            if (images.image.length) {
      //hide the remove buttons we have no more images
              $('.remove-images').css({'display':'block'});
              images.image.forEach(element => {
              //ffirst load images
              $('.img-src-' + images.image.indexOf(element)).attr('src', element);
              //TODO: we will also have to update the input element ready for uploading
              // we will also upload the number of images and size accordingly
              images.size += Math.ceil(get_size(element) / 1024)
              //then show images
              $('.image-' + images.image.indexOf(element)).css({'display':'block'})
              $('#images').text(images.image.length);
              $('#size').text(images.size+' KB');
              });

              //first remove the old ones
              $('.images-field').remove();
              $('.product-pictures').value="";

              //then add the new ones
              images.image.forEach(element=>{
              $('<input>').attr({
              type: 'hidden',
              class: 'images-field',
              name: 'images[]',
              value:element
              }).appendTo('form');

              })

              //we can also display that the maximum images is reached
              if (images.image.length==5) {
                 //lets change the css for the dashed lines
                 $('.dropzone').css('border-color','red');
                 $('#image-title').text('Maximum image selection reached');
              //lets declare that maximum images is reached
              //lets make the file selecting process to be disabled

                
              }
             

              
            } else {

                //hide the remove buttons we have no more images
          $('.remove-images').css({'display':'none'});
          //remove the show case image
          $('.img-src-0').attr('src', '');
          //hide the other
          $('.img-thumbnail').css({'display':'none'});
          $('#images').text(images.image.length);
          $('#size').text(images.size+' KB');
          $('.dropzone').css('border-color','#28D094');
                $('#image-title').text('Click to Select Image(s)');
              
            }

            //else we will hide it
           

           

           

          

        }

        function swap_image(swapper) {
            var temp
            temp = images.image[swapper]
            images.image[swapper] = images.image[0]
            images.image[0] = temp

        }

        //START HERE
        $("#product-pictures").change(function () {
          
          if (images.image.length<=5) {
            handleFiles(this.files);
          }
           
        });
       

        //###############CROPPIEE#########################

     


        $('.show-case').click(function () {
          
            var image_index = $(this).data('index');
            croppie_bind(image_index)
        });

        $('.remove-image').click(function () {
          console.log('remove me')
            var image_index = $(this).data('index');
            if (image_index > -1) {
                images.image.splice(image_index, 1);
            }
            load_image()
        });

        $('#crop-image').click(function (params) {
          console.log('am here');
            basic.croppie('result', {
                type: 'canvas',
                size: 'viewport',

            }).then(function (response) {
                //save the image back to its location
                images.image[images.cropping] = response
                if (images.cropping != 0) {
                    //swap the values
                    swap_image(images.cropping)
                }


                //then we can load the images
                load_image()
                $('#logo-modal').modal('hide');
               
                console.log(images.cropping)
            })
        });
          //lets remove all the images;
          $('#removeImages').click(removeAllImages);




















        //################################SCRIPT END HERE##################################################################
    });



</script>
@endsection