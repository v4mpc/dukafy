  <!-- Footer -->
  {{-- <footer>
    <div class="container"> 
      
      <!-- Footer Upside Links -->
      <div class="foot-link">
        <ul>
          <li><a href="#."> About us </a></li>
          <li><a href="#."> Customer Service </a></li>
          <li><a href="#."> Privacy Policy </a></li>
          <li><a href="#."> Site Map </a></li>
          <li><a href="#."> Search Terms </a></li>
          <li><a href="#."> Advanced Search </a></li>
          <li><a href="#."> Orders and Returns </a></li>
          <li><a href="#."> Contact Us</a></li>
        </ul>
      </div>
      <div class="row"> 
        
        <!-- Contact -->
        <div class="col-md-4">
          <h4>Contact SmartTech!</h4>
          <p>Address: 45 Grand Central Terminal New York, NY 1017
            United State USA</p>
          <p>Phone: (+100) 123 456 7890</p>
          <p>Email: Support@smarttech.com</p>
          <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> <a href="#."><i class="fa fa-google"></i></a> </div>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Categories</h4>
          <ul class="links-footer">
            <li><a href="#.">Home Audio & Theater</a></li>
            <li><a href="#."> TV & Video</a></li>
            <li><a href="#."> Camera, Photo & Video</a></li>
            <li><a href="#."> Cell Phones & Accessories</a></li>
            <li><a href="#."> Headphones</a></li>
            <li><a href="#."> Video Games</a></li>
            <li><a href="#."> Bluetooth & Wireless</a></li>
          </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Customer Services</h4>
          <ul class="links-footer">
            <li><a href="#.">Shipping & Returns</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> International Shipping</a></li>
            <li><a href="#."> Affiliates</a></li>
            <li><a href="#."> Contact </a></li>
          </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-2">
          <h4>Information</h4>
          <ul class="links-footer">
            <li><a href="#.">Our Blog</a></li>
            <li><a href="#."> About Our Shop</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> Delivery infomation</a></li>
            <li><a href="#."> Store Locations</a></li>
            <li><a href="#."> FAQs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
   --}}
   @if(count($brand_images)!=0)
   <!-- Clients img -->
   <section class="light-gry-bg clients-img">
       <div class="container">
         <ul>
           @foreach($brand_images as $brand)
           <li><img src="{{asset('images/'.$brand->image)}}" alt="" ></li>
           @endforeach
           {{-- <li><img src="{{asset('template1/images/c-img-1.png')}}" alt="" ></li>
           <li><img src="{{asset('template1/images/c-img-2.png')}}" alt="" ></li>
           <li><img src="{{asset('template1/images/c-img-3.png')}}" alt="" ></li>
           <li><img src="{{asset('template1/images/c-img-4.png')}}" alt="" ></li>
           <li><img src="{{asset('template1/images/c-img-5.png')}}" alt="" ></li> --}}
         </ul>
       </div>
     </section>
     
   
       @endif


  <!-- Rights -->
  <div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p> © {{date('Y')}} <a href="#." class="ri-li"> {{$settings->store_name}} </a> </p>
        </div>
        <div class="col-sm-6 text-right"> <img src="images/card-icon.png" alt=""> </div>
      </div>
    </div>
  </div>
  
  <!-- End Footer --> 



   <!-- GO TO TOP  --> 
   <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
   <!-- GO TO TOP End --> 

   <div id="rectangle">
    <a href="#" style="font-size: large;color: white;"> <i class="flaticon-shopping-bag"></i> <strong class="itm-cont">{{Cart::count()}} </strong> item(s)  <br>
      <span class="items-price">{{Cart::subtotal()}} TZS</span></a>

   </div>
 </div>
 <!-- End Page Wrapper --> 
 