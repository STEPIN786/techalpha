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


<!--<div class="breadcrumb-area bg-gray text-left shadow dark text-light bg-cover pt-10 " style="padding: 8px 0 40px;"  >-->
<div class="shadow text-dark bg-cover bg-light pt-10"
    style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 8px 0 40px;">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <ul class="bg-transparent breadcrumb">
                    <li><a href="https://techalphainstitute.com/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active"> / Data Anylytics course</li>
                </ul>

                <div style="padding-top:40px;">
                    <h1>Data Anylytics course</h1>
                    <p>This Data Analytics course is designed to provide participants with the skills and knowledge
                        needed to analyze data effectively, extract insights, and make data-driven decisions. The course
                        covers various tools and techniques used in data analytics, including data manipulation,
                        visualization, statistical analysis, and machine learning.</p>
                </div>
                <ul class="d-flex mt-4">
                    <li class="p-2 border-right border-success"><i class="fas fa-clock text-primary"></i> 3 Months</li>
                    <li class="p-2 border-right border-success">
                        <i class="fas fa-language "></i>
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

                    <p>This Data Analytics course is designed to provide participants with the skills and knowledge
                        needed to analyze data effectively, extract insights, and make data-driven decisions. The course
                        covers various tools and techniques used in data analytics, including data manipulation,
                        visualization, statistical analysis, and machine learning. </p>
                </div>

                <div id="who-can-do" style="padding-top: 100px; margin-top: -50px;">
                    <h3 class="title">Who can do?</h3>


                    <li> Students and Recent Graduates </li>
                    <li> IT Professionals</li>
                    <li> Business Professionals </li>
                </div>

                <div id="job-opportunities" style="padding-top: 100px; margin-top: -50px;">
                    <h3 class="title">Job Opportunities</h3>

                    <ul>
                        <li>Data Analytics</li>
                        <li>Business Analyst</li>
                        <li>Data Scientist</li>
                        <li>Quantitative Analyst</li>
                        <li>Marketing Analyst</li>
                        <li>Operations Analyst</li>
                        <li>Financial Analyst</li>
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
                                        Introduction to Statistical Analysis
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">


                                    <ul>
                                        <li>Counting, Probability,and Probability Distributions</li>
                                        <li> Sampling Distributions</li>
                                        <li>Estimation and Hypothesis Testing</li>
                                        <li>Scatter Diagram</li>
                                        <li>Anovaand Chisquare</li>
                                        <li> Anovaand Chisquare</li>
                                        <li>Imputation Techniques</li>
                                        <li> Data Cleaning</li>
                                        <li> Correlation and Regression</li>


                                    </ul>

                                    <h4>Introduction to Data Analytics</h4>
                                    <ul>
                                        <li> Data Analytics Overview</li>
                                        <li> Importance of Data Analytics</li>
                                        <li>Types of Data Analytics</li>
                                        <li> Descriptive Analytics</li>
                                        <li>Diagnostic Analytics</li>
                                        <li> Predictive Analytics</li>
                                        <li> Prescriptive Analytics</li>
                                        <li> Benefits of Data Analytics</li>
                                        <li> Data Visualization for Decision Making</li>
                                        <li>DataTypes, Measure Of centraltendency,Measures of Dispersion</li>

                                        <li> Graphical Techniques, Skewness & Kurtosis,Box Plot</li>
                                        <li>DescriptiveStats</li>
                                        <li>Sampling Funnel,Sampling Variation,Central LimitTheorem,Confidence interval
                                        </li>



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
                                        Excel: Basics to Advanced
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li> Excel tutorial</li>
                                        <li> Text to Columns</li>
                                        <li> Concatenate</li>
                                        <li>The Concatenate Function</li>

                                        <li>The Right Function with Concatenation</li>
                                        <li>The Right Function with Concatenation</li>
                                        <li>Absolute Cell References</li>
                                        <li>Data Validation</li>
                                        <li>Time and Date Calculations</li>
                                        <li>Conditional Formatting</li>
                                        <li>Exploring Styles and Clearing Formatting</li>
                                        <li> Using Conditional Formatting to Hide Cells</li>
                                        <li> Usingthe IF Function</li>
                                        <li> Changing the “Value if false ”Condition to Text</li>
                                        <li>Pivot Tables</li>
                                        <li>Creating a Pivot Table</li>
                                        <li> Specifying Pivot Table Data</li>
                                        <li> Changing a Pivot Tables Calculation</li>
                                        <li>Filtering and Sorting a PivotTable</li>
                                        <li> Creating a PivotChart</li>
                                        <li>Grouping Items</li>
                                        <li>Updating a PivotTable</li>
                                        <li>Formatting a PivotTable</li>
                                        <li>Using Slicers</li>
                                        <li>Charts</li>
                                        <li>Creating a SimpleChart</li>
                                        <li>Charting Non-Adjacent Cells</li>
                                        <li> Creating a Chart Using the Chart Wizard</li>
                                        <li> Modifying Charts</li>
                                        <li> Moving an Embedded Chart</li>
                                        <li> Sizing an Embedded Chart</li>
                                        <li> Changing the ChartType</li>
                                        <li>ChartTypes</li>
                                        <li> Changing the Way Data is Displayed</li>
                                        <li>Moving the Legend</li>
                                        <li>Formatting Charts</li>
                                        <li>Adding Chart Items</li>
                                        <li>Formatting All Text</li>
                                        <li> Formatting and Aligning Numbers</li>
                                        <li> Formatting the Plot Area</li>
                                        <li> Formatting Data Markers</li>
                                        <li>PieCharts</li>
                                        <li>Creating a PieChart</li>
                                        <li>Moving the PieChart to its OwnSheet</li>
                                        <li> Adding Data Labels</li>
                                        <li> Exploding a Slice of a PieChart</li>
                                        <li>Data Analysis−Overview</li>
                                        <li> types of Data Analysis</li>
                                        <li> Data Analysis Process</li>
                                        <li> Working with RangeNames</li>
                                        <li> Copying Name using Formula Autocomplete</li>
                                        <li> Range Name Syntax Rules</li>
                                        <li> Creating Range Names</li>
                                        <li>CreatingNamesforConstants</li>
                                        <li> Managing Names</li>
                                        <li> Scope of a Name</li>
                                        <li> Editing Names</li>
                                        <li>Applying Names</li>
                                        <li>Using Names in a Formula</li>
                                        <li> ViewingNamesinaWorkbook</li>
                                        <li> Copying Formula swith Names</li>
                                        <li> Difference between Tables and Ranges</li>
                                        <li>Create Table</li>
                                        <li>Table Name</li>
                                        <li>Managing Names in a Table</li>
                                        <li> Table Headers replacing Column Letters</li>
                                        <li> Propagation of a Formula in aTable</li>
                                        <li>Resize Table</li>
                                        <li> Remove Duplicates</li>
                                        <li>Convert to Range</li>
                                        <li>Table Style Options</li>
                                        <li>Table Styles</li>
                                        <li>Cleaning Data with Text Functions</li>
                                        <li>Removing Unwanted Characters from Text</li>
                                        <li> Extracting Data Values from Text</li>
                                        <li>Formatting Data with Text Functions</li>
                                        <li>Date Formats</li>
                                        <li>Conditional Formatting</li>
                                        <li>Sorting</li>
                                        <li>Filtering</li>
                                        <li> Lookup Functions</li>
                                        <li> Pivoting</li>


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
                                        SQL
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li> Introduction to Oracle Database</li>
                                        <li> Retrieve Data using the SQL SELECT Statement</li>
                                        <li>Learn to Restrict and Sort Data</li>
                                        <li>Usage of Single-Row Functions to Customize Output</li>
                                        <li> Invoke Conversion Functions and Conditional Expressions</li>
                                        <li> Aggregate Data Using the Group Functions</li>
                                        <li> Display Data from Multiple Tables Using Joins</li>
                                        <li>Use Sub-Queries to SolveQueries</li>
                                        <li>The SET Operators</li>
                                        <li>Data Manipulation Statements</li>
                                        <li>Use of DDL Statements to Create and Manage Tables</li>
                                        <li>Other Schema Objects</li>
                                        <li>Control UserAccess</li>
                                        <li>Management of Schema Objects</li>
                                        <li>Manage Objects with Data Dictionary Views</li>
                                        <li>Manipulate Large DataSets</li>
                                        <li> Data Management in Different Time Zones</li>
                                        <li>Retrieve Data Using Sub-queries</li>
                                        <li>RegularExpressionSupport</li>


                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <h3 class="fs-4 mb-2 mt-4">Tableau</h3>

                    <div class="accordion mt-4" id="accordionExample">
                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Module1:Tableau Course Material
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>

                                        <li>Start Page</li>
                                        <li>Show Me</li>
                                        <li> Connecting to Excel Files</li>
                                        <li>Connecting to Text Files</li>
                                        <li>Connect to Microsoft SQLServer</li>
                                        <li> Connecting to Microsoft Analysis Services</li>
                                        <li>Creating and Removing Hierarchies</li>
                                        <li> Bins</li>
                                        <li> Joining Tables</li>
                                        <li> Data Blending</li>
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
                                        Module2: Learn Tableau Basic Reports
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <ul>
                                        <li> Parameters</li>
                                        <li>Grouping Example1</li>
                                        <li>Grouping Example2</li>
                                        <li> Edit Groups</li>
                                        <li> Set</li>
                                        <li> Combined Sets</li>
                                        <li>Creating a FirstReport</li>
                                        <li> Data Labels</li>
                                        <li> Create Folders</li>
                                        <li> Sorting Data</li>
                                        <li> Add Totals, SubTotals and Grand Totals to Report</li>
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
                                        Module3: Learn tableau Charts
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                                <div class="card-body">


                                    <ul>
                                        <li>Area Chart</li>
                                        <li> Bar Chart</li>
                                        <li>Box Plot</li>
                                        <li> Bubble Chart</li>
                                        <li> Bump Chart</li>
                                        <li> Bullet Graph</li>
                                        <li>Circle Views</li>
                                        <li>Dual Combination Chart</li>
                                        <li> DualLines Chart</li>
                                        <li>Funnel Chart</li>
                                        <li>Traditional Funnel Charts</li>
                                        <li>Gantt Chart</li>
                                        <li> Grouped Baror Side by SideBars Chart</li>
                                        <li>Heatmap</li>
                                        <li> High light Table</li>
                                        <li>Histogram</li>
                                        <li>Cumulative Histogram</li>
                                        <li>Line Chart</li>
                                        <li>Lolli pop Chart</li>
                                        <li>Pare to Chart</li>
                                        <li> PieChart</li>
                                        <li>Scatter Plot</li>
                                        <li>Stacked Bar Chart</li>
                                        <li>Text Label</li>
                                        <li>Tree Map</li>
                                        <li> Word Cloud</li>
                                        <li>Water fall Chart</li>
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
                                        Module4: Learn Tableau Advanced Reports
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-7" class="collapse" aria-labelledby="heading-7"
                                data-parent="#accordionExample">
                                <div class="card-body">


                                    <ul>
                                        <li>Dual Axis Reports</li>
                                        <li> Blended Axis</li>
                                        <li>Individual Axis</li>
                                        <li>Add Reference Lines</li>

                                        <li>Reference Bands</li>
                                        <li>Reference Distributions</li>
                                        <li>Basic Maps</li>
                                        <li>Symbol Map</li>
                                        <li>Use Google Maps</li>
                                        <li>Map box Maps as a Background Map</li>
                                        <li>WMS Server Map as a Background Map</li>

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
                                        Module5:Learn Tableau Calculations & Filters
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-8" class="collapse" aria-labelledby="heading-8"
                                data-parent="#accordionExample">
                                <div class="card-body">


                                    <ul>
                                        <li>Calculated Fields</li>
                                        <li>Basic Approach to Calculate Rank</li>
                                        <li>Advanced Approach to Calculate Ra</li>
                                        <li>Calculating Running Total</li>
                                        <li> Filters Introduction</li>
                                        <li> Quick Filters</li>
                                        <li>Filterson Dimensions</li>
                                        <li> Conditional Filters</li>
                                        <li>TopandBottom Filters</li>
                                        <li>Filterson Measures</li>
                                        <li>Context Filters</li>
                                        <li>Slicing Fliters</li>
                                        <li>DataSource Filters</li>
                                        <li>Extract Filters</li>
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
                                        Module6:Learn Tableau Dashboards
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-9" class="collapse" aria-labelledby="heading-9"
                                data-parent="#accordionExample">
                                <div class="card-body">



                                    <ul>
                                        <li>Create a Dashboard</li>
                                        <li>Format Dashboard Layout</li>
                                        <li>Createa Device Preview of a Dashboard</li>
                                        <li>Create Filters on Dashboard</li>
                                        <li>Dashboard Objects</li>
                                        <li>Create a Story</li>
                                    </ul>
                                    <h4>Module7: Server</h4>
                                    <ul>
                                        <li>tableau online.</li>
                                        <li>Overview of Tableau Server.</li>
                                        <li>Publishing Tableau objects and scheduling / subscription.</li>
                                    </ul>
                                    <h3>Power BI</h3>
                                    <h4>Module1: Introduction to Power BI</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 text-dark" style="text-decoration:none;">
                            <div class="card-header" id="heading-10">
                                <h2 class="mb-0 text-dark border">
                                    <button class="btn btn-link btn-block text-left text-dark collapsed"
                                        style="text-decoration:none;" type="button" data-toggle="collapse"
                                        data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                                        Get Started with Power BI
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-10" class="collapse" aria-labelledby="heading-10"
                                data-parent="#accordionExample">
                                <div class="card-body">

                                    <li>Get Startedwith Power BI</li>
                                    <li>Overview: PowerBIconcepts</li>
                                    <li>Signup for PowerBI</li>
                                    <li>Overview: Power BI data sources</li>
                                    <li>Connecttoa SaaS solution</li>
                                    <li>Upload a local CSV file</li>
                                    <li>Connect to Excel data that can be refreshed</li>
                                    <li>Connect to asample</li>
                                    <li>Createa Report with Visualizations</li>
                                    <li>Explore the Power BI portal</li>
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
                                        PYTHON Basice
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-11" class="collapse" aria-labelledby="heading-11"
                                data-parent="#accordionExample">
                                <div class="card-body">


                                    <ul>
                                        <li> The print statement</li>
                                        <li>Comments</li>
                                        <li>Python DataStructures & DataTypes</li>
                                        <li>String Operations in Python</li>
                                        <li>Simple Input & Output</li>
                                        <li>Simple Output Formatting</li>
                                        <li>Deep copy</li>
                                        <li>Shallow copy</li>
                                        <li> Operators in python</li>
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
                                        DATA SCIENCE USING PYTHON
                                        <span class="float-right"> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span> </button>
                                </h2>
                            </div>

                            <div id="collapse-13" class="collapse" aria-labelledby="heading-13"
                                data-parent="#accordionExample">
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



            <div class="col-lg-4 col-md-6 col-12 sidebar" style="position: relative;z-index: 2; padding:20px">
                <!-- Single Item -->
                <div class="item course-preview">
                    <div class="thumb">
                        <img src="{{asset('assets/img/courses/340x 228-3.png')}}" alt="Thumb" class="img-fluid"> 
                        <!-- public/assets/img/courses/340x 228-3.png -->
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
                                    <i class="fas fa-clock"></i> Duration <span class="float-right">3 months</span>
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
                            <!--<button class="btn btn-warning ml-10">Start Now </button>-->
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
<!-- Modal -->
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
                    <input type="hidden" name="course" value="Data Analytics" />
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
                        <div>Data Analytics</div>
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






