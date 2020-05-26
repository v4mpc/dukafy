

@extends('template.template2.layout') 
@section('content')


<article class="page type-page status-publish hentry">
        <header class="entry-header"><h1 itemprop="name" class="entry-title">Cart</h1></header><!-- .entry-header -->

        <form>
            <div class="table-responsive">

                    <table id="small-table" class="table shop_table_responsive cart">
                            <thead>
                              <tr>
                                  <th></th>
                                <th>Item</th>
                                <th>Total</th>
                              </tr>
                    
                            </thead>
                            <tbody>
                                @foreach(Cart::content() as $item)
                              <tr>
                                    <td class="product-thumbnail">
                                            <a href="{{route('product.show',$item->model->id)}}"><img width="180" height="180" src="{{asset('images/'.$item->model->images[0]->image)}}" alt=""></a>
                                        </td>
                                <td>{{$item->name}} <strong>X</strong> {{$item->qty}}</td>
                                <td>{{number_format($item->price*$item->qty)}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                           
                          </table>

<table id="large-table" class="table shop_table_responsive cart ">
<thead>
<tr>
    <th class="product-remove">&nbsp;</th>
    <th class="product-thumbnail">&nbsp;</th>
    <th class="product-name">Product</th>
    <th class="product-price">Price ({{$settings->currencyName()}})</th>
    <th class="product-quantity">Quantity</th>
    <th class="product-subtotal">Total ({{$settings->currencyName()}})</th>
</tr>
</thead>
<tbody>
        @forelse(Cart::content() as $item)
<tr class="cart_item item{{$item->rowId}}" >

    <td class="product-remove">
        <a class="remove" href="#" data-id="{{$item->rowId}}">×</a>
    </td>

    <td class="product-thumbnail">
        <a href="{{route('product.show',$item->model->id)}}"><img width="180" height="180" src="{{asset('images/'.$item->model->images[0]->image)}}" alt=""></a>
    </td>

    <td data-title="Product" class="product-name">
        <a href="{{route('product.show',$item->model->id)}}">{{$item->name}}</a>
    </td>

    <td data-title="Price" class="product-price">
        <span class="amount">{{number_format($item->price)}}</span>
    </td>

    <td data-title="Quantity" class="product-quantity">
        <div class="quantity buttons_added"><input type="button" class="minus" value="-">
            <label>Quantity:</label>
            <input type="number" size="4" class="input-text qty text" title="Qty" value="{{$item->qty}}" name="cart[92f54963fc39a9d87c2253186808ea61][qty]" max="29" min="0" step="1">
            <input type="button" class="plus" value="+">
        </div>
    </td>

    <td data-title="Total" class="product-subtotal">
        <span class="amount">{{number_format($item->price*$item->qty)}}</span>
    </td>
</tr>

@endforeach

@if(Cart::count())
<tr class="delivery-button">
    <td class="actions" colspan="6">

   

        {{-- <input type="submit" value="Update Cart" name="update_cart" class="button"> --}}

        {{-- <div class="wc-proceed-to-checkout">

        <a  class="checkout-button button alt wc-forward" href="{{route('check_out.create')}}">Proceed to Checkout</a>
        </div> --}}

        <input type="hidden" value="1eafc42c5e" name="_wpnonce" id="_wpnonce"><input type="hidden" value="/electro/cart/" name="_wp_http_referer">
    </td>
</tr>
@endif
</tbody>
</table>
{{-- <table class="table .d-none">
        <thead>
          <tr>
            <th>Item</th>
            <th>Total</th>
          </tr>

        </thead>
        <tbody>
            @foreach(Cart::content() as $item)
          <tr>
            <td>{{$item->name}} <strong>X</strong> {{$item->qty}}</td>
            <td>{{number_format($item->price*$item->qty)}}</td>
          </tr>
          @endforeach
        </tbody>
       
      </table> --}}
</div>
</form>
        <div class="cart-collaterals">

<div class="cart_totals ">

<h2>Cart Totals</h2>

<table class="shop_table shop_table_responsive">

<tbody>
   

    <tr class="order-total">
        <th>Total</th>
        <td data-title="Total"><strong><span class="amount items-price"><h2>{{Cart::subtotal()}} {{$settings->currencyName()}}</h2></span></strong> </td>
    </tr>
</tbody>
</table>



{{-- <div class="wc-proceed-to-checkout">

<a class="checkout-button button alt wc-forward" href="checkout.html">Proceed to Checkout</a>
</div> --}}
</div>
</div>

<form  action="{{route('order.store')}}" class="checkout woocommerce-checkout" id="confirmation-form" method="post" name="checkout">
    {{csrf_field()}}
<div id="customer_details" class="col2-set">
<div class="col-1">
<div class="woocommerce-billing-fields">

<h3>Billing Details</h3>

<p id="billing_first_name_field" class="form-row form-row form-row-first validate-required"><label class="" for="billing_first_name">Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_first_name" name="first_name" class="input-text" required></p>




<p id="billing_email_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr></label><input type="email" value="" placeholder="" id="billing_email" name="email" class="input-text " required></p>

<p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone"><label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr></label><input type="tel" value="" placeholder="" id="billing_phone" name="phone" class="input-text " required></p><div class="clear"></div>


<p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Street address" id="billing_address_1" name="address" class="input-text " required></p>


<div class="clear"></div>



</div>
</div>

<div class="col-2">
<h3>Shipping Details</h3>
<div class="woocommerce-shipping-fields">


<p id="order_comments_field" class="form-row form-row notes"><label class="" for="order_comments">Order Notes</label><textarea cols="5" rows="2" placeholder="Any Special Requests or delivery preference? Let us know here." id="order_comments" class="input-text " name="comment"></textarea></p>
</div>
</div>
</div>
<div class="woocommerce-checkout-payment" id="payment">

    <div class="form-row place-order">
    
      
    
        <button id="confirm-order"  data-value="Place order" value="Place order" class="button alt">Place Order</button>
    </div>
    </div>
</form>
    </article>


@endsection