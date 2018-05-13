<!-- Cart Part -->
<ul class="nav navbar-right cart-pop">
  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont">{{Cart::count()}}</span> <i class="flaticon-shopping-bag"></i> <strong>My Cart</strong> <br>
  <span class="items-price">{{Cart::subtotal()}}</span></a>
    <ul class="dropdown-menu">
      <li>
        <div class="media-left"> <a href="#." class="thumb"> <img src="{{asset('template1/images/item-img-1-1.jpg')}}" class="img-responsive" alt="" > </a>          </div>
        <div class="media-body"> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> <span>250 x 1</span> </div>
      </li>
      <li>
        <div class="media-left"> <a href="#." class="thumb"> <img src="{{asset('template1/images/item-img-1-2.jpg')}}" class="img-responsive" alt="" > </a>          </div>
        <div class="media-body"> <a href="#." class="tittle">Funda Para Ebook 7" full HD</a> <span>250 x 1</span> </div>
      </li>
      <li class="btn-cart"> <a href="{{route('cart.index')}}" class="btn-round">View Cart</a> </li>
    </ul>
  </li>
</ul>
</div>