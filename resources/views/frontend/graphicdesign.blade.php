@extends('frontend.layouts.main')


@section('main.container')

 
<!-- page-title -->

 <style>
            .sidebar {
    padding: 20px;
    position: relative;
    z-index: 2;
}

@media (min-width: 961px) {
    .sidebar {
        margin-top: -220px; /* Adjust as needed */
    }
}

@media (max-width: 960px) {
    .sidebar {
        margin-top: 2rem; /* Remove the negative margin for smaller screens */
        padding: 10px; /* Adjust padding for smaller screens */
    }
}

        </style>

        
        
       <div class="shadow text-dark bg-cover bg-light pt-10" style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 8px 0 40px;"  >
        <div class="container">
            
            <div class="row">
                <div class="col-md-6">
                     <ul class="bg-transparent breadcrumb">
                        <li><a href="https://techalphainstitute.com/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active"> / Graphic Designing Course</li>
                    </ul>
                  
                  <div style="padding-top:40px;"> 
                    <h1>Graphic Designing Course</h1>
                    <p>Students will learn and apply the fundamentals of various software applications
                    (such as Illustrator and Photoshop), web design, image editing, drawing, graphics, and branding. Students will experience what it's like to work on advertising and marketing industry projects while coordinating technical tasks with such import- ant skills as:

Organization, Management, Communication, Ethics, Teamwork.
</p>
                  </div> 
                <ul class="d-flex mt-4">
                <li class="p-2 border-right border-success"><i class="fas fa-clock text-primary"></i> 6 Months</li>
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

                                   <p>Students will learn and apply the fundamentals of various software applications (such as Illustrator and Photoshop),web design, image editing, drawing, graphics, and branding.
 </p>
                                     <p>  Students will experience what it's like to work on advertising and marketing industry projects while coordinating technical tasks with such import- ant skills as:

Organization, Management, Communication, Ethics, Teamwork. </p>
                                      </div>
                                      
                                      <div id="who-can-do" style="padding-top: 100px; margin-top: -50px;">
                                        <h3 class="title" >Who can do?</h3>
                                        <p>Students will be given challenging real-world projects and assignments typical for the graphic design industry. Students are expected to create quality works and students will be given opportunities to redo their work so that it meets the stan- dards discussed during the course.  </p>
                                         <p>Classroom activities will also include reading, research, projects, and problem-solving. Students will often work in teams, but they are expected to complete individual assignments </p>
                                  </div>
                                
                                       <div  id="job-opportunities" style="padding-top: 100px; margin-top: -50px;">
                                        <h3 class="title" >Job Opportunities</h3>
                                     <ul>
    <li>Graphic Designer</li>
    <li>Web Designer</li>
    <li>UI/UX Designer</li>
    <li>Art Director</li>
    <li>Creative Director</li>
    <li>Brand Identity Designer</li>
    <li>Freelance Graphic Designer</li>
</ul>

                                     </div>
    
                     
                    
                    <!--accordian start-->
        <div class="border shadow-lg p-4 mt-4">
                    <h3 class="heading-title fw-bold" id="curriculum" style="padding-top: 100px; margin-top: -50px;" >Course Curriculum</h3>
            <p>Our course will help you create unique vector artworks, learn how to use drawing tools and create your own designs more easily and professionally with the help of such powerful application as Adobe Illustrator. If you learn to use Adobe Illustra- tor, you will be able to find a job in an advertising agency, design studio or for any company that produces promotional materials for their own business. </p>
             
             
    <div class="accordion mt-4" id="accordionExample">
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
        INTRODUCTION TO ADOBE ILLUSTRATOR
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <ul>
    <li>Understanding vector graphics and use of tools</li>
    <li>Exploring the interface</li>
    <li>Choosing a workspace</li>
    <li>Opening a file</li>
    <li>Using artboards</li>
    <li>Changing your view</li>
    <li>Zooming and scrolling</li>
    <li>Using tools and panels</li>
</ul>
      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Introduction to Drawing
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <ul>
    <li>Working with straight & curved lines</li>
    <li>Learning Image Tracing</li>
    <li>Creating a tracing template</li>
</ul>

      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
        Painting using Illustrator
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
                                        <li>Color modes and their switches; creation of custom colors </li>
                             


                                    </ul>
      </div>
    </div>
  </div>
  
  
</div>
 
  
  <div class="accordion" id="accordionExample">
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> 
        Illustrator Output Options
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
       <ul>
    <li>Export Options </li> 
    <li>Exporting in PDF</li>
    <li>Print File Format and Proof Setup Option</li>
</ul>

      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> 
        Vector Shapes and Fills
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
    <li>Creating Shape Gradients and Pattern Fill</li>
    <li>Edges Compound Shapes</li>
    <li>Lines and Pen Tool</li>
    <li>Creating Curves Modifying Shapes</li>
</ul>

      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> 
        Adding and Formatting Text
        </button>
      </h2>
    </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
    <li>Paragraph formatting</li>
    <li>Using paragraph and character styles</li>
    <li>Editing styles</li>
    <li>Putting text on a path</li>
    <li>Creating outlines</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-7">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7"> 
       Saving as a JPEG
        </button>
      </h2>
    </div>

    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordionExample">
      <div class="card-body">
                                
                                <ul>
    <li>JPEG</li>
    <li>Optimizing JPEGs</li>
    <li>JPEG Smoothing</li>
    <li>Selective Quality</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-8">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8"> 
       Saving as a PNG
        </button>
      </h2>
    </div>

    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordionExample">
      <div class="card-body">
                                
                                <ul>
    <li>Web PNG</li>
    <li>Optimizing PNGs</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-9">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9"> 
        INTRODUCTION TO ADOBE PHOTOSHOP
        </button>
      </h2>
    </div>

    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
    <li>Introduction to Adobe Photoshop</li>
    <li>Getting Started using Photoshop</li>
    <li>Working with Images</li>
    
        <li>Resizing and Cropping Images</li>
        <li>Working with Basic Selections</li>
    
    <li>Layers</li>
    <li>Painting in Photoshop</li>
    <li>Photo Retouching</li>
    <li>Color Correction</li>
    <li>Using Masks And The Quick Mask Mode</li>
    <li>Working With The Pen Tool</li>
    <li>Creating Special Effects</li>
    <li>Printing And Exporting Your Work</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-10">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10"> 
       Elements of Design
        </button>
      </h2>
    </div>

    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
    <li>Color</li>
    <li>Line</li>
    <li>Shape</li>
    <li>Space</li>
    <li>Texture</li>
    <li>Value</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-11">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11"> 
        Principles of Design
        </button>
      </h2>
    </div>

    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
    <li>Balance</li>
    <li>Contrast</li>
    <li>Emphasis/Dominance & Harmony</li>
    <li>Movement/Rhythm</li>
    <li>Repetition/Pattern</li>
    <li>Unity</li>
    <li>Variety</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-12">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12"> 
        Creating images for print & web
        </button>
      </h2>
    </div>

    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordionExample">
      <div class="card-body">
                                
                                                          <ul>
    <li>Formats</li>
    <li>Resolution</li>
    <li>Raster Vs Vector</li>
</ul>

      </div>
    </div>
  </div>
  
  


 
   </div>
  
  
 
  
  </div>

</div>

   
                    <!--accordian end-->
                    
                    

  <div class="col-lg-4 col-md-6 col-12 sidebar" style="position: relative;z-index: 2; padding:20px">
                    <!-- Single Item -->
                    <div class="item course-preview">
                        <div class="thumb">
                            <img src="public/assets/img/courses/340x 228-4.png" alt="Thumb" class = "img-fluid">
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