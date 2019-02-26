@extends('template.template3.layout')
@section('content')
<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9">
        <!-- ========================================== SECTION – HERO ========================================= -->
        
<!-- <div id="hero"> -->
        @if(!is_null($slider_images[0]->image)||!is_null($slider_images[1]->image)||!is_null($slider_images[2]->image))


        <div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
            @if($slider_images->has(0) && !is_null($slider_images[0]->image))
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
					<img src="{{asset('images/'.$slider_images[0]->image)}}"    data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
				</li>
                @endif
				@if($slider_images->has(1) && !is_null($slider_images[1]->image))
				<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
					<img src="{{asset('images/'.$slider_images[1]->image)}}"  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
				</li>
                @endif


                @if($slider_images->has(2) && !is_null($slider_images[2]->image))
				<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
					<img src="{{asset('images/'.$slider_images[2]->image)}}"  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
				</li>
                @endif
			
			</ul>
		</div>
	<!-- </div> -->


    @endif
    

</div><!-- /.owl-carousel -->
</div>
        
<!-- ========================================= SECTION – HERO : END ========================================= -->	
</div>
    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
    @if(count($featureds))
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section featured-product wow fadeInUp section-hack" >
        <h3 class="section-title">Featured products</h3>
        {{-- <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs"> --}}
            <div class="row">
                @foreach($featureds as $product) 
                <div class="col-xs-6 col-md-3">
                    <div class="products">
                    
                            
                    <div class="product-image">
                    <div class="image">
                    <a href="{{route('product.show',$product->id)}}"><img  src="assets/images/blank.gif" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive " alt=""></a>
                    </div><!-- /.image -->			
                    
                                                       
                    </div><!-- /.product-image -->
                    
                    
                    <div class="product-info text-left">
                            <h5 class="hidden-xs hidden-sm"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>20?str_limit($product->name,20):$product->name}}</a></h5>
                            <h5 class="hidden-md hidden-lg"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>10?str_limit($product->name,10):$product->name}}</a></h5>
                    @if($product->price_visibility)
                    <div class="product-price">	
                    
                            @if($product->discount)
                        <span class="price">
                                {{number_format($product->selling_price())}} {{$settings->currencyName()}}			</span>
                                                     <span class="price-before-discount">{{number_format($product->price)}}</span>
                                            @else
                                            <span class="price">
                                                    {{number_format($product->price)}}	 {{$settings->currencyName()}}			</span>
                                            @endif
                    </div><!-- /.product-price -->
                    @else
                    <div class="product-price" style="display:hidden">	                        
                        <span class="price">nodiscount</span>
                        <span class="price">noprice</span>                      
                        </div>
                    @endif
                    
                    
                    </div><!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                            @if($settings->whatsapp)
                                            <a class="btn btn-primary icon" href="https://wa.me/255{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" title="Inquire this Product" type="button">
                                                <i class="fa fa-whatsapp"></i>													
                                            </a>
                                            @endif
                                        <button class="btn btn-primary add_to_cart_button" type="button" style="display:{{($product->price_visibility)?"Block":"None"}}" data-id="{{$product->id}}">BUY</button>
                                                                
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
                                <h5 class="hidden-xs hidden-sm"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>20?str_limit($product->name,20):$product->name}}</a></h5>
                                <h5 class="hidden-md hidden-lg"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>10?str_limit($product->name,10):$product->name}}</a></h5>
    
                        
                                
                        <div class="product-price">	
                        
                                @if($product->discount)
                            <span class="price">
                                    {{number_format($product->selling_price())}} {{$settings->currencyName()}}			</span>
                                                         <span class="price-before-discount">{{number_format($product->price)}}</span>
                                                @else
                                                <span class="price">
                                                        {{number_format($product->price)}}	 {{$settings->currencyName()}}			</span>
                                                @endif
                        </div><!-- /.product-price -->
                        
                        
                        </div><!-- /.product-info -->
                       
                        <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                                @if($settings->whatsapp)
                                                <a class="btn btn-primary icon" href="https://wa.me/255{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" title="Inquire this Product" type="button">
                                                    <i class="fa fa-whatsapp"></i>													
                                                </a>
                                                @endif
                                            <button class="btn btn-primary add_to_cart_button" type="button" style="display:{{($product->price_visibility)?"Block":"None"}}" data-id="{{$product->id}}">BUY</button>
                                                                    
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
                <div class="row">
                 @foreach($recent_products as $product)   
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
                            <h5 class="hidden-xs hidden-sm"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>20?str_limit($product->name,20):$product->name}}</a></h5>
                            <h5 class="hidden-md hidden-lg"><a href="{{route('product.show',$product->id)}}" title="{{$product->name}}">{{strlen($product->name)>10?str_limit($product->name,10):$product->name}}</a></h5>

                    
                            @if($product->price_visibility)
                    <div class="product-price">	
                    
                            @if($product->discount)
                        <span class="price">
                                {{number_format($product->selling_price())}} {{$settings->currencyName()}}</span>
                                                     {{-- <span class="price-before-discount">{{number_format($product->price)}}</span> --}}
                                            @else
                                            <span class="price">{{number_format($product->price)}}{{$settings->currencyName()}}</span>
                                            @endif
                    </div>

                    @else
                    <div class="product-price" style="display:hidden">	                        
                            <span class="price">nodiscount</span>
                            <span class="price">noprice</span>                      
                            </div>
                    @endif                    
                    
                    </div><!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                            @if($settings->whatsapp)
                                            <a class="btn btn-primary icon" href="https://wa.me/255{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" title="Inquire this Product" type="button">
                                                <i class="fa fa-whatsapp"></i>													
                                            </a>
                                            @endif
                                        <button class="btn btn-primary add_to_cart_button" type="button" style="display:{{($product->price_visibility)?"Block":"None"}}" data-id="{{$product->id}}">BUY</button>
                                                                
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