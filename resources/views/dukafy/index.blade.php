<!doctype html>
<html lang="zxx">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dukafy</title>
<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

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
    
    <link rel="stylesheet" href="{{asset('dukafy/css/color-theme/color-theme-5.css')}}">

  
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133225014-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133225014-1');
</script>

   

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
                    </div>
                    {{-- <script>
                        function onSubmit(token) {
                          document.getElementById("demo-form").submit();
                        }
                      </script> --}}
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

             <div class="row justify-content-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link" data-id='2' id="quaterly" data-toggle="pill" href="#pills-quaterly" role="tab" aria-controls="pills-home" aria-selected="true">Quaterly</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" data-id='4' id="yearly"  data-toggle="pill" href="#pills-yearly" role="tab" aria-controls="pills-profile" aria-selected="false">Yearly</a>
                            </li>
                          
                          </ul>
             </div>
                <!-- Section title end -->
                <div class="row">
                    <div class="col-12 col-lg-3 mb-30">
                        <div class="pricing-table text-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="bold price-header">Basic</p>
                                </div>
                               

  
                                <div class="col-12 per-month-a">
                                    <p class="bold price">TZS <span>19,000</span>/Month</p>
                                    <p style="font-size: 14px;" class="text-muted">(TZS 228,000 Billed yearly)</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-A">
                                        <li>Up to 50 Products</li>
                        
                                        <li>Free Domain</li>
                                        <li>Free Hosting</li>
                                        <li>Mobile App Uploads</li>
                                        <li>Different Templates</li>
                                    </ul>
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
                               
                                <div class="col-12 per-month-b">
                                    <p class="bold price">TZS <span>29,000</span>/Month</p>
                                    <p style="font-size: 14px;" class="text-muted">(TZS 348,000 Billed yearly)</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-B">
                                        <li>Up to 400 Products</li>
                                        <li>Free Domain</li>
                                        <li>Free Hosting</li>
                                        <li>Mobile App Uploads</li>
                                        <li>Different Templates</li>
                                    </ul>
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
                               

                               
                                <div class="col-12 per-month-c">
                                    <p class="bold price">TZS <span>49,000</span>/Month</p>
                                    <p style="font-size: 14px;" class="text-muted">(TZS 588,000 Billed yearly)</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-C">
                                        <li>Up to 1,000 Products</li>
                                        <li>Free Domain</li>
                                        <li>Free Hosting</li>
                                        <li>Mobile App Uploads</li>
                                        <li>Different Templates</li>
                                    </ul>
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

                                <div class="col-12 per-month-d">
                                    <p class="bold price">TZS <span>99,000</span>/Month</p>
                                    <p style="font-size: 14px;" class="text-muted">(TZS 1,188,000 Billed yearly)</p>
                                </div>

                                <div class="col-12">
                                    <ul class="pricing-detail gray detail-D">
                                        <li>Unlimited Products</li>
                                        <li>Free Domain</li>
                                        <li>Free Hosting</li>
                                        <li>Mobile App Uploads</li>
                                        <li>Different Templates</li>
                                    </ul>
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
                        <form id="myform"  method="POST" action="{{route('request_account')}}">
                                    {{csrf_field()}}
                                <div class="row">
                                    <div class="col-12 col-md">
                                        <!-- Name input -->
                                        <input type="text" name="name" value="{{old('name')}}" placeholder="Full Name" required>
                                        <!-- Email input -->
                                        <input type="email" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" name="email" value="{{old('email')}}" placeholder="Email" required>
                                    <input type="text" name="phone" placeholder="Valid Phone #" value="{{old('phone')}}" required>


                                        <select class="custom-select custom-select-lg mb-3 input" id="domain-source" name="account_type">
                                                <option selected value="1">New Domain</option>
                                                <option value="3">Existing Domain</option>
                                                

                                              </select>

                                            <br>

  

                                            <input type="text" id="domain-register" class="input-group-1" name="existing_domain" placeholder="Type Your Domain"  >
                                       

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
                                                <option value="" selected>Select Package</option>
                                                <option id="basic" value="1">Basic</option>
                                                <option id="shop" value="2">Shop</option>
                                                <option id="store" value="3">Store</option>
                                                <option id="market" value="4">Super Market</option>

                                              </select>

                                            <br>
                                            

                                      
                                         
                                      

                                            <select class="custom-select custom-select-lg mb-3 input" name="subscription_id" required>
                                                    <option value="" selected>Select Plan</option>
                                                    <option id="2" value="2">Quaterly</option>
                                                    <option id="4" value="4">Yearly</option>
                                                  </select>

                                            <br>

                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" name="terms" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I, Agree to <a href="{{route('terms')}}" target="_blank">Terms and Condition</a></label>
                                                  </div>        
                                           
                                    </div>
                                   

                                </div>
                                

                                <div id="ReCaptchContainer">
                                        @if(env('GOOGLE_RECAPTCHA_KEY'))
                                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                         </div>
                    @endif    
                                </div>  

