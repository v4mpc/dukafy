<!doctype html>
<html lang="zxx">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dukafy</title>
    <link rel="shortcut icon" href="img/thumbnail.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('dukafy/css/bootstrap.min.css')}}">
    <!-- Font Awesome 
    <link rel="stylesheet" href="css/all.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('dukafy/css/owl.carousel.min.css')}}">
    <!-- Owl Carousel Theme -->
    <link rel="stylesheet" href="{{asset('dukafy/css/owl.theme.default.min.css')}}">
    <!-- Lity -->
    <link rel="stylesheet" href="{{asset('dukafy/css/lity.min.css')}}">
    <!-- Anomations -->
    <link rel="stylesheet" href="{{asset('dukafy/css/animations.css')}}">
    <!-- Style-->
    <link rel="stylesheet" href="{{asset('dukafy/css/style.css')}}">
    <!-- Media Queries-->
    <link rel="stylesheet" href="{{asset('dukafy/css/media-queries.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/sweetalert.css')}}">
    <!-- Color Theme -->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-1.css')}}">-->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-2.css')}}">-->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-3.css')}}">-->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-4.css')}}">-->
    <link rel="stylesheet" href="{{asset('dukafy/css/color-theme/color-theme-5.css')}}">
    <!-- Switch Style -->
    <link id="switch_style" href="css/color-theme/index.html" rel="stylesheet">
    {{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}

   

    <style>


        .form-control:focus {
  border-color: rgb(60, 255, 0);
  /* box-shadow: inset 0 1px 1px rgba(52, 235, 15, 0.171), 0 0 8px rgba(255, 0, 0, 0.6); */
  
  box-shadow: inset 0 1px 1px rgba(52, 235, 15, 0.171), 0 0 8px rgb(44, 184, 36,0.6);
  
  rgb(44, 184, 36,0.6);
}
    
    .input-group-1{
        display:none;
    }

    .input{
        padding: 15px 20px;
    width: 100%;
    height: 60px;
    border: none;
    background-color: rgb(250, 251, 255);
    border-radius: 10px;
    margin-bottom: 30px !important;
    -webkit-box-shadow: 0 10px 30px 0 rgba(5, 16, 44, .15);
    box-shadow: 0 10px 30px 0 rgba(5, 16, 44, .15);
    transition: .4s;
    -webkit-transition: .4s;
    font-size: inherit;
    font-weight: 405;

    }

    #status{
        font-style: italic;
    }

   
    </style>

</head>

