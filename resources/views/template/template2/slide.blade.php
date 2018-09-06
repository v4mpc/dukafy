

       @if(!is_null($slider_images[0]->image)||!is_null($slider_images[1]->image)||!is_null($slider_images[2]->image))
<div class="home-v1-slider" >
        <!-- ========================================== SECTION – HERO : END========================================= -->
    
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            @if(!is_null($slider_images[0]->image))
            <div class="item" style="background-image: url({{asset('images/'.$slider_images[0]->image)}});">
             
            </div><!-- /.item -->


            @endif


            @if(!is_null($slider_images[1]->image))
            <div class="item" style="background-image: url({{asset('images/'.$slider_images[1]->image)}});">
             
            </div><!-- /.item -->


            @endif


            @if(!is_null($slider_images[2]->image))
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
                <ul class="nav nav-inline">
                    
                    <li class="nav-item"><a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-products-2" data-toggle="tab">On Sale</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-products-3" data-toggle="tab">Recent Products</a></li>
                    
                </ul>
    
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
                    <img src="{{asset('images/'.$product->images[0]->image)}}" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive  img-alig" alt="">
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
    
                <a href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" rel="nofollow" title="Inquire this product" > <i class="fa fa-whatsapp" style="font-size:15px;color:green;"></i> Whatsapp</a>
    
                    
                </div>
            </div>
            @endif
          
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
                </li><!-- /.products -->
    
                @endforeach
                {{-- <li class="product ">
                    <div class="product-outer">
        <div class="product-inner">
            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
            <a href="single-product.html">
                <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                <div class="product-thumbnail">
                    <img src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" class="img-responsive" alt="">
                </div>
            </a>
    
            <div class="price-add-to-cart">
                <span class="price">
                    <span class="electro-price">
                        <ins><span class="amount"> $1,999.00</span></ins>
                                                <del><span class="amount">$2,299.00</span></del>
                                            <span class="amount"> </span>
                    </span>
                </span>
                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">BUY</a>
            </div><!-- /.price-add-to-cart -->
    
            <div class="hover-area">
                <div class="action-buttons">
    
                    <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
    
                    <a href="compare.html" class="add-to-compare-link"> Compare</a>
                </div>
            </div>
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
                </li><!-- /.products -->
    
    
                <li class="product last">
                    <div class="product-outer">
        <div class="product-inner">
            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
            <a href="single-product.html">
                <h3>White Solo 2 Wireless</h3>
                <div class="product-thumbnail">
                    <img src="assets/images/blank.gif" data-echo="assets/images/products/3.jpg" class="img-responsive" alt="">
                </div>
            </a>
    
            <div class="price-add-to-cart">
                <span class="price">
                    <span class="electro-price">
                        <ins><span class="amount"> </span></ins>
                                            <span class="amount"> $1,999.00</span>
                    </span>
                </span>
                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">BUY</a>
            </div><!-- /.price-add-to-cart -->
    
            <div class="hover-area">
                <div class="action-buttons">
    
                    <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
    
                    <a href="compare.html" class="add-to-compare-link"> Compare</a>
                </div>
            </div>
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
                </li><!-- /.products -->
    
    
                <li class="product first">
                    <div class="product-outer">
        <div class="product-inner">
            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
            <a href="single-product.html">
                <h3>Smartphone 6S 32GB LTE</h3>
                <div class="product-thumbnail">
                    <img src="assets/images/blank.gif" data-echo="assets/images/products/4.jpg" class="img-responsive" alt="">
                </div>
            </a>
    
            <div class="price-add-to-cart">
                <span class="price">
                    <span class="electro-price">
                        <ins><span class="amount"> $1,215.00</span></ins>
                                                <del><span class="amount">$2,215.00</span></del>
                                            <span class="amount"> </span>
                    </span>
                </span>
                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">BUY</a>
            </div><!-- /.price-add-to-cart -->
    
            <div class="hover-area">
                <div class="action-buttons">
    
                    <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
    
                    <a href="compare.html" class="add-to-compare-link"> Compare</a>
                </div>
            </div>
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
                </li><!-- /.products -->
    
    
                <li class="product ">
                    <div class="product-outer">
        <div class="product-inner">
            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Cameras</a></span>
            <a href="single-product.html">
                <h3>Purple NX Mini F1 aparat  SMART NX</h3>
                <div class="product-thumbnail">
                    <img src="assets/images/blank.gif" data-echo="assets/images/products/5.jpg" class="img-responsive" alt="">
                </div>
            </a>
    
            <div class="price-add-to-cart">
                <span class="price">
                    <span class="electro-price">
                        <ins><span class="amount"> </span></ins>
                                            <span class="amount"> $1,999.00</span>
                    </span>
                </span>
                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">BUY</a>
            </div><!-- /.price-add-to-cart -->
    
            <div class="hover-area">
                <div class="action-buttons">
    
                    <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
    
                    <a href="compare.html" class="add-to-compare-link"> Compare</a>
                </div>
            </div>
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
                </li><!-- /.products -->
    
    
                <li class="product last">
                    <div class="product-outer">
        <div class="product-inner">
            <span class="loop-product-categories"><a href="product-category.html" rel="tag">Printers</a></span>
            <a href="single-product.html">
                <h3>Full Color LaserJet Pro  M452dn</h3>
                <div class="product-thumbnail">
                    <img src="assets/images/blank.gif" data-echo="assets/images/products/6.jpg" class="img-responsive" alt="">
                </div>
            </a>
    
            <div class="price-add-to-cart">
                <span class="price">
                    <span class="electro-price">
                        <ins><span class="amount"> </span></ins>
                                            <span class="amount"> $1,999.00</span>
                    </span>
                </span>
                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">BUY</a>
            </div><!-- /.price-add-to-cart -->
    
            <div class="hover-area">
                <div class="action-buttons">
    
                    <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
    
                    <a href="compare.html" class="add-to-compare-link"> Compare</a>
                </div>
            </div>
        </div><!-- /.product-inner -->
    </div><!-- /.product-outer -->
                </li><!-- /.products -->
                        </ul>--}}
                        </div>
                        
                    </div>
     
                    <div class="tab-pane" id="tab-products-2" role="tabpanel">
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
                                                                    <img src="{{asset('images/'.$product->images[0]->image)}}" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive img-alig" alt="">
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
                                                                <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">BUY</a>
                                                            </div><!-- /.price-add-to-cart -->
                                                            @if($settings->whatsapp)
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                    
                                                                <a href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" rel="nofollow" title="Inquire this product" > <i class="fa fa-whatsapp" style="font-size:15px;color:green;"></i> Whatsapp</a>
                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            @endif
                                                          
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                                </li><!-- /.products -->
                                                    @endforeach </div>
    
                    
            </div>


            <div class="tab-pane" id="tab-products-3" role="tabpanel">
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
                                                                <img src="{{asset('images/'.$product->images[0]->image)}}" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive img-alig" alt="">
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
                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">BUY</a>
                                                        </div><!-- /.price-add-to-cart -->
                                                        @if($settings->whatsapp)
                                                        <div class="hover-area">
                                                            <div class="action-buttons">
                                                
                                                            <a href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" rel="nofollow" title="Inquire this product" > <i class="fa fa-whatsapp" style="font-size:15px;color:green;"></i> Whatsapp</a>
                                                
                                                                
                                                            </div>
                                                        </div>
                                                        @endif
                                                      
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                                            </li><!-- /.products -->
                                                @endforeach </div>

                
        </div>
        </div><!-- /.tabs-block -->
    </div><!-- /.deals-and-tabs -->
                    <!-- ============================================================= 2-1-2 Product Grid ============================================================= -->
    
    