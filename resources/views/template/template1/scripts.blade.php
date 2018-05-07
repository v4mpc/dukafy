<!-- JavaScripts --> 
<script src="{{asset('template1/js/vendors/jquery/jquery.min.js')}}"></script> 
<script src="{{asset('template1/js/vendors/wow.min.js')}}"></script> 
<script src="{{asset('template1/js/vendors/bootstrap.min.js')}}"></script> 
<script src="{{asset('template1/js/vendors/own-menu.js')}}"></script> 
<script src="{{asset('template1/js/vendors/jquery.sticky.js')}}"></script> 
<script src="{{asset('template1/js/vendors/owl.carousel.min.js')}}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{asset('template1/rs-plugin/js/jquery.tp.t.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('template1/rs-plugin/js/jquery.tp.min.js')}}"></script> 
<script src="{{asset('template1/js/main.js')}}"></script>
<script src="{{asset('template1/js/vendors/jquery.nouislider.min.js')}}"></script> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp'"></script> 
<script src="{{asset('template1/js/vendors/map.js')}}"></script>
<script>
        jQuery(document).ready(function($) {

         
          
          //  Price Filter ( noUiSlider Plugin)
            $("#price-range").noUiSlider({
            range: {
              'min': [ 0 ],
              'max': [ 1000 ]
            },
            start: [40, 940],
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
                decimals: 2,
                prefix: ''
              }
                }
          })
        })
        
        </script>
        
</body>
</html>