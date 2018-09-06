@extends('layouts.layout')

@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/zoom.css')}}">


  

@endsection



@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/forms/checkboxes-radios.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/forms/switch.min.css')}}">

@endsection




@section('content')

<div class="app-content content">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
              <h3 class="content-header-title mb-0 d-inline-block">T Shirt</h3>
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
                          {{-- <h4 class="card-title">Zero configuration</h4> --}}
                          <h4 class="form-section"><i class="ft-layers"></i> Product Detail</h4>
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
                           
                            <div class="row">
                                <div class="col-6">
                                    <div class="row"><img src="{{asset('images/tshirt_small.jpg ')}}" width="300" height="300" alt=""></div>
                                <div class="row">
                                    <img data-action="zoom" src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                                    <img data-action="zoom" src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                                    <img data-action="zoom" src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                                    <img data-action="zoom"    src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                                </div>
                            </div>
                                <div class="col-6"><ul style="list-style: none;">
                                    <h4><li>Name: <strong>Tshirt</strong><span class="badge badge-danger">Out Stock</span></li></h4>
                                   <h4> <li>Price: <strong>12,000</strong> <span class="badge badge-success">Visible</span></li></h4>
                                    <h4><li>Category: <strong>Men</strong></li></h4>
                                    <h4><li>Sub-category: <strong>Clothes</strong></li></h4>
                                   <h4> <li>Description: <strong></h4> as opposed to the round neckline of the more common crew neck shirt</strong></li>
                                    <li></li>
                                </ul>

                                <div class="form-group">
                                        <button type="button" class="btn btn-outline-warning btn-min-width mr-1 mb-1">Out Stock</button>
                                        <button type="button" class="btn btn-outline-danger btn-min-width mr-1 mb-1">Delete</button>
                                        
                                      </div>
                            </div>
                        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    {{-- <h4 class="card-title">Zero configuration</h4> --}}
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
                         
                          
                         
                      
                          <tr>
                            <td>Size</td>
                            <td>Small</td>
                        
                            <td><img src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                                <img src="{{asset('images/tshirt.jpg ')}}" width="100" height="100" alt=""></td>
                            <td>1,200,000</td>
                        
                           
                          </tr>
                          <tr>
                            <td>Size</td>
                            <td>Medium</td>
                    
                            <td><img src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                                <img src="{{asset('images/tshirt.jpg ')}}" width="100" height="100" alt=""></td>
                            
                            <td>10,000</td>
                           
                          </tr>
                          <tr>
                            <td>Size</td>
                            <td>Large</td>
                            
                            <td><img src="{{asset('images/tshirt_small.jpg ')}}" width="100" height="100" alt="">
                                <img src="{{asset('images/tshirt.jpg ')}}" width="100" height="100" alt=""></td>
                            
                            <td>137,500</td>
                            
                          </tr>
                          
                          
                         
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

<script src="{{asset('vendor/vendors/js/extensions/zoom.min.js')}}" type="text/javascript"></script>



@endsection



@section('page_level_js')



@endsection