<!-- Start Course Details 
============================================ -->
<!--    <div class="course-details-area default-padding">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-8 info">-->

<!--                    <div class="top-info">-->
<!--                        <h2>Data Analytics Course Syllabus</h2>-->
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
<!--   <h2>Data Analytics Course Syllabus</h2>-->
<!--<h3>Business Statistics</h3>-->

<!--<h4>Introduction to Statistical Analysis</h4>-->

<!--           <ul>-->
<!--                                        <li>Counting, Probability,and Probability Distributions</li>-->
<!--                               <li>	Sampling Distributions</li>-->
<!--                                              <li>Estimation and Hypothesis Testing</li>-->
<!--                               <li>Scatter Diagram</li>-->
<!--                                       <li>Anovaand Chisquare</li>-->
<!--                               <li>	Anovaand Chisquare</li>-->
<!--                                              <li>Imputation Techniques</li>-->
<!--                               <li>	Data Cleaning</li>-->
<!--                                       <li>	Correlation and Regression</li>-->


<!--                                    </ul>-->

<!--               <h4>Introduction to Data Analytics</h4>-->
<!--                                    <ul>-->
<!--                                        <li>	Data Analytics Overview</li>-->
<!--                               <li>	Importance of Data Analytics</li>-->
<!--                                              <li>Types of Data Analytics</li>-->
<!--                               <li>	Descriptive Analytics</li>-->
<!--                                       <li>Diagnostic Analytics</li>-->
<!--                               <li>	Predictive Analytics</li>-->
<!--                                              <li>	Prescriptive Analytics</li>-->
<!--                               <li>	Benefits of Data Analytics</li>-->
<!--                                       <li>	Data Visualization for Decision Making</li>-->
<!--                               <li>DataTypes, Measure Of centraltendency,Measures of Dispersion</li>-->

