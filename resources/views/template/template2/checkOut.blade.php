@extends('template.template2.layout') 
@section('content')
<article class="page type-page status-publish hentry">
        <header class="entry-header"><h1 itemprop="name" class="entry-title">Checkout</h1></header><!-- .entry-header -->

        <form  action="{{route('order.store')}}" class="checkout woocommerce-checkout" id="confirmation-form" method="post" name="checkout">
            {{csrf_field()}}
<div id="customer_details" class="col2-set">
<div class="col-1">
<div class="woocommerce-billing-fields">

    <h3>Billing Details</h3>

    <p id="billing_first_name_field" class="form-row form-row form-row-first validate-required"><label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_first_name" name="first_name" class="input-text" required></p>

    <p id="billing_last_name_field" class="form-row form-row form-row-last validate-required"><label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_last_name" name="last_name" class="input-text" required></p><div class="clear"></div>


    <p id="billing_email_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr></label><input type="email" value="" placeholder="" id="billing_email" name="email" class="input-text " required></p>

    <p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone"><label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr></label><input type="tel" value="" placeholder="" id="billing_phone" name="phone" class="input-text " required></p><div class="clear"></div>


    <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Street address" id="billing_address_1" name="address" class="input-text " required></p>


    <div class="clear"></div>

    

</div>
</div>

<div class="col-2">
<h3>Shipping Details</h3>
<div class="woocommerce-shipping-fields">
    

    <p id="order_comments_field" class="form-row form-row notes"><label class="" for="order_comments">Order Notes</label><textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="comment"></textarea></p>
</div>
</div>
</div>

<h3 id="order_review_heading">Your order</h3>

<div class="woocommerce-checkout-review-order" id="order_review">
<table class="shop_table woocommerce-checkout-review-order-table">
<thead>
    <tr>
        <th class="product-name">Product</th>
        <th class="product-total">Total (TZS)</th>
    </tr>
</thead>
<tbody>
        @forelse(Cart::content() as $item)
    <tr class="cart_item">
        <td class="product-name">
                {{$item->name}}
            <strong class="product-quantity">× {{$item->qty}}</strong>													</td>
        <td class="product-total">
            <span class="amount">{{number_format($item->price*$item->qty)}}</span>
        </td>
    </tr>
   @endforeach
</tbody>
<tfoot>

    {{-- <tr class="cart-subtotal">
        <th>Subtotal</th>
        <td><span class="amount">$3,299.00</span></td>
    </tr>

    <tr class="shipping">
        <th>Shipping</th>
        <td data-title="Shipping">Flat Rate: <span class="amount">$300.00</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>
    </tr> --}}

    <tr class="order-total">
        <th>Total</th>
        <td><strong><span class="amount">{{Cart::subtotal()}} TZS</span></strong> </td>
    </tr>
</tfoot>
</table>

<div class="woocommerce-checkout-payment" id="payment">

<div class="form-row place-order">

  

    <button id="confirm-order"  data-value="Place order" value="Place order" onclick="event.preventDefault();" class="button alt">Place Order</button>
</div>
</div>
</div>
</form>
    </article>

@endsection