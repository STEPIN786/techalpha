
@extends('frontend.layouts.main')


@section('main.container')



        <!-- page-title -->
        
        
        
        <!--<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" >-->
        <div class="shadow text-dark bg-cover bg-light pt-10" style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 80px  40px;"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    <ul class=" bg-transparent breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active"> / Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- page-title end-->
 <!-- contact-page -->
 
     <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area  default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row align-center">
                    <div class="col-lg-6 left-item">
                     
                      
                         <iframe src="https://www.google.com/maps/embed/v1/place?q=3232b%2C%202nd%20floor%2C%20Konark%20Indrayu%20Mall%2C%20above%20SBI%20bank%2C%20opposite%20Satyanand%20hospital%2C%20Kondhwa%20Khurd%2C%20Pune%2C%20411048.%20Maharashtra%20Tech%20Alpha%20Computer%20Institute&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="100%"  height="380" style="border:0;" 
                         id=" #preview " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                    </div>
                    <div class="col-lg-6 right-item">
                        
                       
                        <h5>Need Help?</h5>
                        <h2>Keep in Touch</h2>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->


    @endsection   