<!--                               <li>	Graphical Techniques, Skewness & Kurtosis,Box Plot</li>-->
<!--                                <li>DescriptiveStats</li>-->
<!--                               <li>Sampling Funnel,Sampling Variation,Central LimitTheorem,Confidence interval</li>-->



<!--                                    </ul>-->


<!--                                                     <h4>Excel: Basics to Advanced</h4>-->
<!--                                    <ul>-->
<!--                                        <li>	Excel tutorial</li>-->
<!--                               <li>	Text to Columns</li>-->
<!--                                              <li>	Concatenate</li>-->
<!--                               <li>The Concatenate Function</li>-->

<!--                               <li>The Right Function with Concatenation</li>-->
<!--                                              <li>The Right Function with Concatenation</li>-->
<!--                               <li>Absolute Cell References</li>-->
<!--                                       <li>Data Validation</li>-->
<!--                               <li>Time and Date Calculations</li>-->
<!--                                              <li>Conditional Formatting</li>-->
<!--                               <li>Exploring Styles and Clearing Formatting</li>-->
<!--                                                <li>	Using Conditional Formatting to Hide Cells</li>-->
<!--                               <li>	Usingthe IF Function</li>-->
<!--                                              <li>	Changing the “Value if false ”Condition to Text</li>-->
<!--                               <li>Pivot Tables</li>-->
<!--                                       <li>Creating a Pivot Table</li>-->
<!--                               <li>	Specifying Pivot Table Data</li>-->
<!--                                              <li>	Changing a Pivot Tables Calculation</li>-->
<!--                               <li>Filtering and Sorting a PivotTable</li>-->
<!--                                       <li>	Creating a PivotChart</li>-->
<!--                               <li>Grouping Items</li>-->
<!--                                              <li>Updating a PivotTable</li>-->
<!--                               <li>Formatting a PivotTable</li>-->
<!--                                                <li>Using Slicers</li>-->
<!--                               <li>Charts</li>-->
<!--                                              <li>Creating a SimpleChart</li>-->
<!--                               <li>Charting Non-Adjacent Cells</li>-->
<!--                                       <li>	Creating a Chart Using the Chart Wizard</li>-->
<!--                               <li>	Modifying Charts</li>-->
<!--                                              <li>	Moving an Embedded Chart</li>-->
<!--                               <li>	Sizing an Embedded Chart</li>-->
<!--                                       <li>	Changing the ChartType</li>-->
<!--                               <li>ChartTypes</li>-->
<!--                                              <li>	Changing the Way Data is Displayed</li>-->
<!--                               <li>Moving the Legend</li>-->
<!--                                                <li>Formatting Charts</li>-->
<!--                               <li>Adding Chart Items</li>-->
<!--                                              <li>Formatting All Text</li>-->
<!--                               <li>	Formatting and Aligning Numbers</li>-->
<!--                                       <li>	Formatting the Plot Area</li>-->
<!--                               <li>	Formatting Data Markers</li>-->
<!--                                              <li>PieCharts</li>-->
<!--                               <li>Creating a PieChart</li>-->
<!--                                       <li>Moving the PieChart to its OwnSheet</li>-->
<!--                               <li>	Adding Data Labels</li>-->
<!--                                              <li>	Exploding a Slice of a PieChart</li>-->
<!--                               <li>Data Analysis−Overview</li>-->
<!--                                                <li>	types of Data Analysis</li>-->
<!--                               <li>	Data Analysis Process</li>-->
<!--                                              <li>	Working with RangeNames</li>-->
<!--                               <li>	Copying Name using Formula Autocomplete</li>-->
<!--                                       <li>	Range Name Syntax Rules</li>-->
<!--                               <li>	Creating Range Names</li>-->
<!--                                              <li>CreatingNamesforConstants</li>-->
<!--                               <li>	Managing Names</li>-->
<!--                                       <li>	Scope of a Name</li>-->
<!--                               <li>	Editing Names</li>-->
<!--                                              <li>Applying Names</li>-->
<!--                               <li>Using Names in a Formula</li>-->
<!--                                                <li>	ViewingNamesinaWorkbook</li>-->
<!--                               <li>	Copying Formula swith Names</li>-->
<!--                                              <li>	Difference between Tables and Ranges</li>-->
<!--                               <li>Create Table</li>-->
<!--                                       <li>Table Name</li>-->
<!--                               <li>Managing Names in a Table</li>-->
<!--                                              <li>	Table Headers replacing Column Letters</li>-->
<!--                               <li>	Propagation of a Formula in aTable</li>-->
<!--                                       <li>Resize Table</li>-->
<!--                               <li>	Remove Duplicates</li>-->
<!--                                              <li>Convert to Range</li>-->
<!--                               <li>Table Style Options</li>-->
<!--                                                <li>Table Styles</li>-->
<!--                               <li>Cleaning Data with Text Functions</li>-->
<!--                                              <li>Removing Unwanted Characters from Text</li>-->
<!--                               <li>	Extracting Data Values from Text</li>-->
<!--                                       <li>Formatting Data with Text Functions</li>-->
<!--                               <li>Date Formats</li>-->
<!--                                              <li>Conditional Formatting</li>-->
<!--                               <li>Sorting</li>-->
<!--                                       <li>Filtering</li>-->
<!--                               <li>	Lookup Functions</li>-->
<!--                                              <li>	Pivoting</li>-->


