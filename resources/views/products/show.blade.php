@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/zoom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/gallery.min.css')}}">
@endsection
 
@section('content')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">{{$product->name}}</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Products</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Details</a>
              </li>

            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
          @if(!Auth::user()->account->isMaxProduct())
        <div class="dropdown float-md-right">
          <a href="{{route('products.create')}}" class="btn btn-float btn-round btn-primary">Add Product</a>

        </div>
        @endif
      </div>
    </div>


    <div class="content-body">






      <!-- Zero configuration table -->


      <section id="configuration">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                {{--
                <h4 class="card-title">Zero configuration</h4> --}}
                <h4 class="form-section"><i class="ft-shopping-cart"></i> Product Detail</h4>
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
              <div class="card-content collapse show">
                <div class="card-body card-dashboard">

                  <div class="row">
                    <div class="col-6">



                      <section id="image-gallery" class="card">

                        <div class="card-content">

                          <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <div class="row">
                              @foreach($product->images as $image)
                              <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{asset('images/'.$image->image)}}" itemprop="contentUrl" data-size="{{Image::make(file_get_contents(asset('images/'.$image->image)))->width()}}x{{Image::make(file_get_contents(asset('images/'.$image->image)))->height()}}">
                                                  <img class="img-thumbnail img-fluid" src="{{asset('images/'.$image->image)}}"
                                                  itemprop="thumbnail" alt="Image description" />
                                                </a>
                              </figure>

                              @endforeach

                            </div>
                          </div>
                          <!--/ Image grid -->
                          <!-- Root element of PhotoSwipe. Must have class pswp. -->
                          <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <!-- Background of PhotoSwipe. 
                                           It's a separate element as animating opacity is faster than rgba(). -->
                            <div class="pswp__bg"></div>
                            <!-- Slides wrapper with overflow:hidden. -->
                            <div class="pswp__scroll-wrap">
                              <!-- Container that holds slides. 
                                              PhotoSwipe keeps only 3 of them in the DOM to save memory.
                                              Don't modify these 3 pswp__item elements, data is added later on. -->
                              <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                              </div>
                              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                              <div class="pswp__ui pswp__ui--hidden">
                                <div class="pswp__top-bar">
                                  <!--  Controls are self-explanatory. Order can be changed. -->
                                  <div class="pswp__counter"></div>
                                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                  <button class="pswp__button pswp__button--share" title="Share"></button>
                                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                  <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                  <!-- element will get class pswp__preloader-active when preloader is running -->
                                  <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                      <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                  <div class="pswp__share-tooltip"></div>
                                </div>
                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                                </button>
                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                                </button>
                                <div class="pswp__caption">
                                  <div class="pswp__caption__center"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--/ PhotoSwipe -->
                        
                      </section>

                      <a href="{{route('products.index')}}"  class="btn btn-warning">
                        <i class="ft-x"></i> Back
                      </a>


                    </div>
                    <div class="col-6">
                      <ul style="list-style: none;">
                        <h4>
                          <li>Name: <strong>{{$product->name}}</strong></li>
                        </h4>
                        <h4>
                          <li>Price: <strong>{{number_format($product->price)}} {{$product->currency()}}</strong> @if($product->price_visibility)
                            <span class="badge badge-success">Visible</span> @else
                            <span class="badge badge-danger">Invisible</span> @endif

                          </li>
                          <h4>Discount: <strong>{{number_format(round(($product->price*$product->discount)/100))}} {{$product->currency()}} <span class="badge badge-danger"> -{{ $product->discount}}%</span></strong></h4>
                        </h4>
                        <li></li>
                        <h4>
                          <li>Category: <strong>{{$product->category->name}}</strong></li>
                        </h4>
                        {{--
                        <h4>
                          <li>Sub-category: <strong>{{$product->subCategory->name}}</strong></li>
                        </h4> --}}
                        <h4>
                          <li>Description: <strong></h4> {!!$product->description!!}</strong></li>
                          <li></li>
                      </ul>

                      <div class="form-group">
                        {{-- <a href="{{route('products.edit',$product->id)}}" data-toggle="tooltip" data-original-title="Edit"
                          data-placement="top" class="btn btn-outline-success btn-sm edit-item-btn"><i class="ft-edit"></i></a>                        --}}
                          @if($product->out_stock!=1)
                        <a data-toggle="tooltip" data-original-title="Out-Stock" data-id="{{$product->id}}" data-placement="top" class="btn btn-outline-warning btn-sm edit-item-btn make-out-stock"><i class="ft-log-out"></i></a>
                        @endif
                        @if($product->featured!=1)
                        <a data-toggle="tooltip" data-original-title="Featured" data-id="{{$product->id}}" data-placement="top" class="btn btn-outline-info btn-sm edit-item-btn confirm-featured"><i class="ft-star"></i></a>
                        @endif
                        <a href="{{route('products.edit',$product->id)}}" data-toggle="tooltip" data-original-title="Edit"
                            data-placement="top" class="btn btn-outline-secondary btn-sm edit-item-btn"><i class="ft-edit"></i></a>                         {{-- <a href="{{route('products.edit',$product->id)}}" data-toggle="tooltip" data-original-title="Edit"

                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{--
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <h4 class="form-section"><i class="ft-layers"></i> Product Variation(s)</h4>
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
              <div class="card-content collapse show">
                <div class="card-body card-dashboard">

                  <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                      <tr>
                        <th>Variation</th>
                        <th>Value</th>
                        <th>Images</th>
                        <th>Price</th>

                      </tr>
                    </thead>
                    <tbody>


                      @foreach($product->variations as $variation)
                      <tr>
                        <td>{{$variation->variation}}</td>
                        <td>{{$variation->value}}</td>

                        <td><img src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                          <img src="{{asset('images/tshirt.jpg ')}}" width="100" height="100" alt=""></td>
                        <td>{{number_format($variation->price)}}</td>


                      </tr>

                      @endforeach





                      </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </section>

      <!--/ Zero configuration table -->

    </div>
  </div>
</div>
@endsection
 
@section('page_vendor_js')

<script src="{{asset('vendor/vendors/js/extensions/zoom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/cards/card-ecommerce.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/gallery/masonry/masonry.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/gallery/photo-swipe/photoswipe-script.js')}}" type="text/javascript"></script>
@endsection
 
@section('page_level_js')
@endsection