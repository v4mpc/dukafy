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

                    <div class="price-container info-container m-t-20">
                        <div class="row">
                            
                                @if($product->discount)
                            <div class="col-sm-6">
                                <div class="price-box">
                                    <span class="price">{{number_format(($product->price)-(($product->discount*$product->price)/100))}} TZS </span>
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
                            
                            <div class="col-sm-2">
                                <span class="label">Qty :</span>
                            </div>
                            
                            <div class="col-sm-2">
                                <div class="cart-quantity">
                                    <div class="quant-input">
                                        <div class="arrows">
                                          <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                          <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                        </div>
                                        <input type="text" value="1">
                                  </div>
                                </div>
                            </div>

                            <div class="col-sm-7">
                            <a href="#." id="product{{$product->id}}" data-id="{{$product->id}}" class="btn btn-primary add_to_cart_button"><i class="fa fa-shopping-cart inner-right-vs"></i> BUY</a>
                            </div>

                            
                        </div><!-- /.row -->
                    </div><!-- /.quantity-container -->

                    {{-- <div class="product-social-link m-t-20 text-right">
                        <span class="social-label">Share :</span>
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li><a class="fa fa-facebook" href="http://facebook.com/transvelo"></a></li>
                                <li><a class="fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa-linkedin" href="#"></a></li>
                                <li><a class="fa fa-rss" href="#"></a></li>
                                <li><a class="fa fa-pinterest" href="#"></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div> --}}

                    

                    
                </div><!-- /.product-info -->
            </div><!-- /.col-sm-7 -->
        </div><!-- /.row -->

        
        {{-- <div class="product-tabs inner-bottom-xs  wow fadeInUp">
            <div class="row">
                <div class="col-sm-3">
                    <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                        <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                        <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                        <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                    </ul><!-- /.nav-tabs #product-tabs -->
                </div>
                <div class="col-sm-9">

                    <div class="tab-content">
                        
                        <div id="description" class="tab-pane in active">
                            <div class="product-tab">
                                <p class="text">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Susp endisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibe ndum gravida eget, lacinia id purus. Susp endisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus.<p><p class="text"> Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Susp endisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibe ndum gravida eget, lacinia id purus. Susp endisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus.</p>
                            </div>	
                        </div><!-- /.tab-pane -->

                        <div id="review" class="tab-pane">
                            <div class="product-tab">
                                                                        
                                <div class="product-reviews">
                                    <h4 class="title">Customer Reviews</h4>

                                    <div class="reviews">
                                        <div class="review">
                                            <div class="review-title"><span class="summary">Best Product For me :)</span><span class="date"><i class="fa fa-calendar"></i><span>20 minutes ago</span></span></div>
                                            <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit nisl in adipiscin"</div>
                                            <div class="author m-t-15"><i class="fa fa-pencil-square-o"></i> <span class="name">Michael Lee</span></div>													</div>
                                    
                                    </div><!-- /.reviews -->
                                </div><!-- /.product-reviews -->
                                

                                
                                <div class="product-add-review">
                                    <h4 class="title">Write your own review</h4>
                                    <div class="review-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">	
                                                <thead>
                                                    <tr>
                                                        <th class="cell-label">&nbsp;</th>
                                                        <th>1 star</th>
                                                        <th>2 stars</th>
                                                        <th>3 stars</th>
                                                        <th>4 stars</th>
                                                        <th>5 stars</th>
                                                    </tr>
                                                </thead>	
                                                <tbody>
                                                    <tr>
                                                        <td class="cell-label">Quality</td>
                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cell-label">Price</td>
                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cell-label">Value</td>
                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                    </tr>
                                                </tbody>
                                            </table><!-- /.table .table-bordered -->
                                        </div><!-- /.table-responsive -->
                                    </div><!-- /.review-table -->
                                    
                                    <div class="review-form">
                                        <div class="form-container">
                                            <form role="form" class="cnt-form">
                                                
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                            <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                            <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                        </div><!-- /.form-group -->
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                            <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                        </div><!-- /.form-group -->
                                                    </div>
                                                </div><!-- /.row -->
                                                
                                                <div class="action text-right">
                                                    <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                </div><!-- /.action -->

                                            </form><!-- /.cnt-form -->
                                        </div><!-- /.form-container -->
                                    </div><!-- /.review-form -->

                                </div><!-- /.product-add-review -->										
                                
                            </div><!-- /.product-tab -->
                        </div><!-- /.tab-pane -->

                        <div id="tags" class="tab-pane">
                            <div class="product-tag">
                                
                                <h4 class="title">Product Tags</h4>
                                <form role="form" class="form-inline form-cnt">
                                    <div class="form-container">
                            
                                        <div class="form-group">
                                            <label for="exampleInputTag">Add Your Tags: </label>
                                            <input type="email" id="exampleInputTag" class="form-control txt">
                                            

                                        </div>

                                        <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                    </div><!-- /.form-container -->
                                </form><!-- /.form-cnt -->

                                <form role="form" class="form-inline form-cnt">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                    </div>
                                </form><!-- /.form-cnt -->

                            </div><!-- /.product-tab -->
                        </div><!-- /.tab-pane -->

                    </div><!-- /.tab-content -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.product-tabs --> --}}

        <!-- ============================================== UPSELL PRODUCTS ============================================== -->

<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
    
    </div><!-- /.col -->
    <div class="clearfix"></div>
@endsection