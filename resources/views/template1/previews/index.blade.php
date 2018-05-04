

@extends('template.template1.previews.layout')



@section('content')
 <!-- Content -->
 <div id="content"> 
    
    {{-- <!-- Shipping Info -->
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
      <div class="container"> 
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
          <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">Featured</a></li>
         
          <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Onsale</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- Featured -->
          <div role="tabpanel" class="tab-pane active fade in" id="featur"> 
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav"> 
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-1.jpg')}}" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00 </div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-2.jpg')}}" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00 <span>200.00</span></div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-3.jpg')}}" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-4.jpg')}}" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-5.jpg')}}" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-6.jpg')}}" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00 <span>200.00</span></div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-7.jpg')}}" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-8.jpg')}}" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
            </div>
          </div>
          
         
          
          <!-- on sale -->
          <div role="tabpanel" class="tab-pane fade" id="on-sal"> 
            <!-- Items Slider -->
            <div class="item-col-5"> 
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-3.jpg')}}" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a> 
                  <!-- Reviews -->
                 
                  <div class="price">350.00 </div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-1.jpg')}}" alt="" > <span class="sale-tag">-25%</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">350.00 <span>200.00</span></div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-2.jpg')}}" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-5.jpg')}}" alt="" > <span class="new-tag">New</span> 
                  
                  <!-- Content --> 
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
              
              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="{{asset('template1/images/item-img-1-4.jpg')}}" alt="" > 
                  <!-- Content --> 
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  
    
 
        

    
    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="{{asset('template1/images/c-img-1.png')}}" alt="" ></li>
          <li><img src="{{asset('template1/images/c-img-2.png')}}" alt="" ></li>
          <li><img src="{{asset('template1/images/c-img-3.png')}}" alt="" ></li>
          <li><img src="{{asset('template1/images/c-img-4.png')}}" alt="" ></li>
          <li><img src="{{asset('template1/images/c-img-5.png')}}" alt="" ></li>
        </ul>
      </div>
    </section>
    
    <!-- Newslatter -->

  </div>
  <!-- End Content --> 

  @endsection