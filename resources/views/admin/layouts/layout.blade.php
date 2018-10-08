@include('admin.partials._header') @if(Auth::check())

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern"
    data-col="2-columns">
    @else

    <body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu-modern"
        data-col="1-column">
        @endif {{-- fixed-top --}} @if(Auth::check())
    @include('admin.partials._topbar') {{-- end fixed-top --}}
    @include('admin.partials._sidebar')
        @endif @yield('content') @if(Auth::check())
    @include('admin.partials._footer') @endif


        <!-- BEGIN VENDOR JS-->
        <script src="{{asset('vendor/vendors/js/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/js/scripts/extensions/sweet-alerts.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/toaster/toaster.min.js')}}"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        @yield('page_vendor_js')
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN MODERN JS-->
        <script src="{{asset('vendor/js/core/app-menu.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/js/core/app.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/js/scripts/customizer.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/js/scripts/extensions/toastr.min.js')}}" type="text/javascript"></script>
        {{-- <script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script> --}}



        <!-- END MODERN JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        @yield('page_level_js')
        <!-- END PAGE LEVEL JS-->

        <script>
            $(document).ready(function () {
   
   $('select[name="category_id"]').on('change', function () {
       var categoryId = $(this).val();
       if (categoryId) {
           $.ajax({
               url: '/manage/sub_cat/'+categoryId,
               type: "GET",
               dataType: "json",
               beforeSend: function () {
                   $('#loader1').css("visibility", "visible");
               },
   
               success: function (data) {
   
                   $('select[name="sub_category_id"]').empty();
   
                   $.each(data, function (key, value) {
   
                       $('select[name="sub_category_id"]').append(
                           '<option  value="' + key + '">' + value +
                           '</option>');
   
                   });
               },
               complete: function () {
                   $('#loader1').css("visibility", "hidden");
               }
           });
       } else {
           $('select[name="sub_category_id"]').empty();
       }
   

    });

 $('#notification').on('click', function () {
      
           $.ajax({
               url: '/manage/markOrderAsRead/',
               type: "GET",
               dataType: "json",
               success: function (data) {
                console.log('marked as read');
               }
             
           });
      
   

    });


    

//variation fields
var room = 1;

 $('#add_field').on('click', function () {

room++;
        var objTo = document.getElementById('variation_fields');
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        // divtest.innerHTML =
        //     '<div class="col-sm-6 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Degree" name="income_name[]" value="" placeholder="Income Type"></div></div><div class="col-sm-6 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="Degree" name="income_amount[]" value="" placeholder="Amount"><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_income_fields('+room +')"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
divtest.innerHTML='<div class="form-group row"><div class="col-sm-3 nopadding"> <div class="form-group"><input type="text" class="form-control" id="Degree" name="variation[]" value="" placeholder="Title"> </div> </div> <div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><input type="file" class="form-control" id="Degree" name="variation_images[]" value="" placeholder="Images"> </div> </div>  </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control" id="Degree" name="variation_value[]" value="" placeholder="Description"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <div class="input-group"> <fieldset> <div class="input-group"> <input type="text" class="form-control" name="variation_price[]" placeholder="Price" aria-describedby="button-addon2"> <div class="input-group-append"> <button type="button" class="btn btn-danger" onclick="remove_income_fields('+room +')" id="add_field" > <i class="ft-minus"></i></button> </div> </div> </fieldset> </div> </div> </div> </div>';
        
                                    
                                 
                                
                            

        objTo.appendChild(divtest);
    }
 );
        
    


                       

  

  

    //end variation field
   
   });


  
        </script>

@if(Session::has('success_settings'))
<script>
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
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
            @php
          $message='';

$message.='<li>Setting Saved!</li>';




// echo "toastr.error(sfsdfs)";




 echo 'toastr.success("'.$message.'");';















































@endphp

</script>


@endif


    </body>

    </html>