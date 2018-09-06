<div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                            @if($settings->working_hours!=null)
                    <li><a href="{{route("start")}}">{{$settings->working_hours}} </a></li>
                    @endif
                    @if($settings->latitude!=null)
    <li>
        <a  data-fancybox data-src="#hidden-content" href="javascript:;">
            <i class="icon fa fa-location-arrow" ></i>Store Locator</a>

    </li>
    @endif

   

<li><a href="{{route('cart.index')}}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                    @if($settings->facebook)
                      <li><a href="#" id="facebook"><i class="icon fa fa-facebook"></i>Facebook</a></li> 
                      @endif
                      @if($settings->twitter)
                        <li><a href="#" id="twitter"><i class="icon fa fa-twitter"></i>Twitter</a></li>
                        @endif
                        @if($settings->instagram)
        <li><a href="#" id="instagram"><i class="icon fa fa-instagram"></i>Instagram</a></li>
                        @endif
                        @if($settings->whatsapp)
        <li><a href="#" id="whatsapp"><i class="icon fa fa-whatsapp"></i>Whatsapp</a></li>
                        @endif
                    </ul>
                    <ul class="list-unstyled pull-right">
                        
                    </ul>
                </div><!-- /.cnt-account -->
    
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->

    <div style="display: none;" id="hidden-content">

        <section class="map-block">
  
                <iframe src="http://maps.google.com/maps?q={{$settings->latitude}},{{$settings->longitude}}&z=15&output=embed" width="530" height="330" frameborder="0" style="border:0"></iframe>
  
  
  
  
        </section>
      </div>
    <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
    <div class="logo">
    <a href="{{route('start')}}">
        @if($settings->logo!=null)
            <img src="{{asset('images/'.$settings->logo)}}" alt="">
            @elseif($settings->logo_text!=null)
            <h3 style="color:{{$colour_code}};margin-top: 30px;" id="logo">{{$settings->logo_text}}</h3>
            @else
       

            @endif
        </a>
    </div><!-- /.logo -->
    <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->
    
                    <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                        <div class="contact-row">
                            @if($settings->mobile!=null)
        <div class="phone inline">
            <i class="icon fa fa-phone"></i>+255 {{substr_replace($settings->mobile," ", 3, 0)}}
        </div>
        @endif
        @if($settings->email!=null)
        <div class="contact inline">
            <i class="icon fa fa-envelope"></i> <a href="#." class="__cf_email__" data-cfemail="9fecfef3faeddfeaf1f6fcfeecfab1fcf0f2">{{$settings->email}}</a>
        </div>
        @endif
    </div><!-- /.contact-row -->
    <!-- ============================================================= SEARCH AREA ============================================================= -->
    <div class="search-area">
        <form action="{{route('search')}}" id="search-form" method="GET">
                {{csrf_field()}}
            <div class="control-group">
    
                {{-- <ul class="categories-filter animate-dropdown">
                    <li class="dropdown">
    
                        <a class="dropdown-toggle"  data-toggle="dropdown" href="#">Categories <b class="caret"></b></a>
    
                        <ul class="dropdown-menu" role="menu" >
                                <option value="all">All Categories</option>
                                @foreach($categories as $category) @if(count($category->products))
                                <option class="level-0" value="{{$category->id}}">{{$category->name}}</option>
                                @endif @endforeach
                        </ul>
                    </li>
                </ul> --}}
    
                <input class="search-field" name="query" value="{{request()->input('query')}}" placeholder="Search here..." />
    
                <a class="search-button" href="{{ route('search') }}" onclick="event.preventDefault();
                document.getElementById('search-form').submit();" ></a>    
    
            </div>
        </form>
    </div><!-- /.search-area -->
    <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->
    
                    <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    
        <div class="dropdown dropdown-cart">
            <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                    <div class="total-price-basket">
                        <span class="lbl">cart -</span>
                        <span class="total-price">
                            <span class="sign">TZS</span>
                            <span class="value items-price">{{Cart::subtotal()}}</span>
                        </span>
                    </div>
                    <div class="basket">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                    </div>
                    <div class="basket-item-count"><span class="count itm-cont">{{Cart::count()}}</span></div>
                
                </div>
            </a>
            <ul class="dropdown-menu">
                <li class="cart-glance-content">
                        @forelse(Cart::content() as $item)
                    <div class="cart-item product-summary">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="image">
                                    <a href="{{route('product.show',$item->model->id)}}" class="thumb"><img src="{{asset('images/'.$item->model->images[0]->image)}}" class="img-responsive" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                
                                <h3 class="name"><a href="{{route('product.show',$item->model->id)}}">{{$item->name}}</a></h3>
                                <div class="price">{{number_format($item->price) }}TZS</div>
                            </div>
                            <div class="col-xs-1 action">
                                <a href="#"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div><!-- /.cart-item -->
                    @empty

                            <p>No item!</p>
                            @endforelse
                    <div class="clearfix"></div>
                <hr>
            
                <div class="clearfix cart-total">
                    <div class="pull-right">
                        
                            <span class="text">Sub Total :</span><span class='price'>{{Cart::subtotal()}} TZS</span>
                            
                    </div>
                    <div class="clearfix"></div>
                        @if(Cart::count())
                <a href="{{route('check_out.create')}}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
                @endif
                </div><!-- /.cart-total-->
                        
                    
            </li>
            </ul><!-- /.dropdown-menu-->
        </div><!-- /.dropdown-cart -->
    
    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
                </div><!-- /.row -->
    
            </div><!-- /.container -->
    
        </div><!-- /.main-header -->
    