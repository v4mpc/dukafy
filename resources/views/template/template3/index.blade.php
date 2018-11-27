@extends('template.template3.layout')
@section('content')
<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9">
        <!-- ========================================== SECTION – HERO ========================================= -->
        
<div id="hero">
        @if(!is_null($slider_images[0]->image)||!is_null($slider_images[1]->image)||!is_null($slider_images[2]->image))
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

    @endif
    

</div><!-- /.owl-carousel -->
</div>
        
<!-- ========================================= SECTION – HERO : END ========================================= -->	
</div>
    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
    @if(count($featureds))
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section featured-product wow fadeInUp section-hack">
        <h3 class="section-title">Featured products</h3>
        {{-- <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs"> --}}
            <div class="row">
                @foreach($featureds as $product) 
                <div class="col-xs-6 col-md-3">
                    <div class="products">
                    
                   	
                    <div class="product-image">
                    <div class="image">
                            {{-- @if($product->discount)
                            <div class="tag sale"><span>sale</span></div>
                            @endif --}}


                    <a href="{{route('product.show',$product->id)}}"><img  src="assets/images/blank.gif" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive " alt=""></a>
                    </div><!-- /.image -->			
                    
                                                       
                    </div><!-- /.product-image -->
                    
                    
                    <div class="product-info text-left">
                            <h5 class="hidden-xs hidden-sm"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>60?str_limit($product->name,60):$product->name}}</a></h5>
                            <h5 class="hidden-md hidden-lg"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>37?str_limit($product->name,37):$product->name}}</a></h5>

                    
                    <div class="description"></div>
                    
                    <div class="product-price">	
                    
                            @if($product->discount)
                        <span class="price">
                                {{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS			</span>
                                                     <span class="price-before-discount">{{number_format($product->price)}}</span>
                                            @else
                                            <span class="price">
                                                    {{number_format($product->price)}}	 TZS			</span>
                                            @endif
                    </div><!-- /.product-price -->
                    
                    
                    </div><!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                            @if($settings->whatsapp)
                                            <a class="btn btn-primary icon" href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" title="Inquire this Product" type="button">
                                                <i class="fa fa-whatsapp"></i>													
                                            </a>
                                            @endif
                                        <button class="btn btn-primary add_to_cart_button" type="button" data-id="{{$product->id}}">BUY</button>
                                                                
                                    </li>
                                   
                                </ul>
                            </div><!-- /.action -->
                        </div><!-- /.cart -->
                    </div><!-- /.product -->
                 
                    </div>
        @endforeach
            </div>
                          {{-- </div><!-- /.home-owl-carousel --> --}}
    </section><!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
    @endif

    @if(count($on_sales))
       <!-- ============================================== ON  SALE============================================== -->
    
       <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">On Sale products</h3>
            {{-- <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs"> --}}
                    <div class="row">
                    @foreach($on_sales as $product)   
                    <div class="col-xs-6 col-md-3 wow fadeInUp">
                        <div class="products">
                        
                      	
                        <div class="product-image">
                        <div class="image">
                                {{-- @if($product->discount)
                                <div class="tag sale"><span>sale</span></div>
                                @endif --}}
                        <a href="{{route('product.show',$product->id)}}"><img  src="assets/images/blank.gif" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive " alt=""></a>
                        </div><!-- /.image -->			
                        
                                                           
                        </div><!-- /.product-image -->
                        
                        
                        <div class="product-info text-left">
                                <h5 class="hidden-xs hidden-sm"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>60?str_limit($product->name,60):$product->name}}</a></h5>
                                <h5 class="hidden-md hidden-lg"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>37?str_limit($product->name,37):$product->name}}</a></h5>
    
                        <div class="description"></div>
                        
                        <div class="product-price">	
                        
                                @if($product->discount)
                            <span class="price">
                                    {{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS			</span>
                                                         <span class="price-before-discount">{{number_format($product->price)}}</span>
                                                @else
                                                <span class="price">
                                                        {{number_format($product->price)}}	 TZS			</span>
                                                @endif
                        </div><!-- /.product-price -->
                        
                        
                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                                @if($settings->whatsapp)
                                                <a class="btn btn-primary icon" href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" title="Inquire this Product" type="button">
                                                    <i class="fa fa-whatsapp"></i>													
                                                </a>
                                                @endif
                                            <button class="btn btn-primary add_to_cart_button" type="button" data-id="{{$product->id}}">BUY</button>
                                                                    
                                        </li>
                                       
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->
                        
                       
                        </div>
            @endforeach
                    </div>
                                  {{-- </div><!-- /.home-owl-carousel --> --}}
        </section><!-- /.section -->
        @endif




    @if(count($recent_products))
    <!-- ============================================== ON  SALE============================================== -->
 
    <section class="section featured-product wow fadeInUp">
         <h3 class="section-title">Recent products</h3>
         {{-- <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs"> --}}
                <div class="row">
                 @foreach($recent_products as $product)   
                 <div class="col-xs-6 col-md-3 wow fadeInUp">
                    <div class="products">
                    	
                    <div class="product-image">
                    <div class="image">
                            {{-- @if($product->discount)
                            <div class="tag sale"><span>sale</span></div>
                            @endif --}}
                    <a href="{{route('product.show',$product->id)}}"><img  src="assets/images/blank.gif" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive " alt=""></a>
                    </div><!-- /.image -->			
                    
                                                       
                    </div><!-- /.product-image -->
                    
                    
                    <div class="product-info text-left">
                            <h5 class="hidden-xs hidden-sm"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>60?str_limit($product->name,60):$product->name}}</a></h5>
                            <h5 class="hidden-md hidden-lg"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>37?str_limit($product->name,37):$product->name}}</a></h5>

                    <div class="description"></div>
                    
                    <div class="product-price">	
                    
                            @if($product->discount)
                        <span class="price">
                                {{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS			</span>
                                                     <span class="price-before-discount">{{number_format($product->price)}}</span>
                                            @else
                                            <span class="price">
                                                    {{number_format($product->price)}}	 TZS			</span>
                                            @endif
                    </div><!-- /.product-price -->
                    
                    
                    </div><!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                            @if($settings->whatsapp)
                                            <a class="btn btn-primary icon" href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" title="Inquire this Product" type="button">
                                                <i class="fa fa-whatsapp"></i>													
                                            </a>
                                            @endif
                                        <button class="btn btn-primary add_to_cart_button" type="button" data-id="{{$product->id}}">BUY</button>
                                                                
                                    </li>
                                   
                                </ul>
                            </div><!-- /.action -->
                        </div><!-- /.cart -->
                    </div><!-- /.product -->
                    
                   
                    </div>
         @endforeach
                </div>
                               {{-- </div><!-- /.home-owl-carousel --> --}}
     </section><!-- /.section -->
     @endif
    

    
@endsection