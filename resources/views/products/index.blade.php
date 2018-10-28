@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/zoom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/sweetalert.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-tooltip.min.css')}}">
@endsection
 
@section('content')
  @include('partials._messages')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">All Products</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Products</a>
              </li>

            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">
          <a href="{{route('products.create')}}" class="btn btn-float btn-round btn-primary">Add Product</a>

        </div>
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

                  <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Category</th>
                        {{--
                        <th>Sub-category</th> --}}
                        
                        <th>Image</th>
                        <th>Price (TZS)</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($products as $product)

                      <tr>
                        <td>
                            <a href="{{route('products.show',$product->id)}}">
                          {{$product->name}}</a></td>
                        <td>{{$product->category->name}}</td>
                       
                       
                        {{--
                        <td>{{$product->subCategory->name}}</td> --}}
                        {{-- <td>Status</td> --}}

                        {{-- <td></td> --}}
                        <td>
                          <div width="300" height="300">
                            <img src="{{asset('images/'.$product->images[0]->image)}}" width="auto" height="100px" alt="">
                          </div>
                        </td>

                        <td>{{number_format($product->price)}}</td>
                        <td>

                          @if($product->out_stock==1)
                          <span class="badge badge badge-danger">Out stock</span>
                          @else
                          <span class="badge badge badge-success">Available</span>
                          @endif
                        </td>

                        <td><a href="{{route('products.show',$product->id)}}" data-toggle="tooltip" data-original-title="Detail"
                            data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a> 
                            <a href="{{route('products.edit',$product->id)}}" data-toggle="tooltip" data-original-title="Edit"
                              data-placement="top" class="btn btn-outline-secondary btn-sm edit-item-btn"><i class="ft-edit"></i></a>                         
                            @if($product->featured!=1)
                          <a data-toggle="tooltip" data-original-title="Featured" data-id="{{$product->id}}" data-placement="top"  class="btn btn-outline-info btn-sm edit-item-btn confirm-featured" ><i class="ft-star"></i></a>
                          @else
                          <a data-toggle="tooltip" data-original-title="Unfeature" data-id="{{$product->id}}" data-placement="top"  class="btn btn-outline-info btn-sm edit-item-btn active remove-featured" ><i class="ft-star"></i></a>
                          @endif
                          @if($product->out_stock!=1)
                          <a data-toggle="tooltip" data-original-title="Out-Stock" data-id="{{$product->id}}" data-placement="top" class="btn btn-outline-warning btn-sm edit-item-btn make-out-stock"><i class="ft-log-out"></i></a>
                          @else
                          <a data-toggle="tooltip" data-id="{{$product->id}}" data-original-title="Stock-In" data-placement="top"  class="btn btn-outline-warning btn-sm active edit-item-btn stock-in"><i class="ft-log-in"></i></a>
                          @endif
                          
                        </td>
                      </tr>

                      @endforeach

                      </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--/ Zero configuration table -->
    </div>
  </div>
</div>
@endsection
 
@section('page_vendor_js')

<script src="{{asset('vendor/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/extensions/zoom.min.js')}}" type="text/javascript"></script>
@endsection
 
@section('page_level_js')

<script src="{{asset('vendor/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/tooltip/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/gallery/photo-swipe/photoswipe-script.js')}}" type="text/javascript"></script>
@endsection