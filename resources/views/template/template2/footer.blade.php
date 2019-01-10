<footer id="colophon" class="site-footer">


        <div id="rectangle">
                <a href="#" style="font-size: large;color: white;"> <i class="ec ec-shopping-bag"></i> <strong class="itm-cont">{{Cart::count()}} </strong> item(s)
                  <span class="items-price" style="
                  margin-left: 3%; ">{{Cart::subtotal()}} TZS</span>
                <a class="button" href="{{route('cart.index')}}" style="
                background: white;
                color: {{$colour_code}};
                margin-left:3%;
                padding: 0.69em 1.134em;
            "  >Checkout</a>
                </a>
            
               </div>
	

	

	

        <div class="copyright-bar">
            <div class="container">
            <div class="pull-left flip copyright">&copy; {{date('Y')}} <a href="{{route('start')}}">{{$settings->store_name}}</a></div>
            
            <div class="pull-right flip copyright">
                Powered by <a href="https://dukafy.co.tz" target="__blank" class="ri-li"> Dukafy </a>
            </div>
                </div>
                
            </div><!-- /.container -->
        </div><!-- /.copyright-bar -->
    </footer><!-- #colophon -->
    