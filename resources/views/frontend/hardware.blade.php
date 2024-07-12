@extends('frontend.layouts.main')


@section('main.container')


<!-- page-title -->



<style>
    .sidebar {
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    <blade media|%20(min-width%3A%20961px)%20%7B>.sidebar {
        margin-top: -220px;
        /* Adjust as needed */
    }
    }

    <blade media|%20(max-width%3A%20960px)%20%7B>.sidebar {
        margin-top: 2rem;
        /* Remove the negative margin for smaller screens */
        padding: 10px;
        /* Adjust padding for smaller screens */
    }
    }

</style>



<div class="shadow text-dark bg-cover bg-light pt-10"
    style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 8px 0 40px;">
    <!--<div class="breadcrumb-area bg-gray text-left shadow dark text-light bg-cover pt-10 " style="padding: 8px 0 40px;"  >-->
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <ul class="bg-transparent breadcrumb">
                    <li><a href="https://techalphainstitute.com/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active"> / Hardware Course</li>
                </ul>

                <div style="padding-top:40px;">
                    <h1>Hardware Course</h1>
                    <p> This Hardware course includes:Basic Electronics: Understanding circuits, resistors, capacitors,
                        and other components.
                        Computer Architecture: Learning about CPUs, memory, storage, and other components.
                        Microcontrollers and Embedded Systems: Designing and programming small-scale hardware systems.
                        Networking Hardware: Understanding routers, switches, and other networking devices.
                        Hardware Troubleshooting and Repair: Diagnosing and fixing hardware issues.
                        Digital Logic Design: Learning about logic gates, multiplexers, and other digital components
                    </p>
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

                    <p> This Hardware course includes:Basic Electronics: Understanding circuits, resistors, capacitors,
                        and other components. </p>
                    <ul>
                        <li>Computer Architecture: Learning about CPUs, memory, storage, and other components.</li>
                        <li>Microcontrollers and Embedded Systems: Designing and programming small-scale hardware
                            systems.</li>
                        <li>Networking Hardware: Understanding routers, switches, and other networking devices.</li>
                        <li>Hardware Troubleshooting and Repair: Diagnosing and fixing hardware issues.</li>
                        <li>Digital Logic Design: Learning about logic gates, multiplexers, and other digital
                            components.</li>
                    </ul>

                </div>

                <div id="who-can-do" style="padding-top: 100px; margin-top: -50px;">
                    <h3 class="title">Who can do?</h3>
                    <ul>
                        <li>Students and Recent Graduates</li>
                        <li>IT Professionals</li>
                        <li>Aspiring Engineers and Technicians</li>
                        <li>Electronics Engineers</li>
                        <li>Technicians, etc.</li>
                    </ul>

                </div>

                <div id="job-opportunities" style="padding-top: 100px; margin-top: -50px;">
                    <h3 class="title">Job Opportunities</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <ul>
                        <li>laboris nisi ut aliquip ex ea</li>
                        <li>laboris nisi ut aliquip ex ea</li>
                        <li>laboris nisi ut aliquip ex ea</li>
                        <li>laboris nisi ut aliquip ex ea</li>
                    </ul>
                </div>



                <!--accordian start-->
                <div class="border shadow-lg p-4 mt-4">
                    <h3 class="heading-title fw-bold" id="curriculum" style="padding-top: 100px; margin-top: -50px;">
                        Course Curriculum</h3>




                    <div class="accordion mt-4" id="accordionExample">
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Hardware Course Syllabus
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Computer Fundamentals & Basics of Power System in a Computer.</li>
                                        <li>Computer Fundamentals & Basics of Power System in a Computer.</li>
                                        <li>Introduction to SMPS & UPS.</li>
                                        <li>Introduction to Basic Input Output System</li>
                                        <li>Introduction to Operating System.</li>
                                        <li>Computer Management.</li>
                                        <li>Disk Partitioning</li>
                                        <li>Details about Central Processing Unit & Mainboard</li>
                                        <li>Primary and Secondary Memory.</li>
                                        <li>Computer Accessories</li>
                                        <li>Virus/Malwares</li>
                                        <li>Computer RepairTool kit</li>
                                        <li>The Basics of Computer</li>
                                        <li>Computer Input Output Devices</li>
                                        <li>Computer Input Output Devices</li>
                                        <li>Hardware and software Components</li>
                                        <li>Computer Parts</li>
                                        <li>Os-xp/windows 7, win8, win8.1, win10, win11,Linux,32/64bit</li>
                                        <li>How to crack the computer, laptop, mobile password</li>
                                        <li>How to bootable CD.DVD, Pendrive</li>
                                        <li>What is Multimeter</li>
                                        <li>Computer Assemble</li>

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
                                        Laptop
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Laptop Assemble</li>
                                        <li>Motherboardic introduction</li>
                                        <li>No power?</li>
                                        <li>No post ?</li>
                                        <li>Black Screen</li>
                                        <li>Rtc Reset</li>
                                        <li>Wifi issues</li>
                                        <li>Speaker issues</li>
                                        <li>No Display</li>
                                        <li>Minimum Component</li>
                                        <!--<li>What is Amber light codeDell?</li>-->
                                        <li>Camera issuse</li>
                                        <li>Keyboard issues</li>
                                        <li>Ac Adapter Not Working</li>
                                        <li>Laptop Charging issues</li>
                                        <li>TouchPad issues</li>
                                        <li>Power Button NotWorking</li>
                                        <li>Lcdline,Lcd flickering</li>
                                        <li>Hinges hardworking</li>
                                        <li>Lanport not working</li>



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
                                        USB External Cards and SMPS
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        <li>Usb2.0/3.0 issues</li>
                                        <li>Motherboard Mylar?</li>
                                        <li>Auto Shutdown Laptop</li>
                                        <li>Restart Laptop/Computer?</li>
                                        <li>Laptop/Computer Heating issue?</li>
                                        <li>Cmos Laptop/ Computer ?</li>
                                        <li>Laptop And Computer Hangs?</li>
                                        <li>Hdd, Ssd not detected?</li>
                                        <li>Software download</li>
                                        <li>Software installation</li>

                                        <li>External Cards in Computer?</li>
                                        <li>How to drivers update?</li>
                                        <li>How to bios update?</li>

                                        <li>Control Panel in Computer?</li>
                                        <li>Internet error?</li>
                                        <li>Graphics, Graphics Cards Laptop/Computer?</li>
                                        <li>Bitlocker?</li>
                                        <li>Username and Password Create?</li>
                                        <li>Laptop/Computer Processor, Computer/Laptop Generation?</li>

                                        <li>Smps?</li>
                                        <li>Computer/Laptoptroubleshooting?</li>
                                        <li>Identify different parts of a computer system</li>
                                        <li>Install Test and Troubleshoot Switch Mode Power Supply & UPS(Uninterrupted
                                            Power Supply).</li>
                                        <li>Demonstrate configurations and changes in BIOS or CMOS Setup and POST
                                            (Poweron Self Test).</li>
                                        <li>Install an OS in a new Computer System and configure the machine.</li>
                                        <li>Manage the resources of a Computer System(Windows and or Linux) according to
                                            users need.</li>
                                        <li>Create partition of the HDD, SSD of a Computer System (in Windows and or
                                            Linux) according to users need.</li>
                                        <li>Install a CPU on motherboard & underlying technology used.</li>
                                        <li>Install RAM, SSD, HDD and explain PrimaryMemory (RAM & ROM) and Secondary
                                            Memory in a computer system</li>

                                        <li>Install & connect accessories like optical drive, keyboard, mouse, monitor,
                                            Printer and troubleshoot them.</li>
                                        <li>Identify different types of Virus attack and take suitable course of action
                                            to disinfect a system</li>


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
                        <img src="public/assets/img/courses/340x 228-2.png" alt="Thumb">
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
                                <li>
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
                            <!--<button class="btn btn-warning ml-10">Start Now  </button>-->
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

                <form action="{{url('/connect')}}" id="my_form" method="post" >
                {{csrf_field()}}
                @honeypot
                    <div class="form-group elem">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                            placeholder="Enter your Name">
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group elem">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" name="phone" id="phone"
                            placeholder="Enter your phone Number">
                    </div>
                   

                    <div class="form-group elem">
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
                        <input type="text" name="message" value="Hardware Course" />
                        <div>Hardware Course</div>

                        </select>
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
<!--    ============================================= -->-->
<!--    <div class="course-details-area default-padding">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8 info">-->

