@extends('template.template2.layout') 
@section('content')
<nav class="woocommerce-breadcrumb">
        <a href="{{route('start')}}">Home</a>
                <span class="delimiter"><i class="fa fa-angle-right"></i>
                </span>
               
             
                </span>Contact Us
            </nav>
            <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                            <article class="post-2508 page type-page status-publish hentry" id="post-2508">
                                    <div itemprop="mainContentOfPage" class="entry-content">
                    
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="contact-form wpb_column vc_column_container vc_col-sm-9 col-sm-9">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2 class="contact-page-title">Leave us a Message</h2>
                                    
                                </div>
                            </div>
                            <div lang="en-US" dir="ltr" id="wpcf7-f2507-p2508-o1" class="wpcf7" role="form">
                                    {{csrf_field()}}
                                <div class="screen-reader-response"></div>
                                <form class="wpcf7-form" method="post" action="#">
                
                                    {{-- <div style="display: none;">
                                        <input type="hidden" value="2507" name="_wpcf7">
                                        <input type="hidden" value="4.4.1" name="_wpcf7_version">
                                        <input type="hidden" value="en_US" name="_wpcf7_locale">
                                        <input type="hidden" value="wpcf7-f2507-p2508-o1" name="_wpcf7_unit_tag">
                                        <input type="hidden" value="47d6f1c9ce" name="_wpnonce">
                                    </div> --}}
                                    <div class="form-group row">
                                        <div class="col-xs-12 col-md-6">
                                            <label>First name*</label><br>
                                            <span class="wpcf7-form-control-wrap first-name"><input type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="first-name"></span>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <label>Last name*</label><br>
                                            <span class="wpcf7-form-control-wrap last-name"><input type="text" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text" size="40" value="" name="last-name"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label><br>
                                        <span class="wpcf7-form-control-wrap subject"><input type="text" aria-invalid="false" class="wpcf7-form-control wpcf7-text input-text" size="40" value="" name="subject"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label><br>
                                        <span class="wpcf7-form-control-wrap your-message"><textarea aria-invalid="false" class="wpcf7-form-control wpcf7-textarea" rows="10" cols="40" name="your-message"></textarea></span>
                                    </div>
                                    <div class="form-group clearfix">
                
                                        <p><input type="submit" value="Send Message"></p>
                
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @if($settings->email!=null||$settings->mobile!=null||$settings->address!=null)
                                            <div class="store-info wpb_column vc_column_container vc_col-sm-3 col-sm-3">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2 class="contact-page-title">Our Store</h2>
                                    @if($settings->address!=null)
                               <h3>Address:</h3> <address>{{$settings->address}}</address>
                                <h3>Phone: </h3>
                                @endif @if($settings->mobile!=null)
                                <p>{{$settings->mobile}}</p>
                                @endif @if($settings->email!=null)
                                <h3>Email: </h3>
                                <p>{{$settings->email}}</p>
                                @endif      
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                                        </div>
                                    </div>
                                </article>
                    </main>
            </div>                   
@endsection