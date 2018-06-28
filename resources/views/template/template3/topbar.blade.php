<div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                    <li><a href="{{route("start")}}"><i class="icon fa fa-user"></i>Welcome to {{$settings->store_name}} </a></li>
    <li>
        <a href="#">
            <i class="icon fa fa-location-arrow"></i>Store Locator</a>

    </li>

<li><a href="{{route('cart.index')}}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <!-- <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li>
                        <li><a href="#"><i class="icon fa fa-sign-in"></i>Login</a></li> -->
                    </ul>
                </div><!-- /.cnt-account -->
    
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
    <div class="logo">
    <a href="{{route('start')}}">
            
            <img src="{{asset('images/'.$settings->logo)}}" alt="">
    
        </a>
    </div><!-- /.logo -->
    <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->
    
                    <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                        <div class="contact-row">
        <div class="phone inline">
            <i class="icon fa fa-phone"></i>+255{{$settings->mobile}}
        </div>
        <div class="contact inline">
            <i class="icon fa fa-envelope"></i> <a href="#." class="__cf_email__" data-cfemail="9fecfef3faeddfeaf1f6fcfeecfab1fcf0f2">{{$settings->email}}</a>
        </div>
    </div><!-- /.contact-row -->
    <!-- ============================================================= SEARCH AREA ============================================================= -->
    <div class="search-area">
        <form action="{{route('search')}}" method="GET">
                {{csrf_field()}}
            <div class="control-group">
    
                <ul class="categories-filter animate-dropdown">
                    <li class="dropdown">
    
                        <a class="dropdown-toggle"  data-toggle="dropdown" href="indexe2f2.html?page=category">Categories <b class="caret"></b></a>
    
                        <ul class="dropdown-menu" role="menu" >
                                <option value="all">All Categories</option>
                                @foreach($categories as $category) @if(count($category->products))
                                <option class="level-0" value="{{$category->id}}">{{$category->name}}</option>
                                @endif @endforeach
                        </ul>
                    </li>
                </ul>
    
                <input class="search-field" placeholder="Search here..." />
    
                <a class="search-button" href="#" ></a>    
    
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
                        
                <a href="{{route('check_out.create')}}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
                </div><!-- /.cart-total-->
                        
                    
            </li>
            </ul><!-- /.dropdown-menu-->
        </div><!-- /.dropdown-cart -->
    
    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
                </div><!-- /.row -->
    
            </div><!-- /.container -->
    
        </div><!-- /.main-header -->
    