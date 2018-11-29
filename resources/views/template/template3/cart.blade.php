@extends('template.template3.layout')
@section('content')

<div class="body-content outer-top-xs">
        <div class="container">
            <div class="row inner-bottom-sm">
                <div class="shopping-cart">
                    <div class="col-md-12 col-sm-12 shopping-cart-table ">
        <div class="tsive">
            <table class="table table-bordered hidden-xs hidden-sm">
                <thead>
                    <tr>
                        <th class="cart-romove item">Remove</th>
                        <th class="cart-description item">Image</th>
                        <th class="cart-product-name item">Product Name</th>
                        {{-- <th class="cart-edit item">Edit</th> --}}
                        <th class="cart-qty item">Quantity</th>
                        <th class="cart-sub-total item">Subtotal (TZS)</th>
                        <th class="cart-total last-item">Grandtotal (TZS)</th>
                    </tr>
                </thead><!-- /thead -->
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="shopping-cart-btn">
                                <span class="">
                                <a href="{{route('start')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                    {{-- <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a> --}}
                                </span>
                            </div><!-- /.shopping-cart-btn -->
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                        @foreach(Cart::content() as $item)
                    <tr>
                        <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                        <td class="cart-image">
                            <a class="entry-thumbnail" href="{{route('product.show',$item->model->id)}}">
                                <img src="{{asset('images/'.$item->model->images[0]->image)}}" class="img-responsive img-height" alt="">
                            </a>
                        </td>
                        <td class="cart-product-name-info">
                            <h4 class='cart-product-description'><a href="{{route('product.show',$item->model->id)}}">{{$item->name}}</a></h4>
                            <div class="row">
                             
                                
                            </div><!-- /.row -->
                           
                        </td>
                       
                        <td class="cart-product-quantity">
                            <div class="quant-input">
                                    <div class="arrows">
                                      <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                      <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                    </div>
                                    <input disabled type="text" value="{{$item->qty}}">
                              </div>
                        </td>
                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{number_format($item->price)}}</span></td>
                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{number_format($item->price*$item->qty)}}</span></td>
                    </tr>
                    @endforeach
                    
                </tbody><!-- /tbody -->
            </table><!-- /table -->
            <table class="table hidden-md hidden-lg">
                    <thead>
                      <tr>
                        <th>Item</th>
                        <th>Total</th>
                      </tr>
            
                    </thead>
                    <tbody>
                        @foreach(Cart::content() as $item)
                      <tr>
                        <td>{{$item->name}} <strong>X</strong> {{$item->qty}}</td>
                        <td>{{number_format($item->price*$item->qty)}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                   
                  </table>
        </div>
    </div><!-- /.shopping-cart-table -->				
   
    <div class="col-md-4 col-sm-12 cart-shopping-total">
            @if(Cart::count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        {{-- <div class="cart-sub-total">
                            Subtotal<span class="inner-left-md">$600.00</span>
                        </div> --}}
                        <div class="cart-grand-total">
                            Grand Total<span class="inner-left-md">{{Cart::subtotal()}} TZS</span>
                        </div>
                    </th>
                </tr>
            </thead><!-- /thead -->
            
        </table><!-- /table -->
        
        @endif
    </div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->


    
            </div> <!-- /.row -->

            <h1>Delivery Information</h1>
            <div class="panel-body">
                <div class="row">		
    
                    
    
                    <!-- already-registered-login -->
                    <div class="col-md-6 col-sm-6 already-registered-login">
                        {{-- <h4 class="checkout-subtitle">Already registered?</h4>
                        <p class="text title-tag-line">Please log in below:</p> --}}
                        <form class="register-form" role="form" action="{{route('order.store')}}" id="confirmation-form" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1"> Name <span>*</span></label>
                                        <input type="text" class="form-control unicase-form-control text-input" name="first_name" id="exampleInputEmail1" required>
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
                          <button type="button"  class="btn-upper btn btn-primary">Place Order</button>
                        </form>
                    </div>	
                    <!-- already-registered-login -->		
    
                </div>			
            </div>

    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection