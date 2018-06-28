@extends('template.template3.layout')

@section('content')

<div class="body-content outer-top-bd">
        <div class="container">
            <div class="checkout-box inner-bottom-sm">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-group checkout-steps" id="accordion">
                            <!-- checkout-step-01  -->
    <div class="panel panel-default checkout-step-01">
    
        <!-- panel-heading -->
            <div class="panel-heading">
            <h4 class="unicase-checkout-title">
                <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                  <span>1</span>Delivery Information
                </a>
             </h4>
        </div>
        <!-- panel-heading -->
    
        <div id="collapseOne" class="panel-collapse collapse in">
    
            <!-- panel-body  -->
            <div class="panel-body">
                <div class="row">		
    
                    {{-- <!-- guest-login -->			
                    <div class="col-md-6 col-sm-6 guest-login">
                        <h4 class="checkout-subtitle">Checkout as a Guest or Register Login</h4>
                        <p class="text title-tag-line">Register with us for future convenience:</p>
    
                        <!-- radio-form  -->
                        <form class="register-form" role="form">
                            <div class="radio radio-checkout-unicase">  
                                <input id="guest" type="radio" name="text" value="guest" checked>  
                                <label class="radio-button guest-check" for="guest">Checkout as Guest</label>  
                                  <br>
                                <input id="register" type="radio" name="text" value="register">  
                                <label class="radio-button" for="register">Register</label>  
                            </div>  
                        </form>
                        <!-- radio-form  -->
    
                        <h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
                        <p class="text title-tag-line ">Register with us for future convenience:</p>
                        
                        <ul class="text instruction inner-bottom-30">
                            <li class="save-time-reg">- Fast and easy check out</li>
                            <li>- Easy access to your order history and status</li>
                        </ul>
    
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Continue</button>
                    </div>
                    <!-- guest-login --> --}}
    
                    <!-- already-registered-login -->
                    <div class="col-md-6 col-sm-6 already-registered-login">
                        {{-- <h4 class="checkout-subtitle">Already registered?</h4>
                        <p class="text title-tag-line">Please log in below:</p> --}}
                        <form class="register-form" role="form" action="{{route('order.store')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1"> First Name <span>*</span></label>
                                        <input type="text" class="form-control unicase-form-control text-input" name="first_name" id="exampleInputEmail1" placeholder="Bob">
                                      </div>

                                      <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1"> Last Name <span>*</span></label>
                                            <input type="text" class="form-control unicase-form-control text-input" name="last_name" id="exampleInputEmail1" placeholder="Alice">
                                          </div>
                            <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email" placeholder="admin@gadgets.com">
                          </div>

                          <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1"> Address <span>*</span></label>
                                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="address" required placeholder="admin@gadgets.com">
                              </div>
                          <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Mobile <span>*</span></label>
                            <input type="number" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="phone" required placeholder="0XXXXXXXXX">
                            
                          </div>

                          <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Comment </label>
                                <textarea class="form-control unicase-form-control text-input" name="comment" id="" cols="30" rows="5" placeholder="Special Note of delivery..."></textarea>
                                
                              </div>
                          <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Place Order</button>
                        </form>
                    </div>	
                    <!-- already-registered-login -->		
    
                </div>			
            </div>
            <!-- panel-body  -->
    
        </div><!-- row -->
    </div>
    <!-- checkout-step-01  -->
                            <!-- checkout-step-02  -->
                              <div class="panel panel-default checkout-step-02">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                      <span>2</span>Order Summary
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Unit Price (TZS)</th>
                                                <th>Total Price (TZS)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach(Cart::content() as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->qty}}</td>
                                                <td>{{number_format($item->price)}}</td>
                                                <td>{{number_format($item->price*$item->qty)}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Grand Total</th>
                                                <th>{{Cart::subtotal()}} TZS</th>
                                            </tr>
                                        </tfoot>

                                    </table>
                                  </div>
                                </div>
                              </div>
                              <!-- checkout-step-02  -->
    
                            <!-- checkout-step-03  -->
                          
                              <!-- checkout-step-03  -->
    
                            <!-- checkout-step-04  -->
                            {{-- <div class="panel panel-default checkout-step-04">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
                                        <span>4</span>Shipping Method
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div> --}}
                            <!-- checkout-step-04  -->
    
                            <!-- checkout-step-05  -->
                              {{-- <div class="panel panel-default checkout-step-05">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
                                        <span>5</span>Payment Information
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                                </div>
                            </div> --}}
                            <!-- checkout-step-05  -->
    
                            <!-- checkout-step-06  -->
                              {{-- <div class="panel panel-default checkout-step-06">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix">
                                        <span>6</span>Order Review
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                      </div>
                                </div>
                              </div> --}}
                              <!-- checkout-step-06  -->
                              
                        </div><!-- /.checkout-steps -->
                    </div>
                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
    {{-- <div class="checkout-progress-sidebar ">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-checkout-progress list-unstyled">
                        <li><a href="#">Billing Address</a></li>
                        <li><a href="#">Shipping Address</a></li>
                        <li><a href="#">Shipping Method</a></li>
                        <li><a href="#">Payment Method</a></li>
                    </ul>		
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- checkout-progress-sidebar -->				</div>
                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
          	</div><!-- /.container -->
    </div><!-- /.body-content -->
    
@endsection