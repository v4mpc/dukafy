@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

  <!-- Products -->
  <section class="padding-top-40 padding-bottom-60">
    <div class="container">
      <div class="row">
        <!-- Shop Side Bar -->
        
        <!-- Products -->
        <div class="col-md-9">
          <div class="product-detail">
            <div class="product">
              <div class="row">
                <!-- Slider Thumb -->
                <div class="col-xs-5">
                  <article class="slider-item on-nav">
                   
                    <div id="slider" class="flexslider">
                      <ul class="slides">
                        @foreach($product->images as $image)
                        <li>
                          <img src="{{asset('images/'.$image->image)}}" alt="">
                        </li>
                        @endforeach
                        <!-- items mirrored twice, total of 12 -->
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                        @foreach($product->images as $image)
                        <li>
                          <img src="{{asset('images/'.$image->image)}}" alt="">
                        </li>
                        @endforeach


                        <!-- items mirrored twice, total of 12 -->
                      </ul>
                    </div>
                  </article>
                </div>
                <!-- Item Content -->
                <div class="col-xs-7">
                  <span class="tags">{{$product->category->name}}</span>
                  <h5>{{$product->name}}</h5>

                  <div class="row">
                    <div class="col-sm-6"><span class="price">{{number_format($product->selling_price())}} TZS</span></div>
                    <div class="col-sm-6">

                      <p>Availability: @if(!$product->out_stock)
                        <span class="in-stock">In stock</span></p>
                      @else
                      <span class="in-stock">Out stock</span></p>
                      @endif
                    </div>
                  </div>
                 
                  <div class="bullet-round-list">
                    {!!$product->description!!}
                  </div>
                  

                  <form action="{{route('cart.store')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="name" value="{{$product->name}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <div class="quinty">
                      <input type="number" name="quantity" value="1"> </div>

                    <button class="btn-round" type="submit"><i class="icon-basket-loaded margin-right-5"></i> BUY</button>
                    @if($settings->whatsapp!=null)
                    <a href="https://wa.me/255{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" data-action="{{route('product.show',$product->id)}}" id="whatsapp" class="btn-round"><i  class="fa fa-whatsapp white-fonts"></i></a>
                    @endif


                  </form>
                 
                </div>
              </div>
            </div>
           
          </div>
          
        </div>
      </div>
    </div>
  </section>
  

  <!-- Newslatter -->

</div>
<!-- End Content -->
@endsection