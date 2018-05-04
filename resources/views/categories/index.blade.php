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
              <h3 class="content-header-title mb-0 d-inline-block">All Categories</h3>
              <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Categories</a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
              <div class="dropdown float-md-right">
              <button data-toggle="modal" data-target="#inlineForm" class="btn btn-float btn-round btn-primary">Add Category</button>
                
              </div>
            </div>
          </div>
            <!-- Modal create -->
            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
            aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Enter Category Name</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <form action="{{route('categories.store')}}" method="POST" >

                  {{csrf_field()}}
                    <div class="modal-body">
                      <label>Category Name </label>
                      <div class="form-group">
                        <input type="text" placeholder="category name" class="form-control" name="name">
                      </div>
                     
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                      value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Save">
                    </div>
                  </form>
                </div>
              </div>
            </div>



            
          <div class="content-body">

             @include('partials._messages')
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
                                    
                                    <th>Category</th>
                                    <th>Sub-category</th>
          
                                    <th>Action</th>    
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                  
                                 
                              @foreach($categories as $category)

                              <tr>
                                  
                              <td>{{$category->name}}</td>
                                  <td>
<ul>
  @foreach($category->subCategories as $sub_category)
<li>{{$sub_category->name}}</li>
@endforeach


</ul>

                                  </td>
                                 
                              
                                <td>
                                <a href="{{route('categories.edit', $category->id)}}" data-toggle="tooltip" data-original-title="Edit" data-placement="top"  class="btn btn-outline-success edit-item-btn"><i class="ft-edit"></i></a>
                                <a data-toggle="tooltip" data-id="{{$category->id}}"  data-original-title="Delete"  data-placement="top" data-url="/manage/categories/" data-name="Category"  class="btn btn-outline-danger edit-item-btn confirm-color" ><i class="ft-trash"></i></a>
                                   
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
