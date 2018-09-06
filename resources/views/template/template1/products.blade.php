@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

  <!-- Products -->
  <section class="padding-top-40 padding-bottom-60">
    <div class="container">
      <div class="row">

        <!-- Shop Side Bar -->
        <div class="col-md-3">
          <div class="shop-side-bar">

            <!-- Categories -->
            <h6>Categories</h6>
            <div class="checkbox checkbox-primary">
              <ul>
                <li>
                  <input id="cate1" class="styled" type="checkbox">
                  <label for="cate1"> Home Audio & Theater </label>
                </li>
                <li>
                  <input id="cate2" class="styled" type="checkbox">
                  <label for="cate2"> TV & Video</label>
                </li>
                <li>
                  <input id="cate3" class="styled" type="checkbox">
                  <label for="cate3"> Camera, Photo & Video</label>
                </li>
                <li>
                  <input id="cate4" class="styled" type="checkbox">
                  <label for="cate4"> Cell Phones & Accessories</label>
                </li>
                <li>
                  <input id="cate5" class="styled" type="checkbox">
                  <label for="cate5"> Headphones</label>
                </li>
                <li>
                  <input id="cate6" class="styled" type="checkbox">
                  <label for="cate6"> Video Games</label>
                </li>
                <li>
                  <input id="cate7" class="styled" type="checkbox">
                  <label for="cate7"> Bluetooth & Wireless Speakers</label>
                </li>
                <li>
                  <input id="cate8" class="styled" type="checkbox">
                  <label for="cate8"> Gaming Console</label>
                </li>
                <li>
                  <input id="cate9" class="styled" type="checkbox">
                  <label for="cate9"> Computers & Tablets</label>
                </li>
                <li>
                  <input id="cate10" class="styled" type="checkbox">
                  <label for="cate10"> Monitors</label>
                </li>
                <li>
                  <input id="cate11" class="styled" type="checkbox">
                  <label for="cate11"> Home Appliances</label>
                </li>
                <li>
                  <input id="cate12" class="styled" type="checkbox">
                  <label for="cate12">Office Supplies </label>
                </li>
              </ul>
            </div>

            <!-- Categories -->
            <h6>Price</h6>
            <!-- PRICE -->
            <div class="cost-price-content">
              <div id="price-range" class="price-range"></div>
              <span id="price-min" class="price-min">20</span> <span id="price-max" class="price-max">80</span> <a href="#."
                class="btn-round">Filter</a> </div>

            <!-- Featured Brands -->
            <h6>Featured Brands</h6>
            <div class="checkbox checkbox-primary">
              <ul>
                <li>
                  <input id="brand1" class="styled" type="checkbox">
                  <label for="brand1"> Apple <span>(217)</span> </label>
                </li>
                <li>
                  <input id="brand2" class="styled" type="checkbox">
                  <label for="brand2"> Acer <span>(79)</span> </label>
                </li>
                <li>
                  <input id="brand3" class="styled" type="checkbox">
                  <label for="brand3"> Asus <span>(283)</span> </label>
                </li>
                <li>
                  <input id="brand4" class="styled" type="checkbox">
                  <label for="brand4">Samsung <span>(116)</span> </label>
                </li>
                <li>
                  <input id="brand5" class="styled" type="checkbox">
                  <label for="brand5"> LG <span>(29)</span> </label>
                </li>
                <li>
                  <input id="brand6" class="styled" type="checkbox">
                  <label for="brand6"> Electrolux <span>(179)</span> </label>
                </li>
                <li>
                  <input id="brand7" class="styled" type="checkbox">
                  <label for="brand7"> Toshiba <span>(38)</span> </label>
                </li>
                <li>
                  <input id="brand8" class="styled" type="checkbox">
                  <label for="brand8"> Sharp <span>(205)</span> </label>
                </li>
                <li>
                  <input id="brand9" class="styled" type="checkbox">
                  <label for="brand9"> Sony <span>(35)</span> </label>
                </li>
                <li>
                  <input id="brand10" class="styled" type="checkbox">
                  <label for="brand10"> HTC <span>(59)</span> </label>
                </li>
                <li>
                  <input id="brand11" class="styled" type="checkbox">
                  <label for="brand11"> Lenovo <span>(68)</span> </label>
                </li>
                <li>
                  <input id="brand12" class="styled" type="checkbox">
                  <label for="brand12">Sanyo  (19) </label>
                </li>
              </ul>
            </div>

            <!-- Colors -->
            {{--
            <h6>Size</h6>
            <div class="rating">
              <ul>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> <span>(218)</span></a></li>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(178)</span></a></li>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(79)</span></a></li>
                <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(188)</span></a></li>
              </ul>
            </div> --}}

            <!-- Colors -->
            <h6>Size</h6>
            <div class="sizes"> <a href="#.">S</a> <a href="#.">M</a> <a href="#.">L</a> <a href="#.">XL</a> </div>

            <!-- Colors -->
            <h6>Colors</h6>
            <div class="checkbox checkbox-primary">
              <ul>
                <li>
                  <input id="colr1" class="styled" type="checkbox">
                  <label for="colr1"> Red <span>(217)</span> </label>
                </li>
                <li>
                  <input id="colr2" class="styled" type="checkbox">
                  <label for="colr2"> Yellow <span> (179) </span> </label>
                </li>
                <li>
                  <input id="colr3" class="styled" type="checkbox">
                  <label for="colr3"> Black <span>(79)</span> </label>
                </li>
                <li>
                  <input id="colr4" class="styled" type="checkbox">
                  <label for="colr4">Blue <span>(283) </span></label>
                </li>
                <li>
                  <input id="colr5" class="styled" type="checkbox">
                  <label for="colr5"> Grey <span> (116)</span> </label>
                </li>
                <li>
                  <input id="colr6" class="styled" type="checkbox">
                  <label for="colr6"> Pink<span> (29) </span></label>
                </li>
                <li>
                  <input id="colr7" class="styled" type="checkbox">
                  <label for="colr7"> White <span> (38)</span> </label>
                </li>
                <li>
                  <input id="colr8" class="styled" type="checkbox">
                  <label for="colr8">Green <span>(205)</span></label>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Products -->
        <div class="col-md-9">

          <!-- Short List -->
          <div class="short-lst">
            <h2>Cell Phones & Accessories</h2>
            <ul>
              <!-- Short List -->
              <li>
                <p>Showing {{$products->firstItem()}}–{{$products->lastItem()}} of {{$products->total()}}</p>
              </li>
              <!-- Short  -->
              {{--
              <li>
                <select class="selectpicker">
                          <option>Show 12 </option>
                          <option>Show 24 </option>
                          <option>Show 32 </option>
                        </select>
              </li> --}}
              <!-- by Default -->
              <li>
                <select class="selectpicker">
                          <option>Sort by Default </option>
                          <option>Low to High </option>
                          <option>High to Low </option>
                        </select>
              </li>

              <!-- Grid Layer -->
              {{--
              <li class="grid-layer"> <a href="#."><i class="fa fa-list margin-right-10"></i></a> <a href="#." class="active"><i class="fa fa-th"></i></a>                </li>
              <li>
                <!-- Columns -->
                <select class="selectpicker">
                          <option>4 Columns </option>
                          <option>3 Columns </option>
                          <option>5 Columns</option>
                        </select>
              </li> --}}
            </ul>
          </div>

          <!-- Items -->
          <div class="item-col-4">
            @foreach($products as $product)
            <!-- Product -->
            <div class="product">
              <article> <img class="img-responsive" src="{{('template1/images/item-img-1-1.jpg')}}" alt=""> @if($product->discount)
                <span class="sale-tag">-{{$product->discount}}%</span> @endif
                <!-- Content -->
                <span class="tag">{{$product->category->name}}</span>
                <div><a href="{{route('product.show',$product->id)}}" class="tittle">{{$product->name}}</a></div>
                <!-- Reviews -->
                @if($product->discount)
                <div class="price">{{$product->presentPrice()}} {{-- <span>{{$product->presentPrice()}}</span> --}}
                </div>
                @else
                <div class="price">{{$product->presentPrice()}}</div>

                @endif
                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
            </div>
            @endforeach


            <!-- pagination -->
            {{--
            <ul class="pagination">
              <li> <a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
              <li><a class="active" href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li> <a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
            </ul> --}} {{ $products->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>









</div>
<!-- End Content -->
@endsection