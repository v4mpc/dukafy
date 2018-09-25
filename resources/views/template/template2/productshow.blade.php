@extends('template.template2.layout') 
@section('content')

<nav class="woocommerce-breadcrumb">
<a href="{{route('start')}}">Home</a>
        <span class="delimiter"><i class="fa fa-angle-right"></i>
        </span>
       
        <a href="{{route('category',$product->category->id)}}">{{$product->category->name}}</a>
        <span class="delimiter"><i class="fa fa-angle-right"></i>
        </span>{{$product->name}}
    </nav>
    <div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="product">
					<div class="single-product-wrapper">
						<div class="product-images-wrapper">
								@if($product->discount)
							<span class="onsale">Sale!</span>
							@endif
							<div class="images electro-gallery">
	<div class="thumbnails-single owl-carousel">
		@foreach($product->images as $image)
	<a href="{{asset('images/'.$image->image)}}" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
			<img src="{{asset('template2/assets/images/blank.gif')}}" data-echo="{{asset('images/'.$image->image)}}" class="wp-post-image" alt="">
		</a>

		@endforeach

	</div><!-- .thumbnails-single -->

	<div class="thumbnails-all columns-5 owl-carousel">
			@foreach($product->images as $image)
		<a href="{{asset('images/'.$image->image)}}" class="first" title="">
			<img src="{{asset('template2/assets/images/blank.gif')}}" data-echo="{{asset('images/'.$image->image)}}" class="wp-post-image" alt="">
		</a>
		@endforeach
	</div><!-- .thumbnails-all -->
</div><!-- .electro-gallery -->
						</div><!-- /.product-images-wrapper -->

						<div class="summary entry-summary">
	<span class="loop-product-categories">
		<a href="product-category.html" rel="tag">{{$product->category->name}}</a>
	</span><!-- .loop-product-categories -->

	<h1 itemprop="name" class="product_title entry-title">{{$product->name}}</h1>

	

	{{-- <div class="brand">
		<a href="product-category.html"><img src="assets/images/single-product/brand.png" alt="Asus" /></a>
	</div><!-- .brand --> --}}

	<div itemprop="description">
			{!!$product->description!!}
	</div><!-- /description -->

</div><!-- .summary -->						<div class="product-actions-wrapper">
	<div class="product-actions">
		<div class="availability in-stock">
			Availablity: <span>In stock</span>
		</div><!-- /.availability -->

		<div itemprop="offers">

			<p class="price">
					@if($product->discount)
				<span class="electro-price"><del><span class="amount">{{number_format($product->price)}}</span></del> <ins><span class="amount">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS </span></ins></span>
				@else
				<span class="electro-price"><ins><span class="amount">{{number_format($product->price)}} TZS </span></ins></span>
				@endif
			</p>

		</div>

		<form class="variations_form cart" action="{{route('cart.store')}}" method="post">

			<!-- <table class="variations">
				<tbody>
					<tr>
						<td class="label"><label>Color</label></td>
						<td class="value">
							<select id="pa_color" class="" name="attribute_pa_color" data-attribute_name="attribute_pa_color"><option value="">Choose an option</option><option value="black-with-red" >Black with Red</option><option value="white-with-gold"  selected='selected'>White with Gold</option></select><a class="reset_variations" href="#">Clear</a>
						</td>
					</tr>
				</tbody>
			</table> -->

			{{ csrf_field() }}


			<div class="single_variation_wrap">
				<div class="woocommerce-variation single_variation"></div>
				<div class="woocommerce-variation-add-to-cart variations_button">
					<div class="quantity">
						<label>Quantity:</label>
						<input type="number" name="quantity" value="1" title="Qty" class="input-text qty text"/>
					</div>
					<button type="submit" class="single_add_to_cart_button button alt">BUY</button>
					<input type="hidden" name="id" value="{{$product->id}}" />
					<input type="hidden" name="name" value="{{$product->name}}" />
					{{-- <input type="hidden" name="variation_id" class="variation_id" value="0" /> --}}

					@if($settings->whatsapp)
            <div class="hover-area">
                <div class="action-buttons">
    
                <a href="https://wa.me/{{$settings->whatsapp}}?text=I'm%20inquiring%20about%20{{$product->name}}%20at%20{{$settings->store_name}}" rel="nofollow" title="Inquire this product" > <i class="fa fa-whatsapp" style="font-size:15px;color:green;"></i> Whatsapp</a>
    
                    
                </div>
            </div>
            @endif
				</div>
			</div>
		</form><!-- /.variations_form -->

		<!-- /.action-buttons -->
	</div><!-- /.product-actions -->
</div><!-- /.product-actions-wrapper -->

					</div><!-- /.single-product-wrapper -->


<!-- /.electro-tabs -->





				<!-- /.related -->
				</div><!-- /.product -->
			</main><!-- /.site-main -->
		</div>


    @endsection