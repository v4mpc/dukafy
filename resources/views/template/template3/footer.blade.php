<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
      <div class="copyright-bar">
          <div class="container">
              <div class="col-xs-12 col-sm-6 no-padding">
                  <div class="copyright">
                        &copy; {{date('Y')}}
                      <a href="{{route('start')}}">{{$settings->store_name}}</a>
                   
                  </div>
              </div>
              {{-- <div class="col-xs-12 col-sm-6 no-padding">
                  <div class="clearfix payment-methods">
                      <ul>
                          <li><img src="assets/images/payments/1.png" alt=""></li>
                          <li><img src="assets/images/payments/2.png" alt=""></li>
                          <li><img src="assets/images/payments/3.png" alt=""></li>
                          <li><img src="assets/images/payments/4.png" alt=""></li>
                          <li><img src="assets/images/payments/5.png" alt=""></li>
                      </ul>
                  </div><!-- /.payment-methods -->
              </div> --}}
          </div>
      </div>
      <div id="rectangle">
            <a href="#" style="font-size: large;color: white;"> <i class="glyphicon glyphicon-shopping-cart"></i> <strong class="itm-cont">{{Cart::count()}} </strong> item(s)
              <span class="items-price">{{Cart::subtotal()}} TZS</span></a>
              <a class="btn btn-upper btn-primary m-t-20" href="{{route('cart.index')}}" style="
                background: white;
                color: {{$colour_code}};
                margin-top:0px;
            "  >Checkout</a>
        
           </div>
  </footer>
  <!-- ============================================================= FOOTER : END============================================================= -->
  