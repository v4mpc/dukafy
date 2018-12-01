

       @if(!is_null($slider_images[0]->image)||!is_null($slider_images[1]->image)||!is_null($slider_images[2]->image))
<div class="home-v1-slider slid-sec" >
        <!-- ========================================== SECTION – HERO : END========================================= -->
    
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            @if($slider_images->has(0) && !is_null($slider_images[0]->image))
            <div class="item" style="background-image: url({{asset('images/'.$slider_images[0]->image)}});">
             
            </div><!-- /.item -->


            @endif


            @if($slider_images->has(1) && !is_null($slider_images[1]->image))
            <div class="item" style="background-image: url({{asset('images/'.$slider_images[1]->image)}});">
             
            </div><!-- /.item -->


            @endif

@if($slider_images->has(2) && !is_null($slider_images[2]->image) )

<div class="item" style="background-image: url({{asset('images/'.$slider_images[2]->image)}});">
 
</div><!-- /.item -->


@endif
           


            
    
    
            
    
        
    
    
        </div><!-- /.owl-carousel -->
    
    <!-- ========================================= SECTION – HERO : END ========================================= -->
    
    </div><!-- /.home-v1-slider -->

    @endif
          
    
        <div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated" data-animation="fadeIn">
        <div class="tabs-block col-lg-12">
            <div class="products-carousel-tabs">
                @if(count($featureds))
                <ul class="nav nav-inline">
                    <li class="nav-item"><a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a></li>


                </ul>
                @endif
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                        <div class="woocommerce columns-3">
            <ul class="products">
    
                    @foreach($featureds as $product)
    
                <li class="product">
                    <div class="product-outer">
        <div class="product-inner">
            <span class="loop-product-categories"><a href="product-category.html" rel="tag">{{$product->category->name}}</a></span>
            <a href="{{route('product.show',$product->id)}}">
                <h3>{{$product->name}}</h3>
                <div class="product-thumbnail">
                    <img src="{{asset('images/'.$product->images[0]->image)}}" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive  " alt="">
                </div>
            </a>
    
            <div class="price-add-to-cart">
                <span class="price">
                        @if($product->discount)
                    <span class="electro-price">
                        <ins><span class="amount">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS</span></ins>
                                                <del><span class="amount">{{number_format($product->price)}}</span></del>
                                            <span class="amount"> </span>
                    </span>

                    @else
                    <span class="electro-price">
                            <ins><span class="amount">{{number_format($product->price)}} TZS</span></ins>
                                                    
                        </span>
                    @endif
                </span>
                <a  href="#." id="product{{$product->id}}" data-id="{{$product->id}}" class="button add_to_cart_button">BUY</a>
            </div><!-- /.price-add-to-cart -->

            @if($settings->whatsapp)
            <div class="hover-area">
                <div class="action-buttons">
    
                <a href="https://wa.me/255{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" rel="nofollow" title="Inquire this product" > <i class="fa fa-whatsapp" style="font-size:15px;color:green;"></i> Whatsapp</a>
    
                    
                </div>
            </div>
            @endif
          
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
                </li><!-- /.products -->
    
                @endforeach
               
                        </div>
                        
                    </div>
     


        </div><!-- /.tabs-block -->
    </div><!-- /.deals-and-tabs -->
                    <!-- ============================================================= 2-1-2 Product Grid ============================================================= -->
    

{{-- on sales                     --}}



 
 


     
    </div><!-- /.tabs-block -->
