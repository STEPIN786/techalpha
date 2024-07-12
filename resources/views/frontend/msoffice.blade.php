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
        
        <!--<div class="breadcrumb-area bg-gray text-left shadow dark text-light bg-cover pt-10 " style="padding: 8px 0 40px;"  >-->
        <div class="shadow text-dark bg-cover bg-light pt-10" style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 8px 0 40px;"  >
        <div class="container">
            
            <div class="row">
                <div class="col-md-6">
                     <ul class="bg-transparent breadcrumb">
                        <li><a href="https://techalphainstitute.com/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active"> / MS Office Course</li>
                    </ul>
                  
                  <div style="padding-top:40px;"> 
                    <h1>MS Office</h1>
                    <p>MS-Office course trains students how to use MS-Office applications 
                    in office work such as creating professional- quality documents, store, organize and analyze information, arithmetic operations and functions and create dynamic 
                    slide presentations with animation, narration, images, and much more, digitally and effectively.</p>
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

                                   <p>MS-Office course trains students how to use MS-Office applications in office work such as creating professional- quality documents, store, organize and analyze information,
                                   arithmetic operations and functions and create dynamic slide presentations with animation, narration, images, and much more, digitally and effectively.</p>
                                      </div>
                                      
                                      <div id="who-can-do" style="padding-top: 100px; margin-top: -50px;">
                                        <h3 class="title" >Who can do?</h3>
                                      
<ul>
    <li>after 5 standard student</li>

   
</ul>

                                  </div>
                                
                                       <div  id="job-opportunities" style="padding-top: 100px; margin-top: -50px;">
                                        <h3 class="title" >Job Opportunities</h3>
                                 <ul>
    <li>Back office</li>
    <li>Reception</li>
    <li>Data entry</li>
    <li>Office work</li>
    <li>Telecaller</li>
</ul>


                                     </div>
    
                     
                    
                    <!--accordian start-->
        <div class="border shadow-lg p-4 mt-4">
                    <h3 class="heading-title fw-bold" id="curriculum" style="padding-top: 100px; margin-top: -50px;" >Course Curriculum</h3>
           

    <div class="accordion mt-4" id="accordionExample">
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark" style="text-decoration:none; position: relative;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
        Introduction to Computer
    <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        	
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <ul>
    <li>Computer Basic, Creating Folder, Paint</li>
    <li>Directories, input units, Output unit</li>
    <li>Central Processing Units</li>
    <li>What is Hardware</li>
    <li>What is Software</li>
    <li>Windows shortcut keys</li>
</ul>

      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              	Document Settings
              <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
    <li>Page Size</li>
    <li>Page Margins</li>
    <li>Page Colors</li>
    <li>Page Borders</li>
    <li>Watermark</li>
</ul>

      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
        	Text Basics
             <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
    <li>Typing the text, Alignment of text</li>
    <li>Editing Text: Cut, Copy, Paste, Select All, Clear</li>
    <li>Find & Replace</li>
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
        	Text Formatting and saving file
           <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
    <li>New, Open, Close, Save, Save As</li>
    <li>Formatting Text: Font Size, Font Style</li>
    <li>Font Color, Use the Bold, Italic, and Underline</li>
    <li>Change the Text Case</li>
    <li>Line spacing, Paragraph spacing</li>
    <li>Shading text and paragraph</li>
    <li>Working with Tabs and Indents</li>
</ul>

      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> 
          	Working with Objects
              <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
       <ul>
    <li>Shapes, Clipart and Picture, Word Art, Smart Art</li>
    <li>Columns and Orderings - To Add Columns to a Document</li>
    <li>Change the Order of Objects</li>
    <li>Page Number, Date & Time</li>
    <li>Inserting Text boxes</li>
    <li>Inserting Word art</li>
    <li>Inserting symbols</li>
    <li>Inserting Chart</li>
