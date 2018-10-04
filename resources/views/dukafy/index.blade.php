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
    <!-- Color Theme -->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-1.css')}}">-->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-2.css')}}">-->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-3.css')}}">-->
    <!--<link rel="stylesheet" href="css/color-theme/color-theme-4.css')}}">-->
    <link rel="stylesheet" href="{{asset('dukafy/css/color-theme/color-theme-5.css')}}">
    <!-- Switch Style -->
    <link id="switch_style" href="css/color-theme/index.html" rel="stylesheet">

    <style>


        .form-control:focus {
  border-color: rgb(60, 255, 0);
  /* box-shadow: inset 0 1px 1px rgba(52, 235, 15, 0.171), 0 0 8px rgba(255, 0, 0, 0.6); */
  
  box-shadow: inset 0 1px 1px rgba(52, 235, 15, 0.171), 0 0 8px rgb(44, 184, 36,0.6);
  
  rgb(44, 184, 36,0.6);
}
    
    </style>

</head>

<body>
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
                            <a class="nav-link" href="#" style="color:#FFF">Register Now</a>
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
                        <p class="light thin">Elit dolor sit amet, consectetur adipisicing elit. Cum, expedita sit.</p>
                    </div>
                    <!-- Item 2 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: .75s">2</div>
                        <p class="bold">Choose Web Layout</p>
                        <p class="light thin">Ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita.</p>
                    </div>
                    <!-- Item 3 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 1.5s">3</div>
                        <p class="bold">Add Products</p>
                        <p class="light thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit expedita.</p>
                    </div>
                    <!-- Item 4 -->
                    <div class="col-6 col-sm-6 col-md-3 hiw-item mb-30">
                        <div class="bg-color-2 puls mb-30" style="animation-delay: 2.25s">4</div>
                        <p class="bold">Go Live</p>
                        <p class="light thin">Expedita ipsum dolor sit amet, consectetur adipisicing elit expedita.</p>
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
                        <p class="light thin">Dolor sit Mollitia harum ea ut eaque velit. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Repellendus dignissimos aspernatur harum odio sit natus, sed
                            molestiae, iste dolore vero nostrum velit voluptas delectus ullam exercitationem expedita
                            voluptatum. Esse distinctio dolore nobis ex iure repellendus fuga. Excepturi tempora
                            numquam odio, dolor velit repudiandae at enim totam autem, perferendis dolorum eaque?</p>
                        <!-- Buttons -->
                        <a href="#.">
                            <div class="button bg-color-1">Explore Now</div>
                        </a>
                        <a class="gray link" href="#.">Download free trial <i class="fa fa-chevron-right"></i></a>
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
                        <p class="light thin p-0-15">Dolor sit Mollitia harum ea ut eaque velit. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. Repellendus dignissimos aspernatur harum odio sit
                            natus, sed molestiae, iste dolore vero nostrum velit voluptas delectus ullam exercitationem
                            expedita voluptatum. Esse distinctio dolore nobis ex iure repellendus fuga. Excepturi
                            tempora numquam odio, dolor velit repudiandae at enim totam autem, perferendis dolorum
                            eaque?</p>
                        <!-- Buttons -->
                        <a href="#.">
                            <div class="button bg-color-1">Explore Now</div>
                        </a>
                        <a class="gray link" href="#.">Download free trial <i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!-- Ilustration -->
                    <div class="col-12 col-lg-7 mb-30 align-self-center screens-1">
                        <img src="{{asset('dukafy/img/artboard-2.png')}}" alt="screens">
                    </div>
                </div>
            </div>
        </section>
        <!-- About left end -->
        <!-- Call to action -->
        <section class="call-to-action bg-animation p-90-60">
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
                        <form id="form">
                            <div class="row">
                                <div class="col-12 col-md">
                                    <!-- Name input -->
                                    <input type="text" name="name" placeholder="Full Name" required>
                                    <!-- Email input -->
                                    <input type="email" name="email" placeholder="Email" required>
                                    <input type="text" name="phone" placeholder="Valid Phone #" required>
                                </div>
                            </div>
                        </form>
                        <a href="#." class="m-0" aria-haspopup="true" style="float:  right;">
                            <div class="button bg-color-1">Submit</div>
                        </a>
                        <!--<a class="white-link m-0" href="#" aria-haspopup="true">Download free trial <i class="fa fa-chevron-right"></i></a>-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action end -->
        <!-- Testimonials -->
        <!--<section id="testimonials" class="testimonials p-90-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="section-title sm-ac mb-90">
                            <!--<p class="light bold small">About us are told</p>
                            <h2><b>Testimonials</b> <span class="thin">About Us</span></h2>
                            <p class="light thin">Dolor sit Mollitia harum ea ut eaque velit.</p>
                        </div>
                        <!-- Section title end 
                    </div>
                    <div class="col-12 col-md-5 testimonials-tooltip">
                        <div class="nav-container sm-ac"></div>
                        <p class="light thin small sm-ac">Click To Next Or Prew Slide</p>
                    </div>
                </div>
                <div id="owl" class="testimonial-slider">
                    <div class="item">
                        <div class="testimonial">
                            <div class="dialog">
                                <p class="light thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue.</p>
                            </div>
                            <div class="user-name">
                                <div class="user"><img src="img/cli-1.jpg" alt=""></div>
                                <p class="m-0 bold">Sarah Mazur</p>
                                <p class="light thin small">Important person, some Company</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <div class="dialog">
                                <p class="light thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue.</p>
                            </div>
                            <div class="user-name">
                                <div class="user"><img src="img/cli-2.jpg" alt=""></div>
                                <p class="m-0 bold">Pablo Mikołajczak</p>
                                <p class="light thin small">Important person, some Company</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <div class="dialog">
                                <p class="light thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue.</p>
                            </div>
                            <div class="user-name">
                                <div class="user"><img src="img/cli-3.jpg" alt=""></div>
                                <p class="m-0 bold">Don Know</p>
                                <p class="light thin small">Important person, some Company</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <div class="dialog">
                                <p class="light thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue.
                            </div>
                            <div class="user-name">
                                <div class="user"><img src="img/cli-4.jpg" alt=""></div>
                                <p class="m-0 bold">Don Know</p>
                                <p class="light thin small">Important person, some Company</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brands mb-30">
                    <div class="container">
                        <div class="owl-carousel brands-slider owl-theme">
                            <div class="item">
                                <img src="img/brand-1.png" alt="brand">
                            </div>
                            <div class="item">
                                <img src="img/brand-2.png" alt="brand">
                            </div>
                            <div class="item">
                                <img src="img/brand-3.png" alt="brand">
                            </div>
                            <div class="item">
                                <img src="img/brand-4.png" alt="brand">
                            </div>
                            <div class="item">
                                <img src="img/brand-5.png" alt="brand">
                            </div>
                            <div class="item">
                                
                                <img src="img/brand-6.png" alt="brand">
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </section>-->
        <!-- Testimonials end -->
        <!-- Price --><br><br>
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
                                    <select name="" class="form-control plan-A" id="">
                                        <option value="1">Monthly</option>
                                        <option value="2">Quaterly</option>
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
                                    <a href="#." class="button bg-color-2"><i class="fa fa-cart-arrow-down"></i>
                                        Purchase</a>
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
                                    <select name="" class="form-control plan-B" id="">
                                        <option value="1">Monthly</option>
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
                                    <a href="#." class="button bg-color-2"><i class="fa fa-cart-arrow-down"></i>
                                        Purchase</a>
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
                                    <select name="" class="form-control plan-C" id="">
                                        <option value="1">Monthly</option>
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
                                    <a href="#." class="button bg-color-2"><i class="fa fa-cart-arrow-down"></i>
                                        Purchase</a>
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
                                    <select name="" class="form-control plan-D" id="">
                                        <option value="1">Monthly</option>
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
                                <div class="col-12">
                                    <a href="#." class="button bg-color-2"><i class="fa fa-cart-arrow-down"></i>
                                        Purchase</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Price end -->
        <!-- Stats 
        <div class="stats bg-animation p-90-60">
            <div class="container">
                <div class="row text-center">
                    <div class="col-6 col-sm-6 col-md-3 mb-30">
                        <i class="white fa fa-download"></i>
                        <h2 class="white thin numeric puls" style="animation-delay: 0s">34k</h2>
                        <p class="white bold">Downloads</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 mb-30">
                        <i class="white fa fa-smile-o"></i>
                        <h2 class="white thin numeric puls" style="animation-delay: .75s">32k</h2>
                        <p class="white bold">Happy Customers</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 mb-30">
                        <i class="white fa fa-users"></i>
                        <h2 class="white thin numeric puls" style="animation-delay: 1.5s">27k</h2>
                        <p class="white bold">Premium Users</p>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 mb-30">
                        <i class="white fa fa-trophy"></i>
                        <h2 class="white thin numeric puls" style="animation-delay: 2.25s">437</h2>
                        <p class="white bold">Honors & Awards</p>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Stats end -->


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


</body>


</html>