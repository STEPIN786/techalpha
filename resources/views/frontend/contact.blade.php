@extends('frontend.layouts.main')
@section('main-container')

 <!--Page Title-->
    <section class="page-title" style="background-image:url(public/assets/images/background/4.jpg);">
        <div class="auto-container">
            <h1>Contact us</h1>
        </div>
        
    </section>
    <!--End Page Title-->
    
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact us</li>
                </ul>
                <div class="text pull-right">Certified Company ISO 9001-2008</div>
            </div>
        </div>
    </div>
    <!--End Page Info-->
    
    <!--Map Section-->
    <!--<section class="map-section">-->
        <!--Map Outer-->
        <!--<div class="map-outer">-->
            <!--Map Canvas-->
            <!-- <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="public/assets/images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div> -->

    <!--        <div style="width: 100%"><iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=50%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--End Map Section-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="contact-title">
            	<h2>Drop us message</h2>
                <!--<div class="text">Praising pain was born and I will give you a complete account of the system, and </div>-->
            </div>
        	<div class="row clearfix">
            	
                <!--Form Column-->
                <div class="form-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<!--Contact Form-->
                        <div class="contact-form">
                            <form >
                                <div class="row clearfix">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="firstname" value="" placeholder="Name" required>
                                    </div>
                                    
                                    <!--<div class="form-group col-md-6 col-sm-6 col-xs-12">-->
                                    <!--    <input type="text" name="lastname" value="" placeholder="Last name" required>-->
                                    <!--</div>-->
                                    
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone No." required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">Submit now</button>
                                    </div>                                        
                                </div>
                            </form>
                        </div>
                        <!--End Contact Form-->
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<ul>
                            
                        	<li><span>Address:</span>Shop No B 56, 57/58, Juna Bazar, Adarsh Indira Nagar, Mangalwar Peth, Kasba Peth, Pune, Maharashtra 411011</li>
                            <li><span>email:</span>sales@mujahidenterprises.com </li>
                            <li><span>phone:</span>+91 77678 91193</li>
                        </ul>
                    </div>
                </div>
                
                
                <!--MAP-->
                
                  <div class="col-md-4">        
          <div class="contact-page-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912911311!2d76.69348873658222!3d30.73506264436677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1553497921355" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>   
                
            </div>
        </div>
    </section>
    <!--End Contact Section-->
<!-- <script src="public/assets/js/bootstrap.min.js"></script>
<script src="public/assets/js/jquery.fancybox.js"></script>

<script src="public/assets/js/owl.js"></script>
<script src="public/assets/js/wow.js"></script>
<script src="public/assets/js/appear.js"></script>
<script src="public/assets/js/validate.js"></script>
<script src="public/assets/js/script.js"></script> -->


   
       @endsection