<!--                    <div class="top-info">-->
<!--                        <h2>Hardware Course Syllabus (100% Job Placement)</h2>-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <div class="thumb">-->
<!--                                    <img src="public/assets/img/advisor/1.jpg" alt="Thumb">-->
<!--                                </div>-->
<!--                                <div class="info">-->
<!--                                    <span>Teacher</span>-->
<!--                                    <h5>John Kanel</h5>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="info">-->
<!--                                    <span>Category</span>-->
<!--                                    <h5>Mathematics</h5>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="info">-->
<!--                                    <span>Last Update</span>-->
<!--                                    <h5>January 24, 2021</h5>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->

<!--                    <div class="main-content">-->
<!--                        <div class="center-tabs">-->

<!--                            <div id="tabsContent" class="tab-content" style="padding-top: 40px;">-->
<!--                                <div id="tab1" class="tab-pane overview fade active show">-->


<!--                    <h4>Hardware Course Syllabus (100% Job Placement)</h4>-->
<!--                                    <ul>-->
<!--                                        <li>Computer Fundamentals & Basics of Power System in a Computer.</li>-->
<!--                               <li>Computer Fundamentals & Basics of Power System in a Computer.</li>-->
<!--                                              <li>Introduction to SMPS & UPS.</li>-->
<!--                               <li>Introduction to Basic Input Output System</li>-->
<!--                                       <li>Introduction to Operating System.</li>-->
<!--                               <li>Computer Management.</li>-->
<!--                                              <li>Disk Partitioning</li>-->
<!--                               <li>Details about Central Processing Unit & Mainboard</li>-->
<!--                                       <li>Primary and Secondary Memory.</li>-->
<!--                               <li>Computer Accessories</li>-->
<!--                                              <li>Virus/Malwares</li>-->
<!--                               <li>Computer RepairTool kit</li>-->
<!--                               <li>The Basics of Computer</li>-->
<!--                               <li>Computer Input Output Devices</li>-->
<!--                                       <li>Computer Input Output Devices</li>-->
<!--                               <li>Hardware and software Components</li>-->
<!--                                              <li>Computer Parts</li>-->
<!--                               <li>Os-xp/windows 7, win8, win8.1, win10, win11,Linux,32/64bit</li>-->
<!--                                       <li>How to crack the computer, laptop, mobile password</li>-->
<!--                               <li>How to bootable CD.DVD, Pendrive</li>-->
<!--                                              <li>What is Multimeter</li>-->
<!--                               <li>Computer Assemble</li>-->

