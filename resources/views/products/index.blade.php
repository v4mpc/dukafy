@extends('layouts.layout')

@section('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/tables/datatable/datatables.min.css')}}">


  

@endsection



@section('page_level_css')
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/core/colors/palette-gradient.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/fonts/simple-line-icons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/forms/checkboxes-radios.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/forms/switch.min.css')}}">

@endsection




@section('content')

<div class="app-content content">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
              <h3 class="content-header-title mb-0 d-inline-block">All Products</h3>
              <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Products</a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
              <div class="dropdown float-md-right">
              <a href="{{route('products.create')}}" class="btn btn-float btn-round btn-primary">Add Product</a>
                
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
                                    <th>Category</th>
                                    <th>Sub-category</th>
                                    <th>Age</th>
    
                                    <th>Price</th>
                                    {{-- <th>Action</th> --}}
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>320,800</td>
                                    {{-- <td> <div class="btn-group mr-1 mb-1">
                                            <button type="button" class="btn btn-light btn-sm"> Action</button>
                                            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Details</a>
                                              <a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a>
                                              <a class="dropdown-item" href="#"><i class="fa fa-recycle"></i> Out Of Stock</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="fa fa-remove"></i> Delete</a>
                                            </div>
                                          </div> --}}
</td>
                                        </tr>
                                  <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    
                                    <td>170,750</td>

                                  </tr>
                                  <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    
                                    <td>86,000</td>
                                  </tr>
                                  <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    
                                    <td>433,060</td>
                                  </tr>
                                  <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    
                                    <td>162,700</td>
                                  </tr>
                                  <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    
                                    <td>372,000</td>
                                  </tr>
                                  <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    
                                    <td>137,500</td>
                                  </tr>
                                  <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    
                                    <td>327,900</td>
                                  </tr>
                                  <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    
                                    <td>205,500</td>
                                  </tr>
                                  <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    
                                    <td>103,600</td>
                                  </tr>
                                  <tr>
                                    <td>Jena Gaines</td>
                                    <td>Sub-category Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    
                                    <td>90,560</td>
                                  </tr>
                                  <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    
                                    <td>342,000</td>
                                  </tr>
                                  <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    
                                    <td>470,600</td>
                                  </tr>
                                  <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    
                                    <td>313,500</td>
                                  </tr>
                                  <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    
                                    <td>385,750</td>
                                  </tr>
                                  <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    
                                    <td>198,500</td>
                                  </tr>
                                  <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Sub-categoryr (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    
                                    <td>725,000</td>
                                  </tr>
                                  <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    
                                    <td>237,500</td>
                                  </tr>
                                  <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    
                                    <td>132,000</td>
                                  </tr>
                                  <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    
                                    <td>217,500</td>
                                  </tr>
                                  <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    
                                    <td>345,000</td>
                                  </tr>
                                  <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Sub-categoryr (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    
                                    <td>675,000</td>
                                  </tr>
                                  <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    
                                    <td>106,450</td>
                                  </tr>
                                  <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>23</td>
                                    
                                    <td>85,600</td>
                                  </tr>
                                  <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Sub-categoryr (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    
                                    <td>1,200,000</td>
                                  </tr>
                                  <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    
                                    <td>92,575</td>
                                  </tr>
                                  <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    
                                    <td>357,650</td>
                                  </tr>
                                  <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    
                                    <td>206,850</td>
                                  </tr>
                                  <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Sub-categoryr (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    
                                    <td>850,000</td>
                                  </tr>
                                  <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>850,000</td>
                                    
                            
                                  </tr>
                                  <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    
                                    <td>95,400</td>
                                  </tr>
                                  <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    
                                    <td>114,500</td>
                                  </tr>
                                  <tr>
                                    <td>Prescott Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    
                                    <td>145,000</td>
                                  </tr>
                                  <tr>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    
                                    <td>235,500</td>
                                  </tr>
                                 
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Sub-category</th>
                                    <th>Age</th>
                                
                                    <th>Price</th>
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

@endsection



@section('page_level_js')

<script src="{{asset('vendor/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>

@endsection
{{-- <div class="btn-group mr-1 mb-1">
        <button type="button" class="btn btn-light"> Action</button>
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{-- <span class="sr-only">Toggle Dropdown</span> --}}
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i> Details</a>
          <a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a>
          <a class="dropdown-item" href="#"><i class="fa fa-recycle"></i> Out Of Stock</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-remove"></i> Delete</a>
        </div>
      </div> --}}