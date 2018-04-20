@extends('layouts.layout')



@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/zoom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/sweetalert.css')}}">



  

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
              <h3 class="content-header-title mb-0 d-inline-block">All Orders</h3>
              <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">orders</a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
              <div class="dropdown float-md-right">
              
                
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
                                    <th>Customer Name</th>
                                    <th>Products</th>
                                  
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th></th>    
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                    {{-- <div class="col-md-6 col-sm-12">
                                        <h5>Confirm Button Color</h5>
                                        <p>Use <code>className: "btn-warning"</code> option to change the
                                          background color of the "Confirm"-button.</p>
                                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-color">Confirm Button Color</button>
                                      </div> --}}
                                 
                              
                                  <tr>
                                    <td>Ben Christopher</td>
                                    <td>3</td>
                                    
                                    <td>1,200,000</td>
                                    <td>3 min ago</td>
                                
                                  <td><a href="{{route('orders.show','1')}}" data-toggle="tooltip" data-original-title="Detail" data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a>
                                    
                                      <a data-toggle="tooltip" data-original-title="Cancel" data-placement="top"  class="btn btn-outline-danger btn-sm edit-item-btn cancel-order"><i class="ft-x"></i></a>  
                                    </td>
                                  </tr>


                                  <tr>
                                    <td>Christopher</td>
                                    <td>6</td>
                                    
                                    <td>2,200,000</td>

                                    <td>4 days ago</td>
                                
                                  <td><a href="{{route('orders.show','1')}}" data-toggle="tooltip" data-original-title="Detail" data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a>
                                    
                                      <a data-toggle="tooltip" data-original-title="Cancel" data-placement="top"  class="btn btn-outline-danger btn-sm edit-item-btn cancel-order"><i class="ft-x"></i></a>  
                                    </td>
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

<script src="{{asset('vendor/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/extensions/zoom.min.js')}}" type="text/javascript"></script>


@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/tooltip/tooltip.min.js')}}" type="text/javascript"></script>



@endsection
