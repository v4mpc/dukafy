@extends('layouts.layout')

@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">

@endsection



@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">

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
                      <h3 class="info">850</h3>
                      <h6>Products Sold</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <h3 class="warning">$748</h3>
                      <h6>Net Profit</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <h3 class="success">146</h3>
                      <h6>Products Available</h6>
                    </div>
                    <div>
                      <i class="icon-tag success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <h3 class="danger">45</h3>
                      <h6>Out Of Stock</h6>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                    <div class="dropdown-menu animate" role="menu">
                      <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                      <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                      <a class="dropdown-item" href="#" role="menuitem">profit</a>
                    </div>
                  </div>
                  <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                    <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                  </ul>
                </div>
                <div class="widget-content tab-content bg-white p-20">
                  <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                  <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                  <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"></h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div id="new-orders" class="media-list position-relative">
                    <div class="table-responsive">
                      <table id="new-orders-table" class="table table-hover table-xl mb-0">
                        <thead>
                          <tr>
                            <th class="border-top-0">Product</th>
                            <th class="border-top-0">Customers</th>
                            <th class="border-top-0">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-truncate">iPhone X</td>
                            <td class="text-truncate p-1">
                              56
                            </td>
                            <td class="text-truncate">8999</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Pixel 2</td>
                            <td class="text-truncate p-1">
                              45
                            </td>
                            <td class="text-truncate">5550</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">OnePlus</td>
                            <td class="text-truncate p-1">
                              64
                            </td>
                            <td class="text-truncate">9000</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Galaxy</td>
                            <td class="text-truncate p-1">
                              <ul class="list-unstyled users-list m-0">
                               45
                              </ul>
                            </td>
                            <td class="text-truncate">7500</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Moto Z2</td>
                            <td class="text-truncate p-1">
                             34
                            </td>
                            <td class="text-truncate">8500</td>
                          </tr>
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
                          <th class="border-top-0">Categories</th>
                         
                          <th class="border-top-0">Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td class="text-truncate">
                            
                            <span>Elizabeth W.</span>
                          </td>
                          <td class="text-truncate p-1">
                            34
                          </td>
                          <td>
                            <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                          </td>
                         
                          <td class="text-truncate"> 1200.00</td>
                        </tr>
                        <tr>
                          
                          <td class="text-truncate">
                            
                            <span>Elizabeth W.</span>
                          </td>
                          <td class="text-truncate p-1">
                            34
                          </td>
                          <td>
                            <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                          </td>
                         
                          <td class="text-truncate"> 1200.00</td>
                        </tr>
                        <tr>
                          
                          <td class="text-truncate">
                            
                            <span>Elizabeth W.</span>
                          </td>
                          <td class="text-truncate p-1">
                            34
                          </td>
                          <td>
                            <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                          </td>
                         
                          <td class="text-truncate"> 1200.00</td>
                        </tr>
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
<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/validation/jqBootstrapValidation.js')}}"
  type="text/javascript"></script>
@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/form-login-register.min.js')}}" type="text/javascript"></script>

@endsection
