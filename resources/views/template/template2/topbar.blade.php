


        <div class="top-bar">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                        <li class="menu-item animate-dropdown"><a href="{{route('start')}}" title="Welcome to {{$settings->store_name}}" href="#">Welcome to {{$settings->store_name}}</a></li>
                        </ul>
                    </nav>
            
                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Store Locator" data-fancybox data-src="#hidden-content" href="javascript:;"><i class="ec ec-map-pointer"></i>Store Locator</a></li>
                            <li class="menu-item animate-dropdown"><a title="Know more about us" href="{{route('about')}}"><i class="{{route('contact')}}"></i>About Us</a></li>
                        <li class="menu-item animate-dropdown"><a title="Contact Us for Support" href="{{route('contact')}}"><i class="ec ec-support"></i>Contact Us</a></li>
                            
                            <li class="menu-item animate-dropdown"><a title="Call Us 24/7" href="my-account.html"><i class="ec ec-phone"></i>Hotline:+255{{$settings->mobile}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div><!-- /.top-bar -->


            <div style="display: none;" id="hidden-content">

                    <section class="map-block">
              
                    <iframe src="https://www.google.com/maps/embed/v1/place?key={{$maps_api_key}}&q=40.7127837,-74.0059413" width="600" height="288" style="border:0" allowfullscreen=""></iframe>
              
              
              
              
                    </section>
                  </div>