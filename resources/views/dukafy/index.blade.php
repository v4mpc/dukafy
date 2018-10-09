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
    <script src='https://www.google.com/recaptcha/api.js'></script>

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
                    <img src="{{asset('dukafy/img/logo.png')}}" style="width: 80%;" />
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
                            <a class="nav-link" href="#price">Price</a>
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
                        <p class="light bold small main-suptitle">Try on the touch</p>
                        <h1><b>Dukafy</b><span class="thin"> - Сreated To Make Business Easy</span></h1>
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
                    <div class="social-icons">
                        <ul>
                            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#."><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
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
                    <h2><span class="thin">How it</span> <b>Works</b></h2>
                    <p class="light thin">&nbsp;</p>
                </div>
                <!-- Section title end -->
                <div class="row">
                    <!-- Item 1 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 0s">1</div>
                        <p class="bold">Register</p>
                        <p class="light thin">Easily set up your online store with essential business information for your prospective clients.  </p>
                    </div>
                    <!-- Item 2 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: .75s">2</div>
                        <p class="bold">Choose Web Layout</p>
                        <p class="light thin">Next step would be choosing a web template that would suit your business 
                            </p>
                    </div>
                    <!-- Item 3 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 1.5s">3</div>
                        <p class="bold">Add Products</p>
                        <p class="light thin">Adding a product has never been this easy just fill in the product information along with an image </p>
                    </div>
                    <!-- Item 4 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 2.25s">4</div>
                        <p class="bold">Go Live</p>
                        <p class="light thin">Hurray, you are all done and ready to showcase your products in your online store</p>
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
                    <p class="light bold small">Main Features</p>
                    <h2><span class="thin">Our</span> <b>Features</b></h2>
                    <p class="light thin">&nbsp;</p>
                </div>
                <!-- Section title end -->
                <div class="row">
                    <!-- Features card 1 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/layers.png')}}" alt="icon">
                            <p class="bold">Perfect UI Design</p>
                            <p class="light thin">Dolor sit Mollitia harum ea ut eaque velit.</p>
                        </div>
                    </div>
                    <!-- Features card 2 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/running.png')}}" alt="icon">
                            <p class="bold">Great CSS Animations</p>
                            <p class="light thin">Dolor sit Mollitia harum ea ut eaque velit.</p>
                        </div>
                    </div>
                    <!-- Features card 3 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/pantone.png')}}" alt="icon">
                            <p class="bold">5 different UI Styles</p>
                            <p class="light thin">Dolor sit Mollitia harum ea ut eaque velit.</p>
                        </div>
                    </div>
                    <!-- Features card 4 -->
                    <div class="col-12 col-sm-6 col-md-3 mb-30">
                        <div class="card-features">
                            <img src="{{asset('dukafy/img/email.png')}}" alt="icon">
                            <p class="bold">Working Contact Form</p>
                            <p class="light thin">Dolor sit Mollitia harum ea ut eaque velit.</p>
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
                            <p class="light bold small">What we offer</p>
                            <h2><span class="thin">We offer </span> <b>Perfect Solution</b></h2>
                        </div>
                        <!-- Text -->
                        <p class="light thin">Our all-in-one platform gives you everything you need to establish your brand online with a custom domain name and online store Whether you’re just getting started or are an established brand, our powerful platform helps your business grow. Dukafy lets you choose from multiple designer made templates. No tech skills needed.Dukafy features responsive design so that your store looks perfect on any device — desktop, tablet, or mobile phone </p>
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
                        <div class="section-title mb-30">
                            <p class="light bold small">What we offer</p>
                            <h2><b>Appeasy</b> <span class="thin"> Created for you</span></h2>
                        </div>
                        <!-- Text -->
                        <p class="light thin p-0-15">We are here to guide you. Dukafy platform walks you through a series of steps to help you launch your online store with confidence. With your Online Store, there’s no limit to the number of products you can sell. So, whether you're a small boutique or a large business, you can showcase whatever you've got in-store.</p>
                        <!-- Buttons -->
                        {{-- <a href="#.">
                            <div class="button bg-color-1">Explore Now</div>
                        </a> --}}
                        {{-- <a class="gray link" href="#.">Download free trial <i class="fa fa-chevron-right"></i></a> --}}
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
                                <p class="white-light bold small">Purchase Dukafy Today </p>
                                <h2 class="h1 white"><span class="thin">Request to</span> <b>Call Back</b></h2>
                                <p class="white-light thin m-0">Fill in the form and our support team will call you within
                                    48 hours.</p>
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


                                        <select class="custom-select custom-select-lg mb-3" id="domain-source" name="domain_source">
                                                <option selected value="0">New Domain</option>
                                                <option value="1">Existing Domain</option>
                                                

                                              </select>

                                            <br>

  

                                            <input type="text" id="domain-register" class="input-group-1" name="domain1" placeholder="Type Your Domain" >
                                       

                                        <div class="input-group" id="domain-checker">

                                                <div class="input-group-prepend input-group-1">
                                                        <span class="input-group-text" id="status">not available</span>
                                                      </div>
                                         
                                            <input type="text" id="domain" class="form-control is-valid" name="domain" placeholder="domain">
                                            
                     
                                            <div class="input-group-append">
                                                <div class="input-group-text">.co.tz</div>
                                              </div>
                                            
                                          </div>
                                         

                                          <br>

                                          <select class="custom-select custom-select-lg mb-3" name="package_id">
                                                <option selected>Select Package</option>
                                                <option id="basic" value="1">Basic</option>
                                                <option id="shop" value="2">Shop</option>
                                                <option id="store" value="3">Store</option>
                                                <option id="market" value="4">Super Market</option>

                                              </select>

                                            <br>
                                            

                                        {{-- <input type="text" name="domain" placeholder="Domain Name" required disabled> --}}

                                      

                                            <select class="custom-select custom-select-lg mb-3" name="subscription_id" required>
                                                    <option value="" selected>Select Plan</option>
                                                    <option id="1" value="1">Monthly</option>
                                                    <option id="2" value="2">Quaterly</option>
                                                    <option id="3" value="3">Half Yearly</option>
                                                    <option id="4" value="4">Yearly</option>
                                                  </select>

                                            <br>

                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" required class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">I, Agree to <a href="">Terms and Condition</a></label>
                                                  </div>


                                        


                                        

                                        

                                       
                                       
                                               
                                           
                                    </div>
                                </div>
                                {{-- <button class="m-0 button bg-color-1" aria-haspopup="true" style="float:  right;" >Submit</button> --}}
                                <button
                                class="g-recaptcha"
                                data-sitekey="6Lf5-XMUAAAAAKGVBEoUx3dGMi_mzSbPNYddS_F2"
                                data-callback="YourOnSubmitFn">
                                Submit
                                </button>
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
                            <p class="light thin">Dolor sit Mollitia harum ea ut eaque velit.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Social icons -->
                        <div class="contact-social-icons">
                            <ul class="sm-ac">
                                <li><a href="#."><i class="fa fa-facebook" style="font-size: 30px;"></i></a></li>
                                <li><a href="#."><i class="fa fa-youtube" style="font-size: 30px;"></i></a></li>
                                <li><a href="#."><i class="fa fa-instagram" style="font-size: 30px;"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social icons end -->
                    </div>
                </div>
                <!-- Section title end -->
                <form id="form">
                    <div class="row">
                        <div class="col-12 col-md">
                            <!-- Name input -->
                            <input type="text" name="name" placeholder="Name" required>
                            <!-- Email input -->
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-12 col-md">
                            <!-- Text input -->
                            <textarea name="text" cols="30" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12 col-md-auto text-center">
                            <!-- Submit form button -->
                            <button class="submit bg-color-1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Popup "success" -->
            <div class="popup n-active-popup">
                <!-- Popup window -->
                <div class="popup-window">
                    <!-- Popup icon-->
                    <img src="img/email.png" alt="success">
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
                                <a class="nav-link mx-auto" target="_blank" href="#">Terms & Conditions / Privacy
                                    Policy</a>
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
                        <p class="small thin white-light sm-ac">Copyrights © 2018. All Rights Reserved.</p>
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


    <script>



        $(document).ready(function() {





            if($('#status').text('Too Short')=='Available'){
                alert('helo');
            }


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
    $('#status').text('Searching...');
        $.ajax({
            type: "GET",
            url: "{{env('APP_URL')}}/api/whois/"+domain,
            dataType:'json',
            success: function( response ) {
                if (response.status=='unavailable') {
                    $('#status').text('Not Available');
                } else if(response.status=='available') {
                   
                    $('#status').text('Available');
                }
                console.log(response.status);
            }
        });
    }else{
        $('#status').text('Too Short');
    }
   
    
}
});
    
    
    </script>


</body>


</html>