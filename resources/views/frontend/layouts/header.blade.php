<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.net/site-template/edukat/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 06:17:43 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learna - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title>Tech Alpha</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/Century-Gothic.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap" rel="stylesheet">
<!--Start of Tawk.to Script-->
// <script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/6656bb3a981b6c564776017c/1hv1cmndu';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
// </script>
<!--End of Tawk.to Script-->
</head>

 <!-- Preloader Start -->
 <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light inline inc-border">
        <div class="container-full">
            <div class="row align-center">
                
                <div class="col-lg-7 col-md-12 left-info">
                    <div class="item-flex">
                        <ul class="list">
                            <li>
                                <i class="fas fa-phone"></i>9145061048  
                            </li>
                            <li>
                                <i class="fas fa-bullhorn"></i> <a href="#">info@techalphainstitute.com 	</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> <a href="#">  Kondhwa Khurd, Pune, </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 right-info">
                    <div class="item-flex">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">Register</a>
                            <a href="#" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-sign-in-alt"></i>Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky dark bootsnav main-menu mobile-menu">

            <div class="container-full">

               
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{asset('/')}}">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="Logo">
                         <img src="{{ asset('assets/img/iso.png') }}" style="padding-left: 31px;height: 58px !important;" class="logo" alt="Logo">
                        
                          <!--<span style="padding-left: 31px;">ISO 9001:2015 </span>  -->
                    </a>
                    
                


                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right navigation " data-in="fadeInDown" data-out="fadeOutUp">
                       <li>
                            <a href="{{url('/')}}">Home </a>
                        </li>
                        
                         <li>
                            <a href="{{url('/about')}}">About Us  </a>
                        </li>
                        
                        <!--  <li>-->
                        <!--    <a href="#">Courses  </a>-->
                        <!--</li>-->
                        
                         <li class="dropdown desktop-view-courses">
                             
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Courses </a>
                            <ul class="megamenu ">
                                 <li><a href="{{url('/python')}}">Python Full Stack Developer</a></li>
                                 
                                  <li><a href="{{url('/hardware')}}">Hardware</a></li>
                                  <li><a href="{{url('/data-analytic')}}">Data Analytics </a></li>
                                  <li><a href="{{url('/graphicdesign')}}">Graphics Designing</a></li>
                                 
                                
                                 <li><a href="{{asset('/courses')}}">MSCIT</a></li>
	 <li><a href="{{url('/msoffice')}}">MS Office </a></li>
	 <li><a href="{{url('/cplus')}}">C++</a></li>
	 <li><a href="{{url('/advancedexcel')}}">Advance Excel</a></li>
	 <li><a href="{{url('/tallyprime')}}">Tally Prime </a></li>
 <li><a href="{{url('/cprogramming')}}">	C Programming</a></li>
 <li><a href="{{url('/javacore')}}">	Java Core</a></li>
 <li><a href="{{url('/javacore')}}">Java Advance</a></li>
 <li><a href="{{url('/corepython')}}">	Core Python</a></li>
 <li><a href="{{url('/csharp')}}">	C#</a></li>

                                        
                             <li><a href="{{url('/advancedcoding')}}">advanced Coding</a></li>
                                <li><a href="{{url('/digitalmarketing')}}">digital Marketing</a></li>
                                
                        
                                
                                  <li><a href="{{url('/scratch')}}">scratch</a></li>
                                <li><a href="{{url('/sql')}}">SQL</a></li>
                                
                                  <li><a href="{{url('/basiccoding')}}">basic Coding</a></li>
   <li><a href="{{url('/courses')}}">Full Stack </a></li>   
                                <!--<li><a href="{{url('/courses')}}">other Courses</a></li>-->
                                        
                                    </ul>
                            
                            <!--<ul class="dropdown-menu">-->
                            <!--    <li><a Href="#">advanced Coding</a></li>-->
                            <!--    <li><a Href="#">digital Marketing</a></li>-->
                            <!--      <li><a Href="#">advanced Coding</a></li>-->
                            <!--    <li><a Href="#">graphic Design</a></li>-->
                                
                            <!--      <li><a Href="#">scratch</a></li>-->
                            <!--    <li><a Href="#">sql</a></li>-->
                                
                            <!--      <li><a Href="#">basic Coding</a></li>-->
                            <!--    <li><a Href="#">other Courses</a></li>-->
                               
                            <!--</ul>-->
                        </li>
                        
                        
                        
                          <li class="dropdown mobile-view-courses">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Courses </a>
                            <ul class="dropdown-menu">
                                  
                                 <li><a href="{{url('/courses')}}">	Computer Course</a></li>
	 <li><a href="{{url('/courses')}}">MS Office </a></li>
	 <li><a href="{{url('/courses')}}">C++</a></li>
	 <li><a href="{{url('/courses')}}">Advance Excel</a></li>
	 <li><a href="{{url('/courses')}}">Tally Prime </a></li>
 <li><a href="{{url('/courses')}}">	C Programming</a></li>
 <li><a href="{{url('/courses')}}">	Java Core</a></li>
 <li><a href="{{url('/courses')}}">Java Advance</a></li>
 <li><a href="{{url('/courses')}}">	Core Python</a></li>
 <li><a href="{{url('/courses')}}">	C#</a></li>

                                        
                             <li><a href="{{url('/courses')}}">advanced Coding</a></li>
                                <li><a href="{{url('/courses')}}">digital Marketing</a></li>
                                
                                <li><a href="{{url('/courses')}}">graphic Design</a></li>
                                
                                  <li><a href="{{url('/courses')}}">scratch</a></li>
                                <li><a href="{{url('/courses')}}">SQL</a></li>
                                
                                  <li><a href="{{url('/courses')}}">basic Coding</a></li>
                              
                            </ul>
                        </li>
                        
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Gallery </a>
                            <ul class="dropdown-menu">
                                  <li><a href="{{url('/gallery')}}">Images</a></li>
                               
                                <li><a href="{{url('/videos')}}">Video</a></li>
                              
                            </ul>
                        </li>
                        
                        
                         <li>
                            <a href="{{url('/testimonials')}}">Testimonial   </a>
                        </li>
                        
                        
                        <li>
                            <a href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
    
    <!-- Modal -->
<div class="modal fade register-popup" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="Logo">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                  <div class="col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control" id="username" name="username" placeholder="Username" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                               <div class="col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control" id="password" name="username" placeholder="Password" type="password">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="">
                                        Submit
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
    <!-- Modal -->
<div class="modal fade register-popup" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="{{ asset('assets/img/logo.png')}}" class="logo" alt="Logo">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" class="contact-form">
                           
                        
                            <div class="row">
                                  <div class="col-lg-12">
                                     <div class="form-group">
                                        <input class="form-control" id="username" name="username" placeholder="Username" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                               <div class="col-lg-12">
                                     <div class="form-group">
                                        <input class="form-control" id="password" name="username" placeholder="Password" type="password">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="">
                                        Login
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
