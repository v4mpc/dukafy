@extends('layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/weather-icons/climacons.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/meteocons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/chartist-plugin-tooltip.css')}}">
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/timeline.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/pages/dashboard-ecommerce.min.css')}}">
@endsection
 
@section('content')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">

    </div>
    <div class="content-body">

      <!-- eCommerce statistic -->
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="info">{{count($products)}}</h3>
                    <h6> All Products</h6>
                  </div>
                  <div>
                    <i class="icon-bag info font-large-2 float-right"></i>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="warning">{{count($available_products)}}</h3>
                    <h6>Available Products</h6>
                  </div>
                  <div>
                    <i class="icon-basket-loaded warning font-large-2 float-right"></i>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="danger">{{count($outstock)}}</h3>
                    <h6>Out Of Stock</h6>
                  </div>
                  <div>
                    <i class="ft-log-out danger font-large-2 float-right"></i>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                  <h3 class="success">{{number_format($total_sales)}} {{Auth::user()->account->currency()}}</h3>
                    <h6>Total Sales </h6>
                  </div>
                  <div>
                    <i class="icon-wallet success font-large-2 float-right"></i>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ eCommerce statistic -->

      <!-- Products sell and New Orders -->
      <div class="row match-height">
        <div class="col-xl-8 col-12" id="ecommerceChartView">
          <div class="card card-shadow">
            <div class="card-header card-header-transparent py-20">
              <div class="btn-group dropdown">
                <a href="#" class="text-body  blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
              </div>
              {{--
              <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
              </ul> --}}
            </div>
            {{--
            <div class="widget-content tab-content bg-white p-20">

              <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
              <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
              <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
            </div> --}}
            <div>{!! $chart->container() !!}</div>

          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Top Most Sold Products</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              {{-- <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                </ul>
              </div> --}}
            </div>
            <div class="card-content">
              <div id="new-orders" class="media-list position-relative">
                <div class="table-responsive">
                  <table id="new-orders-table" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Product</th>
                        <th class="">Unit Sold</th>
                        {{-- <th class="border-top-0">Total(TZS)</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products_sold as $product)
                      <tr>
                        @if(strlen($product->name)>=23)
                      <td class="text-truncate" title="{{$product->name}}">{{substr($product->name,0,23)}}...</td>
                        @else
                        <td class="text-truncate">{{$product->name}}</td>
                        @endif
            
                        <td class="text-truncate">
                          {{count($product->orders)}}
                        </td>
                        {{-- <td class="text-truncate">

                          @php $sum=0; foreach ($product->orders as $order) { $sum+=$order->totalCost(); } echo number_format($sum); 
@endphp
                        </td> --}}
                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Products sell and New Orders -->

      <div class="row">
        <div id="recent-transactions" class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Recent Transactions</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">

                </ul>
              </div>
            </div>
            <div class="card-content">
              <div class="table-responsive">
                <table id="recent-orders" class="table table-hover table-xl mb-0">
                  <thead>
                    <tr>

                      <th class="border-top-0">Customer Name</th>
                      <th class="border-top-0">Products</th>
                      {{--
                      <th class="border-top-0">Categories</th> --}}

                      <th class="border-top-0">Amount ({{Auth::user()->account->currency()}})</th>
                      <th class="border-top-0">Time</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)

                    <tr>

                      <td class="text-truncate">

                        <span>{{$order->customer->first_name}} {{$order->customer->last_name}}</span>
                      </td>
                      <td class="text-truncate p-1">
                        {{count($order->products)}}
                      </td>
                      {{--
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                      </td> --}}

                      <td class="text-truncate"> {{number_format($order->totalCost())}}</td>
                      <td class="text-truncate"> {{$order->created_at->diffForHumans()}}</td>

                      <td> <a href="{{route('orders.show',$order->id)}}" class="btn btn-outline-primary edit-item-btn">View</a></td>
                    </tr>

                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Recent Transactions -->
    </div>
  </div>
</div>
@endsection
 
@section('page_vendor_js')
<script src="{{asset('vendor/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
{{--
<script src="{{asset('vendor/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script> --}}
<script src="{{asset('vendor/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
{!! $chart->script() !!}
@endsection
 
@section('page_level_js')


<script src="{{asset('vendor/js/scripts/pages/dashboard-ecommerce.min.js')}}" type="text/javascript"></script>
@endsection