<!--<li>Laptop Assemble</li>-->
<!--                               <li>Motherboardic introduction</li>-->
<!--                                       <li>No power?</li>-->
<!--                               <li>No post ?</li>-->
<!--                                              <li>Black Screen</li>-->
<!--                               <li>Rtc Reset</li>-->
<!--                                       <li>Wifi issues</li>-->
<!--                               <li>Speaker issues</li>-->
<!--                                              <li>No Display</li>-->
<!--                               <li>Minimum Component</li>-->

<!--<li>What is Amber light codeDell?</li>-->
<!--                               <li>Camera issuse</li>-->
<!--                                       <li>Keyboard issues</li>-->
<!--                               <li>Ac Adapter Not Working</li>-->
<!--                                              <li>Laptop Charging issues</li>-->
<!--                               <li>TouchPad issues</li>-->
<!--                                       <li>Power Button NotWorking</li>-->
<!--                               <li>Lcdline,Lcd flickering</li>-->
<!--                                              <li>Hinges hardworking</li>-->
<!--                               <li>Lanport not working</li>-->

<!--<li>Usb2.0/3.0 issues</li>-->
<!--                               <li>Motherboard Mylar?</li>-->
<!--                                       <li>Auto Shutdown Laptop</li>-->
<!--                               <li>Restart Laptop/Computer?</li>-->
<!--                                              <li>Laptop/Computer Heating issue?</li>-->
<!--                               <li>Cmos Laptop/ Computer ?</li>-->
<!--                                       <li>Laptop And Computer Hangs?</li>-->
<!--                               <li>Hdd, Ssd not detected?</li>-->
<!--                                              <li>Software download</li>-->
<!--                               <li>Software installation</li>-->

