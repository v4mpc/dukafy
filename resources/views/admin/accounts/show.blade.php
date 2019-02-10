@extends('admin.layouts.layout') 
@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/zoom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/sweetalert.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}"> {{--
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/chartist-plugin-tooltip.css')}}"> --}}
@endsection
 
@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-tooltip.min.css')}}"> {{--
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/charts/morris.css')}}"> --}}
@endsection
 
@section('content')
  @include('partials._messages')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Accounts Details</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Accounts</a>
              </li>

            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">
          <a href="{{route('accounts.create')}}" class="btn btn-float btn-round btn-primary">Create Account</a>

        </div>
      </div>
    </div>
    <div class="content-body">



      <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    
                    <h3 class="success">{{count($account->customers)}}</h3>
                    <h6>Customers</h6>
                  </div>
                  <div>
                    <i class="icon-user-follow info font-large-2 float-right"></i>
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
                    {{count($account->products)}}
                    <h6>Products</h6>
                  </div>
                  <div>
                    <i class="icon-bag warning font-large-2 float-right"></i>
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
                    <h3 class="success">{{count($account->categories)}}</h3>
                    <h6>Categories</h6>
                  </div>
                  <div>
                    <i class="icon-layers success font-large-2 float-right"></i>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-3">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="warning">Expiring</h3>
                    @if(!is_null($account->ended_at))
                    <h6>{{Carbon::createFromFormat('Y-m-d H:i:s', $account->ended_at)->diffForHumans()}}</h6>
                    @endif
                  </div>
                  <div>
                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    @if(!is_null($account->ended_at))
                  <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="{{strtotime(Carbon::now())-strtotime($account->started_at)}}"
                    aria-valuemin="0" aria-valuemax="{{strtotime($account->ended_at)-strtotime($account->started_at)}}"></div>
                    @endif
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Zero configuration table -->
      <section id="configuration">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                {{--
                <h4 class="card-title">Zero configuration</h4> --}}
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
                  <table class="table">

                    <tbody>
                      <tr>
                        <td>Name :</td>
                        <td><strong>{{$account->name}}</strong></td>
                      </tr>
                      <tr>
                        <td>Domain:</td>
                        <td><strong>{{$account->domain}}</strong></td>
                      </tr>

                      <tr>
                          <td>Sub-Domain:</td>
                          <td><strong>{{get_domain_efficient($account->domain)}}.dukafy.co.tz</strong></td>
                        </tr>
                      <tr>
                        <td>Email :</td>
                        <td>
                          <strong>{{$account->email}}</strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Phone :</td>
                        <td>
                          <strong>{{$account->formatNumber()}}</strong>
                        </td>
                      </tr>

                      <tr>
                        <td>Registration Date :</td>
                        <td>
                          <strong>{{$account->created_at}}</strong>
                        </td>
                      </tr>

                      <tr>
                        <td>Start Date :</td>
                        <td>
                          <strong>{{$account->started_at}}</strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Next Due Date :</td>
                        <td>
                          <strong>{{date($account->ended_at)}}</strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td>
                            @if($account->status==1)
                            @if(!is_null($account->ended_at))
                            @if($account->ended_at->gte(Carbon::now()->SubDays(5))&&(Carbon::now()->gte($account->ended_at)))
                            <span class="badge badge badge-warning">Grace Period</span>
                            @else
                            <span class="badge badge badge-success">Active</span>
                            @endif
                            @endif
                            @elseif($account->status==2)
                            <span class="badge badge badge-warning">Pending</span>
                          @else
                          <span class="badge badge badge-danger">Suspended</span>
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>Options</td>

                      
                        <td>@if($account->status==2)
                            <button data-toggle="modal" data-target="#inlineForm1" class="btn btn-outline-secondary btn-sm ">Create Account</button>
                          @else
                          <button data-toggle="modal" data-target="#inlineForm" class="btn btn-outline-primary btn-sm ">Renew Account</button>
                          @if($account->status)
                          <a href="{{route('accounts.suspend',$account->id)}}" class="btn btn-outline-danger btn-sm edit-item-btn">Suspend</a>
                          @else
                          <a href="{{route('accounts.activate',$account->id)}}" class="btn btn-outline-success btn-sm edit-item-btn">Activate</a>
                          @endif
                          @endif
                          <button data-toggle="modal" data-target="#inlineFormReset" class="btn btn-outline-primary btn-sm ">Reset Database</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>


                    <!-- Modal create -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <label class="modal-title text-text-bold-600" id="myModalLabel33">Renew Account</label>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
            </div>
            <form action="{{route('renew',$account->id)}}" method="POST">
  {{method_field('PUT')}}
              {{csrf_field()}}
              <div class="modal-body">
                  <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput1">Package Name</label>
                      <div class="col-md-7">
                          <select id="projectinput5" name="package_id" class="form-control">
                              @foreach($packages as $package)
                          <option value="{{$package->id}}">{{$package->name}}</option>
                              @endforeach
                              
                             
                            </select>
                      </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Subscription</label>
                        <div class="col-md-7">
                            <select id="projectinput5" name="subscription_id" class="form-control">
                                
                                @foreach($subscriptions as $subscription)
                            <option value="{{$subscription->id}}">{{$subscription->subscription}} Month(s)</option>
                                @endforeach
               
                                
                               
                              </select>
                        </div>
                      </div>
              </div>

              <div class="modal-footer">
                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Save">
              </div>
            </form>
          </div>
        </div>
      </div>



      <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">New Account</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
              </div>
              <form action="{{route('new',$account->id)}}" method="POST">
    {{method_field('PUT')}}
                {{csrf_field()}}
                <div class="modal-body">
                    
                    {{-- <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Name</label>
                        <div class="col-md-9">
                          <input type="text" id="projectinput1" class="form-control" value="{{old('user_name')}}" placeholder="Name" name="user_name">
                        </div>
                      </div> --}}

                      {{-- <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Email</label>
                        <div class="col-md-9">
                          <input type="email" id="projectinput1" class="form-control" value="{{old('user_email')}}" placeholder="Email" name="user_email">
                        </div>
                      </div> --}}
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Password</label>
                        <div class="col-md-9">
                          <input type="password" id="projectinput1" class="form-control" placeholder="Password" name="password">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Confirm Password</label>
                        <div class="col-md-9">
                          <input type="password" id="projectinput1" class="form-control" placeholder="Re-type password" name="password_confirmation">
                        </div>
                      </div>
                </div>
  
                <div class="modal-footer">
                  <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                  <input type="submit" class="btn btn-outline-primary btn-lg" value="Create Account">
                </div>
              </form>
            </div>
          </div>
        </div>



        <div class="modal fade text-left" id="inlineFormReset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Reset</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
              </div>
              <form action="{{route('accounts.reset',$account->id)}}" method="POST">
    
                {{csrf_field()}}
                <div class="modal-body">
                    
                   
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Email</label>
                        <div class="col-md-9">
                          <input type="email"  id="projectinput1" class="form-control" placeholder="Account Email" name="email">
                        </div>
                      </div>

                    
                </div>
  
                <div class="modal-footer">
                  <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                  <input type="submit" class="btn btn-outline-primary btn-lg" value="Reset">
                </div>
              </form>
            </div>
          </div>
        </div>
  
  

                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-3">
            <div class="card pull-up">
              <div class="card-content">

                <div class="card-body">
                   {{-- {!! $chart->container() !!} --}}
                </div>
              </div>
            </div>
          </div>


          
          <div class="col-xl-3 col-lg-6 col-3">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">Expiring</h3>
                      @if(!is_null($account->ended_at))
                      <h6>{{Carbon::createFromFormat('Y-m-d H:i:s', $account->ended_at)->diffForHumans()}}</h6>
                      @endif
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                      @if(!is_null($account->ended_at))
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="{{strtotime(Carbon::now())-strtotime($account->started_at)}}"
                      aria-valuemin="0" aria-valuemax="{{strtotime($account->ended_at)-strtotime($account->started_at)}}"></div>
                      @endif
                  </div>
               
                </div>
              </div>
            </div>
          </div>

          


        </div>

        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                {{--
                <h4 class="card-title">Zero configuration</h4> --}}
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
                <h3>Package Info</h3>
              </div>
              <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                  <table class="table">

                    <tbody>
                      <tr>
                        <td>Name :</td>
                        <td><strong>{{$account->package->name}}</strong></td>
                      </tr>
                      <tr>
                        <td>Products</td>
                        <td><strong>{{$account->package->product}}</strong></td>
                      </tr>
                      <tr>
                        <td>Price:</td>
                        <td>
                          <strong>{{number_format($account->package->price)}} TZS</strong>
                        </td>
                      </tr>
                      <tr>
                        <td>Discount :</td>
                        <td>
                          <strong>{{$account->package->discount}}</strong>
                        </td>
                      </tr>

                      <tr>
                        <td>Subscription:</td>
                        <td>
                          <strong>{{$account->subscription->subscription}} Month(s)</strong>
                        </td>
                      </tr>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="card">
              <div class="card-header">
                {{--
                <h4 class="card-title">Zero configuration</h4> --}}
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                  </ul>
                </div>
                <h3>Domain Info</h3>
              </div>
              <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                  <table class="table">

                    {{-- <tbody>
                      <tr>
                        <td>Sender Email :</td>
                        <td><strong>{{$account->mj_sender_email}}</strong></td>
                      </tr>
                      <tr>
                        <td>Api Key Public</td>
                        <td><strong>{{$account->mj_apikey_public}}</strong></td>
                      </tr>
                      <tr>
                        <td>Api Key Private</td>
                        <td><strong>{{$account->mj_apikey_private}}</strong></td>
                      </tr>


                    </tbody> --}}
                  </table>

                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                {{--
                <h4 class="card-title">Zero configuration</h4> --}}
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


                  @if(count($account->customers))
                  <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                      <tr>

                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Type</th>

                        {{--
                        <th>Sub-category</th> --}}

                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>



                      @foreach($account->customers as $customer)

                      <tr>

                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->customerType->name}}</td>



                        <td>
                          <a href="{{route('customers.edit', $customer->id)}}" data-toggle="tooltip" data-original-title="Edit" data-placement="top"
                            class="btn btn-outline-success edit-item-btn"><i class="ft-edit"></i></a>
                          <a data-toggle="tooltip" data-id="{{$customer->id}}" data-original-title="Delete" data-placement="top" data-url="/manage/categories/"
                            data-name="Category" class="btn btn-outline-danger edit-item-btn confirm-color"><i class="ft-trash"></i></a>

                        </td>
                      </tr>

                      @endforeach






                      </tfoot>
                  </table>
                  @else
                  <h2>No Customers Yet!</h2>
                  @endif


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
<script src="{{asset('vendor/vendors/vendors/js/extensions/zoom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
{{--
<script src="{{asset('vendor/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/charts/chartist.min.js')}}" type="text/javascript">
  --}}

</script>
<script src="{{asset('vendor/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
@endsection
 
@section('page_level_js')

<script src="{{asset('vendor/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/tooltip/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/gallery/photo-swipe/photoswipe-script.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/js/scripts/cards/card-statistics.min.js')}}" type="text/javascript"></script>



{{-- {!! $chart->script() !!} --}}
<script>
  o=document.getElementById("hit-rate-doughnut");

    new Chart(o,{
        type:"hitRateDoughnut",
        data:{
            labels:["Remain","Completed"],
        datasets:[
            {
                label:"Favourite",backgroundColor:["#28D094","#FF4961"],data:[18,82]
            }]
            },
        options:{
            responsive:!0,
            title:{
                display:!1
            },
            legend:{display:!1},
            layout:{
                padding:
                {
                left:16,right:16,top:16,bottom:16
                }},
            cutoutPercentage:92,
            animation:
            {
                animateScale:!1,
                duration:2500
                }
                }});

</script>
@endsection