<!--                                    </ul>-->

<!--                 <h4>SQL</h4>-->
<!--                                    <ul>-->
<!--                                        <li>	Introduction to Oracle Database</li>-->
<!--                               <li>	Retrieve Data using the SQL SELECT Statement</li>-->
<!--                                              <li>Learn to Restrict and Sort Data</li>-->
<!--                               <li>Usage of Single-Row Functions to Customize Output</li>-->
<!--                                       <li>	Invoke Conversion Functions and Conditional Expressions</li>-->
<!--                               <li>	Aggregate Data Using the Group Functions</li>-->
<!--                                              <li>	Display Data from Multiple Tables Using Joins</li>-->
<!--                               <li>Use Sub-Queries to SolveQueries</li>-->
<!--                                       <li>The SET Operators</li>-->
<!--                               <li>Data Manipulation Statements</li>-->
<!--                                              <li>Use of DDL Statements to Create and Manage Tables</li>-->
<!--                               <li>Other Schema Objects</li>-->
<!--                                                <li>Control UserAccess</li>-->
<!--                               <li>Management of Schema Objects</li>-->
<!--                                              <li>Manage Objects with Data Dictionary Views</li>-->
<!--                               <li>Manipulate Large DataSets</li>-->
<!--                                       <li>	Data Management in Different Time Zones</li>-->
<!--                               <li>Retrieve Data Using Sub-queries</li>-->
<!--                                              <li>RegularExpressionSupport</li>-->


