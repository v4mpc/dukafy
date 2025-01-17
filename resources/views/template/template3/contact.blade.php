@extends('template.template3.layout')
@section('content')
<div class="body-content outer-top-bd">
	<div class="container">
		<div class="row inner-bottom-sm">
			<div class="contact-page">
				<div class="col-md-12 contact-map outer-bottom-vs">
					{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.0080692193424!2d80.29172299999996!3d13.098675000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f446a1c3187%3A0x298011b0b0d14d47!2sTransvelo!5e0!3m2!1sen!2sin!4v1412844527190" width="600" height="450"  style="border:0"></iframe> --}}
					<iframe src="http://maps.google.com/maps?q={{$settings->latitude}},{{$settings->longitude}}&z=15&output=embed" width="600" height="450"  style="border:0" frameborder="0"></iframe>
				</div>
				<div class="col-md-9 contact-form">
	<div class="col-md-12 contact-title">
		<h4>Contact Form</h4>
	</div>
	<div class="col-md-4 ">
		<form class="register-form" method="POST" role="form" action="{{route('send_contact_form')}}">
		{{csrf_field()}}
			<div class="form-group">
		    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
		    <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="Name">
		  </div>
		
	</div>
	<div class="col-md-4">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" name="email" id="exampleInputEmail1" placeholder="admin@unicase.com">
		  </div>
		
	</div>
	<div class="col-md-12">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
		    <textarea class="form-control unicase-form-control" name="message" id="exampleInputComments"></textarea>
		  </div>
		
	</div>
	<div class="col-sm-12">
	<div class="col-sm-4">
                    {{captcha_img()}}</div>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="captcha" placeholder="">
                    </div>
	</div>
	<div class="col-md-12 outer-bottom-small m-t-20">
		<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Message</button>
	</div>
</div>
</form>
<div class="col-md-3 contact-info">
	<div class="contact-title">
		<h4>INFORMATION</h4>
    </div>
    @if($settings->address!=null)
	<div class="clearfix address">
		<span class="contact-i"><i class="fa fa-map-marker"></i></span>
		<span class="contact-span">P O BOX {{$settings->address}}</span>
	<p>{{$settings->location_name}}</p>
    </div>
    @endif
    @if($settings->mobile!=null)
	<div class="clearfix phone-no">
		<span class="contact-i"><i class="fa fa-mobile"></i></span>
		<span class="contact-span"> +{{substr_replace($settings->mobile," ", 3, 0)}}</span>
    </div>
    @endif
	<div class="clearfix email">
        <span class="contact-i"><i class="fa fa-envelope"></i></span>
        <span>{{$settings->email}}</span>
		{{-- <span class="contact-span"><a href="https://demo2.chethemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3f0dcddc7d2d0c7f3e6dddad0d2c0d69dd0dcde">[email&#160;protected]</a> <br><a href="https://demo2.chethemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0655676a634653686f656775632865696b">[email&#160;protected]</a></span> --}}
	</div>
</div>			</div><!-- /.contact-page -->
		</div><!-- /.row -->
	
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection