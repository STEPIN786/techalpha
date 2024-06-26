@extends('frontend.layouts.main')


@section('main.container')

 
<!-- page-title -->

        
        
        <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- page-title end-->

       <div class="facilities-area default-padding">
        <div class="container">
            <div class="facilities-box">
                <div class="row">
                    <div class="col-lg-6 thumb" style="background-image: url(public/assets/img/about/3.png);"></div>
                    <div class="col-lg-6 offset-lg-6 info">
                        <div class="content-box">
                            <div class="heading">
                                <!--<h5>Top Facilities</h5>-->
                                <h2>Our Facilities</h2>
                            </div>
                            <div class="facilities-items">
                                <div class="item">
                                    <div class="icon">
                                        <img src="public/assets/img/thumb/1.jpg" alt="Thumb">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Placement Assistance </h4>
                                        <p>
                                          Assistance with job placements or internships
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="icon">
                                        <img src="public/assets/img/thumb/7.jpg" alt="Thumb">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Career Counseling</h4>
                                        <p>
                                        Guidance on career paths, resume building, interview preparation
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="fun-factors">
                                <div class="fun-fact">
                                    <div class="timer" data-to="3500" data-speed="5000">3500</div>
                                    <span class="medium">Students</span>
                                </div>
                                <div class="fun-fact">
                                    <div class="timer" data-to="35" data-speed="5000">35</div>
                                    <span class="medium">Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection       