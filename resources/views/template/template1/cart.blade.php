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
          <div class="media-body"> <span>Step 1</span>
            <h6>Shopping Cart</h6>
          </div>
        </li>

        {{--
        <!-- Step 2 -->
        <li class="col-sm-3">
          <div class="media-left"> <i class="flaticon-business"></i> </div>
          <div class="media-body"> <span>Step 2</span>
            <h6>Payment Methods</h6>
          </div>
        </li> --}}

        <!-- Step 3 -->
        <li class="col-sm-3">
          <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
          <div class="media-body"> <span>Step 2</span>
            <h6>Delivery Information</h6>
          </div>
        </li>

        <!-- Step 4 -->
        <li class="col-sm-3">
          <div class="media-left"> <i class="fa fa-check"></i> </div>
          <div class="media-body"> <span>Step 3</span>
            <h6>Confirmation</h6>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!-- Shopping Cart -->
  <section class="shopping-cart padding-bottom-60">
    <div class="container">
      @if(Cart::count())
      <h5>{{Cart::count()}} Item(s) in Shopping Cart</h5>
      <table class="table">
        <thead>
          <tr>
            <th>Items</th>
            <th class="text-center">Price</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Total Price </th>
            <th>&nbsp; </th>
          </tr>
        </thead>
        <tbody>
          @foreach(Cart::content() as $item)
          <!-- Item Cart -->
          <tr>
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
            </form>
          </tr>

          @endforeach
        </tbody>
      </table>
      <div class="g-totel">
        <h5>Grand total: <span>{{Cart::subtotal()}}</span></h5>
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
      <div class="pro-btn"> <a href="{{route('start')}}" class="btn-round btn-light">Continue Shopping</a> @if(Cart::count())<a href="{{route('check_out.index')}}"
          class="btn-round">Go Delivery Information</a> @endif </div>
    </div>
  </section>













</div>
<!-- End Content -->
@endsection