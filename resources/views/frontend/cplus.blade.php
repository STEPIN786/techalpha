@extends('frontend.layouts.main')


@section('main.container')


<!-- page-title -->



<div class="shadow text-dark bg-cover bg-light pt-10"
    style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 8px 0 40px;">
    <!--<div class="breadcrumb-area bg-gray text-left shadow dark text-light bg-cover pt-10 " style="padding: 8px 0 40px;"  >-->
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <ul class="bg-transparent breadcrumb">
                    <li><a href="https://techalphainstitute.com/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active"> / C++ Course</li>
                </ul>

                <div style="padding-top:40px;">
                    <h1>C++ Course</h1>
                    <p>I'd be happy to explain some core concepts typically covered in C++ course.C++ is a powerful
                        programming language widely used for system application software, game developement and embedded
                        firmaware.
                        Some fundamental concepts often taught in C++</p>
                </div>
                <ul class="d-flex mt-4">
                    <li class="p-2 border-right border-success"><i class="fas fa-clock text-primary"></i> 2 Months</li>
                    <li class="p-2 border-right border-success">
                        <i class="fas fa-language"></i>
                        English, Hindi, Marathi
                    </li>
                    <li class="p-2">
                        <div class="rating ">
                            <i class="fa fa-star text-warning "></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <span class="rating-count">(5 / 5 Rating)</span>
                        </div>
                    </li>
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
                <ul class="nav nav-tabs d-flex" role="tablist" style="top: 90px;">
                    <li class="nav-item" role="tab">
                        <a class="nav-link" href="#overview">Overview</a>
                    </li>
                    <li class="nav-item" role="tab">
                        <a class="nav-link" href="#who-can-do">Who can do?</a>
                    </li>
                    <li class="nav-item" role="tab">
                        <a class="nav-link" href="#job-opportunities">Job Opportunities</a>
                    </li>
                    <li class="nav-item" role="tab">
                        <a class="nav-link" href="#curriculum">Curriculum</a>
                    </li>
                </ul>


                <div class="course-overview" id="overview" style="padding-top: 100px; margin-top: -50px;">
                    <h3 class="heading-title">Course Description</h3>

                    <p>I'd be happy to explain some core concepts typically covered in C++ course.C++ is a powerful
                        programming language widely used for system application software, game developement and embedded
                        firmaware.
                        Some fundamental concepts often taught in C++ </p>

                </div>

                <div id="who-can-do" style="padding-top: 100px; margin-top: -50px;">
                    <h3 class="title">Who can do?</h3>
                    <ul>
                        <li>Students</li>
                        <li>Professionals</li>
                        <li>Self-learners</li>
                        <li>Career Switchers</li>
                        <li>Hobbyists</li>
                        <li>Academic Researchers</li>
                        <li>Entrepreneurs</li>
                    </ul>

                </div>

                <div id="job-opportunities" style="padding-top: 100px; margin-top: -50px;">
                    <h3 class="title">Job Opportunities</h3>
                    <ul>
                        <li>Software Development</li>
                        <li>Game Development</li>
                        <li>System Programming</li>
                        <li>Financial Technology (FinTech)</li>
                        <li>Telecommunications</li>
                        <li>Aerospace and Defense</li>
                        <li>Automotive</li>
                    </ul>

                </div>



                <!--accordian start-->
                <div class="border shadow-lg p-4 mt-4">
                    <h3 class="heading-title fw-bold" id="curriculum" style="padding-top: 100px; margin-top: -50px;">
                        Course Curriculum</h3>
                    <p>I'd be happy to explain some core concepts typically covered in a C++ course. C++ is a powerful
                        programming language widely used for system/application software, game development, and embedded
                        firmware. Here are some fundamental concepts often taught in C++ courses: </p>


                    <div class="accordion mt-4" id="accordionExample">
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Introduction to C++
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Introduction to C++ </li>
                                        <li> Overview of Programming Concepts</li>
                                        <li> History of C++ </li>
                                        <li>Setting up the Development Environment</li>
                                        <li>Basic Syntax and Structure</li>
                                        <li> Writing and Running Your First C++ Program </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Data Types and Variables
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Basic Data Types: int, float, char, etc.</li>
                                        <li>Variable Declaration and Initialization</li>
                                        <li>Constants and Literals</li>
                                        <li>Input and Output Operations</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Operators and Expressions
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Arithmetic Operators</li>
                                        <li>Relational Operators</li>
                                        <li>Logical Operators</li>
                                        <li>Bitwise Operators</li>
                                        <li>Operator Precedence and Associativity</li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Control Flow
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Conditional Statements (if, else if, else, switch)</li>
                                        <li>Loops (for, while, do-while)</li>
                                        <li>Break and Continue Statements</li>
                                        <li>Nested Loops</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Functions
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Function Declaration and Definition</li>
                                        <li>Function Prototypes</li>
                                        <li>Passing Arguments (by value, by reference)</li>
                                        <li>Return Values</li>
                                        <li>Scope and Lifetime of Variables</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Arrays and Strings
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Introduction to Arrays</li>
                                        <li>Multidimensional Arrays</li>
                                        <li>Introduction to Strings</li>
                                        <li>String Manipulation Functions</li>
                                        <li>Array and String Handling</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-7">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                        Pointers and References
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-7" class="collapse" aria-labelledby="heading-7"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Understanding Pointers</li>
                                        <li>Pointer Arithmetic</li>
                                        <li>Pointers and Arrays</li>
                                        <li>Pointers to Functions</li>
                                        <li>References vs Pointers</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-8">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                                        Structures and Unions
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-8" class="collapse" aria-labelledby="heading-8"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Defining Structures</li>
                                        <li>Accessing Members</li>
                                        <li>Nested Structures</li>
                                        <li>Unions and their Usage</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-9">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                                        Classes and Objects
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-9" class="collapse" aria-labelledby="heading-9"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Inheritance (Single, Multiple, Multilevel)</li>
                                        <li>Polymorphism (Compile-time and Runtime)</li>
                                        <li>Abstract Classes and Interfaces</li>
                                        <li>Operator Overloading</li>
                                        <li>Friend Functions and Classes</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-10">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                                        File Handling
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-10" class="collapse" aria-labelledby="heading-10"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>File Streams (ifstream, ofstream, fstream)</li>
                                        <li>Reading from and Writing to Files</li>
                                        <li>Binary Files</li>
                                        <li>Error Handling in File Operations</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-11">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                                        Templates and the Standard Template Library (STL)
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-11" class="collapse" aria-labelledby="heading-11"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Introduction to Templates</li>
                                        <li>Function Templates</li>
                                        <li>Class Templates</li>
                                        <li>Overview of the STL (Standard Template Library)</li>
                                        <li>Using Vectors, Lists, Queues, Stacks, and Maps</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-12">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                                        Exception Handling
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-12" class="collapse" aria-labelledby="heading-12"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Understanding Exceptions</li>
                                        <li>Try, Catch, and Throw Statements</li>
                                        <li>Standard Exception Classes</li>
                                        <li>Creating Custom Exceptions</li>
                                        <li>Exception Handling Best Practices</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-13">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-13" aria-expanded="false" aria-controls="collapse-13">
                                        Advanced Topics
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-13" class="collapse" aria-labelledby="heading-13"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Dynamic Memory Allocation (new, delete)</li>
                                        <li>Smart Pointers</li>
                                        <li>Lambda Expressions</li>
                                        <li>Multithreading Basics</li>
                                        <li>Introduction to C++11 and later features</li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-14">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-14" aria-expanded="false" aria-controls="collapse-14">
                                        Evaluation
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-14" class="collapse" aria-labelledby="heading-14"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Weekly Quizzes and Assignments</li>
                                        <li>Midterm Exam</li>
                                        <li>Final Project</li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-15">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-15" aria-expanded="false" aria-controls="collapse-12">
                                        Project Development and Review
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-15" class="collapse" aria-labelledby="heading-15"
                                data-parent="#accordionExample">
                                <div class="card-body">


                                    <ul>
                                        <li>Project Planning and Design</li>
                                        <li>Implementing Project Modules</li>
                                        <li>Debugging and Testing</li>
                                        <li>Code Review and Optimization</li>
                                        <li>Final Project Presentation and Evaluation</li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-16">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-16" aria-expanded="false" aria-controls="collapse-12">
                                        Resources
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-16" class="collapse" aria-labelledby="heading-16"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li>Recommended Textbooks</li>
                                        <li>Online Tutorials and Documentation</li>
                                        <li>Community and Support Forums</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>


            <!--accordian end-->



            <div class="col-lg-4 sidebar" style="margin-top: -220px;position: relative;z-index: 2; padding:20px">
                <!-- Single Item -->
                <div class="item course-preview">
                    <div class="thumb">
                        <img src="https://images.pexels.com/photos/414628/pexels-photo-414628.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Thumb">
                        <!--<a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">-->
                        <!--    <i class="fa fa-play"></i>-->
                        <!--</a>-->
                    </div>
                    <div class="content">

                        <div class="course-includes">
                            <ul>
                                <li>
                                    <i class="fas fa-copy"></i> Fees <span class="float-right"><button type="button"
                                            class=" btn-warning btn " data-toggle="modal"
                                            data-target="#exampleModalCenter"
                                            style="padding: 1px 4px;font-size: xx-small;">
                                            <span>click now</span>
                                        </button>
                                    </span>
                                </li>
                                <i class="fas fa-clock"></i> Duration <span class="float-right">2 months</span>
                                </li>
                                <li>
                                    <i class="fas fa-sliders-h"></i> Skill level <span class="float-right">All
                                        Levels</span>
                                </li>
                                <li>
                                    <i class="fas fa-language"></i> Language <span class="float-right">English</span>
                                </li>
                                <li>
                                    <i class="fas fa-users"></i> Enrolled <span class="float-right">12K</span>
                                </li>
                            </ul>
                            <!--<button class="btn btn-warning ml-10">Start Now          </button>-->
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


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Connect now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">

            <form method="post" action="{{route('course.submit)}}">
                {{ csrf_field() }}
                @honeypot
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter your Name" name="name">
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputPassword1"
                            placeholder="Enter your phone Number" name="phone_no" max="10">
                    </div>

                    <div class="form-group">
                    <input type="hidden" name="course" value="C++" />
                        <label for="exampleFormControlSelect1"> Course</label>
                        <!--  <select class="form-control" id="exampleFormControlSelect1">-->
                        <!--<option value="Python Full Stack Developer">Python Full Stack Developer</option>-->
                        <!--<option value="Hardware">Hardware</option>-->
                        <!--<option value="Data Analytics">Data Analytics</option>-->
                        <!--<option value="Graphics Designing">Graphics Designing</option>-->
                        <!--<option value="MSCIT">MSCIT</option>-->
                        <!--<option value="MS Office">MS Office</option>-->
                        <!--<option value="C++">C++</option>-->
                        <!--<option value="Advance Excel">Advance Excel</option>-->
                        <!--<option value="Tally Prime">Tally Prime</option>-->
                        <!--<option value="C Programming">C Programming</option>-->
                        <!--<option value="Java Core">Java Core</option>-->
                        <!--<option value="Java Advance">Java Advance</option>-->
                        <!--<option value="Core Python">Core Python</option>-->
                        <!--<option value="C#">C#</option>-->
                        <!--<option value="Advanced Coding">Advanced Coding</option>-->
                        <!--<option value="Digital Marketing">Digital Marketing</option>-->
                        <!--<option value="Scratch">Scratch</option>-->
                        <!--<option value="SQL">SQL</option>-->
                        <!--<option value="Basic Coding">Basic Coding</option>-->
                        <!--<option value="Full Stack">Full Stack</option>-->

                        <!--  </select>-->
                        <div>C++</div>
                    </div>

                    <!--<button type="submit" class="btn btn-warning">Submit</button>-->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
        </div>
    </div>