</div><!-- /.deals-and-tabs -->
                <!-- ============================================================= 2-1-2 Product Grid ============================================================= -->




                <div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated" data-animation="fadeIn">
                        <div class="tabs-block col-lg-12">
                            <div class="products-carousel-tabs">
                                @if(count($on_sales))
                                <ul class="nav nav-inline">
                                    <li class="nav-item"><a class="nav-link active" href="#tab-products-1" data-toggle="tab">On Sale</a></li>
                
                
                                </ul>
                                @endif
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                                        <div class="woocommerce columns-3">
                            <ul class="products">
                    
                                    @foreach($on_sales as $product)
                    
                                <li class="product">
                                    <div class="product-outer">
                        <div class="product-inner">
                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">{{$product->category->name}}</a></span>
                            <a href="{{route('product.show',$product->id)}}">
                                <h3>{{$product->name}}</h3>
                                <div class="product-thumbnail">
                                    <img src="{{asset('images/'.$product->images[0]->image)}}" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive  " alt="">
                                </div>
                            </a>
                    
                            <div class="price-add-to-cart">
                                <span class="price">
                                        @if($product->discount)
                                    <span class="electro-price">
                                        <ins><span class="amount">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS</span></ins>
                                                                <del><span class="amount">{{number_format($product->price)}}</span></del>
                                                            <span class="amount"> </span>
                                    </span>
                
                                    @else
                                    <span class="electro-price">
                                            <ins><span class="amount">{{number_format($product->price)}} TZS</span></ins>
                                                                    
                                        </span>
                                    @endif
                                </span>
                                <a  href="#." id="product{{$product->id}}" data-id="{{$product->id}}" class="button add_to_cart_button">BUY</a>
                            </div><!-- /.price-add-to-cart -->
                
                            @if($settings->whatsapp)
                            <div class="hover-area">
                                <div class="action-buttons">
                    
                                <a href="https://wa.me/255{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" rel="nofollow" title="Inquire this product" > <i class="fa fa-whatsapp" style="font-size:15px;color:green;"></i> Whatsapp</a>
                    
                                    
                                </div>
                            </div>
                            @endif
                          
                        </div><!-- /.product-inner -->
                    </div><!-- /.product-outer -->
                                </li><!-- /.products -->
                    
                                @endforeach
                               
                                        </div>
                                        
                                    </div>
                     
                
                
                        </div><!-- /.tabs-block -->
                    </div><!-- /.deals-and-tabs -->
                                    <!-- ============================================================= 2-1-2 Product Grid ============================================================= -->
                    
                
                {{-- on sales                     --}}
                
                
                
                 
                 
                
                
                     
                    </div><!-- /.tabs-block -->
                </div><!-- /.deals-and-tabs -->



{{-- recent products --}}

@if(count($recent_products))
<div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated" data-animation="fadeIn">
    <div class="tabs-block col-lg-12">
        <div class="products-carousel-tabs">
            <ul class="nav nav-inline">
               
                <li class="nav-item"><a class="nav-link active" href="#tab-products-2" data-toggle="tab">Recent Product</a></li>
               
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                    <div class="woocommerce columns-3">
        <ul class="products">

                @foreach($recent_products as $product)

            <li class="product">
                <div class="product-outer">
    <div class="product-inner">
        <span class="loop-product-categories"><a href="product-category.html" rel="tag">{{$product->category->name}}</a></span>
        <a href="{{route('product.show',$product->id)}}">
            <h3>{{$product->name}}</h3>
            <div class="product-thumbnail">
                <img src="{{asset('images/'.$product->images[0]->image)}}" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive  " alt="">
            </div>
        </a>

        <div class="price-add-to-cart">
            <span class="price">
                    @if($product->discount)
                <span class="electro-price">
                    <ins><span class="amount">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS</span></ins>
                                            <del><span class="amount">{{number_format($product->price)}}</span></del>
                                        <span class="amount"> </span>
                </span>

                @else
                <span class="electro-price">
                        <ins><span class="amount">{{number_format($product->price)}} TZS</span></ins>
                                                
                    </span>
                @endif
            </span>
            <a  href="#." id="product{{$product->id}}" data-id="{{$product->id}}" class="button add_to_cart_button">BUY</a>
        </div><!-- /.price-add-to-cart -->

        @if($settings->whatsapp)
        <div class="hover-area">
            <div class="action-buttons">

            <a href="https://wa.me/255{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" rel="nofollow" title="Inquire this product" > <i class="fa fa-whatsapp" style="font-size:15px;color:green;"></i> Whatsapp</a>

                
            </div>
        </div>
        @endif
      
    </div><!-- /.product-inner -->
</div><!-- /.product-outer -->
            </li><!-- /.products -->

            @endforeach
           
                    </div>
                    
                </div>
@endif

      

     
    </div><!-- /.tabs-block -->
</div><!-- /.deals-and-tabs -->
        

    </div>
</div>
    </div>


</div>
       

<!-- ============================================================= 2-1-2 Product Grid ============================================================= -->



    