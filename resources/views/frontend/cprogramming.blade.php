@extends('frontend.layouts.main')


@section('main.container')

 
<!-- page-title -->

        
        
        <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>C Programming</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">C Programming</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- page-title end-->
        
        
        
        
         <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 info">

                    <div class="top-info">
                        <h2>Java Programming Masterclass with <br> professional author</h2>
                        <ul>
                            <li>
                                <div class="thumb">
                                    <img src="public/assets/img/advisor/1.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <span>Teacher</span>
                                    <h5>John Kanel</h5>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <span>Category</span>
                                    <h5>Mathematics</h5>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <span>Last Update</span>
                                    <h5>January 24, 2021</h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="main-content">
                        <div class="center-tabs">
                            
                            <div id="tabsContent" class="tab-content" style="padding-top: 40px;">
                                <div id="tab1" class="tab-pane overview fade active show">
                                    <h4>Course Desscription</h4>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men over day. Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish. No at many deny away miss evil. On in so indeed spirit an mother. Amounted old strictly but marianne admitted. People former is remove remain as.
                                    </p>
                                    <h4>Learning Objectives</h4>
                                    <ul>
                                        <li>Be able to use simple tricks and techniques to make self-control easier.</li>
                                        <li>Actually apply these strategies and make a deliberate effort to understand their effects</li>
                                        <li>Have a huge advantage when it comes to sticking to your diet</li>
                                        <li>Meeting your fitness goals, and leading a healthier lifestyle.</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 sidebar">
                    <!-- Single Item -->
                    <div class="item course-preview">
                        <div class="thumb">
                            <img src="public/assets/img/courses/5.jpg" alt="Thumb">
                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                           
                            <div class="course-includes">
                                <ul>
                                    <li>
                                        <i class="fas fa-copy"></i> Lectures <span class="float-right">8</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i> Duration <span class="float-right">5.7 Hours</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-sliders-h"></i> Skill level <span class="float-right">All Levels</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-language"></i> Language <span class="float-right">English</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-users"></i> Students <span class="float-right">12K</span>
                                    </li>
                                </ul>
                            </div>
                          
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item course-category">
                        <div class="content">
                            <h4>Course categories</h4>
                            <ul>
                                <li>
                                    <a href="#">Java Programming <span>23</span></a>
                                </li>
                                <li>
                                    <a href="#">Social Science <span>0</span></a>
                                </li>
                                <li>
                                    <a href="#">Business Management <span>12</span></a>
                                </li>
                                <li>
                                    <a href="#">Online Learning <span>17</span></a>
                                </li>
                                <li>
                                    <a href="#">Course Management <span>0</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                  
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Details -->
        
        
        
        
        @endsection  