</div>


@endsection


<!-- Start Course Details 
    <!--============================================= -->-->
<!--<div class="course-details-area default-padding">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-8 info">-->

<!--                <div class="top-info">-->
<!--                    <h2>Java Programming Masterclass with <br> professional author</h2>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <div class="thumb">-->
<!--                                <img src="public/assets/img/advisor/1.jpg" alt="Thumb">-->
<!--                            </div>-->
<!--                            <div class="info">-->
<!--                                <span>Teacher</span>-->
<!--                                <h5>John Kanel</h5>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="info">-->
<!--                                <span>Category</span>-->
<!--                                <h5>Mathematics</h5>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="info">-->
<!--                                <span>Last Update</span>-->
<!--                                <h5>January 24, 2021</h5>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->

<!--                <div class="main-content">-->
<!--                    <div class="center-tabs">-->

<!--                        <div id="tabsContent" class="tab-content" style="padding-top: 40px;">-->
<!--                            <div id="tab1" class="tab-pane overview fade active show">-->
<!--                                <h4>Course Desscription</h4>-->
<!--                                <p>-->
<!--                                    Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed.-->
<!--                                </p>-->
<!--                                <p>-->
<!--                                    Placing assured be if removed it besides on. Far shed each high read are men over day. Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish. No at many deny away miss evil. On in so indeed spirit an mother. Amounted old strictly but marianne admitted. People former is remove remain as.-->
<!--                                </p>-->
<!--                                <h4>Learning Objectives</h4>-->
<!--                                <ul>-->
<!--                                    <li>Be able to use simple tricks and techniques to make self-control easier.</li>-->
<!--                                    <li>Actually apply these strategies and make a deliberate effort to understand their effects</li>-->
<!--                                    <li>Have a huge advantage when it comes to sticking to your diet</li>-->
<!--                                    <li>Meeting your fitness goals, and leading a healthier lifestyle.</li>-->
<!--                                </ul>-->
<!--                            </div>-->

<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--            <div class="col-lg-4 sidebar">-->
<!-- Single Item -->
<!--                <div class="item course-preview">-->
<!--                    <div class="thumb">-->
<!--                        <img src="public/assets/img/courses/5.jpg" alt="Thumb">-->
<!--                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">-->
<!--                            <i class="fa fa-play"></i>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="content">-->

<!--                        <div class="course-includes">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <i class="fas fa-copy"></i> Lectures <span class="float-right">8</span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fas fa-clock"></i> Duration <span class="float-right">5.7 Hours</span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fas fa-sliders-h"></i> Skill level <span class="float-right">All Levels</span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fas fa-language"></i> Language <span class="float-right">English</span>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <i class="fas fa-users"></i> Students <span class="float-right">12K</span>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!-- Single Item -->

<!-- Single Item -->
<!--                <div class="item course-category">-->
<!--                    <div class="content">-->
<!--                        <h4>Course categories</h4>-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <a href="#">Java Programming <span>23</span></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Social Science <span>0</span></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Business Management <span>12</span></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Online Learning <span>17</span></a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#">Course Management <span>0</span></a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!-- End Single Item -->


<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- End Course Details -->