</ul>

      </div>
    </div>
  </div>
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> 
          	Header & Footers
              <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
    <li>Inserting custom Header and Footer</li>
    <li>Inserting objects in the header and footer</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-7">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7"> 
        	Working with bullets and numbered lists
            <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordionExample">
      <div class="card-body">
                                
                                <ul>
    <li>Multilevel numbering and Bulleting</li>
    <li>Creating List</li>
    <li>Customizing List style</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-8">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8"> 
         	Tables
             <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordionExample">
      <div class="card-body">
                                
                                <ul>
    <li>Working with Tables, Table Formatting</li>
    <li>Table Styles</li>
    <li>Alignment option</li>
    <li>Merge and split option</li>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-9">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9"> 
        MS Excel
            <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordionExample">
      <div class="card-body">
                                
                                   <ul>
    <li>Introduction to Excel</li>
    <li>Introduction to Excel interface</li>
    <li>Understanding rows and columns</li>
    <li>Understanding Cell Naming</li>
    <li>Working with Excel workbook and sheets</li>
    <li>Formatting Excel workbook</li>
    <li>New, Open, Close, Save, Save As</li>
    <li>Formatting Text: Font Size, Font Style</li>
    <li>Font Color, Use the Bold, Italic, and Underline</li>
    <li>Wrap text, Merge and Centre</li>
    <li>Currency, Accounting and other formats</li>
    <li>Modifying Columns, Rows & Cells</li>
    <li>Perform Calculations with Functions</li>
    <li>Functions Mathematical Functions</li>
    <li>Real Time Example Formulas & Problems</li>
    <li>Sort and Filter Data</li>
    <ul>
        <li>Using number filter, Text filter</li>
        <li>Custom filtering</li>
        <li>Removing filters from columns</li>
    </ul>
    <li>Conditional formatting</li>
    <li>Create Effective Charts to Present Data Visually</li>
    <ul>
        <li>Inserting Column, Pie chart etc.</li>
        <li>Create an effective chart with Chart Tool</li>
        <li>Design, Format, and Layout options</li>
        <li>Adding chart title</li>
        <li>Changing layouts</li>
        <li>Chart styles</li>
        <li>Editing chart data range</li>
        <li>Editing data series</li>
        <li>Changing chart</li>
    </ul>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-10">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10"> 
         MS PowerPoint
             <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
    <li>Setting Up PowerPoint Environment</li>
    <li>New, Open, Close, Save, Save As</li>
    <li>Typing the text, Alignment of text</li>
    <li>Formatting Text: Font Size, Font Style</li>
    <li>Font Color, Use the Bold, Italic, and Underline</li>
    <li>Cut, Copy, Paste, Select All, Clear text</li>
    <li>Find & Replace</li>
    <li>Working with Tabs and Indents</li>
    <li>Creating slides and applying themes</li>
    <ul>
        <li>Inserting new slide</li>
        <li>Changing layout of slides</li>
        <li>Duplicating slides</li>
        <li>Copying and pasting slide</li>
        <li>Applying themes to the slide layout</li>
        <li>Changing theme color</li>
        <li>Slide background</li>
        <li>Formatting slide background</li>
        <li>Using slide views</li>
        <li>Working with bullets and numbering</li>
        <li>Multilevel numbering and Bulleting</li>
        <li>Creating List</li>
    </ul>
    <li>Working with Objects</li>
    <ul>
        <li>Shapes, Clipart and Picture, Word Art, Smart Art</li>
        <li>Change the Order of Objects</li>
        <li>Inserting slide header and footer</li>
        <li>Inserting Text boxes</li>
        <li>Inserting shapes, using quick styles</li>
        <li>Inserting Word art</li>
        <li>Inserting symbols</li>
        <li>Inserting Chart</li>
        <li>Hyperlinks and Action Buttons</li>
        <ul>
            <li>Inserting Hyperlinks and Action Buttons</li>
            <li>Edit Hyperlinks and Action Button</li>
        </ul>
        <li>Word Art and Shapes</li>
        <li>Working With Video and Sounds</li>
        <ul>
            <li>Inserting Video From a Computer File</li>
            <li>Inserting Audio file</li>
            <li>Audio Video playback and format options</li>
            <li>Video options, Adjust options</li>
            <li>Reshaping and bordering Video</li>
        </ul>
        <li>Using SmartArt and Tables</li>
    </ul>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-11">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11"> 
         	Animation and Slide Transition
             <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordionExample">
      <div class="card-body">
                                
                                    <ul>
    <li>Default Animation, Custom Animation</li>
    <li>Modify a Default or Custom Animation</li>
    <li>Reorder Animation Using Transitions</li>
    <li>Apply a Slide Transition</li>
    <li>Modifying a Transition</li>
    <li>Advancing to the Next Slide</li>
    <li>Slide show option</li>
    <ul>
        <li>Start slide show</li>
        <li>Start show from the current slide</li>
        <li>Rehearse timing</li>
        <li>Creating custom slide show</li>
    </ul>
