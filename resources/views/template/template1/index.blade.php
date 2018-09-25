@extends('template.template1.layout') 
@section('content')
<!-- Content -->
<div id="content">

  {{--
  <!-- Shipping Info -->
  <section class="shipping-info">
    <div class="container">
      <ul>

        <!-- Free Shipping -->
        <li>
          <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
          <div class="media-body">
            <h5>Free Shipping</h5>
            <span>On order over 99</span></div>
        </li>
        <!-- Money Return -->
        <li>
          <div class="media-left"> <i class="flaticon-arrows"></i> </div>
          <div class="media-body">
            <h5>Money Return</h5>
            <span>30 Days money return</span></div>
        </li>
        <!-- Support 24/7 -->
        <li>
          <div class="media-left"> <i class="flaticon-operator"></i> </div>
          <div class="media-body">
            <h5>Support 24/7</h5>
            <span>Hotline: (+100) 123 456 7890</span></div>
        </li>
        <!-- Safe Payment -->
        <li>
          <div class="media-left"> <i class="flaticon-business"></i> </div>
          <div class="media-body">
            <h5>Safe Payment</h5>
            <span>Protect online payment</span></div>
        </li>
      </ul>
    </div>
  </section> --}}

  <!-- tab Section -->
  <section class="featur-tabs padding-top-60 padding-bottom-60">
    @if(count($featureds))
    <div class="container">

      <!-- Nav tabs -->
     
      <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
     
        <li role="presentation" class="active">
            <a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">Featured</a>
          </li>
      
       
  
      </ul>



       <!-- Tab panes -->
       <div class="tab-content">
        <!-- Featured -->
        <div class="item-col-4">
          @foreach($featureds as $product)
          <!-- Product -->
          <div class="product">
              <article>
                  <div ><a href="{{route('product.show',$product->id)}}"><div class="text-center"><img class="img-responsive img-height" src="{{asset('images/'.$product->images[0]->image)}}" alt=""></div></a>                                    </div> @if($product->discount)
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
                  <a href="#." class="cart-btn" id="product{{$product->id}}" data-id="{{$product->id}}"><i class="icon-basket-loaded"></i></a>                                </article>
          </div>
          @endforeach

      </div>
          
        </div>

    </div>






      


        @endif

        @if(count($on_sales))

        <div class="container">

      
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
        
           
          
            <li role="presentation" class="active">
              <a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Onsale</a>
            </li>
  
          </ul>

                   <!-- Tab panes -->
       <div class="tab-content">
        <!-- Featured -->
        <div class="item-col-4">
          @foreach($on_sales as $product)
          <!-- Product -->
          <div class="product">
              <article>
                  <div ><a href="{{route('product.show',$product->id)}}"><div class="text-center"><img class="img-responsive img-height" src="{{asset('images/'.$product->images[0]->image)}}" alt=""></div></a>                                    </div> @if($product->discount)
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
                  <a href="#." class="cart-btn" id="product{{$product->id}}" data-id="{{$product->id}}"><i class="icon-basket-loaded"></i></a>                                </article>
          </div>
          @endforeach

      </div>
       </div>
        
            


      



        </div>
        @endif
        @if(count($recent_products))
        <div class="container">
        
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
            <li role="presentation" class="active">
              <a href="#recent-product" aria-controls="recent-product" role="tab" data-toggle="tab">Recent Product</a>
            </li>
         
          </ul>

         


                <!-- Tab panes -->
       <div class="tab-content">
        <!-- Featured -->
        <div class="item-col-4">
          @foreach($recent_products as $product)
          <!-- Product -->
          <div class="product">
              <article>
                  <div ><a href="{{route('product.show',$product->id)}}"><div class="text-center"><img class="img-responsive img-height" src="{{asset('images/'.$product->images[0]->image)}}" alt=""></div></a>                                    </div> @if($product->discount)
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
                  <a href="#." class="cart-btn" id="product{{$product->id}}" data-id="{{$product->id}}"><i class="icon-basket-loaded"></i></a>                                </article>
          </div>
          @endforeach

      </div>
          
        </div>





      </div>

      @endif
     


     


       
  
  
        

     
    </div>
  </section>










</div>
<!-- End Content -->
@endsection