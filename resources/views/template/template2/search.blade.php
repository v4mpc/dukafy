@extends('template.template2.layout') 
@section('content')

{{-- <nav class="woocommerce-breadcrumb">
<a href="{{route('start')}}">Home</a>
        <span class="delimiter"><i class="fa fa-angle-right"></i>
        </span>
       
        <a href="product-category.html">{{$category->name}}</a>
        <span class="delimiter"><i class="fa fa-angle-right"></i>
       
    </nav> --}}
@if(count($products))
    <div id="content" class="site-content" tabindex="-1">
        
       
    <nav class="woocommerce-breadcrumb" ><a href="{{route('start')}}">Home</a></nav>
        
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
        
                        
        
                        <header class="page-header">
                        {{-- <h1 class="page-title">{{$category->name}}</h1> --}}
                            <p class="woocommerce-result-count">Showing {{$products->firstItem()}}&ndash;{{$products->lastItem()}} of {{$products->total()}} results</p>
                        </header>
        
                        <div class="shop-control-bar">
                            <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                                {{-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                                <li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li> --}}
                                {{-- <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
                                <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li> --}}
                            </ul>
                            <form class="woocommerce-ordering" method="get">
            {{-- <select name="orderby" class="orderby">
                <option value="menu_order"  selected='selected'>Default sorting</option>
                <option value="popularity" >Sort by popularity</option>
                <option value="rating" >Sort by average rating</option>
                <option value="date" >Sort by newness</option>
                <option value="price" >Sort by price: low to high</option>
                <option value="price-desc" >Sort by price: high to low</option>
            </select> --}}
        </form>
        {{-- <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Show 15</option><option value="-1" >Show All</option></select></form> --}}
        <nav class="electro-advanced-pagination">
            <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> of 2<a class="next page-numbers" href="#">&rarr;</a>			<script>
            jQuery(document).ready(function($){
                $( '.form-adv-pagination' ).on( 'submit', function() {
                    var link 		= '#',
                    goto_page 	= $( '#goto-page' ).val(),
                    new_link 	= link.replace( '%#%', goto_page );
        
                    window.location.href = new_link;
                    return false;
                });
            });
            </script>
        </nav>
                        </div>
        
                        <div class="tab-content">
        
        <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        
        
        
            <ul class="products columns-3">
                @foreach($products as $product)
                                    <li class="product">
                        <div class="product-outer">
                            <div class="product-inner">
                            <span class="loop-product-categories"><a href="{{route('category',$product->category->id)}}" rel="tag">{{$product->category->name}}</a></span>
                            <a href="{{route('product.show',$product->id)}}">
                                    <h3>{{$product->name}}</h3>
                                    <div class="product-thumbnail">
        
                                        <img class="img-responsive img-alig" data-echo="{{asset('images/'.$product->images[0]->image)}}" src="assets/images/blank.gif" alt="">
        
                                    </div>
                                </a>
        
                                <div class="price-add-to-cart">
                                    <span class="price">
                                        <span class="electro-price">
                                                @if($product->discount)
                                           
                                            
                                            <ins><span class="amount">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS</span></ins>
                                            
                                            <del><span class="amount">{{number_format($product->price)}} TZS</span></del>
                                            @else
                                            <ins><span class="amount">{{number_format($product->price)}} TZS</span></ins>
                                            @endif
                                        </span>
                                    </span>
                                    <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                    </li>
                    @endforeach  

                   
        
            </ul>
        </div>
                            <div role="tabpanel" class="tab-pane" id="grid-extended" aria-expanded="true">
        
            <ul class="products columns-3">
                    @foreach($products as $product)
                                    <li class="product">
                        <div class="product-outer">
                            <div class="product-inner">
                            <span class="loop-product-categories"><a href="{{route('category',$product->category->id)}}" rel="tag">{{$product->category->name}}</a></span>
                                <a href="{{route('product.show',$product->id)}}">
                                    <h3>{{$product->name}}</h3>
                                    <div class="product-thumbnail">
                                        <img class="wp-post-image img-height" data-echo="{{asset('images/'.$product->images[0]->image)}}" src="assets/images/blank.gif" alt="">
                                    </div>
        
                                   
        
                                    <div class="product-short-description">
                                        {!!$product->description!!}
                                    </div>
        
                                    {{-- <div class="product-sku">SKU: 5487FB8/15</div> --}}
                                </a>
                                <div class="price-add-to-cart">
                                    <span class="price">
                                        <span class="electro-price">
                                                @if($product->discount)
                                           
                                            
                                                <ins><span class="amount">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS</span></ins>
                                                
                                                <del><span class="amount">{{number_format($product->price)}} TZS</span></del>
                                                @else
                                                <ins><span class="amount">{{number_format($product->price)}} TZS</span></ins>
                                                @endif
                                        </span>
                                    </span>
                                    <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
                    </li>

                    @endforeach
                                  
                   
                    </ul>
        </div>				
        
      
        
                    </main><!-- #main -->
                </div><!-- #primary -->
        
                <div id="sidebar" class="sidebar" role="complementary">
                    <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
            <ul class="product-categories category-single">
                <li class="product_cat">
                    <ul class="show-all-cat">
                        <li class="product_cat"><span class="show-all-cat-dropdown">Show All Categories</span>
                            <ul>
                                @foreach($categories as $category)
                            <li class="cat-item"><a href="{{route('category',$category->id)}}">{{$category->name}}</a> <span class="count">{{count($category->products)}}</span></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    {{-- <ul>
                        <li class="cat-item current-cat"><a href="product-category.html">Laptops &amp; Computers</a> <span class="count">(13)</span>
                            <ul class='children'>
                                <li class="cat-item"><a href="product-category.html">Laptops</a> <span class="count">(6)</span></li>
                                <li class="cat-item"><a href="product-category.html">Ultrabooks</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="product-category.html">Computers</a> <span class="count">(0)</span></li>
                                <li class="cat-item"><a href="product-category.html">Mac Computers</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="product-category.html">All in One</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="product-category.html">Servers</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="product-category.html">Peripherals</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="product-category.html">Gaming</a> <span class="count">(1)</span></li>
                                <li class="cat-item"><a href="product-category.html">Accessories</a> <span class="count">(2)</span></li>
                            </ul>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </aside>
                    {{-- <aside class="widget widget_electro_products_filter">
            <h3 class="widget-title">Filters</h3> --}}
            {{-- <aside class="widget woocommerce widget_layered_nav">
                <h3 class="widget-title">Brands</h3>
                <ul>
                    <li style=""><a href="#">Apple</a> <span class="count">(4)</span></li>
                    <li style=""><a href="#">Gionee</a> <span class="count">(2)</span></li>
                    <li style=""><a href="#">HTC</a> <span class="count">(2)</span></li>
                    <li style=""><a href="#">LG</a> <span class="count">(2)</span></li>
                    <li style=""><a href="#">Micromax</a> <span class="count">(1)</span></li>
                </ul>
                <p class="maxlist-more"><a href="#">+ Show more</a></p>
            </aside> --}}
            {{-- <aside class="widget woocommerce widget_layered_nav">
                <h3 class="widget-title">Color</h3>
                <ul>
                    <li style=""><a href="#">Black</a> <span class="count">(4)</span></li>
                    <li style=""><a href="#">Black Leather</a> <span class="count">(2)</span></li>
                    <li style=""><a href="#">Turquoise</a> <span class="count">(2)</span></li>
                    <li style=""><a href="#">White</a> <span class="count">(4)</span></li>
                    <li style=""><a href="#">Gold</a> <span class="count">(4)</span></li>
                </ul>
                <p class="maxlist-more"><a href="#">+ Show more</a></p>
            </aside> --}}
            {{-- <aside class="widget woocommerce widget_price_filter">
                <h3 class="widget-title">Price</h3>
                <form action="#">
                    <div class="price_slider_wrapper">
                        <div style="" class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span>
                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span>
                        </div>
                        <div class="price_slider_amount">
                            <a href="#" class="button">Filter</a>
                            <div style="" class="price_label">Price: <span class="from">428</span> &mdash; <span class="to">3485</span></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>
            </aside> --}}
     
             
                </div>
        
            </div><!-- .container -->

            @else
<div id="content" class="site-content" tabindex="-1">

    <!-- Oder-success -->

        <div class="container" >
            <!-- Payout Method -->

            <div class="order-success"> 
                <h6>Product Not Found</h6>
                {{--
                <p>Aenean dui mi, tempus non volutpat eget, molestie a orci. Nullam eget sem et eros laoreet rutrum. Quisque
                    sem ante, feugiat quis lorem in.</p> --}}
                <a href="{{route('start')}}" class="btn-round">Return to Shop</a> </div>
        </div>

















</div>
            @endif
        </div><!-- #content -->


        @endsection