<!--                                    </ul>-->


<!--                                    <h3>tableau</h3>-->

<!--                                      <h4>Module1:tableau Course Material</h4>-->
<!--                                    <ul>-->

<!--<li>Start Page</li>-->
<!--                                       <li>Show Me</li>-->
<!--                               <li>	Connecting to Excel Files</li>-->
<!--                                              <li>Connecting to Text Files</li>-->
<!--                               <li>Connect to Microsoft SQLServer</li>-->
<!--                                                <li>	Connecting to Microsoft Analysis Services</li>-->
<!--                               <li>Creating and Removing Hierarchies</li>-->
<!--                                              <li>	Bins</li>-->
<!--                               <li>	Joining Tables</li>-->
<!--                                       <li>	Data Blending</li>-->
<!--                             </ul>-->


<!--                             <h4>Module2: Learn Tableau Basic Reports</h4>-->
<!--                              <ul>-->
<!-- <li>	Parameters</li>-->
<!-- <li>Grouping Example1</li>-->
<!-- <li>Grouping Example2</li>-->
<!-- <li>	Edit Groups</li>-->
<!-- <li>	Set</li>-->
<!-- <li>	Combined Sets</li>-->
<!-- <li>Creating a FirstReport</li>-->
<!--<li>	Data Labels</li>-->
<!-- <li>	Create Folders</li>-->
<!-- <li>	Sorting Data</li>-->
<!-- <li>	Add Totals, SubTotals and Grand Totals to Report</li>-->
<!--</ul>-->


