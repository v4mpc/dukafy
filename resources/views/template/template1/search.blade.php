@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
        <div class="container">
            <div class="row">


                @if(count($products))
    @include('template.template1.filtersection')

                <!-- Products -->
                <div class="col-md-9">

                    <!-- Short List -->
                    <div class="short-lst">
                        {{--
                        <h2>{{$products->count()}} result(s) for '{{request()->input('query')}}'</h2> --}}
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
                            <li class="grid-layer"> <a href="#."><i class="fa fa-list margin-right-10"></i></a> <a href="#." class="active"><i class="fa fa-th"></i></a>                                </li>
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
                        {{-- @foreach($products as $product)
                        <!-- Product -->
                        <div class="product">
                            <article>
                                <div style="height:210px"><a href="{{route('product.show',$product->id)}}"><img class="img-responsive" src="{{asset('images/'.$product->images[0]->image)}}" alt=""></a>                                    </div> @if($product->discount)
                                <span class="sale-tag">-{{$product->discount}}%</span> @endif
                                <!-- Content -->
                                <span class="tag">{{$product->category->name}}</span>
                                <div><a href="{{route('product.show',$product->id)}}" class="tittle">{{$product->name}}</a></div>
                                <!-- Reviews -->
                                @if($product->discount)
                                <div class="price">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS <span>{{number_format($product->price)}}</span>
                                </div>
                                @else
                                <div class="price">{{number_format($product->price)}} TZS</div>

                                @endif
                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                        </div>
                        @endforeach --}}

                        <div class="product">
                            <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-1.jpg')}}" alt="">
                                <span class="sale-tag">-25%</span>

                                <!-- Content -->
                                <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                <!-- Reviews -->

                                <div class="price">350.00 <span>200.00</span></div>
                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                        </div>

                        <div class="product">
                            <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-2.jpg')}}" alt="">
                                <!-- Content -->
                                <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 </a>

                                <div class="price">350.00</div>
                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                        </div>


                        <!-- Product -->
                        <div class="product">
                            <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-3.jpg')}}" alt="">
                                <span class="new-tag">New</span>

                                <!-- Content -->
                                <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                <!-- Reviews -->

                                <div class="price">350.00</div>
                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                        </div>



                        <div class="product">
                            <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-1.jpg')}}" alt="">
                                <span class="sale-tag">-25%</span>

                                <!-- Content -->
                                <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                <!-- Reviews -->

                                <div class="price">350.00 <span>200.00</span></div>
                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                        </div>

                        <div class="product">
                            <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-2.jpg')}}" alt="">
                                <!-- Content -->
                                <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 </a>

                                <div class="price">350.00</div>
                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                        </div>


                        <!-- Product -->
                        <div class="product">
                            <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-3.jpg')}}" alt="">
                                <span class="new-tag">New</span>

                                <!-- Content -->
                                <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                <!-- Reviews -->

                                <div class="price">350.00</div>
                                <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                        </div>









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

                @else
                <!-- Error Page -->
                <section>
                    <div class="container">
                        <div class="order-success error-page"> <img src="images/error-img.jpg" alt="">
                            <h3><span>Product</span> Not Found</h3>
                            <p>We’re sorry the product you are looking for does not exist.<br> You could return to <a href="{{route('start')}}">homepage</a>                                or using <a href="#.">search!</a></p>
                        </div>
                    </div>
                </section>

                @endif

            </div>
        </div>
    </section>









</div>
<!-- End Content -->
@endsection