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
    
                    
    
                    <!-- already-registered-login -->
                    <div class="col-md-6 col-sm-6 already-registered-login">
                        {{-- <h4 class="checkout-subtitle">Already registered?</h4>
                        <p class="text title-tag-line">Please log in below:</p> --}}
                        <form class="register-form" role="form" action="{{route('order.store')}}" id="confirmation-form" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1"> First Name <span>*</span></label>
                                        <input type="text" class="form-control unicase-form-control text-input" name="first_name" id="exampleInputEmail1" required>
                                      </div>

                                      <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1"> Last Name <span>*</span></label>
                                            <input type="text" class="form-control unicase-form-control text-input" name="last_name" id="exampleInputEmail1"  required>
                                          </div>
                            <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email"  required>
                          </div>

                          <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1"> Address <span>*</span></label>
                                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="address" required >
                              </div>
                          <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Mobile <span>*</span></label>
                            <input type="number" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="phone" required placeholder="0XXXXXXXXX">
                            
                          </div>

                          <div class="form-group">
                                <label class="info-title" for="exampleInputPassword1">Comment </label>
                                <textarea class="form-control unicase-form-control text-input" name="comment" id="" cols="30" rows="5" placeholder="Special Note of delivery..."></textarea>
                                
                              </div>
                          <button type="button" id="confirm-order" class="btn-upper btn btn-primary checkout-page-button">Place Order</button>
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
                                  <div class="panel-body table-responsive">
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
                         
                              
                        </div><!-- /.checkout-steps -->
                    </div>
                    <div class="col-md-4">
                       
    <!-- checkout-progress-sidebar -->				</div>
                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
          	</div><!-- /.container -->
    </div><!-- /.body-content -->
    
@endsection