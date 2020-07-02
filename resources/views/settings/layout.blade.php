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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/> <!-- 'nano' theme -->


<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/wizard.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.4-build.3588/angular.min.js"></script>


   


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
              <li class="breadcrumb-item active">Layout
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">

          {{-- <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
            <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
            <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="content-body">
        @include('partials._messages')
      <section id="demo">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements">
                  {{-- <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul> --}}
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                <form action="{{route('settings.update',$settings->id)}}" ng-app="myApp" ng-controller="myCtrl" method="POST" >
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                    <h4 class="info-text" align="center" >Select Template and Colour. </h4>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group" align="center">
                        
                                
                                <div id="loader" class="loader hidden"></div>

                                <div id="template-buttons"><a id="img-link" href="{{asset('template1/previews/blue/1.png')}}" data-fancybox="blue-preview"
                                        data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb" src="{{asset('template1/previews/blue/1.png')}}" alt="..." class="img-thumbnail"></a>
                                    <hr>
                                        
                                         

                                          <input type="radio" ng-click="changeTemplate('template1')" ng-checked="selectedTemplate=='template1'" name="layout">
                                    {{-- <i>under construction</i> --}}
                                          <div class="color-picker-1" ></div>


                                
                                  
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4">
                                <div class="form-group" align="center">
                            
                                    <div id="loader" class="loader hidden"></div>

                                    <div id="template-buttons"><a id="img-link-2" href="{{asset('template2/previews/yellow/1.png')}}" data-fancybox="yellow-preview"
                                            data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb-2" src="{{asset('template2/previews/yellow/1.png')}}" alt="..." class="img-thumbnail"></a>
                                            <hr>
                                           
                                        
                                          <input type="radio" ng-click="changeTemplate('template2')" ng-checked="selectedTemplate=='template2'" name="layout">

                                            <div class="color-picker-2"></div>
                                           
                                        </div>
                                    </div>


                                </div>
                            



                        <div class="col-sm-4">
                                <div class="form-group" align="center">
                            
                                    <div id="loader" class="loader hidden"></div>

                                    <div id="template-buttons"><a id="img-link-3" href="{{asset('template3/previews/dark_green/1.png')}}" data-fancybox="dark_green-preview"
                                            data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb-3" src="{{asset('template3/previews/dark_green/1.png')}}" alt="..." class="img-thumbnail"></a>
                                        <hr>

                                        <input type="radio" ng-click="changeTemplate('template3')" ng-checked="selectedTemplate=='template3'" name="layout">

                                        <div class="color-picker-3"></div>


      
                                        </div>
                                    </div>


                                </div>
                            </div>
                    {{-- </div> --}}


                    

                    {{-- navy previews --}}

                    <div style="display: none;">


                        <a href="{{asset('template1/previews/navy/2.png')}}" data-fancybox="navy-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/navy/2.png')}}"></a>

                        <a href="{{asset('template1/previews/navy/3.png')}}" data-fancybox="navy-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/navy/3.png')}}"></a>

                        <a href="{{asset('template1/previews/navy/4.png')}}" data-fancybox="navy-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/navy/4.png')}}"></a>


                    </div>

                    {{-- green previews --}}
                    <div style="display: none;">


                        <a href="{{asset('template1/previews/green/2.png')}}" data-fancybox="green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/green/2.png')}}"></a>

                        <a href="{{asset('template1/previews/green/3.png')}}" data-fancybox="green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/green/3.png')}}"></a>

                        <a href="{{asset('template1/previews/green/4.png')}}" data-fancybox="green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/green/4.png')}}"></a>


                    </div>


                    {{-- blue previews --}}

                    <div style="display: none;">


                        <a href="{{asset('template1/previews/blue/2.png')}}" data-fancybox="blue-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/blue/2.png')}}"></a>

                        <a href="{{asset('template1/previews/blue/3.png')}}" data-fancybox="blue-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/blue/3.png')}}"></a>

                        <a href="{{asset('template1/previews/blue/4.png')}}" data-fancybox="blue-preview" data-width="1366" data-height="768" data-thumb="{{asset('template1/previews/blue/4.png')}}"></a>


                    </div>
                    {{-- template 2 starts here --}}
                    {{-- yellow --}}
                    <div style="display: none;">


                            <a href="{{asset('template2/previews/yellow/2.png')}}" data-fancybox="yellow-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/yellow/2.png')}}"></a>

                            <a href="{{asset('template2/previews/yellow/3.png')}}" data-fancybox="yellow-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/yellow/3.png')}}"></a>

                            <a href="{{asset('template2/previews/yellow/4.png')}}" data-fancybox="yellow-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/yellow/4.png')}}"></a>


                        </div>



                         {{-- black--}}
                    <div style="display: none;">


                            <a href="{{asset('template2/previews/black/2.png')}}" data-fancybox="black-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/black/2.png')}}"></a>

                            <a href="{{asset('template2/previews/black/3.png')}}" data-fancybox="black-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/black/3.png')}}"></a>

                            <a href="{{asset('template2/previews/black/4.png')}}" data-fancybox="black-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/black/4.png')}}"></a>


                        </div>


                            {{-- pink--}}
                    <div style="display: none;">


                            <a href="{{asset('template2/previews/pink/2.png')}}" data-fancybox="pink-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/pink/2.png')}}"></a>

                            <a href="{{asset('template2/previews/pink/3.png')}}" data-fancybox="pink-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/pink/3.png')}}"></a>

                            <a href="{{asset('template2/previews/pink/4.png')}}" data-fancybox="pink-preview" data-width="1366" data-height="768" data-thumb="{{asset('template2/previews/pink/4.png')}}"></a>


                        </div>





                         {{-- template 3 starts here --}}
                    {{-- dark_green --}}
                    <div style="display: none;">


                        <a href="{{asset('template3/previews/dark_green/2.png')}}" data-fancybox="dark_green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/dark_green/2.png')}}"></a>

                        <a href="{{asset('template3/previews/dark_green/3.png')}}" data-fancybox="dark_green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/dark_green/3.png')}}"></a>

                        <a href="{{asset('template3/previews/dark_green/4.png')}}" data-fancybox="dark_green-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/dark_green/4.png')}}"></a>


                    </div>



                     {{-- red--}}
                <div style="display: none;">


                        <a href="{{asset('template3/previews/red/2.png')}}" data-fancybox="red-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/red/2.png')}}"></a>

                        <a href="{{asset('template3/previews/red/3.png')}}" data-fancybox="red-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/red/3.png')}}"></a>

                        <a href="{{asset('template3/previews/red/4.png')}}" data-fancybox="red-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/red/4.png')}}"></a>


                    </div>


                        {{-- orange --}}
                <div style="display: none;">


                        <a href="{{asset('template3/previews/orange/2.png')}}" data-fancybox="orange-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/orange/2.png')}}"></a>

                        <a href="{{asset('template3/previews/orange/3.png')}}" data-fancybox="orange-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/orange/3.png')}}"></a>

                        <a href="{{asset('template3/previews/orange/4.png')}}" data-fancybox="orange-preview" data-width="1366" data-height="768" data-thumb="{{asset('template3/previews/orange/4.png')}}"></a>


                    </div>



                    <div class="form-actions">
                    
                      <button type="button" ng-click="submitForm()" class="btn btn-success">
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

    </div>
  </div>
</div>
@endsection


















<!-- jQuery -->

















@section('page_vendor_js')



<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>

<script src="{{asset('vendor/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
{{--
<script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
@endsection
 
@section('page_level_js') 
<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/forms/wizard-steps.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/fancybox/jquery.fancybox.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>


<script>
  $(".colour").click(function () {
			$(".colour").find('i').remove();
			$(this).append('<i class="ft-check"></i>');
			var colour = $(this).data('colour');
			var layout = $(this).data('layout');
            $('#loader').removeClass('hidden');
            $('#template-buttons').addClass('hidden');
            if (colour=="navy") {
                $('#img-thumb').attr('src',"{{asset('template1/previews/navy/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/navy/1.png')}}");
                $('#img-link').attr('href',"{{asset('template1/previews/navy/1.png')}}");
                // $('#img-link').data('fancybox','navy-preview');
                $('#img-link').attr('data-fancybox','navy-preview');
            }else if(colour=="yellow") {
                $('#img-thumb-2').attr('src',"{{asset('template2/previews/yellow/1.png')}}");
                $('#img-link-2').attr('src',"{{asset('template2/previews/yellow/1.png')}}");
                $('#img-link-2').attr('data-fancybox','yellow-preview');
                $('#img-link-2').attr('href',"{{asset('template2/previews/yellow/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="black") {
                $('#img-thumb-2').attr('src',"{{asset('template2/previews/black/1.png')}}");
                $('#img-link-2').attr('src',"{{asset('template2/previews/black/1.png')}}");
                $('#img-link-2').attr('data-fancybox','black-preview');
                $('#img-link-2').attr('href',"{{asset('template2/previews/black/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="pink") {
                $('#img-thumb-2').attr('src',"{{asset('template2/previews/pink/1.png')}}");
                $('#img-link-2').attr('src',"{{asset('template2/previews/pink/1.png')}}");
                $('#img-link-2').attr('data-fancybox','pink-preview');
                $('#img-link-2').attr('href',"{{asset('template2/previews/pink/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="green") {
                $('#img-thumb').attr('src',"{{asset('template1/previews/green/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/green/1.png')}}");
                $('#img-link').attr('data-fancybox','green-preview');
                $('#img-link').attr('href',"{{asset('template1/previews/green/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="blue"){
                $('#img-thumb').attr('src',"{{asset('template1/previews/blue/1.png')}}");
                $('#img-link').attr('src',"{{asset('template1/previews/blue/1.png')}}");
                $('#img-link').attr('data-fancybox','blue-preview');
                $('#img-link').attr('href',"{{asset('template1/previews/blue/1.png')}}");
            }else if(colour=="dark_green") {
                $('#img-thumb-3').attr('src',"{{asset('template3/previews/dark_green/1.png')}}");
                $('#img-link-3').attr('src',"{{asset('template3/previews/dark_green/1.png')}}");
                $('#img-link-3').attr('data-fancybox','dark_green-preview');
                $('#img-link-3').attr('href',"{{asset('template3/previews/dark_green/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="red") {
                $('#img-thumb-3').attr('src',"{{asset('template3/previews/red/1.png')}}");
                $('#img-link-3').attr('src',"{{asset('template3/previews/red/1.png')}}");
                $('#img-link-3').attr('data-fancybox','red-preview');
                $('#img-link-3').attr('href',"{{asset('template3/previews/red/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }else if(colour=="orange") {
                $('#img-thumb-3').attr('src',"{{asset('template3/previews/orange/1.png')}}");
                $('#img-link-3').attr('src',"{{asset('template3/previews/orange/1.png')}}");
                $('#img-link-3').attr('data-fancybox','orange-preview');
                $('#img-link-3').attr('href',"{{asset('template3/previews/orange/1.png')}}");
                // $('#img-link').data('fancybox','green-preview');
            }
			$('input[name="layout"]').val(layout);
			$('input[name="colour"]').val(colour);
            $('#loader').addClass('hidden');
            $('#template-buttons').removeClass('hidden');

			// alert("the template "+layout+" is and the colour is "+colour)



      // Simple example, see optional options for more configuration.


		});




    



var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {

      $scope.selectedTemplate='{{$settings->layout}}';
      $scope.color='{{$settings->colour}}';

      console.log($scope.selectedTemplate);

      initilizeColorPicker($scope.selectedTemplate,$scope.color);

        
        $scope.changeTemplate=function(value){
          $scope.selectedTemplate=value;
        }


        function initilizeColorPicker(template,color) {

          $scope.pickr1 = Pickr.create({
    el: '.color-picker-1',
    theme: 'nano', // or 'monolith', or 'nano'

    swatches:null,
    default: (template=="template1")?color:"#42445a",
    defaultRepresentation: 'HEXA',


    components: {

        // Main components
        preview: true,
        // opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            // rgba: true,
            // hsla: true,
            // hsva: true,
            // cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});



$scope.pickr2 = Pickr.create({
    el: '.color-picker-2',
    theme: 'nano', // or 'monolith', or 'nano'

    swatches:null,
    default: (template=="template2")?color:"#42445a",
    defaultRepresentation: 'HEXA',


    components: {

        // Main components
        preview: true,
        // opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            // rgba: true,
            // hsla: true,
            // hsva: true,
            // cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});


$scope.pickr3 = Pickr.create({
    el: '.color-picker-3',
    theme: 'nano', // or 'monolith', or 'nano'

    swatches:null,
    default: (template=="template3")?color:"#42445a",
    defaultRepresentation: 'HEXA',


    components: {

        // Main components
        preview: true,
        // opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            // rgba: true,
            // hsla: true,
            // hsva: true,
            // cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});
          
        }


    $scope.submitForm=function(){

      // console.log('submiting')
      console.log($scope.selectedTemplate);

      if ($scope.selectedTemplate=="template1") {
        var color=$scope.pickr1.getColor().toHEXA().toString();

        
      }else if($scope.selectedTemplate=="template2"){
        var color=$scope.pickr2.getColor().toHEXA().toString();
      

      }else{
        var color=$scope.pickr3.getColor().toHEXA().toString();

      }



      var url = '{{route("update.layout")}}';
      var data = {
        layout:$scope.selectedTemplate,
        color:color,
        id:'{{$settings->id}}',
        _token:'{{csrf_token()}}',

      }
      // var config='contenttype';

      $http.put(url, data).then(function (response) {

      // This function handles success
      console.log(response)

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



 toastr.success('Layout Saved!');


      }, function (response) {

        console.log(response)

      // this function handles error

});

    }



    });






</script>
@endsection