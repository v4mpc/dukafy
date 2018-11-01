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
                                <p>Showing {{$products->firstItem()}}&ndash;{{$products->lastItem()}} of {{$products->total()}}</p>
                            </li>
                           
                        </ul>
                    </div>

                    <!-- Items -->
                    <div class="item-col-4">
                        @foreach($products as $product)
                        <!-- Product -->
                        <div class="product">
                            <article>
                                <div ><a href="{{route('product.show',$product->id)}}"><div class="text-center"><img class="img-responsive " src="{{asset('images/'.$product->images[0]->image)}}" alt=""></div></a>                                    </div> @if($product->discount)
                                <span class="sale-tag">-{{$product->discount}}%</span> @endif
                                <!-- Content -->
                                <span class="tag">{{$product->category->name}}</span>
                                <div class="hidden-xs hidden-sm"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}" class="tittle">{{strlen($product->name)>36?str_limit($product->name,36):$product->name}}</a></div>
                                <div class="hidden-md hidden-lg"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}" class="tittle">{{strlen($product->name)>28?str_limit($product->name,28):$product->name}}</a></div>
                                
                                @if($product->discount)
                                <div class="price">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS <span>{{number_format($product->price)}}</span>
                                </div>
                                @else
                                <div class="price">{{number_format($product->price)}} TZS</div>

                                @endif
                                <a href="#." class="cart-btn" id="product{{$product->id}}" data-id="{{$product->id}}"><i class="icon-basket-loaded"></i></a>                                </article>
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