@extends('template.template3.layout')
@section('content')




<div class='col-md-9'>
    <!-- ========================================== SECTION – HERO ========================================= -->





<!-- ========================================= SECTION – HERO : END ========================================= -->
<div class="clearfix filters-container m-t-10">
<div class="row">
<div class="col col-sm-6 col-md-2">
<div class="filter-tabs">
{{-- <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
    <li class="active">
        <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-list"></i>Grid</a>
    </li>
    <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th"></i>List</a></li>
</ul> --}}
</div><!-- /.filter-tabs -->
</div><!-- /.col -->
<div class="col col-sm-12 col-md-6">
<div class="col col-sm-3 col-md-6 no-padding">
{{-- <div class="lbl-cnt">
    <span class="lbl">Sort by</span>
    <div class="fld inline">
        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                Position <span class="caret"></span>
            </button>

            <ul role="menu" class="dropdown-menu">
                <li role="presentation"><a href="#">position</a></li>
                <li role="presentation"><a href="#">Price:Lowest first</a></li>
                <li role="presentation"><a href="#">Price:HIghest first</a></li>
                <li role="presentation"><a href="#">Product Name:A to Z</a></li>
            </ul>
        </div>
    </div><!-- /.fld -->
</div><!-- /.lbl-cnt --> --}}
</div><!-- /.col -->
<div class="col col-sm-3 col-md-6 no-padding">
{{-- <div class="lbl-cnt">
    <span class="lbl">Show</span>
    <div class="fld inline">
        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                1 <span class="caret"></span>
            </button>

            <ul role="menu" class="dropdown-menu">
                <li role="presentation"><a href="#">1</a></li>
                <li role="presentation"><a href="#">2</a></li>
                <li role="presentation"><a href="#">3</a></li>
                <li role="presentation"><a href="#">4</a></li>
                <li role="presentation"><a href="#">5</a></li>
                <li role="presentation"><a href="#">6</a></li>
                <li role="presentation"><a href="#">7</a></li>
                <li role="presentation"><a href="#">8</a></li>
                <li role="presentation"><a href="#">9</a></li>
                <li role="presentation"><a href="#">10</a></li>
            </ul>
        </div>
    </div><!-- /.fld -->
</div><!-- /.lbl-cnt --> --}}
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
<h5 class="name"><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></h5>

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

            {{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS					</span>
                                     <span class="price-before-discount">{{number_format($product->price)}}</span>

@else
<span class="price">
        {{number_format($product->price)}}  TZS

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
                <button class="btn btn-primary" type="button">BUY</button>
                                        
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
{{-- <ul class="list-inline list-unstyled">
<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
<li><a href="#">1</a></li>	
<li class="active"><a href="#">2</a></li>	
<li><a href="#">3</a></li>	
<li><a href="#">4</a></li>	
<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
</ul><!-- /.list-inline --> --}}
</div><!-- /.pagination-container -->						    </div><!-- /.text-right -->
        
    </div><!-- /.filters-container -->

</div><!-- /.search-result-container -->

</div><!-- /.col -->
</div><!-- /.row -->

@endsection