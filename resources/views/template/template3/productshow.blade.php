@extends('template.template3.layout')
@section('content')
<div class='col-md-9'>
        <div class="row  wow fadeInUp">
                 <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
<div class="product-item-holder size-big single-product-gallery small-gallery">

<div id="owl-single-product">
        @foreach($product->images as $image)
<div class="single-product-gallery-item" id="slide{{$image->id}}">
        <a data-lightbox="image-1" data-title="Gallery" href="{{asset('images/'.$image->image)}}">
            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="{{asset('images/'.$image->image)}}" />
        </a>
    </div><!-- /.single-product-gallery-item -->
    @endforeach


</div><!-- /.single-product-slider -->


<div class="single-product-gallery-thumbs gallery-thumbs">

    <div id="owl-single-product-thumbnails">
        {{-- <div class="item">
        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="{{$product->images[0]->id}}" href="#slide{{$product->images[0]->id}}">
                <img class="img-responsive" width="85" alt="" src="{{asset('images/'.$product->images[0]->image)}}" data-echo="{{asset('images/'.$product->images[0]->image)}}" />
            </a>
        </div> --}}

        @foreach($product->images as $image)

        <div class="item">
        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="{{$image->id}}" href="#slide{{$image->id}}">
                <img class="img-responsive" width="85" alt="" src="{{asset('template3/assets/images/blank.gif')}}" data-echo="{{asset('images/'.$image->image)}}"/>
            </a>
        </div>
        @endforeach
       
    </div><!-- /#owl-single-product-thumbnails -->

    

</div><!-- /.gallery-thumbs -->

</div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        			
            <div class='col-sm-6 col-md-7 product-info-block'>
                <div class="product-info">
                    <h1 class="name">{{$product->name}}</h1>
                    
                    

                    <div class="stock-container info-container m-t-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="stock-box">
                                    <span class="label">Availability :</span>
                                </div>	
                            </div>
                            <div class="col-sm-9">
                                <div class="stock-box">
                                    <span class="value">In Stock</span>
                                </div>	
                            </div>
                        </div><!-- /.row -->	
                    </div><!-- /.stock-container -->

                    <div class="description-container m-t-20">
                            {!!$product->description!!}
                    </div><!-- /.description-container -->
                    @if($product->price_visibility)
                    <div class="price-container info-container m-t-20">
                        <div class="row">
                            
                                @if($product->discount)
                            <div class="col-sm-6">
                                <div class="price-box">
                                    <span class="price">{{number_format($product->selling_price())}} {{$product->currency()}} </span>
                                    <span class="price-strike">{{number_format($product->price)}}</span>
                                </div>
                            </div>
                            @else
                            <div class="col-sm-6">
                                    <div class="price-box">
                                        <span class="price">{{number_format($product->price)}}</span>
                                       
                                    </div>
                                </div>
                            @endif

                            <div class="col-sm-6">
                                {{-- <div class="favorite-button m-t-10">
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                       <i class="fa fa-retweet"></i>
                                    </a>
                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </div> --}}
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.price-container -->

                    <div class="quantity-container info-container">
                        <div class="row">
                            
                            <!-- <div class="col-sm-2">
                                <span class="label">Qty :</span>
                            </div> -->
                            
                            <div class="col-sm-2">
                                <div class="cart-quantity">
                                    <div class="quant-input">
                                        <!-- <div class="arrows">
                                          <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                          <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                        </div> -->
                                        <input type="text" disabled value="1">
                                  </div>
                                </div>
                            </div>

                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                                @if($settings->whatsapp)
                                                <a class="btn btn-primary icon" href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" title="Inquire this Product" type="button">
                                                    <i class="fa fa-whatsapp"></i>													
                                                </a>
                                                @endif
                                            <button class="btn btn-primary add_to_cart_button" type="button" style="display:{{($product->price_visibility)?"Block":"None"}}" data-id="{{$product->id}}">BUY</button>
                                                                    
                                        </li>
                                       
                                    </ul>
                                </div><!-- /.action -->
                            </div><!-- /.cart -->
                        </div><!-- /.product -->

                            
                        </div><!-- /.row -->
                    </div><!-- /.quantity-container -->
                    @endif
                   

                    

                    
                </div><!-- /.product-info -->
            </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->

        
    </div><!-- /.col -->
    <div class="clearfix"></div>
@endsection