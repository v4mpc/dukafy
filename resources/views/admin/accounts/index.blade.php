@extends('admin.layouts.layout') 
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
  @include('admin.partials._messages')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">All Accounts</h3>
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
      <!-- Zero configuration table -->
      <section id="configuration">
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

                  <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Domain</th>
                        {{--
                        <th>Sub-category</th> --}}
                        
                        <th>Status</th>
                    
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($accounts as $account)

                      @if($account->id!=1)

                      <tr>
                        <td>{{$account->name}}</td>
                        <td>{{$account->domain}}</td>
                   
<td>
                          @if($account->status==1)
                            @if($account->ended_at->gte(Carbon::now()->SubDays(5))&&(Carbon::now()->gte($account->ended_at)))
                            <span class="badge badge badge-warning">Grace Period</span>
                            @else
                            <span class="badge badge badge-success">Active</span>
                            @endif
                            @elseif($account->status==2)
                            <span class="badge badge badge-warning">Pending</span>
                          @else
                          <span class="badge badge badge-danger">Suspended</span>
                          @endif
                        </td>

                        <td><a href="{{route('accounts.show',$account->id)}}" data-toggle="tooltip" data-original-title="Detail"
                            data-placement="top" class="btn btn-outline-primary btn-sm edit-item-btn"><i class="ft-eye"></i></a>
                            <a href="{{route('accounts.edit',$account->id)}}" data-toggle="tooltip" data-original-title="Edit"
                              data-placement="top" class="btn btn-outline-secondary btn-sm edit-item-btn"><i class="ft-edit"></i></a>
                              @if($account->status!=2)
                            @if($account->status)
                            <a href="{{route('accounts.suspend',$account->id)}}" data-toggle="tooltip" data-original-title="Suspend"
                              data-placement="top" class="btn btn-outline-danger btn-sm edit-item-btn"><i class="ft-x"></i></a>
                          @else
                          <a href="{{route('accounts.activate',$account->id)}}" data-toggle="tooltip" data-original-title="Activate"
                            data-placement="top" class="btn btn-outline-success btn-sm edit-item-btn"><i class="ft-check"></i></a>
                          @endif
                          @endif
                        </td>
                      </tr>
@endif
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