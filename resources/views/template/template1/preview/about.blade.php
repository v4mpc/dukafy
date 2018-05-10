@extends('template.template1.preview.layout') 
@section('content')
<!-- Content -->
<div id="content">

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">About Us</li>
      </ol>
    </div>
  </div>

  {{--
  <!-- About Sec -->
  <section class="about-sec padding-top-60 padding-bottom-60">
    <div class="container">

      <!-- About Adds -->
      <div class="about-adds">
        <div class="position-center-center">
          <h2>SmartTech <small> Digital & Electronic PSD Template!</small></h2>
          <a href="#." class="btn-round">Shop with Us</a> </div>
      </div>
    </div>
  </section> --}}

  <!-- Shipping Info -->
  {{--
  <section class="shipping-info padding-bottom-60">
    <div class="container">
      <ul>
        <!-- Free Shipping -->
        <li>
          <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
          <div class="media-body">
            <h5>Free Shipping</h5>
            <span>On order over $99</span></div>
        </li>
        <!-- Money Return -->
        <li>
          <div class="media-left"> <i class="flaticon-arrows"></i> </div>
          <div class="media-body">
            <h5>Money Return</h5>
            <span>30 Days money return</span></div>
        </li>
        <!-- Support 24/7 -->
        <li>
          <div class="media-left"> <i class="flaticon-operator"></i> </div>
          <div class="media-body">
            <h5>Support 24/7</h5>
            <span>Hotline: (+100) 123 456 7890</span></div>
        </li>
        <!-- Safe Payment -->
        <li>
          <div class="media-left"> <i class="flaticon-business"></i> </div>
          <div class="media-body">
            <h5>Safe Payment</h5>
            <span>Protect online payment</span></div>
        </li>
      </ul>
    </div>
  </section> --}}


  <section class="skills padding-top-60">
    <div class="container">

      {!!$previews->about!!}

    </div>
</div>
</section>




<!-- End Content -->
@endsection