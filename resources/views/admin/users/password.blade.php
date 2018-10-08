@extends('layouts.layout')

@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">


  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/icheck/custom.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/toggle/switchery.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">

@endsection



@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/checkboxes-radios.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/plugins/forms/switch.min.css')}}">

@endsection




@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Password</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">User</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Password</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="dropdown float-md-right">
            {{-- <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
            <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
              <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
              <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        @include('partials._messages')
        <section id="horizontal-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  
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
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                    </div>
                  <form class="form form-horizontal" method="POST" action="{{route('update.password',$user->id)}}" >
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-lock"></i>Change Password</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">Old Password</label>
                          <div class="col-md-9">
                          <input type="password" id="projectinput1" class="form-control"  placeholder="Old Password" name="old_password" required>
                          </div>
                        </div>
                    
                        <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput1">New Password</label>
                                <div class="col-md-9">
                                <input type="password" id="projectinput1" class="form-control"  placeholder="New Password" name="password" required>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-md-3 label-control" for="projectinput1">Confirm New Password</label>
                                <div class="col-md-9">
                                <input type="password" id="projectinput1" class="form-control"  placeholder="Confirm New Password" name="password_confirmation" required>
                                </div>
                              </div>
                              {{-- <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Password</label>
                                    <div class="col-md-9">
                                      <input type="password" id="projectinput1" class="form-control" placeholder="Password" name="password">
                                    </div>
                                  </div> --}}

                                  {{-- <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Confirm Password</label>
                                        <div class="col-md-9">
                                          <input type="password" id="projectinput1" class="form-control" placeholder="Re-type password" name="password_confirmation">
                                        </div>
                                      </div> --}}
                              
                       

                     
                         
                        

                              {{-- <div class="form-group row">
                                  <label class="col-md-3 label-control">User Image</label>
                                  <div class="col-md-9">
                                    <label id="projectinput8" class="file center-block">
                                      <input type="file" name="image"="file">
                                      <span class="file-custom"></span>
                                    </label>
                                  </div>
                                </div> --}}
                        {{-- <h4 class="form-section"><i class="ft-lock"></i>User Permissions</h4>
                        
                        <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>
                                    
                                      <th>Module</th>
                                      <th>Permission</th>
                            
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                            
                                      <td>
                                          <div class="card-body">
                                            <div class="icheck1">
                                              <fieldset>
                                                <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="input-2"><i class="ft-activity"></i> Dashboard</label>
                                              </fieldset>
                                            </div>
                                          </div>
                                        </td>
                                      <td>-</td>
            
                                    </tr>
                                    <tr>
                                            
                                      <td><div class="card-body">
                                            <div class="icheck1">
                                              <fieldset>
                                                <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="input-2"> <i class="ft-shopping-cart"></i> Products</label>
                                              </fieldset>
                                            </div>
                                          </div></td>
                                      <td>
                                            <div class="card-body">
                                                    <div class="icheck1">
                                                      <fieldset>
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                        <label for="input-2"><i class="ft-plus"></i> Add</label>
                                                      </fieldset>
                                                    </div>
                                                  </div>

                                                  <div class="card-body">
                                                        <div class="icheck1">
                                                          <fieldset>
                                                            <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                            <label for="input-2"><i class="ft-edit"></i> Edit</label>
                                                          </fieldset>
                                                        </div>
                                                      </div>

                                                      <div class="card-body">
                                                            <div class="icheck1">
                                                              <fieldset>
                                                                <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                                <label for="input-2"><i class="ft-trash"></i> Delete</label>
                                                              </fieldset>
                                                            </div>
                                                          </div>


                                      </td>
            
                                    </tr>
                                    <tr>
                                            
                                      <td><div class="card-body">
                                            <div class="icheck1">
                                              <fieldset>
                                                <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="input-2"> <i class="ft-package"></i> Orders</label>
                                              </fieldset>
                                            </div>
                                          </div></td>
                                      <td>

                                         <div class="card-body">
                                                    <div class="icheck1">
                                                      <fieldset>
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                        <label for="input-2"><i class="ft-plus"></i> Add</label>
                                                      </fieldset>
                                                    </div>
                                                  </div>

                                                  <div class="card-body">
                                                        <div class="icheck1">
                                                          <fieldset>
                                                            <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                            <label for="input-2"><i class="ft-edit"></i> Edit</label>
                                                          </fieldset>
                                                        </div>
                                                      </div>

                                                      <div class="card-body">
                                                            <div class="icheck1">
                                                              <fieldset>
                                                                <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                                <label for="input-2"><i class="ft-trash"></i> Delete</label>
                                                              </fieldset>
                                                            </div>
                                                          </div>

                                                                                            </td>

                                      <div class="icheckbox">
                                            <input type="checkbox" name="quux[1]">
                                          </div>
                            
                                    </tr>

                                    <tr>
                                            
                                            <td>
                                                <div class="card-body">
                                                    <div class="icheck1">
                                                      <fieldset>
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                        <label for="input-2"> <i class="ft-list"></i> Categories</label>
                                                      </fieldset>
                                                    </div>
                                                  </div></td>
                                            <td>

                                                 <div class="card-body">
                                                    <div class="icheck1">
                                                      <fieldset>
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                        <label for="input-2"><i class="ft-plus"></i> Add</label>
                                                      </fieldset>
                                                    </div>
                                                  </div>

                                                  <div class="card-body">
                                                        <div class="icheck1">
                                                          <fieldset>
                                                            <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                            <label for="input-2"><i class="ft-edit"></i> Edit</label>
                                                          </fieldset>
                                                        </div>
                                                      </div>

                                                      <div class="card-body">
                                                            <div class="icheck1">
                                                              <fieldset>
                                                                <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                                <label for="input-2"><i class="ft-trash"></i> Delete</label>
                                                              </fieldset>
                                                            </div>
                                                          </div>
                                            </td>
      
                                          
                                  
                                          </tr>

                                          <tr>

                                               
                                    
                                                <td>  <div class="card-body">
                                                        <div class="icheck1">
                                                          <fieldset>
                                                            <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                            <label for="input-2"> <i class="ft-align-left"> </i>Sub-Category</label>
                                                          </fieldset>
                                                        </div>
                                                      </div>
                                                    </td>
                                                <td>

                                                     <div class="card-body">
                                                    <div class="icheck1">
                                                      <fieldset>
                                                        <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                        <label for="input-2"><i class="ft-plus"></i> Add</label>
                                                      </fieldset>
                                                    </div>
                                                  </div>

                                                  <div class="card-body">
                                                        <div class="icheck1">
                                                          <fieldset>
                                                            <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                            <label for="input-2"><i class="ft-edit"></i> Edit</label>
                                                          </fieldset>
                                                        </div>
                                                      </div>

                                                      <div class="card-body">
                                                            <div class="icheck1">
                                                              <fieldset>
                                                                <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="input-2" checked="" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                                <label for="input-2"><i class="ft-trash"></i> Delete</label>
                                                              </fieldset>
                                                            </div>
                                                          </div>
                                                </td>
          
                                              
                                      
                                              </tr>       
                                  </tbody>
                                </table>
                              </div> --}}

                        
                       
                       
                    
                      <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="ft-save"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         
        
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


@endsection



@section('page_vendor_js')

<script src="{{asset('vendor/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('vendor/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
  {{-- <script src="{{asset('vendor/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}" --}}
  
@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/forms/checkbox-radio.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/switch.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/js/scripts/forms/input-groups.min.js')}}" type="text/javascript"></script>
  {{-- <script src="{{asset('vendor/js/scripts/tables/components/table-components.js')}}" type="text/javascript"></script> --}}

  <script>

    $(document).ready(function () {
      $('input').iCheck({
    checkboxClass: 'icheckbox_minimal',
    radioClass: 'iradio_minimal',
    increaseArea: '20%' // optional
  });
    });
  </script>

@endsection
