<!-- JavaScripts placed at the end of the document so the pages load faster -->
{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script> --}}
<script src="{{asset('template3/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('vendor/vendors/js/fancybox/jquery.fancybox.min.js')}}"></script>
	
<script src="{{asset('template3/assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('template3/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('template3/assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('template3/assets/js/echo.min.js')}}"></script>
<script src="{{asset('template3/assets/js/jquery.easing-1.3.min.js')}}"></script>
<script src="{{asset('template3/assets/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('template3/assets/js/jquery.rateit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template3/assets/js/lightbox.min.js')}}"></script>
<script src="{{asset('template3/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('template3/assets/js/wow.min.js')}}"></script>
<script src="{{asset('template3/assets/js/scripts.js')}}"></script>
<script src="{{asset('vendor/toaster/toaster.min.js')}}"></script>
<script src="{{asset('vendor/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/extensions/sweet-alerts.min.js')}}" type="text/javascript"></script>


<!-- For demo purposes – can be removed on production -->

{{-- <script src="switchstylesheet/switchstylesheet.js"></script> --}}

<script>

(function($) {

    $(document).ready(function(){ 

// Price Slider
if ($('.price-slider').length > 0) {
   var myslider=$('.price-slider').slider({
        min: {{$start_min_price}},
        max: {{$start_max_price}},
        step: 10,
        value: [{{$min_price}}, {{$max_price}}],
        handle: "square"

    });




}






        
       


         $('.add_to_cart_button').click(function() {

// alert("data");
console.log(id);
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

    $('.items-price').empty().text(data.sub_total);
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






    });


 })(jQuery);   

    $(window).bind("load", function() {
       $('.show-theme-options').delay(2000).trigger('click');
    });
</script>