<!--<li>External Cards in Computer?</li>-->
<!--                               <li>How to drivers update?</li>-->
<!--                                       <li>How to bios update?</li>-->

<!--                                              <li>Control Panel in Computer?</li>-->
<!--                               <li>Internet error?</li>-->
<!--                                       <li>Graphics, Graphics Cards Laptop/Computer?</li>-->
<!--                               <li>Bitlocker?</li>-->
<!--                                              <li>Username and Password Create?</li>-->
<!--                               <li>Laptop/Computer Processor, Computer/Laptop Generation?</li>-->

<!--<li>Smps?</li>-->
<!--                               <li>Computer/Laptoptroubleshooting?</li>-->
<!--                                       <li>Identify different parts of a computer system</li>-->
<!--                               <li>Install Test and Troubleshoot Switch Mode Power Supply & UPS(Uninterrupted Power Supply).</li>-->
<!--                                              <li>Demonstrate configurations and changes in BIOS or CMOS Setup and POST (Poweron Self Test).</li>-->
<!--                               <li>Install an OS in a new Computer System and configure the machine.</li>-->
<!--                                       <li>Manage the resources of a Computer System(Windows and or Linux) according to users need.</li>-->
<!--                               <li>Create partition of the HDD, SSD of a Computer System (in Windows and or Linux) according to users need.</li>-->
<!--                                              <li>Install a CPU on motherboard & underlying technology used.</li>-->
<!--                               <li>Install RAM, SSD, HDD and explain PrimaryMemory (RAM & ROM) and Secondary Memory in a computer system</li>-->

<!--<li>Install & connect accessories like optical drive, keyboard, mouse, monitor, Printer and troubleshoot them.</li>-->
<!--                               <li>Identify different types of Virus attack and take suitable course of action to disinfect a system</li>-->


<!--                                    </ul>-->




<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </div>-->
<!--                <div class="col-lg-4 sidebar">-->
<!-- Single Item -->
<!--                    <div class="item course-preview">-->
<!--                        <div class="thumb">-->
<!--                            <img src="public/assets/img/courses/5.jpg" alt="Thumb">-->
<!--                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">-->
<!--                                <i class="fa fa-play"></i>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="content">-->

<!--                            <div class="course-includes">-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <i class="fas fa-copy"></i> Lectures <span class="float-right">8</span>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <i class="fas fa-clock"></i> Duration <span class="float-right">5.7 Hours</span>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <i class="fas fa-sliders-h"></i> Skill level <span class="float-right">All Levels</span>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <i class="fas fa-language"></i> Language <span class="float-right">English</span>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <i class="fas fa-users"></i> Students <span class="float-right">12K</span>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->

<!--                        </div>-->
<!--                    </div>-->
<!-- Single Item -->

<!-- Single Item -->
<!--                    <div class="item course-category">-->
<!--                        <div class="content">-->
<!--                            <h4>Course categories</h4>-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a href="#">Java Programming <span>23</span></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Social Science <span>0</span></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Business Management <span>12</span></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Online Learning <span>17</span></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">Course Management <span>0</span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!-- End Single Item -->


<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- End Course Details -->