<body>
{{-- 
        @if (Session::has('success'))
   


        <div class="bs-callout-success callout-border-right callout-bordered callout-transparent mt-1 p-1">
                <h4 class="success">Success!</h4>
                <p>{{Session::get('success')}}</p>
              </div>
        
        @endif --}}


        
        
        

        
       
    <!-- Page -->
    <div id="top" class="page-wrap header-bg">

        <!-- Navigation -->
        <nav id="navigation" class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#" style="width:  30%;">
                    <!--<div class="logo bg-color-1">å</div>-->
                    <img src="{{asset('dukafy/img/logo.png')}}" id="logo-name" style="width: 80%;" />
                </a>
                <!-- Logo end -->
                <!-- Burger menu button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="burger-menu">
                        <span class="burger"></span>
                    </span>
                </button>
                <!-- Burger menu button end -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <!-- Navigation Link 1 -->
                        <li class="nav-item active">
                            <a class="nav-link mx-auto" href="#top">Home</a>
                        </li>
                        <!-- Navigation Link 2 -->
                        <li class="nav-item">
                            <a class="nav-link" href="#hiw">How It Works</a>
                        </li>
                        <!-- Navigation Link 3 -->
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <!-- Navigation Link 4 -->
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                        </li>-->
                        <!-- Navigation Link 5 -->
                        <li class="nav-item">
                            <a class="nav-link" href="#price">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <!-- Navigation Link 6 -->
                        <li class="nav-item button " style="background-image: -webkit-gradient(linear, left top, left bottom, from(#2cb824), to(#000100));">
                            <a class="nav-link " href="#register-form" style="color:#FFF">Register Now</a>
                        </li>
                        <!--<li class="nav-item button header-button bg-color-1">
                            <a class="nav-link" href="#"><i class="fas fa-cart-arrow-down"></i> Purchase now</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation end -->
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="row header-row">
                    <!-- Main title -->
                    <div class="col-sm-12 col-md-6 align-self-center main-title">
                        {{-- <p class="light bold small main-suptitle">Try on the touch</p> --}}
                        <h1><b>Dukafy</b><span class="thin"> - Create Your Own Online Store in 60 Seconds!</span></h1>
                        <!-- Buttons -->
                        <!--<a href="#.">
                            <div class="button bg-color-1">Explore Now</div>
                        </a>
                        <a class="gray link" href="#.">Download free trial <i class="fas fa-chevron-right"></i></a>-->
                    </div>
                    <!-- Main title end -->
                    <!-- Phone -->
                    <div class="col-12 col-md-6 align-self-center header-macbook">
                        <img class="jump" src="{{asset('dukafy/img/macbook.png')}}" alt="macbook">
                    </div>
                    <!-- Phone end -->
                    <!-- Social icons -->
                    {{-- <div class="social-icons">
                        <ul>
                            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#."><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div> --}}
                    <!-- Social icons end -->
                </div>
                <!-- Tooltip -->
                <a href="#about">
                    <div class="header-tooltip"><i class="fa scroll-arrow bounce fa-angle-double-down"></i>
                        <p class="light thin small">Scroll Down<br>To Learn More</p>
                    </div>
                </a>
                <!-- Tooltip end -->
            </div>
        </header>
        <!-- Header end -->
        <!-- How it works -->
        <section id="hiw" class="hiw p-90-60">
            <div class="line"></div>
            <div class="container">
                <!-- Section title -->
                <div class="section-title sm-ac mb-90">
                    <p class="light bold small">Easy Steps</p>
                    <h2><span class="thin">Setup your store</span> <b> in four easy steps</b></h2>
                    <p class="light thin">&nbsp;</p>
                </div>
                <!-- Section title end -->
                <div class="row">
                    <!-- Item 1 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 0s">1</div>
                        <p class="bold">Sign up </p>
                        <p class="light thin">Give us a little information on your store including your name and what you'd like to sell. </p>
                    </div>
                    <!-- Item 2 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: .75s">2</div>
                        <p class="bold">Choose a Theme</p>
                        <p class="light thin">Pick 1 from 3 beautiful design themes for your online store. You can also pick the color of your store. 
                            </p>
                    </div>
                    <!-- Item 3 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 1.5s">3</div>
                        <p class="bold">Add your Products</p>
                        <p class="light thin">Using our unique system, you can add multiple products to your store in less than 30 seconds. </p>
                    </div>
                    <!-- Item 4 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 2.25s">4</div>
                        <p class="bold">Sit Back and Relax</p>
                        <p class="light thin">Your store is now ready! Watch it go live and inform your customers to come over and start buying.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it works end -->
        <!-- Features -->
        <section class="features p-0-60">
            <div class="container">
                <!-- Section title -->
                <div class="section-title sm-ac mb-90">
                    
                    <h2><span class="thin">Dukafy </span> <b>is Perfect for</b></h2>
                    <p class="light thin">&nbsp;</p>
                </div>
                <!-- Section title end -->
                <div class="row">
                    <!-- Features card 1 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/Grocery.png')}}" alt="icon">
                            <p class="bold">Grocery Stores</p>
                            <p class="light thin">Easily allow people to submit their purchase their groceries from your store</p>
                        </div>
                    </div>
                    <!-- Features card 2 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/Retail Outlets.png')}}" alt="icon">
                            <p class="bold">Retail Outlets</p>
                            <p class="light thin">Allow your customers to see your catalog of products in one single platform</p>
                        </div>
                    </div>
                    <!-- Features card 3 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/Home Base Business.png')}}" alt="icon">
                            <p class="bold">Home Based Businesses</p>
                            <p class="light thin">Instead of Whatsapping your whole stock list,you can easily send people to your store.</p>
                        </div>
                    </div><script>
                        function onSubmit(token) {
                          document.getElementById("demo-form").submit();
                        }
                      </script>
                    <!-- Features card 4 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/Supermarket.png')}}" alt="icon">
                            <p class="bold">Supermarkets</p>
                            <p class="light thin">Get ahead of the rest and allow your customers to order their shopping list online.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features end -->
        <!-- Video -->
        <!-- <section class="video bg-animation p-90-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-7 align-self-center mb-30">
                   
                        <div class="section-title">
                            <p class="white-light bold small">&nbsp;</p>
                            <h2 class="h1 white"><span class="thin">Watch</span> <b>Video</b> <span class="thin">Presentation</span></h2>
                            <p class="white-light thin m-0">&nbsp;</p>
                        </div>
                       
                    </div>
                 
                    <div class="col-12 col-sm-5 align-self-center mb-30">
                        <div class="play-frame play-rotate"></div>
                        <a href="https://www.youtube.com/watch?v=_SOkFEkZPmc" data-lity>
                            <div class="play-button bg-color-1">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div>
                   
                </div>
            </div>
        </section> -->
        <!-- Video end -->
        <!-- About right -->
        <section id="about" class="about-1 p-90-60">
            <div class="container">
                <div class="row">
                    <!-- Text -->
                    <div class="col-12 col-lg-5 order-lg-last mb-30 align-self-center">
                        <!-- Title -->
                        <div class="section-title mb-30">
                            
                            <h2><span class="thin">As easy </span> <b>as pie!</b></h2>
                        </div>
                        <!-- Text -->
                        <p class="light thin">Dukafy's dashboard will guide you through the setup process so you can single-handedly establish your professional online store. There’s no need to hire a web designer, No need to worry about domains, hosting, security and all that complex stuff. Save time and costs and start selling online instantly!</p>
                        <!-- Buttons -->
                        {{-- <a href="#.">
                            <div class="button bg-color-1">Explore Now</div>
                        </a> --}}
                        {{-- <a class="gray link" href="#.">Download free trial <i class="fa fa-chevron-right"></i></a> --}}
                    </div>
                    <!-- Ilustration -->
                    <div class="col-12 col-lg-7 mb-30 pull-lg-7 align-self-center screens-1">
                        <img src="{{asset('dukafy/img/artboard-1.png')}}" alt="screens">
                    </div>
                </div>
            </div>
        </section>
        <!-- About right end -->
        <!-- About left -->
        <section class="about-2 p-0-60">
            <div class="container">
                <div class="row">
                    <!-- Text -->
                    <div class="col-12 col-lg-5 mb-30 align-self-center">
                        <!-- Title -->
                         <!-- Title -->
                        <div class="section-title mb-30">
                            
                            <h2><span class="thin">Your </span> <b>Dashboard</b></h2>
                        </div>
                        <!-- Text -->
                        <p class="light thin">Everything in one place. Selling your products should be every bit as simple as it is from your offline store. With Dukafy's Ecommerce solution you get an easy to use platform to run your online business with ease.</p>
                        <p> <i class="fa fa-check"></i> Choose from 3 design themes.</p>
                        <p> <i class="fa fa-check"></i> See your orders on one dashboard.</p>
                        <p> <i class="fa fa-check"></i> Easily add and remove products.</p>
                        <p> <i class="fa fa-check"></i> Make products featured.</p>
                        <p> <i class="fa fa-check"></i> Make selected products Out of Stock.</p>
                        <p> <i class="fa fa-check"></i> Track your sales with our analytics.</p>
                    </div>
                    <!-- Ilustration -->
                    <div class="col-12 col-lg-7 mb-30 align-self-center screens-1">
                        <img src="{{asset('dukafy/img/artboard-2.png')}}" alt="screens">
                    </div>
                </div>
            </div>
        </section>
        <!-- About left end -->


      
     
       
       
        <section id="price" class="pricing p-0-60">
            <div class="container">
                <!-- Section title -->
                <div class="section-title sm-ac mb-90">
                    <!--<p class="light bold small">About us are told</p>-->
                    <h2><span class="thin">Flexible </span><b>Pricing</b><span class="thin"> Plans</span></h2>
                    <!--<p class="light thin">Dolor sit Mollitia harum ea ut eaque velit.</p>-->
                </div>
                <!-- Section title end -->
                <div class="row">
                    <div class="col-12 col-lg-3 mb-30">
                        <div class="pricing-table text-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="bold price-header">Basic</p>
                                </div>
                                <!-- <div class="col-12">
                                    <p class="light thin">
                                        Only 50 products will be added in this package
                                    </p>
                                </div> -->

                                <div class="col-12">
                                    <select name="test" class="form-control plan-A" id="">
                                        <option selected value="1">Monthly</option>
                                        <option  value="2">Quaterly</option>
                                        <option value="3">Half Yearly</option>
                                        <option value="4">Yearly</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <p class="bold price">TZS <span>19,000</span>/Month</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-A">
                                        <li>Up to 50 Products</li>
                                        <li>1 Free Domain</li>
                                    </ul>
                                </div>

                                <div class="col-12">
                                    <p class="bold price total-price total-A">Total TZS <span>19,000</span></p>
                                </div>
                                <div class="col-12">
                                    <a href="#register-form" data-plan="plan-A" class="button bg-color-2 select"><i class="fa fa-cart-arrow-down"></i>
                                        Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 mb-30">
                        <div class="pricing-table text-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="bold price-header">Shop</p>
                                </div>

                                <!-- <div class="col-12">
                                    <p class="light thin">
                                        Only 50 products will be added in this package
                                    </p>
                                </div> -->

                                <div class="col-12">
                                    <select name="test" class="form-control plan-B" id="">
                                        <option selected value="1">Monthly</option>
                                        <option value="2">Quaterly</option>
                                        <option value="3">Half Yearly</option>
                                        <option value="4">Yearly</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <p class="bold price">TZS <span>29,000</span>/Month</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-B">
                                        <li>Up to 400 Products</li>
                                        <li>1 Free Domain</li>
                                    </ul>
                                </div>

                                <div class="col-12">
                                    <p class="bold price total-price total-B">Total TZS <span>29,000</span></p>
                                </div>
                                <div class="col-12">
                                    <a href="#register-form" data-plan="plan-B" class="button bg-color-2 select"><i class="fa fa-cart-arrow-down"></i>
                                        Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 mb-30">
                        <div class="pricing-table text-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="bold price-header">Store</p>
                                </div>
                                <!-- <div class="col-12">
                                    <p class="light thin">
                                        Only 50 products will be added in this package
                                    </p>
                                </div> -->

                                <div class="col-12">
                                    <select name="test" class="form-control plan-C" id="">
                                        <option selected value="1">Monthly</option>
                                        <option value="2">Quaterly</option>
                                        <option value="3">Half Yearly</option>
                                        <option value="4">Yearly</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <p class="bold price">TZS <span>49,000</span>/Month</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-C">
                                        <li>Up to 1,000 Products</li>
                                        <li>1 Free Domain</li>
                                    </ul>
                                </div>

                                <div class="col-12">
                                    <p class="bold price total-price total-C">Total TZS <span>49,000</span></p>
                                </div>
                                <div class="col-12">
                                    <a href="#register-form" data-plan="plan-C" class="button bg-color-2 select"><i class="fa fa-cart-arrow-down"></i>
                                        Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 mb-30">
                        <div class="pricing-table text-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="bold price-header">Super Market</p>
                                </div>
                                <!-- <div class="col-12">
                                    <p class="light thin">
                                        Only 50 products will be added in this package
                                    </p>
                                </div> -->

                                <div class="col-12">
                                    <select name="test" class="form-control plan-D" id="">
                                        <option selected value="1">Monthly</option>
                                        <option value="2">Quaterly</option>
                                        <option value="3">Half Yearly</option>
                                        <option value="4">Yearly</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <p class="bold price">TZS <span>99,000</span>/Month</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-D">
                                        <li>Unlimited Products</li>
                                        <li>1 Free Domain</li>
                                    </ul>
                                </div>

                                <div class="col-12">
                                    <p class="bold price total-price total-D">Total TZS <span>99,000</span></p>
                                </div>
                                <div class="col-12 nav-item">
                                    <a href="#register-form" data-plan="plan-D" class="button bg-color-2 nav-link select"><i class="fa fa-cart-arrow-down"></i>
                                        Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


           <!-- Call to action -->
           <section class="call-to-action bg-animation p-90-60" id="register-form">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7 align-self-center mb-30">
                            <!-- Section title -->
                            <div class="section-title">
                                <p class="white-light bold small">Sign Up</p>
                                <h2 class="h1 white"><span class="thin">Start Your</span> <b> Store Today</b></h2>
                                <p class="white-light thin m-0">Fill in the form  to get started</p>
                            </div>
                            <!-- Section title end -->
                        </div>
                        <div class="col-12 col-lg-5 align-self-center mb-30">
                            <form id="myform" action="{{route('request_account')}}" method="POST">
                                    {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12 col-md">
                                        <!-- Name input -->
                                        <input type="text" name="name" value="{{old('name')}}" placeholder="Full Name" required>
                                        <!-- Email input -->
                                        <input type="email" name="email" value="{{old('email')}}" placeholder="Email" required>
                                        <input type="text" name="phone" placeholder="Valid Phone #" required>


                                        <select class="custom-select custom-select-lg mb-3 input" id="domain-source" name="domain_source">
                                                <option selected value="0">New Domain</option>
                                                <option value="1">Existing Domain</option>
                                                

                                              </select>

                                            <br>

  

                                            <input type="text" id="domain-register" class="input-group-1" name="domain1" placeholder="Type Your Domain"  >
                                       

                                        <div class="input-group" id="domain-checker">

                                                <div class="input-group-prepend input-group-1">
                                                        <span class="input-group-text text-warning"  style="border-radius: 10px 0 0 10px;" id="status">not available</span>
                                                      </div>
                                         
                                            <input type="text" id="domain" class="form-control is-valid" name="domain" style="
                                            border-radius: 10px 0 0 10px; font-weight: 405;
                                        " placeholder="Domain">
                                            
                     
                                            <div class="input-group-append">
                                                <div class="input-group-text" style="border-radius: 0 10px 10px 0; ">.co.tz</div>
                                              </div>
                                            
                                          </div>
                                         

                                          <br>

                                          <select class="custom-select custom-select-lg mb-3 input" name="package_id">
                                                <option selected>Select Package</option>
                                                <option id="basic" value="1">Basic</option>
                                                <option id="shop" value="2">Shop</option>
                                                <option id="store" value="3">Store</option>
                                                <option id="market" value="4">Super Market</option>

                                              </select>

                                            <br>
                                            

                                        {{-- <input type="text" name="domain" placeholder="Domain Name" required disabled> --}}

                                      

                                            <select class="custom-select custom-select-lg mb-3 input" name="subscription_id" required>
                                                    <option value="" selected>Select Plan</option>
                                                    <option id="1" value="1">Monthly</option>
                                                    <option id="2" value="2">Quaterly</option>
                                                    <option id="3" value="3">Half Yearly</option>
                                                    <option id="4" value="4">Yearly</option>
                                                  </select>

                                            <br>

                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" required class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I, Agree to <a href="{{route('terms')}}" target="_blank">Terms and Condition</a></label>
                                                  </div>


                                        


                                        

                                        

                                       
                                       
                                               
                                           
                                    </div>
                                   

                                </div>
                                

                                <div id="ReCaptchContainer"></div>  
<label id="lblMessage" runat="server" clientidmode="static"></label>  
<br /> 
                                <button type="submit" class="m-0 button bg-color-1" aria-haspopup="true" style="float:  right;" disabled id="submitBtn" >Submit</button>
                               
                            </form>
                          
                            <!--<a class="white-link m-0" href="#" aria-haspopup="true">Download free trial <i class="fa fa-chevron-right"></i></a>-->
                        </div>
                    </div>
                </div>
            </section>

             <!-- Price --><br><br>
       


        <!-- Contact -->
        <section id="contact" class="p-0-60">
            <div class="container">
                <div class="bg-map">
                    <img src="{{asset('dukafy/img/bg-map.png')}}" alt="map">
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- Section title -->
                        <div class="section-title sm-ac mb-90">
                            <p class="light bold small">Get in touch.</p>
                            <h2><span class="thin">Write us a </span><b>message</b></h2>
                            
                            
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-6">
                        <!-- Social icons -->
                        <div class="contact-social-icons">
                            <ul class="sm-ac">
                                <li><a href="#."><i class="fa fa-facebook" style="font-size: 30px;"></i></a></li>
                                <li><a href="#."><i class="fa fa-youtube" style="font-size: 30px;"></i></a></li>
                                <li><a href="#."><i class="fa fa-instagram" style="font-size: 30px;"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social icons end -->
                    </div> --}}
                </div>
                <!-- Section title end -->
            <form method="POST" action="{{route('dukafy_contact_form')}}">
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-12 col-md">
                            <!-- Name input -->
                            <input type="text" name="name" placeholder="Name" required>
                            <!-- Email input -->
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-12 col-md">
                            <!-- Text input -->
                            <textarea name="message" cols="30" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12 col-md-auto text-center">
                            <!-- Submit form button -->
                            <button type="submit" class="submit bg-color-1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Popup "success" -->
        <div class="popup {{Session::has('email_sent')?"":"n-active-popup"}}">
                <!-- Popup window -->
                <div class="popup-window">
                    <!-- Popup icon-->
                    {{-- <img src="img/email.png" alt="success"> --}}
                    <!-- title -->
                    <p class="bold">Success</p>
                    <!-- Text -->
                    <p class="light thin">You have successfully sent us a message.</p>
                    <!-- Button -->
                    <button class="button bg-color-1">Well done!</button>
                </div>
                <!-- Popup window end -->
            </div>
            <!-- Popup end -->

            
        </section>
        <!-- Contact end -->
        <!-- Footer -->
        <footer id="footer" class="bg-animation p-90-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 align-self-center mb-30">
                        <!-- Logo -->
                        <a class="footer-brand" href="#">
                            <img src="{{asset('dukafy/img/logo.png')}}" style="width: 80%;" />
                        </a>
                        <!-- Logo end -->
                    </div>
                    <div class="col-12 col-md-9 align-self-center justify-content-center mb-30">
                        <ul class="footer-nav">
                            <!-- Footer Link 1 -->
                            <li class="nav-item active">
                            <a class="nav-link mx-auto" target="_blank" href="{{route('terms')}}">Terms & Conditions</a>
                            </li>

                            <!--<li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://themeforest.net/user/millerdigitaldesign/portfolio?ref=MillerDigitalDesign">Author</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://themeforest.net/user/millerdigitaldesign/portfolio?ref=MillerDigitalDesign">More templates</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://www.flaticon.com/">Used icons</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->
        <!-- Copyright -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-sm-6">
                        <!-- Copyright -->
                        <p class="small thin white-light sm-ac">Copyrights © {{date('Y')}}. All Rights Reserved.</p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <!-- Author -->
                        <p class="small thin white-light author sm-ac">Designed by <a href="https://legendaryits.com">Legendary
                                IT Solutions</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
    </div>
    <!-- Page end -->

    <!-- jQuery -->
    <script src="{{asset('dukafy/js/jquery-1.11.2.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('dukafy/js/bootstrap.min.js')}}"></script>
    <!-- ajax -->
    <script src="{{asset('dukafy/js/ajax.js')}}"></script>
    <!-- Smooth Scroll -->
    <script src="{{asset('dukafy/js/smooth-scroll.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('dukafy/js/owl.carousel.min.js')}}"></script>
    <!-- Lity -->
    <script src="{{asset('dukafy/js/lity.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('dukafy/js/main.js')}}"></script>

    <script src="{{asset('vendor/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/js/scripts/extensions/sweet-alerts.min.js')}}" type="text/javascript"></script>

        <script src="https://www.google.com/recaptcha/api.js?onload=renderRecaptcha&render=explicit" async defer></script> 

    <script>


         var your_site_key = '6LcBJnQUAAAAACvBRP0H0twxO9LljmwIzsRO8nWh';  
    var renderRecaptcha = function () {  
        grecaptcha.render('ReCaptchContainer', {  
            'sitekey': your_site_key,  
            'callback': reCaptchaCallback,  
            theme: 'light', //light or dark    
            type: 'image',// image or audio    
            size: 'normal'//normal or compact    
        });  
    };  
  
    var reCaptchaCallback = function (response) {  
        if (response !== '') {  
            jQuery('#lblMessage').css('color', 'green').html('Success');
            //then we submit the form

             $('#submitBtn').removeAttr('disabled');
           
        }  
    };  
  
    jQuery('button[type="button"]').click(function(e) {  
        e.preventDefault();
        var message = 'Please check the checkbox';  
        if (typeof (grecaptcha) != 'undefined') {  
            var response = grecaptcha.getResponse();  
            (response.length === 0) ? (message = 'Captcha verification failed') : (message = 'Success!');  

           
        }  
        jQuery('#lblMessage').html(message);  
        jQuery('#lblMessage').css('color', (message.toLowerCase() == 'success!') ? "green" : "red");  
    });



        $(document).ready(function() {





        


  @if (Session::has('success'))
            swal("Good job!", "We will contact You soon!", "success");

@endif
            $('.select').click(function(){
                var plan=$(this).data('plan');
                
                // var id =$('select[name=test]').val();
                var id =$('.'+plan).val();

                console.log(id);


                $('#'+id).attr('selected','selected');
                
                if (plan=='plan-A') {
                    $('#basic').attr('selected','selected');
                }else if(plan=='plan-B'){
                $('#shop').attr('selected','selected');
                }else if(plan=='plan-C'){
                $('#store').attr('selected','selected');
                }else if(plan=='plan-D'){
                $('#market').attr('selected','selected');
                    }
            });

            $("#domain-source").change(function(){
                // console.log($(this).find(":selected").text());
                if($(this).find(":selected").text()=='New Domain'){
                //    console.log($(this).find(":selected").text());

                $('#domain-checker').removeClass('input-group-1');
                $('#domain-register').addClass('input-group-1');

                

                }else{

                    $('#domain-checker').addClass('input-group-1');
                $('#domain-register').removeClass('input-group-1');

                }

            });
            // (function($) {
            // $.fn.goTo = function() {
            //     $('html, body').animate({
            //     scrollTop: $(this).offset().top + 'px'
            //     }, 'fast');
            // return this; // for chaining...
            // }
            // })(jQuery);


            // //click to go to form

            // $('.register').click(function(){
            //     $('#div_element2').goTo();
            // });



    var wait_time=1000;
    var wait_key_stroke=3;
    var count_time;
    var count_key_stroke;
    $('#domain').keyup(function(){
        clearTimeout(count_time);
        count_time=setTimeout(done_typing,wait_time);
        // console.log('done typping send request know');
    });


function done_typing(){


    
    var domain = $('#domain').val();
       //should show that we are search
       console.log(domain);
    if (domain.length>=3) {
        $('.input-group-prepend').removeClass('input-group-1');
        $('#domain').css('border-radius','0px');
        
    $('#status').text('Searching...').removeClass('text-danger text-warning').addClass('text-warning');
        $.ajax({
            type: "GET",
            url: "{{env('APP_URL')}}/api/whois/"+domain,
            dataType:'json',
            success: function( response ) {
                if (response.status=='unavailable') {
                    $('#status').text('Not available').removeClass('text-success text-warning').addClass('text-danger');
                } else if(response.status=='available') {
                   
                    $('#status').text('Available').removeClass('text-danger text-warning').addClass('text-success');
                }
                console.log(response.status);
            }
        });
    }else{
        $('#status').text('Too Short').removeClass('text-success text-warning').addClass('text-danger');
    }
   
    
}
});
    
    
    </script>


</body>


</html>