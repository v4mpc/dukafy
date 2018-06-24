<!-- JavaScripts -->
<script src="{{asset('template1/js/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/vendors/js/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('template1/js/vendors/wow.min.js')}}"></script>
<script src="{{asset('template1/js/vendors/bootstrap.min.js')}}"></script>
<script src="{{asset('template1/js/vendors/own-menu.js')}}"></script>
<script src="{{asset('template1/js/vendors/jquery.sticky.js')}}"></script>
<script src="{{asset('template1/js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/toaster/toaster.min.js')}}"></script>


<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{asset('template1/rs-plugin/js/jquery.tp.t.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template1/rs-plugin/js/jquery.tp.min.js')}}"></script>
<script src="{{asset('template1/js/main.js')}}"></script>
<script src="{{asset('template1/js/vendors/jquery.nouislider.min.js')}}"></script>
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key={{$maps_api_key}}&callback=initMap"></script>
<script src="{{asset('template1/js/vendors/map.js')}}"></script>
<script>
  jQuery(document).ready(function() {

    
 $('#filter-price').click(function(params) {
   var min_price=$('#price-min').text();
   var max_price=$('#price-max').text();
   $('input[name="max_price"]').val(max_price);
	$('input[name="min_price"]').val(min_price);
  $('#filter-form').submit();


  // var formData = $('#category-filter').serialize();
  // console.log('Posting the following: ', formData);

  //  $.ajaxSetup({
	// 			headers: {
	// 				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	// 			}
  //     });

  //     $.ajax({
	// 			type: "GET",
	// 			url: "/filter_product",
	// 			dataType: "JSON",
	// 			data: formData,
	// 			success: function (data) {}
  //         console.log(data);

  //     });
 });


    



    $('.cart-btn').click(function() {

      // alert("data");

      $(this).empty().append('<i class="fa fa-spinner fa-spin"></i>');
      var id=$(this).data('id');
      var product_id='product'+id;
    //  console.log(id);

    

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
  $('#delivery-button').remove();
  
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

         
          
          //  Price Filter ( noUiSlider Plugin)
            $("#price-range").noUiSlider({
            
            range: {
              'min': [ {{$start_min_price}} ],
              'max': [ {{$start_max_price}} ]
            },
            start: [{{$min_price}}, {{$max_price}}],
                connect:true,
                serialization:{
                    lower: [
                $.Link({
                  target: $("#price-min")
                })
              ],
              upper: [
                $.Link({
                  target: $("#price-max")
                })
              ],
              format: {
              // Set formatting
                decimals:0,
                prefix: ''
              }
                }
          })
        })

</script>


@if($errors->any())
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
foreach($errors->all() as $error){
$message.='<li>'.$error.'</li>';


}

// echo "toastr.error(sfsdfs)";




 echo 'toastr.error("'.$message.'");';















































@endphp

</script>


@endif {{--
<script>
  function initMap() {
      var uluru = {lat: -25.363, lng: 131.044};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
      });
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYm_K4n3phi3UVgSM-CANgdZ7iWMLtgIY&callback=initMap">

</script> --}}

</body>

</html>