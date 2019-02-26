@extends('template.template3.layout')
@section('content')




<div class='col-md-9'>
    
<!-- ========================================= SECTION – HERO : END ========================================= -->
<div class="clearfix filters-container m-t-10">
<div class="row">
<div class="col col-sm-6 col-md-2">
<div class="filter-tabs">

</div><!-- /.filter-tabs -->
</div><!-- /.col -->
<div class="col col-sm-12 col-md-6">
<div class="col col-sm-3 col-md-6 no-padding">

</div><!-- /.col -->
<div class="col col-sm-3 col-md-6 no-padding">

</div><!-- /.col -->
</div><!-- /.col -->
<div class="col col-sm-6 col-md-4 text-right">
<div class="pagination-container">

{{ $products->links('vendor.pagination.template3') }}
</div><!-- /.pagination-container -->		</div>

<!-- /.col -->
</div><!-- /.row -->
</div>
<div class="search-result-container">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active " id="grid-container">
            <div class="category-product  inner-top-vs">
                <div class="row">									
                        
@forelse($products as $product)                        
<div class="col-xs-6 col-md-4 wow fadeInUp">
<div class="products">

<div class="product">		
<div class="product-image">
<div class="image">
        
<a href="{{route('product.show',$product->id)}}"><img  src="assets/images/blank.gif" data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive img-height" alt=""></a>
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



@endif


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
                        @if($product->price_visibility)
                    <button class="btn btn-primary add_to_cart_button" type="button" style="display:{{($product->price_visibility)?"Block":"None"}}" data-id="{{$product->id}}">BUY</button>
                          @endif                  
                </li>
               
            </ul>
        </div><!-- /.action -->
    </div><!-- /.cart -->
</div><!-- /.product -->

</div><!-- /.products -->
</div><!-- /.item -->
@empty
<h4>Product Not Found!! </h4>
@endforelse
                        </div><!-- /.row -->
            </div><!-- /.category-product -->
        
        </div><!-- /.tab-pane -->
            
        <div class="tab-pane "  id="list-container">
            <div class="category-product  inner-top-vs">
            
         @forelse($products as $product)
         
         
<div class="category-product-inner wow fadeInUp">
<div class="products">				
<div class="product-list product">
<div class="row product-list-row">
<div class="col col-sm-4 col-lg-4">
<div class="product-image">
<div class="image">
        {{-- @if($product->discount)
        <div class="tag sale"><span>sale</span></div>
        @endif --}}
    <img data-echo="{{asset('images/'.$product->images[0]->image)}}" class="img-responsive img-height" src="assets/images/blank.gif" alt="">
</div>
</div><!-- /.product-image -->
</div><!-- /.col -->
<div class="col col-sm-8 col-lg-8">
<div class="product-info">
<h5 class="name"><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></h5>

<div class="product-price">	
        @if($product->discount)
    <span class="price">

            {{number_format($product->selling_price())}} {{$settings->currencyName()}}					</span>
                                     <span class="price-before-discount">{{number_format($product->price)}}</span>

@else
<span class="price">
        {{number_format($product->price)}}  {{$settings->currencyName()}}

</span>
@endif
                            
</div><!-- /.product-price -->
<div class="description m-t-10">{!!$product->description!!}</div>
                <div class="cart clearfix animate-effect">
    <div class="action">
        <ul class="list-unstyled">
            <li class="add-cart-button btn-group">
                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                    <i class="fa fa-shopping-cart"></i>													
                </button>
                
                <button class="btn btn-primary" style="display:{{($product->price_visibility)?"Block":"None"}}" type="button">BUY</button>
                
                                        
            </li>
{{--            
            <li class="lnk wishlist">
                <a class="add-to-cart" href="indexbd17.html?page=detail" title="Wishlist">
                     <i class="icon fa fa-heart"></i>
                </a>
            </li>

            <li class="lnk">
                <a class="add-to-cart" href="indexbd17.html?page=detail" title="Compare">
                    <i class="fa fa-retweet"></i>
                </a>
            </li> --}}
        </ul>
    </div><!-- /.action -->
</div><!-- /.cart -->
                
</div><!-- /.product-info -->	
</div><!-- /.col -->
</div><!-- /.product-list-row -->
       </div><!-- /.product-list -->
</div><!-- /.products -->
</div><!-- /.category-product-inner -->

@empty
<h4>Product Not Found </h4>
@endforelse
                        
            </div><!-- /.category-product -->
        </div><!-- /.tab-pane #list-container -->
    </div><!-- /.tab-content -->
    <div class="clearfix filters-container">
        
            <div class="text-right">
                 <div class="pagination-container">
</div><!-- /.pagination-container -->					</div><!-- /.text-right -->
        
    </div><!-- /.filters-container -->

</div><!-- /.search-result-container -->

</div><!-- /.col -->
</div><!-- /.row -->

@endsection