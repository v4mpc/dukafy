@if(Request::is('check_out/*'))
<script src="{{asset('template1/js/vendors/jquery/jquery.min.js')}}"></script>
@else
<script type="text/javascript" src="{{asset('template2/assets/js/jquery.min.js')}}"></script>
@endif



<script src="{{asset('vendor/vendors/js/fancybox/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/echo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template2/assets/js/electro.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{$maps_api_key}}&callback=initMap"></script>
<script src="{{asset('vendor/toaster/toaster.min.js')}}"></script>
<script src="{{asset('template1/js/vendors/map.js')}}"></script>
<script src="{{asset('vendor/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/extensions/sweet-alerts.min.js')}}" type="text/javascript"></script>


<!-- For demo purposes – can be removed on production -->

<script src="{{asset('template2/switchstylesheet/switchstylesheet.js')}}"></script>

   <script>
   (function($) {



       $(document).ready(function(){




    $('.remove').click(function() {


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

toastr.info('Removing product from cart...');

// var id=$(this).data('id');
var item_id=$(this).data('id');

//  console.log(id);



$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$.ajax({
type: "DELETE",
url: "/remove_from_cart/"+item_id,
dataType: "JSON",

success: function (data) {
$('.item'+item_id).remove();
if (data.cart_count) {
  
} else {

$('.delivery-button').remove();

}

    $('.items-price').empty().text(data.sub_total);
$('.itm-cont').empty().text(data.cart_count);



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

toastr.success('Product removed from cart!');





}
});


// console.log(id,name,price,qty)


});



           $('.add_to_cart_button').click(function() {


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
    
    toastr.info('Adding product to cart...');

// alert("data");

// $(this).empty().append('<i class="fa fa-spinner fa-spin"></i>');
var id=$(this).data('id');
var product_id='product'+id;
// alert(id);



$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
});


$.ajax({
          type: "POST",
          url: "/add_to_cart",
          dataType: "JSON",
          data: { id:id},
          success: function (data) {
    $('#'+product_id).empty().append('<i class="icon-basket-loaded"></i>');
    
    //  var items_count={{Cart::count()}}+1;

    // var items_price='{{Cart::subtotal()}}';

    // var item_price=items_count+" item(s) - "+items_price;

    $('.items-price').empty().text(data.sub_total+' TZS');
    $('.itm-cont').empty().text(data.cart_count);
    $('.cart-glance-content').empty().append(data.cart_content);



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
    
    toastr.success('Product added to cart!');
    

          
          }
      });


// console.log(id,name,price,qty)


});






           $(".changecolor").switchstylesheet( { seperator:"color"} );
           $('.show-theme-options').click(function(){
               $(this).parent().toggleClass('open');
               return false;
           });

           $('#home-pages').on( 'change', function() {
               $.ajax({
                   url : $('#home-pages option:selected').val(),
                   success:function(res) {
                       location.href = $('#home-pages option:selected').val();
                   }
               });
           });

            $('#demo-pages').on( 'change', function() {
                $.ajax({
                    url : $('#demo-pages option:selected').val(),
                    success:function(res) {
                        location.href = $('#demo-pages option:selected').val();
                    }
                });
            });

            $('#header-style').on( 'change', function() {
                $.ajax({
                    url : $('#header-style option:selected').val(),
                    success:function(res) {
                        location.href = $('#header-style option:selected').val();
                    }
                });
            });

            $('#shop-style').on( 'change', function() {
                $.ajax({
                    url : $('#shop-style option:selected').val(),
                    success:function(res) {
                        location.href = $('#shop-style option:selected').val();
                    }
                });
            });

            $('#product-category-col').on( 'change', function() {
                $.ajax({
                    url : $('#product-category-col option:selected').val(),
                    success:function(res) {
                        location.href = $('#product-category-col option:selected').val();
                    }
                });
            });

            $('#single-products').on( 'change', function() {
                $.ajax({
                    url : $('#single-products option:selected').val(),
                    success:function(res) {
                        location.href = $('#single-products option:selected').val();
                    }
                });
            });

            $('.style-toggle').on( 'click', function() {
                $(this).parent('.config').toggleClass( 'open' );
            });
       });
})(jQuery);


</script>


<script>




</script>
<!-- For demo purposes – can be removed on production : End -->