<!--<h4>Module3: Learn tableau Charts</h4>-->
<!--  <ul>-->
<!--<li>Area Chart</li>-->
<!--<li>	Bar Chart</li>-->
<!--<li>Box Plot</li>-->
<!--<li>	Bubble Chart</li>-->
<!--<li>	Bump Chart</li>-->
<!--<li>	Bullet Graph</li>-->
<!--<li>Circle Views</li>-->
<!--<li>Dual Combination Chart</li>-->
<!--<li>	DualLines Chart</li>-->
<!--<li>Funnel Chart</li>-->
<!--<li>Traditional Funnel Charts</li>-->
<!--<li>Gantt Chart</li>-->
<!--<li>	Grouped Baror Side by SideBars Chart</li>-->
<!--<li>Heatmap</li>-->
<!--<li>	High light Table</li>-->
<!--<li>Histogram</li>-->
<!--<li>Cumulative Histogram</li>-->
<!--<li>Line Chart</li>-->
<!--<li>Lolli pop Chart</li>-->
<!--<li>Pare to Chart</li>-->
<!--<li>	PieChart</li>-->
<!--<li>Scatter Plot</li>-->
<!--<li>Stacked Bar Chart</li>-->
<!--<li>Text Label</li>-->
<!--<li>Tree Map</li>-->
<!--<li>	Word Cloud</li>-->
<!--<li>Water fall Chart</li>-->
<!--</ul>-->

