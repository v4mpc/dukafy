@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

  <!-- Ship Process -->
  <div class="ship-process padding-top-30 padding-bottom-30">
    <div class="container">
      <ul class="row">

        <!-- Step 1 -->
        <li class="col-sm-3 current">
          <div class="media-left"> <i class="flaticon-shopping"></i> </div>
          <div class="media-body"> 
            <h6>Shopping Cart</h6>
          </div>
        </li>

      
      </ul>
    </div>
  </div>

  <!-- Shopping Cart -->
  <section class="shopping-cart padding-bottom-60">
    <div class="container " style="overflow-x:auto;">
      @if(Cart::count())
      <h5><span class="itm-cont">{{Cart::count()}}</span> Item(s) in Shopping Cart</h5>
      <div class="ressive">
      <table class="table hidden-xs hidden-sm">
        <thead>
          <tr>
            <th>Items</th>
            <th class="text-center">Unit Price ({{$settings->currencyName()}})</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Total Price ({{$settings->currencyName()}}) </th>
            <th>&nbsp; </th>
          </tr>
        </thead>
        <tbody>
          @foreach(Cart::content() as $item)
          <!-- Item Cart -->
          <tr class="item{{$item->rowId}}">
            {{--
            <td>
              <div class="media">
                <div class="media-left"> <a href="#."> <img class="img-responsive" src="{{asset('template1/images/item-img-1-1.jpg')}}" alt="" > </a>                  </div>
                <div class="media-body">
                  <p>{{$item->name}}</p>
                </div>
              </div>
            </td>
            <td class="text-center padding-top-60">{{$item->price}}</td>
            <td class="text-center">
              <!-- Quinty -->

              <div class="quinty padding-top-20">
                <input type="number" value="{{$item->qty}}">
              </div>
            </td>
            <td class="text-center padding-top-60">{{$item->price*$item->qty}}</td>
            <td class="text-center padding-top-60"><a href="{{route('cart.destroy',$item->id)}}" onclick="event.preventDefault();document.getElementById('remove-form').submit();"
                class="remove"><i class="fa fa-close"></i></a></td>

            </a>

            <form id="remove-form" action="{{ route('cart.destroy',$item->rowId) }}" method="POST" style="display: none;">
              {{ csrf_field() }} {{method_field('DELETE')}}
            </form> --}}

            <td>
              <div class="media">
                <div class="media-left"> <a href="{{route('product.show',$item->model->id)}}"> <img class="img-responsive" src="{{asset('images/'.$item->model->images[0]->image)}}" alt="" > </a>                  </div>
                <div class="media-body">
                  <p>{{$item->name}}</p>
                </div>
              </div>
            </td>
            <td class="text-center padding-top-60">{{number_format($item->price)}}</td>
            <td class="text-center">
              <!-- Quinty -->

              <div class="quinty padding-top-20">
                <input type="number" value="{{$item->qty}}" disabled>
              </div>
            </td>
            <td class="text-center padding-top-60">{{number_format($item->price*$item->qty)}}</td>
            <td class="text-center padding-top-60"><a href="#" data-id="{{$item->rowId}}" class="remove"><i class="fa fa-close"></i></a></td>

            </a>



          </tr>

          @endforeach
        </tbody>
      </table>


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
      <div class="g-totel">
        <h5>Grand total: <span class="items-price">{{Cart::subtotal()}} {{$settings->currencyName()}}</span></h5>
      </div>

            <div class="pay-method">
                <div class="row">
                    <div class="col-md-6">

                        <!-- Your information -->
                        <div class="heading">
                            <h2>Your information</h2>
                            <hr>
                        </div>
                        <form action="{{route('order.store')}}" id="checkout-form" method="POST">
                            {{csrf_field()}}
                            <div class="row">

                                <!-- Name -->
                                <div class="col-sm-6">
                                    <label> <span class="required">*</span> Name
                    <input class="form-control" type="text" name="first_name" required>
                  </label>
                                </div>

                    


                                <!-- Address -->
                                <div class="col-sm-8">
                                    <label>  <span class="required">*</span>Address
                    <input class="form-control" type="text" name="address" required>
                  </label>
                                </div>

                                <!-- Phone -->
                                <div class="col-sm-6">
                                    <label> <span class="required">*</span> Phone
                    <input class="form-control" type="text" name="phone" required>
                  </label>
                                </div>

                                <!-- Number -->
                                <div class="col-sm-6">
                                    <label> <span class="required">*</span> Email
                    <input class="form-control" type="email" name="email" required>
                  </label>
                                </div>

                                <div class="col-sm-10">
                                    <label for="">Comment</label>
                                    <textarea class="form-control" name="comment" cols="40" rows="8" id="" placeholder="Any Special Requests or delivery preference? Let us know here."></textarea>
                                </div>

                                <div class="col-sm-10">
                                    <p> <span class="required">*</span><i> Means the field is required!</i></p>
                                </div>
                            </div>
                        </form>
                    </div>

                  
                </div>
            </div>

            <!-- Button -->
            <div class="pro-btn"> <a href="{{route('start')}}" class="btn-round btn-light">Continue shopping</a> <a href="{{route('order.store')}}"
                    onclick="event.preventDefault();document.getElementById('checkout-form').submit();" class="btn-round">Place Order</a>                {{--
                <form action="{{route('order.store')}}" method="post"></form> --}}

            </div>
        
      @else
      <div>
        <h5>No item in Cart!</h5>

      </div>
      @endif


      <!-- Promotion -->
      <div class="promo">
        {{--
        <div class="coupen">
          <label> Promotion Code
                <input type="text" placeholder="Your code here">
                <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
              </label>
        </div> --}}

        <!-- Grand total -->

      </div>

      <!-- Button -->
      {{-- <div class="pro-btn"> <a href="{{route('start')}}" class="btn-round btn-light">Continue Shopping</a> @if(Cart::count())<a href="{{route('check_out.create')}}"
          class="btn-round" id="delivery-button">Go Delivery Information</a> @endif </div>
    </div> --}}
  </section>













</div>
<!-- End Content -->
@endsection