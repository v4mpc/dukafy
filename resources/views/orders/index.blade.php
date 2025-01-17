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

                  <table class="table table-striped table-bordered default-ordering">
                    <thead>
                      <tr>
                        <th>Order #</th>
                        <th>Customer Name</th>
                        {{-- <th>Products</th> --}}
                        
                       

                        <th>Amount ({{Auth::user()->account->currency()}})</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      {{--
                      <div class="col-md-6 col-sm-12">
                        <h5>Confirm Button Color</h5>
                        <p>Use <code>className: "btn-warning"</code> option to change the background color of the "Confirm"-button.</p>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-color">Confirm Button Color</button>
                      </div> --}} @foreach($orders as $order)
                    <tr>
                        <td>{{$order->number}}</td>
                        <td>{{$order->customer->first_name}}</td>
                        {{-- <td>{{count($order->products)}}</td> --}}
                        
                  
                        <td>{{number_format($order->totalCost())}}</td>
                        <td>{{$order->created_at->diffForHumans()}}</td>

                        <td>

                          @if ($order->status=='Completed')<span class="badge badge-default badge-success order-{{$order->id}}">Completed</span>                          @elseif($order->status=='Pending')<span class="badge {{$order->id}} badge-default badge-warning">Pending</span>                          @else <span class="badge badge-default badge-danger">Cancelled</span> @endif
  
  
                          </td>

                        <td><a href="{{route('orders.show',$order->id)}}" data-toggle="tooltip" data-original-title="Detail"
                            data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a>
                            {{-- @if($order->status!='Cancelled')
                          <a data-toggle="tooltip" id="cancel-{{$order->id}}" data-original-title="Cancel" data-id="{{$order->id}}" data-placement="top" class="btn  btn-outline-danger btn-sm edit-item-btn cancel-order"><i class="ft-x"></i></a>
                          @endif --}}
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
@endsection