<br /> 
                                <button type="submit" class="m-0 button bg-color-1" aria-haspopup="true" style="float:  right;" id="submitBtn" >Submit</button>
                               
                            </form>
                          
                          
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
                    @if(env('GOOGLE_RECAPTCHA_KEY'))
                    <div class="g-recaptcha"
                     data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
     </div>
@endif
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
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-sm-6">
                        
                        <p class="small thin white-light sm-ac">Copyrights © {{date('Y')}}. All Rights Reserved.</p>
                    </div>
                    <div class="col-12 col-sm-6">
                        
                        <p class="small thin white-light author sm-ac">Designed by <a href="https://legendaryits.com">Legendary
                                IT Solutions</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
    </div>
    
    <script src="{{asset('dukafy/js/jquery-1.11.2.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
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

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-serialize-object/2.5.0/jquery.serialize-object.min.js"></script>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>


    
  
    
  
  



        $(document).ready(function() {

  
            

            $(function () {
  $('[data-toggle="popover"]').popover()
})

            $('#submitsfdsfdsBtn').click(function (params) {
            message_table={
                'name':'Name',
                'email':'Email',
                'phone':'Phone number',
                'existing_domain':'Existing domain',
                'package_id':'Package',
                'subscription_id':'Plan',
                'g-recaptcha-response':'Google recaptcha',
                'domain':'Domain'
            }
            let error_bag = ''
            var formValues = $('#myform').serializeArray();
            formValues.forEach(function (item) {
                if (!item.value && item.name!='_token' && item.name!='domain' && item.name!='existing_domain') {
                    error_bag+='<li>'+message_table[item.name]+'</li>'
                }
            })
                if (error_bag){
                    Swal.fire({
                    title: 'Error!',
                    html:error_bag,
                    type: 'error',
                    confirmButtonText: 'ok'
                    })
                    console.log('the form is valid')
                }else{
                    let data = $('#myform').serializeObject();
                    Swal.fire({
                    title: 'Valid',
                    type: 'success',
                    confirmButtonText: 'ok'
                    })

                    console.log(data)

                    $.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					type: "POST",
					url: '{{route("request_account")}}',
                    dataType: "JSON",
                    data:data,
					success: function (data) {
						console.log(data);
                    },
                    error:function(error){
                        console.log(error)
                    },
                    
				});




                }



                
         
         
            //submit the values
            });


          
            
        
        





        


            @if (Session::has('success'))
            swal("THANK YOU FOR REGISTERING!", "Thank you for registering to the Dukafy website. Before you can be given access to the website we need to verify your registration, which can take up to 3 working days to process. A notification email will be sent to you once this has been completed.", "success");
            @endif

            // @if(Session::has('error'))
            //     Swal.fire({{Session::get('error')}})
            // @endif



            $('.select').click(function(){
                var plan=$(this).data('plan');
                
                // var id =$('select[name=test]').val();
                var id =$('.nav-item > .active').data('id');

                console.log(id);

console.log(plan);
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