<!--<h4>Module4: Learn Tableau Advanced Reports</h4>-->
<!-- <ul>-->
<!--<li>Dual Axis Reports</li>-->
<!--<li>	Blended Axis</li>-->
<!--<li>Individual Axis</li>-->
<!--<li>Add Reference Lines</li>-->

<!--<li>Reference Bands</li>-->
<!--<li>Reference Distributions</li>-->
<!--<li>Basic Maps</li>-->
<!--<li>Symbol Map</li>-->
<!--<li>Use Google Maps</li>-->
<!--<li>Map box Maps as a Background Map</li>-->
<!--<li>WMS Server Map as a Background Map</li>-->

<!-- </ul>-->


<!--<h4>Module5:LearnTableauCalculations&Filters</h4>-->
<!-- <ul>-->
<!--<li>Calculated Fields</li>-->
<!--<li>Basic Approach to Calculate Rank</li>-->
<!--<li>Advanced Approach to Calculate Ra</li>-->
<!--<li>Calculating Running Total</li>-->
<!--<li>	Filters Introduction</li>-->
<!--<li>	Quick Filters</li>-->
<!--<li>Filterson Dimensions</li>-->
<!--<li>	Conditional Filters</li>-->
<!--<li>TopandBottom Filters</li>-->
<!--<li>Filterson Measures</li>-->
<!--<li>Context Filters</li>-->
<!--<li>Slicing Fliters</li>-->
<!--<li>DataSource Filters</li>-->
<!--<li>Extract Filters</li>-->
<!--</ul>-->

<!--<h4>Module6:LearnTableauDashboards</h4>-->

<!-- <ul>-->
<!--<li>Create a Dashboard</li>-->
<!--<li>Format Dashboard Layout</li>-->
<!--<li>Createa Device Preview of a Dashboard</li>-->
<!--<li>Create Filters on Dashboard</li>-->
<!--<li>Dashboard Objects</li>-->
<!--<li>Create a Story</li>-->
<!-- </ul>-->
<!--<h4>Module7: Server</h4>-->
<!--  <ul>-->
<!--<li>tableau online.</li>-->
<!--<li>Overview of Tableau Server.</li>-->
<!--<li>Publishing Tableau objects and scheduling / subscription.</li>-->
<!-- </ul>-->
<!--<h3>Power BI</h3>-->
<!--<h4>Module1: Introduction to Power BI</h4>-->
<!-- <ul>-->

<!--<li>Get Startedwith Power BI</li>-->
<!--<li>Overview: PowerBIconcepts</li>-->
<!--<li>Signup for PowerBI</li>-->
<!--<li>Overview: Power BI data sources</li>-->
<!--<li>Connecttoa SaaS solution</li>-->
<!--<li>Upload a local CSV file</li>-->
<!--<li>Connect to Excel data that can be refreshed</li>-->
<!--<li>Connect to asample</li>-->
<!--<li>Createa Report with Visualizations</li>-->
<!--<li>Explore the Power BI portal</li>-->
<!--</ul>-->


<!--<h4>Module2:VizandTiles</h4>-->
<!-- <ul>-->
<!--<li>Overview: Visualizations</li>-->
<!--<li>Using visualizations</li>-->
<!--<li>Create an ewreport</li>-->
<!--<li>Create and arrange visualizations</li>-->
<!--<li>Format a visualization</li>-->
<!--<li>Create chart visualizations</li>-->
<!--<li>Usetext, map, and gauge visualizations and save a report</li>-->
<!--<li>Useaslicert of filter visualizations</li>-->
<!--<li>Sort,copy,and paste visualizations</li>-->
<!--<li>Downloadand use a custom visual from the gallery</li>-->
<!-- </ul>-->


