@extends('template.template3.layout')
@section('content')
<!-- ============================================== CONTENT ============================================== -->
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        <!-- ========================================== SECTION – HERO ========================================= -->
        
<div id="hero">
<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        @foreach ($slider_images as $slider)
    <div class="item" style="background-image: url({{asset('images/'.$slider->image)}});">
       
    </div><!-- /.item -->

   
    
    @endforeach
    

</div><!-- /.owl-carousel -->
</div>
        
<!-- ========================================= SECTION – HERO : END ========================================= -->	
{{-- <div class="wide-banners wow fadeInUp outer-bottom-vs">
        <div class="row">
    
            <div class="col-md-7">
                <div class="wide-banner cnt-strip">
                    <div class="image">
                        <img class="img-responsive" data-echo="assets/images/banners/1.jpg" src="assets/images/blank.gif" alt="">
                    </div>	
                    <div class="strip">
                        <div class="strip-inner">
                            <h3 class="hidden-xs">samsung</h3>
                            <h2>galaxy</h2>
                        </div>	
                    </div>
                </div><!-- /.wide-banner -->
            </div><!-- /.col -->
    
    
        </div><!-- /.row -->
    </div><!-- /.wide-banners --> --}}
</div>
    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
    @if(count($featureds))
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <section class="section featured-product wow fadeInUp">
        <h3 class="section-title">Featured products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                @foreach($featureds as $product) 
            <div class="item item-carousel">
                <div class="products">
                    
        <div class="product">		
            <div class="product-image">
                <div class="image">
                    <a href="{{route('product.show',$product->id)}}"><img  src="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive" data-echo="{{asset('images/'.$product->images[0]->image)}}" alt=""></a>
                </div><!-- /.image -->			
    
                {{-- <div class="tag new"><span>new</span></div>                        		    --}}
            </div><!-- /.product-image -->
                
            
            <div class="product-info text-left">
                <h3 class="name"><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></h3>
               
                <div class="description"></div>
    
                <div class="product-price">	

                        @if($product->discount)
                    <span class="price">
                            {{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS			</span>
                                                 <span class="price-before-discount">{{number_format($product->price)}}</span>
                                        @else
                                        <span class="price">
                                                {{number_format($product->price)}}				</span>
                                        @endif
                </div><!-- /.product-price -->
                
            </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                    <div class="action">
                        <ul class="list-unstyled">
                            <li class="add-cart-button btn-group add_to_cart_button" data-id="{{$product->id}}">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>													
                                </button>
                                <button class="btn btn-primary" type="button" >Add to cart</button>
                                                        
                            </li>
                            <li>
                                <a class="add-to-cart" href="indexbd17.html?page=detail" title="Inquire this Product">
                                     <i class="fa fa-whatsappp" style="font-size:15px;color:green;"></i>
                                </a>
                            </li>
                           
                        </ul>
                    </div><!-- /.action -->
                </div><!-- /.cart -->
                </div><!-- /.product -->
          
                </div><!-- /.products -->
            </div><!-- /.item -->
        @endforeach
                          </div><!-- /.home-owl-carousel -->
    </section><!-- /.section -->
    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
    @endif

    @if(count($on_sales))
       <!-- ============================================== ON  SALE============================================== -->
    
       <section class="section featured-product wow fadeInUp">
            <h3 class="section-title">On Sale products</h3>
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                    @foreach($on_sales as $product)   
                    <div class="item item-carousel">
                            <div class="products">
                                
                    <div class="product">		
                        <div class="product-image">
                            <div class="image">
                                <a href="{{route('product.show',$product->id)}}"><img  src="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive" data-echo="{{asset('images/'.$product->images[0]->image)}}" alt=""></a>
                            </div><!-- /.image -->			
                
                            {{-- <div class="tag new"><span>new</span></div>                        		    --}}
                        </div><!-- /.product-image -->
                            
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></h3>
                           
                            <div class="description"></div>
                
                            <div class="product-price">	
            
                                    @if($product->discount)
                                <span class="price">
                                        {{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS			</span>
                                                             <span class="price-before-discount">{{number_format($product->price)}}</span>
                                                    @else
                                                    <span class="price">
                                                            {{number_format($product->price)}}				</span>
                                                    @endif
                            </div><!-- /.product-price -->
                            
                        </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i>													
                                            </button>
                                            <button class="btn btn-primary add_to_cart_button" type="button" data-id="{{$product->id}}">Add to cart</button>
                                                                    
                                        </li>
                                       
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                            </div><!-- /.product -->
                      
                            </div><!-- /.products -->
                        </div><!-- /.item -->
            @endforeach
                                  </div><!-- /.home-owl-carousel -->
        </section><!-- /.section -->
        @endif
    

    
@endsection