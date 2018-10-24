<footer id="colophon" class="site-footer">


        <div id="rectangle">
                <a href="#" style="font-size: large;color: white;"> <i class="ec ec-shopping-bag"></i> <strong class="itm-cont">{{Cart::count()}} </strong> item(s)<br>
                  <span class="items-price">{{Cart::subtotal()}} TZS</span></a>
            
               </div>
	

	

	

        <div class="copyright-bar">
            <div class="container">
            <div class="pull-left flip copyright">&copy; {{date('Y')}} <a href="{{route('start')}}">{{$settings->store_name}}</a></div>
                
                </div>
            </div><!-- /.container -->
        </div><!-- /.copyright-bar -->
    </footer><!-- #colophon -->
    