@extends('template.template1.layout') 
@section('content')
<div id="content">

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact</li>
      </ol>
    </div>
  </div>

  <!-- Contact -->
  <section class="contact-sec padding-top-40 padding-bottom-80">
    <div class="container">

      <!-- MAP -->
      {{--
      <section class="map-block margin-bottom-40">

        <div class="map-wrapper" id="map-canvas" data-lat="{{$settings->latitude}}" data-lng="{{$settings->longitude}}" data-zoom="13"
          data-style="0"></div>
        <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="{{$settings->latitude}}" data-lng="{{$settings->longitude}}" data-string="{{$settings->store_name}}"></a>          </div>





      </section> --}}

      <!-- Conatct -->
      <div class="contact">
        <div class="contact-form">
          <!-- FORM  -->
          {{--
          <form role="form" method="POST" id="contact_form" class="contact-form" action="{{route('send_contact_form')}}">
            --}}
            <form action="" role="form" class="contact-form" id="contact_form">
              {{csrf_field()}}
              <div class="row">
                <div class="col-md-8">

                  <!-- Payment information -->
                  <div class="heading">
                    <h2>Dou You have a Question for Us ?</h2>
                  </div>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>Name
                            <input type="text" class="form-control" name="name" id="name"  placeholder="">
                          </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Email
                            <input type="text" class="form-control" name="email" id="email" placeholder="">
                          </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                          </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn-round" id="btn_submit" onClick="proceed();">Send Message</button>
                    </li>
                  </ul>
                </div>

                @if($settings->email!=null||$settings->mobile!=null||$settings->address!=null)
                <!-- Conatct Infomation -->
                <div class="col-md-4">
                  <div class="contact-info">
                    {{--
                    <h5>SmartTech</h5>
                    <p>The most powerful PSD for Digital & Electronic!</p>
                    <hr> --}} @if($settings->address!=null)
                    <h6>Address:</h6>

                    <p>{{$settings->address}}</p>
                    @endif @if($settings->mobile!=null)
                    <h6>Phone:</h6>

                    <p>{{$settings->mobile}}</p>
                    @endif @if($settings->email!=null)
                    <h6>Email:</h6>

                    <p>{{$settings->email}}</p>
                    @endif
                  </div>
                </div>
                @endif
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
@endsection