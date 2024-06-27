<html><head><style>
@import url("https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester");



.sans {
  font-family: "Open Sans", sans-serif;
}

.bold {
  font-weight: bold;
}

.block {
  display: block;
}

.underline {
  border-bottom: 1px solid #777;
  padding: 5px;
  margin-bottom: 15px;
}

.margin-0 {
  margin: 0;
}

.padding-0 {
  padding: 0;
}

.pm-empty-space {
  height: 40px;
  width: 100%;
}

body {
  padding: 0px 0;
  background: #ccc;
}
.top-logo
{
width: 75px;
    margin: 0 auto 5px;
    display: block;
}
.second-logo
{
width: 76px;
    margin: auto;
    display: block;
}
.pm-certificate-container {
 
    position: relative;
    margin: auto;
    width: 800px;
    height: 580px;
    background-color: #618597;
    padding: 20px;
    color: #333;
    font-family: "Open Sans", sans-serif;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
    background: linear-gradient(90deg, rgba(131, 58, 180, 1) 3%, rgba(253, 29, 29, 1) 73%, rgba(252, 176, 69, 1) 120%);

  /*background: -webkit-repeating-linear-gradient(
    45deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );
  background: repeating-linear-gradient(
    90deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );*/

  .outer-border {
           width: 794px;
        height: 572px;
        position: absolute;
        left: 50%;
        margin-left: -397px;
        top: 50%;
        margin-top: -286px;
        border: 4px solid #fff;
  }

  .inner-border {
   width: 766px;
        height: 544px;
        position: absolute;
        left: 50%;
        margin-left: -384px;
        top: 50%;
        margin-top: -273px;
        border: 2px solid #fff;
  }

  .pm-certificate-border {
                 position: relative;
        width: 761px;
        height: 540px;
        padding: 0;
        border: 1px solid #e1e5f0;
        background-color: rgba(255, 255, 255, 1);
        background-image: none;
        left: 50%;
        margin-left: -381px;
        top: 50%;
        margin-top: -270px;
        

    .pm-certificate-block {
      width: 650px;
      height: 200px;
      position: relative;
      left: 50%;
      margin-left: -325px;
      top: 70px;
      margin-top: 0;
    }

    .pm-certificate-header {
      margin-bottom: 10px;
    }

    .pm-certificate-title {
      position: relative;
      top: 15px;

      h2 {
        font-size: 34px !important;
      }
    }

    .pm-certificate-body {
      padding: 20px;

      .pm-name-text {
        font-size: 20px;
      }
    }

    .pm-earned {
      margin: 15px 0 20px;
      .pm-earned-text {
        font-size: 20px;
      }
      .pm-credits-text {
        font-size: 15px;
      }
    }

    .pm-course-title {
      .pm-earned-text {
        font-size: 20px;
      }
      .pm-credits-text {
        font-size: 15px;
      }
    }

    .pm-certified {
      font-size: 12px;

      .underline {
        margin-bottom: 5px;
      }
    }

    .pm-certificate-footer {
      width: 650px;
      height: 100px;
      position: relative;
      left: 50%;
      margin-left: -325px;
      bottom: -105px;
    }
  }
}
P{
  font-size: 12px;
}
p ,h2
{
  margin: 0;
  text-align: center;
  margin: 0;
  padding: 0;
}
h4,h5

{
  text-align: center;
   margin: 0;
  padding: 0;
}
.outer-block
{
  padding:8px 50px;
  display: flex;
}
input, input:focus
{
  border: none;
  box-shadow: none;

}
.Center-para p
{
  text-align: left;
line-height: 1.7;
}
.logos
{
  display: flex;
  justify-content: space-between;
  margin:0 50px;
  align-items: center;
}
.logos img
{
  width: 60px;
  height: 100%;
}
.top-left-image
{
 
      position: absolute;
    width: 80px;
    left: 25px;
    top: 25px;
}
.top-right-image
{
   position: absolute;
  width: 80px;
  right: 25;
    top: 25px;
}
</style>

</head><body>

  <div class="container pm-certificate-container">
    <div class="outer-border"></div>
    <div class="inner-border"></div>
    
    <div class="pm-certificate-border col-xs-12">
         <img src="{{asset('')}}img/9.png" class="top-left-image">
           <img src="{{asset('')}}img/7.png" class="top-right-image">
      <div class="row pm-certificate-header">
        <div class="pm-certificate-title cursive col-xs-12 text-center">
          <img src="{{asset('')}}img/8.png" class="top-logo">
          <p style="text-align: center;">Good Thoughts....Good Words....Good Deeds..</p>
          <h2 style="text-align:center; font-size:24px !important;">AHURA ALTERNATIVE HEALING</h2>
          <img src="{{asset('')}}img/10.jpeg" class="second-logo">
          <p>Central Certificate of Holistic Alternative Medicines &amp; Research</p>
          <h4>INTERNATIONAL WORKSHOP</h4>
          <p>Constituted under Ahura Foundation</p>
<h4>Certificate of Course</h4>
<div class="outer-block">
<div class="Center-para" style="width:85%">
 <p>This Certification is Awarded you
  <span id="hide"></span><input id="txt" type="text" value="_________{{ @$data->name }}___________________________________________________" style="width: 56%;">
</p>
 <p>Dated
  <span id="hide"></span><input id="txt" type="text" value="_________{!! $data->complition_date !!}_______________" style="width:22%">
for succesfully completing <input id="txt" type="text" value="________{{ @$data->course }}________________" style="width:25%"> Course.
</p>
 <p style="margin-top: 5px;">Reg. No:
  <span id="hide"></span><input id="txt" type="text" value="______{{ @$data->registration_number }}_________________" style="width:35%">
</p>
  <p>Place:
  <span id="hide"></span><input id="txt" type="text" value="_______{{ @$data->center }}__________________" style="width:35%"></p>
  <p>Date:
  <span id="hide"></span><input id="txt" type="text" value="_____<?php echo date('Y-m-d');?>____________________" style="width:35%"></p>

</div>
<div class="Center-para" style="width:15%">
<img src="{{ @$data->student_image }}" style="width:90px">
</div>
</div>
<div class="Center-para" style="padding:8px 50px 8px;">
  <p style="margin-top: 5px;">Sr. No:
  <span id="hide"></span><input id="txt" type="text" value="________________" style="width:21%">Managing Director
  <span id="hide"></span><input id="txt" type="text" value="___________________" style="width:23%">Course Director
  <span id="hide"></span><input id="txt" type="text" value="________________________" style="width:18%"></p>
</div>
 <div class="logos">
<img src="{{asset('')}}img/1.png">
<img src="{{asset('')}}img/2.png">
<img src="{{asset('')}}img/3.png">
<img src="{{asset('')}}img/4.png">
<img src="{{asset('')}}img/5.png">
      </div>
<p style="font-size:8px;padding:5px 20px; text-align:left;">We Ahura Foundation, registered under Bombay Act No. XXIX of 1950 under Education and Health Trust (Registration No. E/8139/Vadodara), the institution, course director, managing director &amp; our staff is not responsible for any damages, experiment or injuries caused by our certified students/practitioners / trainer. We are not going to indemnify others on behalf of our certified students/practitioners / trainer. All disputes are subject to Vadodara jurisdiction only.</p>

        </div>

       


    </div>
  </div>
</div></body></html>