</ul>

      </div>
    </div>
  </div>
  
  <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-12">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12"> 
        Google Docs, Sheets, Slides
            <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordionExample">
      <div class="card-body">
                                
                                                          <ul>
    <li>Introduction to Google</li>
    <li>Introduction to Google Docs</li>
    <li>Understanding Google Docs</li>
    <li>Difference between MS-Word and Google Docs</li>
    <li>Creating and sharing documents with Google Docs</li>
    <li>Introduction to Google Sheets</li>
    <li>Understanding Google Sheets</li>
    <li>Difference between MS-Excel and Google Sheets</li>
    <li>Creating and sharing worksheets with Google Sheets</li>
    <li>Introduction to Google Slides</li>
    <li>Understanding Google Slides</li>
    <li>Difference between MS-PowerPoint and Google Slides</li>
    <li>Creating and sharing presentations with Google Slides</li>
</ul>

      </div>
    </div>
  </div>
  
   <div class="card mb-0 text-dark" style="text-decoration:none;">
    <div class="card-header" id="heading-13">
      <h2 class="mb-0 text-dark border">
        <button class="btn btn-link btn-block text-left text-dark collapsed" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapse-13" aria-expanded="false" aria-controls="collapse-13"> 
     Internet and E-Mail
           <span class="float-right">
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </span>
        </button>
      </h2>
    </div>

    <div id="collapse-13" class="collapse" aria-labelledby="heading-13" data-parent="#accordionExample">
      <div class="card-body">
                                
                                                          <ul>
    <li>What is Internet?</li>
    <li>What is E-Mail?</li>
    <li>Creating E-Mail</li>
    <li>Setting up E-Mail Account</li>
    <li>Receiving Incoming Messages</li>
    <li>Sending Outgoing Messages, Email addressing</li>
    <li>Email attachments</li>
    <li>Browsing, Search engines</li>
    <li>Text chatting, Job Searching</li>
    <li>Downloading video and Music</li>
    <li>Uploading Video or Music, Voice chatting, Webcam Chatting etc.</li>
    <li>Introduction to Blogging, Facebook</li>
    <li>Internet Safety Tips</li>
</ul>

      </div>
    </div>
  </div>
  
  
  
 
  
  </div>