<!--<h4>Module3: Reports and Dashboards</h4>-->
<!-- <ul>-->
<!--<li>Modify and Printa Report</li>-->
<!--<li>Rename and delete report pages</li>-->
<!--<li>Add a filter to a page or report</li>-->

<!--<li>Set visualization interactions</li>-->
<!--<li>Print a report page</li>-->
<!--<li>Send a report to PowerPoint</li>-->
<!--<li>Create a Dashboard</li>-->
<!--<li>Create and manage dashboards</li>-->
<!--<li>Pin a report tile to a dashboard</li>-->
<!--<li>Pina live report page to a dashboard</li>-->
<!--<li>Pinatile from another dashboard</li>-->
<!--<li>Pinan Excel element to a dashboard</li>-->
<!--<li>Manage pinned elements in Excel</li>-->
<!--<li>Add a tile to a dashboard</li>-->
<!--<li>Build a dashboard with Quick Insights</li>-->
<!--<li>Set a Featured (default) dashboard</li>-->
<!--<li>Ask Questions about Your Data</li>-->
<!--<li>Ask a question with Power BI Q&A</li>-->
<!--<li>Tweak your data set for Q&A</li>-->
<!--<li>Enable Cortana for Power BI</li>-->
<!--</ul>-->

<!--<h4>Module4: Publishing Workbook sand Workspace</h4>-->
<!-- <ul>-->
<!--<li>Share Data withbColleagues and Others</li>-->
<!--<li>Publisha report to the web</li>-->
<!--<li>Manage published reports</li>-->
<!--<li>Sharea dashboard</li>-->
<!--<li>Create an appworkspace and add users</li>-->
<!--<li>	Use an appworkspace</li>-->
<!--<li>Publish an app</li>-->
<!--<li>Create a QR code to share a tile</li>-->
<!--<li>	Embeda report in SharePoint Online</li>-->
<!-- </ul>-->

<!--<h4>Module5:Other Power BI Components and Table Relationship</h4>-->
<!-- <ul>-->
<!--<li>Use Power BI Mobile Apps</li>-->
<!--<li>Get Power BI for mobile</li>-->
<!--<li>View reports and dashboards in the iPadapp</li>-->

<!--<li>Use work spaces in the mobileapp</li>-->
<!--<li>Sharing from Power BI Mobile</li>-->
<!--<li>Use Power BI Desktop</li>-->
<!--<li>Install and launch Power BI Desktop</li>-->
<!--<li>	Get data</li>-->
<!--<li>	Reduce data</li>-->
<!--<li>	Transform data</li>-->
<!--<li>	Relatetables</li>-->
<!--<li>	GetPower BI Desktop data with the Power BI service</li>-->
<!--<li>Export are port from Power BI service to Desktop</li>-->
<!-- </ul>-->

<!--<h4>Module6: DAX functions</h4>-->
<!-- <ul>-->
<!--<li>New Dax functions</li>-->
<!--<li>	Date and time functions</li>-->
<!--<li>Time intelligence functions</li>-->
<!--<li>Filter functions</li>-->
<!--<li>	Information functions</li>-->
<!--<li>Logical functions</li>-->
<!--<li>	Math & trig functions</li>-->
<!--<li>Parent and child functions</li>-->
<!--<li>Text functions</li>-->
<!-- </ul>-->
<!--<h4>Python Basics</h4>-->
<!-- <ul>-->
<!--<li>	The print statement</li>-->
<!--<li>Comments</li>-->
<!--<li>Python DataStructures & DataTypes</li>-->
<!--<li>String Operations in Python</li>-->
<!--<li>Simple Input & Output</li>-->
<!--<li>Simple Output Formatting</li>-->
<!--<li>Deep copy</li>-->
<!--<li>Shallow copy</li>-->
<!--<li>	Operators in python</li>-->
<!-- </ul>-->





<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </div>-->




<script>
    $("#my_form").validate({
        rules: {
            name: {
                required: true
            },
            message: {
                required: true
            },
            phone: {
                required: true,
                minlength: 10
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.elem').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },

        submitHandler: function (form) {
            // do other things for a valid form
            form.submit();
        }
    });

</script>




@endsection
