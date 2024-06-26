@extends('frontend.layouts.main')


@section('main.container')

 
<!-- page-title -->

        
        
       <div class="shadow text-dark bg-cover bg-light pt-10" style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 8px 0 40px;"  >
        <div class="container">
            
            <div class="row">
                <div class="col-md-6">
                     <ul class="bg-transparent breadcrumb">
                        <li><a href="https://techalphainstitute.com/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active"> / Scratch</li>
                    </ul>
                  
                  <div style="padding-top:40px;"> 
                    <h1>Scratch</h1>
                    <p>Lorem Debitis consequuntur impedit explicabo error distinctio, assumenda corrupti! Dicta officia id, incidunt saepe tenetur optio autem veniam non dolore delectus alias commodi reiciendis, quidem suscipit velit, quos nesciunt a! Veritatis, nemo.</p>
                  </div> 
                <ul class="d-flex mt-4">
                <li class="p-2 border-right border-success"><i class="fas fa-clock text-primary"></i> 3 Months</li>
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
                       <i class="fa fa-star"></i>
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

                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                      </div>
                                      
                                      <div id="who-can-do" style="padding-top: 100px; margin-top: -50px;">
                                        <h3 class="title" >Who can do?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                  </div>
                                
                                       <div  id="job-opportunities" style="padding-top: 100px; margin-top: -50px;">
                                        <h3 class="title" >Job Opportunities</h3>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                     <ul>
                                         <li>laboris nisi ut aliquip ex ea</li>
                                         <li>laboris nisi ut aliquip ex ea</li>
                                         <li>laboris nisi ut aliquip ex ea</li>
                                         <li>laboris nisi ut aliquip ex ea</li>
                                     </ul>
                                     </div>
    
                     
                    
                    <!--accordian start-->
        <div class="border shadow-lg p-4 mt-4">
                    <h3 class="heading-title fw-bold" id="curriculum" style="padding-top: 100px; margin-top: -50px;" >Course Curriculum</h3>
            <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
             
             <h3 class="fs-4">Front-End Part</h3>

              <ul>
                                        <li>Introduction</li>
                               <li>Different types of Applications </li>
                                              <li>Application </li>


                                    </ul>
    <div class="accordion mt-4" id="accordionExample">
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> HTML
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
                                        <li>Introduction to HTML </li>
                               <li>Basic Structure of HTML </li>
                                              <li>Basic Structure of HTML </li>
                               <li>HTML Tags</li>
                                                                       <li>Paragraphs, Headings and Text</li>
                               <li>Formatting Tags </li>
                                              <li>HTML Lists </li>
                               <li>HTML Images </li>
                                                                       <li>HTML Tables  </li>
                               <li>HTML Forms </li>
                                              <li>HTML Media</li>


                                    </ul> 
      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Introduction To CSS
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
                                        <li>Introduction to CSS </li>
                               <li>Types of CSS</li>
                                              <li>CSS Properties, Selectors and Values </li>
                               <li>Applying CSS to HTML</li>
                                                                       <li>CSS colors</li>
                               <li>CSS Box Model, Margins, Padding, Borders</li>
                                              <li>CSS Text & Font Formats</li>
                               <li>CSS Advanced Topics (Effects, Animations</li>



            </ul>
      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Javscript
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
                                        <li>Introduction to JavaScript </li>
                               <li>How to Apply JavaScript</li>
                                              <li>Displaying Output in JavaScript </li>
                               <li>Understanding JavaScript Syntax </li>
                                                 <li>Variables & Datatypes </li>
                               <li>Operators</li>
                                              <li>Math and String Manipulations </li>
                               <li>Conditional and looping Statements </li>
                                                 <li>Functions</li>
                               <li>Validations</li>
                                              <li>Events</li>


                                    </ul>
      </div>
    </div>
  </div>
  
  
</div>
  <h3 class="fs-4 mb-2 mt-4">Back-End Part</h3>
  
  <div class="accordion mt-4" id="accordionExample">
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> 
        INTRODUCTION TO PYTHON
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
                                        <li>What is Python and history of Python </li>
                               <li>Unique features of Python</li>
                                              <li>Python-2 and Python-3 differences</li>
                               <li>Install Python and Environment Setup</li>
                                                                       <li>First Python Program</li>
                               <li>Python Identifiers, Keywords and Indentation</li>
                                              <li> Comments and document interlude in Python</li>
                               <li> Command-line arguments</li>
                                                                       <li>Getting User Input</li>
                               <li> Python Data Types</li>
                                              <li> What are variables?</li>
                               <li>Python Core objects and Functions</li>
                                                                       <li> Number and Maths</li>
                               <li>Assignments</li>
         

                                    </ul> 
      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> 
        CONTROL STATEMENTS
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
                                        <li>if-else</li>
                               <li>if-elseif-else </li>
                                              <li>while loop </li>
                               <li>for loop </li>
                                            <li>break</li>
                               <li>continue </li>
                                              <li>assert</li>
                               <li>pass</li>
  <li>return</li>
                                    </ul>
      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> 
        LIST, RANGES & TUPLES IN PYTHON
        </button>
      </h2>
    </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
                                        <li>Introduction </li>
                               <li>Lists in Python </li>
                                              <li>More about Lists</li>
                               <li>Understanding Iterators</li>
                                               <li>Generators, Comprehensions and Lambda Expressions</li>
                               <li>Generators and Yield </li>
                                              <li>Next and Ranges</li>
                               <li>Understanding and using Ranges </li>
                                               <li>More About Ranges</li>
                               <li>Ordered Sets with tuples</li>


                                    </ul>
      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-7">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7"> 
        PYTHON DICTIONARIES AND SETS
        </button>
      </h2>
    </div>

    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordionExample">
      <div class="card-body">
                                
                                  <ul>
                                        <li>Introduction to the section </li>
                               <li>Python Dictionaries</li>
                                              <li>MORE ON DICTIONARIES </li>
                               <li>SETS</li>
                                                 <li>Python Sets Examples </li>
                               <li>Input and Output in Python</li>
                                              <li>Reading and writing text files </li>
                               <li>writing Text Files</li>
                                              <li>Appending to Files and Challenge </li>
                               <li>Writing Binary Files Manually </li>
                                              <li>Using Pickle to Write Binary Files</li>
                     

                                    </ul>
      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-8">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8"> 
       PYTHON BUILT IN FUNCTION
        </button>
      </h2>
    </div>

    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordionExample">
      <div class="card-body">
                                
                                   <ul>
                                        <li>Python user defined functions </li>
                               <li>Python packages functions</li>
                                              <li>Defining and calling FunctionThe anonymous Functions</li>
                               <li>Loops and statement in Python </li>
                                          <li>Python Modules & Packages</li>
                      

                                    </ul>
      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-9">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9"> 
        PYTHON OBJECT ORIENTED
        </button>
      </h2>
    </div>

    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordionExample">
      <div class="card-body">
                                
                                     <ul>
                                        <li>Overview of OOP </li>
                               <li>The self variable </li>
                                              <li>Constructor </li>
                               <li>Types Of Variables </li>

                    <li>Namespaces</li>
                               <li>Creating Classes and Objects </li>
                                              <li>Inheritance</li>
                               <li>Types of Methods </li>
                                                   <li>Instance Methods </li>
                               <li>Static Methods </li>
                                              <li>Class Methods </li>
                               <li>Accessing attributes</li>
                                                   <li>Built-In Class Attributes</li>
                               <li>Destroying Objects</li>
                                              <li>Abstract classes and Interfaces </li>
                               <li>Abstract Methods and Abstract class </li>
                                                   <li>Interface in Python</li>
                               <li>Abstract classes and Interfaces</li>
            


                                    </ul>
      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-10">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10"> 
        EXCEPTIONS
        </button>
      </h2>
    </div>

    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
                                        <li>Errors in Python </li>
                               <li>Compile-Time Errors </li>
                                              <li>Runtime Errors </li>
                               <li>Logical Errors</li>
                                            <li>What is Exception?</li>
                               <li>Handling an exceptiontry….except…elsetry-finally clause.</li>
                                              <li>Argument of an Exception </li>
                               <li>Python Standard Exceptions </li>
                                            <li>Raising an exceptions</li>
                               <li>User-Defined Exceptions</li>
                 

                                    </ul>
      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-11">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11"> 
        PYTHON REGULAR EXPRESSIONS
        </button>
      </h2>
    </div>

    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
                                        <li>Introduction </li>
                               <li>Lists in Python </li>
                                              <li>More about Lists</li>
                               <li>Understanding Iterators</li>
                                               <li>Generators, Comprehensions and Lambda Expressions</li>
                               <li>Generators and Yield </li>
                                              <li>Next and Ranges</li>
                               <li>Understanding and using Ranges </li>
                                               <li>More About Ranges</li>
                               <li>Ordered Sets with tuples</li>


                                    </ul>
      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-12">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12"> 
        PYTHON MULTITHREADED PROGRAMMING
        </button>
      </h2>
    </div>

    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordionExample">
      <div class="card-body">
                                
                                                          <ul>
                                        <li>What is multithreading?</li>
                               <li>Difference between a Process and Thread </li>
                                          
                               <li>Concurrent Programming and GIL</li>
                                          <li>Uses of Thread </li>
                               <li>Starting a New Thread </li>
                                              <li>The Threading Module </li>
                               <li>Thread Synchronization </li>
                                          <li>Locks</li>
                               <li>Semaphore</li>
                                              <li>Deadlock of Threads </li>
                               <li>Avoiding Deadlocks </li>
                                          <li>Daemon Threads</li>
                               <li>Using Databases in Python </li>
                                              <li>Python MySQL Database Access</li>
                               <li>Install the MySQLdb and other Packages </li>
                                          <li>Create Database Connection</li>
                               <li>CREATE, INSERT, READ Operation</li>
                                              <li>DML and DDL Oepration with Databases </li>
                               <li>Web Scraping in Python</li>


                                    </ul>
      </div>
    </div>
  </div>
  
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-13">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-13" aria-expanded="false" aria-controls="collapse-13"> 
        DATA SCIENCE USING PYTHON
        </button>
      </h2>
    </div>

    <div id="collapse-13" class="collapse" aria-labelledby="heading-13" data-parent="#accordionExample">
      <div class="card-body">
                                
                                                          <ul>
                                        <li>What is multithreading?</li>
                               <li>Difference between a Process and Thread </li>
                                          
                               <li>Concurrent Programming and GIL</li>
                                          <li>Uses of Thread </li>
                               <li>Starting a New Thread </li>
                                              <li>The Threading Module </li>
                               <li>Thread Synchronization </li>
                                          <li>Locks</li>
                               <li>Semaphore</li>
                                              <li>Deadlock of Threads </li>
                               <li>Avoiding Deadlocks </li>
                                          <li>Daemon Threads</li>
                               <li>Using Databases in Python </li>
                                              <li>Python MySQL Database Access</li>
                               <li>Install the MySQLdb and other Packages </li>
                                          <li>Create Database Connection</li>
                               <li>CREATE, INSERT, READ Operation</li>
                                              <li>DML and DDL Oepration with Databases </li>
                               <li>Web Scraping in Python</li>


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
                            <img src="https://images.pexels.com/photos/414628/pexels-photo-414628.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Thumb">
                            <!--<a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">-->
                            <!--    <i class="fa fa-play"></i>-->
                            <!--</a>-->
                        </div>
                        <div class="content">
                           
                            <div class="course-includes">
                                <ul>
                                    <li>
                                        <i class="fas fa-copy"></i> fees <span class="float-right">$60</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i> Duration <span class="float-right">3 months</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-sliders-h"></i> Skill level <span class="float-right">All Levels</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-language"></i> Language <span class="float-right">English</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-users"></i> Enrolled <span class="float-right">12K</span>
                                    </li>
                                </ul>
                                <button class="btn btn-warning ml-10">Start Now</button>
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
        
        
        
        