</div>

   
                    <!--accordian end-->
                    
            <!--        <div class="main-content">-->
            <!--            <div class="center-tabs">-->
                            
            <!--                <div id="tabsContent" class="tab-content" style="padding-top: 40px;">-->
            <!--                    <div id="tab1" class="tab-pane overview fade active show">-->

            <!--           <h3> 	Front-End Part	</h3>-->

            <!--  <ul>-->
            <!--                            <li>Introduction</li>-->
            <!--                   <li>Different types of Applications </li>-->
            <!--                                  <li>Application </li>-->


            <!--                        </ul>-->
            <!--                   <h4 class="mb-3 mt-4" style="margin-top:20px">HTML</h4>-->
            <!--                        <ul>-->
            <!--                            <li>Introduction to HTML </li>-->
            <!--                   <li>Basic Structure of HTML </li>-->
            <!--                                  <li>Basic Structure of HTML </li>-->
            <!--                   <li>HTML Tags</li>-->
            <!--                                                           <li>Paragraphs, Headings and Text</li>-->
            <!--                   <li>Formatting Tags </li>-->
            <!--                                  <li>HTML Lists </li>-->
            <!--                   <li>HTML Images </li>-->
            <!--                                                           <li>HTML Tables  </li>-->
            <!--                   <li>HTML Forms </li>-->
            <!--                                  <li>HTML Media</li>-->


            <!--                        </ul>                 -->
                                    
            <!--<h4>Introduction to CSS </h4>-->
            <!--                        <ul>-->
            <!--                            <li>Introduction to CSS </li>-->
            <!--                   <li>Types of CSS</li>-->
            <!--                                  <li>CSS Properties, Selectors and Values </li>-->
            <!--                   <li>Applying CSS to HTML</li>-->
            <!--                                                           <li>CSS colors</li>-->
            <!--                   <li>CSS Box Model, Margins, Padding, Borders</li>-->
            <!--                                  <li>CSS Text & Font Formats</li>-->
            <!--                   <li>CSS Advanced Topics (Effects, Animations</li>-->



            <!--                        </ul>-->
                                    
            <!--                                    <h4> Javascript</h4>-->
            <!--                        <ul>-->
            <!--                            <li>Introduction to JavaScript </li>-->
            <!--                   <li>How to Apply JavaScript</li>-->
            <!--                                  <li>Displaying Output in JavaScript </li>-->
            <!--                   <li>Understanding JavaScript Syntax </li>-->
            <!--                                     <li>Variables & Datatypes </li>-->
            <!--                   <li>Operators</li>-->
            <!--                                  <li>Math and String Manipulations </li>-->
            <!--                   <li>Conditional and looping Statements </li>-->
            <!--                                     <li>Functions</li>-->
            <!--                   <li>Validations</li>-->
            <!--                                  <li>Events</li>-->


            <!--                        </ul>-->
                                    
  <!--                                    <h3> 	Backend Part	</h3> -->


  <!--             <h4>INTRODUCTION TO PYTHON</h4>-->
  <!--                                  <ul>-->
  <!--                                      <li>What is Python and history of Python </li>-->
  <!--                             <li>Unique features of Python</li>-->
  <!--                                            <li>Python-2 and Python-3 differences</li>-->
  <!--                             <li>Install Python and Environment Setup</li>-->
  <!--                                                                     <li>First Python Program</li>-->
  <!--                             <li>Python Identifiers, Keywords and Indentation</li>-->
  <!--                                            <li> Comments and document interlude in Python</li>-->
  <!--                             <li> Command-line arguments</li>-->
  <!--                                                                     <li>Getting User Input</li>-->
  <!--                             <li> Python Data Types</li>-->
  <!--                                            <li> What are variables?</li>-->
  <!--                             <li>Python Core objects and Functions</li>-->
  <!--                                                                     <li> Number and Maths</li>-->
  <!--                             <li>Assignments</li>-->
         

  <!--                                  </ul>-->
                                    
  <!--                                              <h4>CONTROL STATEMENTS</h4>-->
  <!--                                  <ul>-->
  <!--                                      <li>if-else</li>-->
  <!--                             <li>if-elseif-else </li>-->
  <!--                                            <li>while loop </li>-->
  <!--                             <li>for loop </li>-->
  <!--                                          <li>break</li>-->
  <!--                             <li>continue </li>-->
  <!--                                            <li>assert</li>-->
  <!--                             <li>pass</li>-->
  <!--<li>return</li>-->
  <!--                                  </ul>-->
                                    
  <!--                                                          <h4>LIST, RANGES & TUPLES IN PYTHON</h4>-->
  <!--                                  <ul>-->
  <!--                                      <li>Introduction </li>-->
  <!--                             <li>Lists in Python </li>-->
  <!--                                            <li>More about Lists</li>-->
  <!--                             <li>Understanding Iterators</li>-->
  <!--                                             <li>Generators, Comprehensions and Lambda Expressions</li>-->
  <!--                             <li>Generators and Yield </li>-->
  <!--                                            <li>Next and Ranges</li>-->
  <!--                             <li>Understanding and using Ranges </li>-->
  <!--                                             <li>More About Ranges</li>-->
  <!--                             <li>Ordered Sets with tuples</li>-->


  <!--                                  </ul>-->
                                    
                               <!--     <h4>PYTHON DICTIONARIES AND SETS</h4>-->
                               <!--     <ul>-->
                               <!--         <li>Introduction to the section </li>-->
                               <!--<li>Python Dictionaries</li>-->
                               <!--               <li>MORE ON DICTIONARIES </li>-->
                               <!--<li>SETS</li>-->
                               <!--                  <li>Python Sets Examples </li>-->
                               <!--<li>Input and Output in Python</li>-->
                               <!--               <li>Reading and writing text files </li>-->
                               <!--<li>writing Text Files</li>-->
                               <!--                  <li>Appending to Files and Challenge </li>-->
                               <!--<li>Writing Binary Files Manually </li>-->
                               <!--               <li>Using Pickle to Write Binary Files</li>-->
                     

                               <!--     </ul>-->
                                                           
                               <!--                             <h4>PYTHON BUILT IN FUNCTION</h4>-->
                               <!--     <ul>-->
                               <!--         <li>Python user defined functions </li>-->
                               <!--<li>Python packages functions</li>-->
                               <!--               <li>Defining and calling FunctionThe anonymous Functions</li>-->
                               <!--<li>Loops and statement in Python </li>-->
                               <!--           <li>Python Modules & Packages</li>-->
                      

                               <!--     </ul>-->
                    <!--                                        <h4>PYTHON OBJECT ORIENTED</h4>-->
                    <!--                <ul>-->
                    <!--                    <li>Overview of OOP </li>-->
                    <!--           <li>The self variable </li>-->
                    <!--                          <li>Constructor </li>-->
                    <!--           <li>Types Of Variables </li>-->

                    <!--<li>Namespaces</li>-->
                    <!--           <li>Creating Classes and Objects </li>-->
                    <!--                          <li>Inheritance</li>-->
                    <!--           <li>Types of Methods </li>-->
                    <!--                               <li>Instance Methods </li>-->
                    <!--           <li>Static Methods </li>-->
                    <!--                          <li>Class Methods </li>-->
                    <!--           <li>Accessing attributes</li>-->
                    <!--                               <li>Built-In Class Attributes</li>-->
                    <!--           <li>Destroying Objects</li>-->
                    <!--                          <li>Abstract classes and Interfaces </li>-->
                    <!--           <li>Abstract Methods and Abstract class </li>-->
                    <!--                               <li>Interface in Python</li>-->
                    <!--           <li>Abstract classes and Interfaces</li>-->
            


                    <!--                </ul>-->
                               <!--                             <h4>EXCEPTIONS</h4>-->
                               <!--     <ul>-->
                               <!--         <li>Errors in Python </li>-->
                               <!--<li>Compile-Time Errors </li>-->
                               <!--               <li>Runtime Errors </li>-->
                               <!--<li>Logical Errors</li>-->
                               <!--             <li>What is Exception?</li>-->
                               <!--<li>Handling an exceptiontry….except…elsetry-finally clause.</li>-->
                               <!--               <li>Argument of an Exception </li>-->
                               <!--<li>Python Standard Exceptions </li>-->
                               <!--             <li>Raising an exceptions</li>-->
                               <!--<li>User-Defined Exceptions</li>-->
                 

                               <!--     </ul>-->
                                    
             <!--                                              <h4>PYTHON REGULAR EXPRESSIONS</h4>-->
             <!--                       <ul>-->
             <!--                                             <li>What are regular expressions?</li>-->
             <!--                  <li>The match Function</li>-->
             <!--                                 <li>The search Function </li>-->
             <!--                  <li>Matching vs searching </li>-->
             <!--                           <li>Search and Replace</li>-->
             <!--                  <li>Extended Regular Expressions </li>-->
             <!--                                 <li>Wildcard</li>-->
                           

             <!--                       </ul>-->
             <!--                                              <h4>PYTHON MULTITHREADED PROGRAMMING</h4>-->
             <!--                       <ul>-->
             <!--                           <li>What is multithreading?</li>-->
             <!--                  <li>Difference between a Process and Thread </li>-->
                                          
             <!--                  <li>Concurrent Programming and GIL</li>-->
             <!--                             <li>Uses of Thread </li>-->
             <!--                  <li>Starting a New Thread </li>-->
             <!--                                 <li>The Threading Module </li>-->
             <!--                  <li>Thread Synchronization </li>-->
             <!--                             <li>Locks</li>-->
             <!--                  <li>Semaphore</li>-->
             <!--                                 <li>Deadlock of Threads </li>-->
             <!--                  <li>Avoiding Deadlocks </li>-->
             <!--                             <li>Daemon Threads</li>-->
             <!--                  <li>Using Databases in Python </li>-->
             <!--                                 <li>Python MySQL Database Access</li>-->
             <!--                  <li>Install the MySQLdb and other Packages </li>-->
             <!--                             <li>Create Database Connection</li>-->
             <!--                  <li>CREATE, INSERT, READ Operation</li>-->
             <!--                                 <li>DML and DDL Oepration with Databases </li>-->
             <!--                  <li>Web Scraping in Python</li>-->


             <!--                       </ul>-->
             <!--                                              <h4>DATA SCIENCE USING PYTHON</h4>-->
             <!--                       <ul>-->
             <!--                           <li>Numpy:</li>-->
             <!--                  <li>Introduction to numpy </li>-->
             <!--                                 <li>Creating arrays </li>-->
             <!--                  <li>Indexing Arrays</li>-->
             <!--                               <li>Array Transposition </li>-->
             <!--                  <li>Universal Array Function </li>-->
             <!--                                 <li>Array Processing</li>-->
             <!--                  <li>Array Input and Output </li>-->

             <!--<li>Matplotlib: Data Visualization </li>-->
             <!--                  <li>Python for Data Visualization</li>-->
             <!--                                 <li>Welcome to the Data Visualization Section </li>-->
             <!--                  <li>Matplotlib</li>-->

             <!--<li>Pandas</li>-->



             <!--                       </ul>-->
                                    
                                    
             <!--                                          <h4>GRAPHICAL USER INTERFACE</h4>-->
             <!--                       <ul>-->
             <!--                           <li>HTML, CSS, Jquery, Bootstrap </li>-->
             <!--                  <li>GUI in Python</li>-->
             <!--                                 <li>Rest Api</li>-->
             <!--                  <li>Button Widget </li>-->
             <!--                                             <li>Label Widget </li>-->
             <!--                  <li>Text Widget </li>-->
                                           

             <!--                       </ul>-->
             <!--                                          <h4>DJANGO WEB FRAMEWORK IN PYTHON</h4>-->
             <!--                       <ul>-->
             <!--                           <li>Django overview </li>-->
             <!--                  <li>Creating a project </li>-->
             <!--                                 <li>Apps life cycle </li>-->
             <!--                  <li>Admin interface </li>-->
             <!--                                    <li>Creating views </li>-->
             <!--                  <li>URL Mapping </li>-->
             <!--                                 <li>Template system </li>-->
             <!--                  <li>Models</li>-->
             <!--                                    <li>Form details</li>-->
             <!--                  <li>Testing</li>-->
             <!--                                 <li>Page redirection </li>-->
             <!--                  <li>Sending Emails</li>-->
             <!--                                    <li>Deploying Django framework </li>-->
             <!--                  <li>Form processing</li>-->
             <!--                                 <li>File uploading </li>-->
             <!--                  <li>Cookie handling</li>-->
             <!--                                    <li>Sessions, caching and comments </li>-->
             <!--                  <li>RSS,AJAX</li>-->
             <!--                                 <li>Sending Emails </li>-->
             <!--                  <li>GitHub , Bigbucket</li>-->
           

             <!--                       </ul>-->
                                    
             <!--                                           <h4>FRAMEWORKS FOR WEB DEVELOPMENT DJANGO</h4>-->
             <!--                       <ul>-->
             <!--                           <li>Django overview</li>-->
             <!--                  <li>Creating a project </li>-->
             <!--                                 <li>Apps life cycle </li>-->
             <!--                  <li>Admin interface </li>-->
             <!--                          <li>Creating views </li>-->
             <!--                  <li>URL Mapping </li>-->
             <!--                                 <li>Template system </li>-->
             <!--                  <li>Models</li>-->
             <!--                          <li>Form details</li>-->
             <!--                  <li>Testing</li>-->
             <!--                                 <li>Page redirection </li>-->
             <!--                  <li>Sending Emails</li>-->
             <!--                                                         <li>Deploying Django framework </li>-->
             <!--                  <li>Form processing</li>-->
             <!--                                 <li>File uploading </li>-->
             <!--                  <li>Cookie handling</li>-->
             <!--                          <li>Sessions, caching and comments </li>-->
             <!--                  <li>RSS,AJAX</li>-->
             <!--                                 <li>Sending Emails </li>-->
             <!--                  <li>GitHub,Bigbucket</li>-->
             <!--                          <li>Flask Framework & TkInter GUI Framework </li>-->
             <!--                  <li>Overview of Flask Framework</li>-->
             <!--                                 <li>Installation of Flask and Demo Application</li>-->


             <!--                       </ul>-->
             <!--                                           <h3>Database</h3>-->
             <!--                       <ul>-->
             <!--                                                               <li>DATABASE HANDLING WITH MYSQL </li>-->
             <!--                  <li>PYTHON MYSQL DATABASE ACCESS </li>-->
             <!--                                 <li>CREATE DATABASE CONNECTION</li>-->
             <!--                  <li>DML AND DDL OPERATIONS WITH DATABASES </li>-->
             <!--                          <li>PERFORMING TRANSACTIONS</li>-->
             <!--                  <li>HANDLING DATABASE ERRORS </li>-->
             <!--                                 <li>DISCONNECTING DATABASE</li>-->
             <!--                  <li>DATABASE HANDLING WITH MONGODB </li>-->
             <!--                          <li>SQL VS NOSQL</li>-->
             <!--                  <li>MONGODB </li>-->
             <!--                                 <li>PYMONGO</li>-->
             <!--                  <li>ESTABLISHING A CONNECTION </li>-->
             <!--                           <li>ACCESSING DATABASE</li>-->
             <!--                  <li>DML AND DDL OPERATIONS</li>-->


             <!--                       </ul>-->

             <!--                   </div>-->
                                
             <!--               </div>-->
             <!--           </div>-->
             <!--       </div>-->

                </div>
                <div class="col-lg-4 col-md-6 col-12 sidebar" style="position: relative; z-index: 2; padding: 20px;">
    <!-- Single Item -->
    <div class="item course-preview">
        <div class="thumb">
            <img src="public/assets/img/courses/340x 228.png" alt="Thumb" class="img-fluid">
        </div>
        <div class="content">
            <div class="course-includes">
                <ul>
                    <li>
                        <i class="fas fa-copy"></i> Fees <span class="float-right"><button type="button" class=" btn-warning btn " data-toggle="modal" data-target="#exampleModalCenter"
                        style="padding: 1px 4px;font-size: xx-small;">
  <span>click now</span>
</button>
</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i> Duration <span class="float-right">6 months</span>
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
                <!--<button class="btn btn-warning ml-10">Start Now</button>-->
            </div>
        </div>
    </div>
    <!-- End Single Item -->

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
    
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Connect now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4">
        
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter your phone Number">
  </div>
  
   <div class="form-group">
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
  <div>MS Office</div>
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