	<!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
                <ul class="nav navbar-nav">
                <li class="{{Route::is('start')?"active":""}} dropdown">
                        <a href="{{route("start")}}">Home</a>
                    
                    </li>
                
        
                
        @if($settings->about)
                    <li class="{{Route::is('about')?"active":""}}  dropdown">
                        <a href="{{route('about')}}">About</a>
                    </li>
        @endif
                    <li class="{{Route::is('contact')?"active":""}}  dropdown">
                    <a href="{{route('contact')}}">Contact</a>
                    </li>
                    
                    
                    
                </ul><!-- /.navbar-nav -->
             
                <div class="clearfix"></div>

              
               				
            </div><!-- /.nav-outer -->

           
        </div><!-- /.navbar-collapse -->
        
        
                    </div><!-- /.nav-bg-class -->
                </div><!-- /.navbar-default -->
            </div><!-- /.container-class -->
        
        </div><!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->
        