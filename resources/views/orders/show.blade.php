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
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/loaders/loaders.min.css')}}">
@endsection
 
@section('content')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Order</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Orders</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Details</a>
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
                <h4 class="form-section"><i class="ft-package"></i> Order {{$order->id}}</h4>
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
                    {{-- content --}}
                    <div class="col">
                      <h3>Customer Info:</h3>
                      <p>Name: {{$order->customer->first_name}} {{$order->customer->last_name}}</p>
                      <p>Email: {{$order->customer->email}}</p>
                      <p> Addreess: {{$order->customer->email}}</p>
                      <p> Phone: {{$order->customer->phone}}</p>
                    </div>
                    <div class="col">
                      <h3>Shipping Info:</h3>


                      <p>Shipping Method: Free Shipping </p>
                      {{--
                      <p>Shipping Cost: 45,565</p> --}}

                    </div>
                    <div class="col">
                      <h3>Billing Info:</h3>
                      <p>Cash On Delivery</p>
                    </div>


                    {{-- end --}}

                  </div>
                  <div class="row">
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>Qty</th>
                          <th>Products Name</th>

                          <th>Product Price</th>

                          <th>Cost</th>

                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        {{--
                        <div class="col-md-6 col-sm-12">
                          <h5>Confirm Button Color</h5>
                          <p>Use <code>className: "btn-warning"</code> option to change the background color of the "Confirm"-button.</p>
                          <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="confirm-color">Confirm Button Color</button>
                        </div> --}} @foreach($order->products as $product)
                        <tr>
                          <td>{{$product->pivot->quantity}}</td>
                          <td>{{$product->name}}</td>

                          <td>{{$product->price}}</td>

                          <td>{{$product->pivot->quantity*$product->price}}</td>
                          <td><a href="{{route('products.show',$product->id)}}" data-toggle="tooltip" data-original-title="Detail"
                              data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a>


                          </td>
                        </tr>

                        @endforeach



                    </table>

                  </div>
                  <br>
                  <br>

                  <div class="row">
                    {{-- content --}}

                    <div class="col">
                      <h3>Payment Method:</h3>
                      <p>Cash On Delivery</p>
                      <h3>Order Status:</h3>
                      <p>

                        @if($order->status==='Completed') <span class="badge badge-success"><i class="ft-check"></i> {{$order->status}}</span>                        @elseif($order->status==='Pending')
                        <span class="badge badge-warning"><i class="ft-loader"></i> {{$order->status}}</span> @else
                        <span class="badge badge-danger"><i class="ft-x"></i> {{$order->status}}</span> @endif
                      </p>
                    </div>

                    @if($order->customer->comment)

                    <div class="col">

                      <h3>Comment:</h3>
                      <p>{{$order->customer->comment}}</p>
                    </div>
                    @endif {{--
                    <div class="col loader-wrapper">
                      <div class="loader-container">
                        <div class="ball-pulse loader-primary">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                      </div>
                    </div> --}}
                    <div class="col">
                      <div class="table-responsive ">
                        <table class="table order-table">
                          <tbody>
                            <tr>
                              <th style="width:50%">Subtotal:</th>
                              <td>{{$order->totalCost()}} TZS</td>
                            </tr>

                            <tr>
                              <th>Shipping Cost:</th>
                              <td>0 TZS</td>
                            </tr>
                            <tr>
                              <th>Total:</th>
                              <td>{{$order->totalCost()}} TZS</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    {{-- end --}}

                  </div>
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