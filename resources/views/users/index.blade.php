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
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-tooltip.min.css')}}">

@endsection




@section('content')

<div class="app-content content">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
              <h3 class="content-header-title mb-0 d-inline-block">All Users</h3>
              <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Users</a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
              <div class="dropdown float-md-right">
                  <button data-toggle="modal" data-target="#inlineForm" class="btn btn-float btn-round btn-primary">Add User</button>
                
              </div>
            </div>
          </div>

<!-- Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <label class="modal-title text-text-bold-600" id="myModalLabel33">Enter User Info</label>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal form-simple" method="POST" action="{{route('register')}}" novalidate>
          {{ csrf_field() }}
          <div class="modal-body">
              <label>User Name </label>
              <div class="form-group">
                <input type="text" placeholder="user name" class="form-control">
              </div>
             
            </div>
            <div class="modal-body">
                <label>Email</label>
                <div class="form-group">
                  <input type="email" placeholder="email" class="form-control">
                </div>
               
              </div>
              <div class="modal-body">
                  <label>Password </label>
                  <div class="form-group">
                    <input type="password" placeholder="password" class="form-control">
                  </div>
                 
                </div>
                <div class="modal-body">
                    <label>Profile Image </label>
                    <div class="form-group">
                      <input type="file"  class="form-control">
                    </div>
                   
                  </div>
            
          </form>

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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Added</th>
                                    <th>Image</th>
                                   
                                    <th></th>    
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                  
                                 
                              
                                  
                                  
                                  
                                  <tr>
                                    <td>John Doe</td>
                                    <td>jd@gmail.com</td>
                                    <td>1 day ago</td>
                                    <td><img src="{{asset('images/profile1.png')}}" width="100" height="100" alt=""></td>
                                    
                                    
                                    
                                    <td>
                                      <a data-toggle="tooltip" data-original-title="Edit" data-placement="top"  class="btn btn-outline-success edit-item-btn"><i class="ft-edit"></i></a>
                                      <a data-toggle="tooltip" data-original-title="Delete" data-placement="top"   class="btn btn-outline-danger edit-item-btn confirm-color"><i class="ft-trash"></i></a>
                                     </td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Alice Paul</td>
                                    <td>ap@hotmail.com</td>
                                    <td>4 min ago</td>
                                    <td><img src="{{asset('images/profile2.png')}}" width="100" height="100" alt="">
                                    </td>
                                    
                                
                                    <td>
                                      <a data-toggle="tooltip" data-original-title="Edit" data-placement="top"  class="btn btn-outline-success edit-item-btn"><i class="ft-edit"></i></a>
                                      <a data-toggle="tooltip" data-original-title="Delete" data-placement="top" class="btn btn-outline-danger edit-item-btn confirm-color"><i class="ft-trash"></i></a>
                                     </td>
                                  </tr>
                                  <tr>
                                    <td>Vampc</td>
                                    <td>Marlin</td>
                                    <td>3 month ago</td>
                                    <td><img src="{{asset('images/profile.png')}}" width="100" height="100" alt=""></td>
                                    
                                    
                                    <td>
                                      <a data-toggle="tooltip" data-original-title="Edit" data-placement="top"  class="btn btn-outline-success edit-item-btn"><i class="ft-edit"></i></a>
                                      <a data-toggle="tooltip" data-original-title="Delete"  data-placement="top"   class="btn btn-outline-danger edit-item-btn confirm-color"><i class="ft-trash"></i></a>
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
 <div class="btn-group mr-1 mb-1">
        <button type="button" class="btn btn-light"> Action</button>
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{-- <span class="sr-only">Toggle Dropdown</span> --}}
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Detail</a>
          <a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a>
          <a class="dropdown-item" href="#"><i class="fa fa-recycle"></i> Out Of Stock</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-remove"></i> Delete</a>
        </div>
      </div>