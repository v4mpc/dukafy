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

<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/wizard.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}">

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
                <form action="{{route('settings.update',$settings->id)}}" method="POST" >
                  {{ csrf_field() }}
                  {{method_field('PUT')}}
                    <h5 class="info-text">Select Template and Colour. </h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group" align="center">
                        
                                <div id="loader" class="loader hidden"></div>

                                <div id="template-buttons"><a id="img-link" href="{{asset('template1/previews/blue/1.png')}}" data-fancybox="blue-preview"
                                        data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb" src="{{asset('template1/previews/blue/1.png')}}" alt="..." class="img-thumbnail"></a>
                                    <div>
                                        <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="navy" title="Navy" class="btn btn-primary colour active">
                                          @if($settings->colour=="navy")
                                          <i class="ft-check"></i>
                                          @endif
                                        </button>
                                        <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="green" title="Green" class="btn btn-success colour active">
                                          @if($settings->colour=="green")
                                          <i class="ft-check"></i>
                                          @endif
                                        </button>
                                        <button type="button" data-toggle="tooltip" data-layout="template1" data-colour="blue" title="Blue" class="btn btn-info colour active">
                                          @if($settings->colour=="blue")
                                          <i class="ft-check"></i>
                                          @endif
                                        </button>
                                        <input type="hidden" name="layout">
                                        <input type="hidden" name="colour">
                                      {{-- <input type="hidden" name="store_name" value="{{$settings->store_name}}">
                                      <input type="hidden" name="email" value="{{$settings->email}}">
                                      <input type="hidden" name="longitude" value="{{$settings->longitude}}">
                                      <input type="hidden" name="latitude" value="{{$settings->latitude}}"> --}}
                                      {{-- <input type="hidden" name="logo" value="{{$settings->logo}}"> --}}
                                      {{-- <input type="hidden" name="working_hours" value="{{$settings->working_hours}}">

                                      <input type="hidden" name="address" value="{{$settings->address}}">
                                      <input type="hidden" name="mobile" value="{{$settings->mobile}}">
                                      <input type="hidden" name="about" value="{{$settings->about}}">
                                      <input type="hidden" name="facebook" value="{{$settings->facebook}}">
                                      <input type="hidden" name="instagram" value="{{$settings->instagram}}">
                                      <input type="hidden" name="twitter" value="{{$settings->twitter}}"> --}}
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4">
                                <div class="form-group" align="center">
                            
                                    <div id="loader" class="loader hidden"></div>

                                    <div id="template-buttons"><a id="img-link-2" href="{{asset('template2/previews/yellow/1.png')}}" data-fancybox="yellow-preview"
                                            data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb-2" src="{{asset('template2/previews/yellow/1.png')}}" alt="..." class="img-thumbnail"></a>
                                        <div>
                                            <button type="button" data-toggle="tooltip" data-layout="template2" data-colour="black" title="Black" class="btn btn-black colour">
                                              @if($settings->colour=="black")
                                          <i class="ft-check"></i>
                                          @endif
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-layout="template2" data-colour="pink" title="Pink" class="btn btn-pink colour">
                                              @if($settings->colour=="pink")
                                          <i class="ft-check"></i>
                                          @endif
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-layout="template2" data-colour="yellow" title="Yellow" class="btn btn-yellow colour">
                                              @if($settings->colour=="yellow")
                                          <i class="ft-check"></i>
                                          @endif
                                            </button>
                                            {{-- <input type="hidden" name="layout">
                                            <input type="hidden" name="colour"> --}}
                                        </div>
                                    </div>


                                </div>
                            </div>



                        <div class="col-sm-4">
                                <div class="form-group" align="center">
                            
                                    <div id="loader" class="loader hidden"></div>

                                    <div id="template-buttons"><a id="img-link-3" href="{{asset('template3/previews/dark_green/1.png')}}" data-fancybox="dark_green-preview"
                                            data-width="1366" data-height="768" data-thumbs='{"autoStart":true}'> <img id="img-thumb-3" src="{{asset('template3/previews/dark_green/1.png')}}" alt="..." class="img-thumbnail"></a>
                                        <div>
                                            <button type="button" data-toggle="tooltip" data-layout="template3" data-colour="dark_green" title="Dark Green" class="btn btn-dark_green colour ">
                                              @if($settings->colour=="dark_green")
                                          <i class="ft-check"></i>
                                          @endif
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-layout="template3" data-colour="red" title="Red" class="btn btn-red colour ">
                                              @if($settings->colour=="red")
                                          <i class="ft-check"></i>
                                          @endif
                                            </button>
                                            <button type="button" data-toggle="tooltip" data-layout="template3" data-colour="orange" title="Orange" class="btn btn-orange colour ">
                                              @if($settings->colour=="orange")
                                          <i class="ft-check"></i>
                                          @endif
                                            </button>
                                            {{-- <input type="hidden" name="layout">
                                            <input type="hidden" name="colour"> --}}
                                        </div>
                                    </div>


                                </div>
                            </div>
                    </div>


                    

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

		});

</script>
@endsection