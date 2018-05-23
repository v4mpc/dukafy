<!-- Cart Part -->
<ul class="nav navbar-right cart-pop">
  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont">{{Cart::count()}}</span> <i class="flaticon-shopping-bag"></i> <strong>My Cart</strong> <br>
  <span class="items-price">{{Cart::subtotal()}}</span></a>
    <ul class="dropdown-menu">
      @forelse(Cart::content() as $item)
      <li>
        {{--
        <div class="media-left"> <a href="#." class="thumb"> <img src="{{asset('template1/images/item-img-1-1.jpg')}}" class="img-responsive" alt="" > </a>          </div> --}}
        <div class="media-body"> <a href="#." class="tittle">{{$item->name}}</a> <span>{{number_format($item->price) }}TZS x {{$item->qty}}</span>          </div>
      </li>
      @empty

      <p>No item!</p>
      @endforelse


      <li class="btn-cart"> <a href="{{route('cart.index')}}" class="btn-round">View Cart</a> </li>
    </ul>
  </li>
</ul>

</div>