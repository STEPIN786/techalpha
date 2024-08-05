<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <meta http-equiv="Expires" content="30" />
  <meta name="author" content="luckee Properties">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Consultants in Kondhwa, Pune |Real Estate Consultant in Kondhwa, Pune | Real Estate Agents in Pune |Real Esate Broker in Kondhwa, Pune</title>
  <link rel="shortcut icon" href="images/fav1.png"/>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <meta name="Keywords" content="Real Estate Consultant in Kondhwa Pune, Real Estate Agents in Pune, Property Dealers, Brokers in Pune, Residential Properties in Kondhwa Pune, Commercial Properties in Kondhwa Pune, Flat on rent in Kondhwa Pune, Flat on sale in Kondhawa Pune, Properties on Sale in Kondhawa Pune, Properties on Rent in Kondhwa Pune, Property for Sale in Pune, flat on rent in Kondhwa Pune, Real Esate Broker in Kondhwa, Pune">
  <meta name="description" content="We are one of the best Real Estate Consultant in Kondhwa, Pune, and expert in Buying, Selling, Leasing & Rental of Residential & Commercial Properties.">
  <?php echo $__env->make('frontend.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
       #country-list{    float: left;
    list-style: none;
    margin-top: 47px;
    padding: 0;
    width: 374px;
    position: absolute;
    color: black;
    /*left: 461px;*/
    font-size: 15px;
    background: rgb(255, 255, 255);}
        #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
        #country-list li:hover{background:#ece3d2;cursor: pointer;}
    </style>
    
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  <script>
  $(document).ready(function(){
        $("#search-1").keyup(function(){
            $.ajax({
                type: "POST",
                url: "readuserDetails.php",
                data:'keyword='+$(this).val(),
                beforeSend: function(){
                    $("#search-1").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                },
                success: function(data){
                    $("#suggesstion-box").show();
                    $("#suggesstion-box").html(data);
                    $("#search").css("background","#FFF");
          
                }
            });
        });
    });
      function selectCountry(data) {
        $("#search-1").val(data);
        $("#suggesstion-box").hide();
        //getName(data)
    }
        </script>
<body>


<section class="subheader simple-search google-maps">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8">
              <div class="heading">
               <!--<h1>Real Estate Agent</h1>-->
               <!--<h1>Wanowrie | Lullanagar | NIBM  | Kondhwa | Undri</h1>-->
               <!--<p>Expert in Buying, Selling , Leasing of Residential & Commercial Properties</p>-->
               </div>
          </div>
          
      </div>
     
  </div><!-- end container -->
</section>

<section class="module services" style="background-color:#fff; padding-bottom:80px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-home"></i>
          <h4><a href="<?php echo e(route('front-sell-list')); ?>">Properties for Sell</a></h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-building"></i>
          <h4><a href="<?php echo e(route('front-rent-list')); ?>">Properties for Rent</a></h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fas fa-vihara"></i>
          <h4><a href="<?php echo e(route('front-properties-list', 'bungalows-row-houses')); ?>">Bungalows & Row Houses</a></h4>
        </div>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</section>

<section class="module properties" style="background-color:#fafafa;">
  <div class="container">

    <div class="module-header">
       <h2>Properties for Sale</h2>
      
     <p>We have Properties in these Areas Discover your place to live Get started in few clicks.</p>
    </div>

     <div class="row">
        
        <?php $__currentLoopData = $sell_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sell_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="buy-property-2bhk-aura-solis-wanowrie" class="property-img">
              <div class="img-fade"></div>
              <div class="property-color-bar"></div>
              <img src="<?php echo e($sell_property->property_images); ?>" alt="Rental properties">
            </a>
            <a href="callto:+91<?php echo e($sell_property->phone); ?>" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>
            <div class="property-content">
              <div class="property-title">
              <h4><a href="<?php echo e($sell_property->detail_link); ?>"><?php echo e($sell_property->title); ?></a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon" aria-hidden="true"></i><b><?php echo e($sell_property->address); ?></b></p>
              </div>
              <?php if(false): ?>
              <table class="property-details">
                <tbody><tr>
                  <td><i class="fa fa-bed" aria-hidden="true"></i> 2 Beds</td>
                  <td><i class="fa fa-expand" aria-hidden="true"></i> 1480 Sq Ft </td>
                </tr>
              </tbody></table>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php if(false): ?>
        <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="buy-property-3bhk-aura-solis-wanowrie" class="property-img">
              <div class="img-fade"></div>
             
              <!--<div class="property-price">RS.1.60cr Nego</div>-->
              <div class="property-color-bar"></div>
              <img src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/property-img11.jpg" alt="Properties for sale">
            </a>
            <a href="callto:+919890239777" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>
            <div class="property-content">
              <div class="property-title">
              <h4><a href="buy-property-3bhk-aura-solis-wanowrie">3 BHK - Aura Solis</a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon" aria-hidden="true"></i><b>Wanowrie Annex, Pune</b></p>
              </div>
              <table class="property-details">
                <tbody><tr>
                  <td><i class="fa fa-bed" aria-hidden="true"></i> 3 Beds</td>
                  <!--<td><i class="fa fa-tint"></i> 2 Baths</td>-->
                  <td><i class="fa fa-expand" aria-hidden="true"></i> 17000 Sq Ft</td>
                </tr>
              </tbody></table>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="property-3bhk-raheja-gardan" class="property-img">
              <div class="img-fade"></div>
             
              <!--<div class="property-price">RS.1.60cr Nego</div>-->
              <div class="property-color-bar"></div>
              <img src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/property-img43.jpg" alt="Properties for sale">
            </a>
            <a href="callto:+919890239777" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>
            <div class="property-content">
              <div class="property-title">
              <h4><a href="buy-property-3bhk-raheja-garden.php">3 BHK - Raheja Garden</a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon" aria-hidden="true"></i><b>Wanowrie, Pune</b></p>
              </div>
              <table class="property-details">
                <tbody><tr>
                  <td><i class="fa fa-bed" aria-hidden="true"></i> 3 Beds</td>
                  <!--<td><i class="fa fa-tint"></i> 2 Baths</td>-->
                  <td><i class="fa fa-expand" aria-hidden="true"></i> 17000 Sq Ft</td>
                </tr>
              </tbody></table>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="buy-property-2.5bhk-gulmohar-gesidency" class="property-img">
              <div class="img-fade"></div>
             
              <!--<div class="property-price">RS.10,000</div>-->
              <div class="property-color-bar"></div>
              <img src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/property-img51.jpg" alt="Best Property dealers " />
            </a>
             <a href="callto:+919890239777" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>

            <div class="property-content">
              <div class="property-title">
              <h4><a href="buy-property-2.5bhk-gulmohar-gesidency">2.5 BHK - Gulmohar Residency </a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon"></i><b>Lullanagar, Pune</b></p>
              </div>
              <table class="property-details">
                <tr>
                  <td><i class="fa fa-bed"></i> 2.5 Beds</td>
                  <!--<td><i class="fa fa-tint"></i> 2 Baths</td>-->
                  <td><i class="fa fa-expand"></i> 1995 Sq Ft</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        
         <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="buy-property-4.5bhk-shobha-carnation" class="property-img">
              <div class="img-fade"></div>
             
              <!--<div class="property-price">RS.10,000</div>-->
              <div class="property-color-bar"></div>
              <img src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/property-img63.jpg" alt="Best Property dealers " />
            </a>
             <a href="callto:+919890239777" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>

            <div class="property-content">
              <div class="property-title">
              <h4><a href="buy-property-4.5bhk-shobha-carnation">4.5 BHK - Shobha Carnation</a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon"></i><b>Kondhwa, Pune</b></p>
              </div>
              <table class="property-details">
                <tr>
                  <td><i class="fa fa-bed"></i> 4.5 Beds</td>
                  <!--<td><i class="fa fa-tint"></i> 2 Baths</td>-->
                  <td><i class="fa fa-expand"></i> 2850 Sq Ft flat + 2000 Sq Ft Garden </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="buy-property-3bhk-kumar-prince-town-royel" class="property-img">
              <div class="img-fade"></div>
             
              <!--<div class="property-price">RS.10,000</div>-->
              <div class="property-color-bar"></div>
              <img src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/property-img73.jpg" alt="Best Property dealers " />
            </a>
             <a href="callto:+919890239777" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>

            <div class="property-content">
              <div class="property-title">
              <h4><a href="buy-property-3bhk-kumar-prince-town-royel">3 BHK - Kumar Prince Town Royal </a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon"></i><b>Kondhwa, Pune</b></p>
              </div>
              <table class="property-details">
                <tr>
                  <td><i class="fa fa-bed"></i> 3 Beds</td>
                  <!--<td><i class="fa fa-tint"></i> 2 Baths</td>-->
                  <td><i class="fa fa-expand"></i> 1350 Sq Ft Carpet  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <?php endif; ?>        
    </div>
   </div><!-- end row -->
  </div><!-- end container -->
</section>


<section class="module properties" style="background-color:#fff;">
  <div class="container">

    <div class="module-header">
       <h2>Properties  <strong> for Rent</strong></h2>
      
     <p>With Beautiful View</p>
    </div>

    <div class="row">
      <?php $__currentLoopData = $rent_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rent_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="buy-property-2bhk-aura-solis-wanowrie" class="property-img">
              <div class="img-fade"></div>
              <div class="property-color-bar"></div>
              <img src="<?php echo e($rent_property->property_images); ?>" alt="Rental properties">
            </a>
            <a href="callto:+91<?php echo e($rent_property->phone); ?>" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>
            <div class="property-content">
              <div class="property-title">
              <h4><a href="<?php echo e($rent_property->detail_link); ?>"><?php echo e($rent_property->title); ?></a></h4>
              <p class="property-address"><i class="fa fa-map-marker icon" aria-hidden="true"></i><b><?php echo e($rent_property->address); ?></b></p>
              </div>
              <?php if(false): ?>
              <table class="property-details">
                <tbody><tr>
                  <td><i class="fa fa-bed" aria-hidden="true"></i> 2 Beds</td>
                  <td><i class="fa fa-expand" aria-hidden="true"></i> 1480 Sq Ft </td>
                </tr>
              </tbody></table>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- end row -->
  </div><!-- end container -->
</section>

<section class="module testimonials">

  <div class="container">
    <div class="module-header">
      <h2>Our <strong>Testimonials</strong></h2>
     
    
    </div>
  </div>

  <div class="slider-nav slider-nav-testimonials">
    <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
    <span class="slider-next"><i class="fa fa-angle-right"></i></span>
  </div>

  <div class="container">
    <div class="slider slider-testimonials">

      <div class="testimonial slide">
        <h3>"Outstanding service!! Very professional,reliable and friendly real estate agent. It was our first home and Luckee Properties helped us understand the buying process. If you need to buy your dream home or you need to sell your home just call Luckee Properties !! Highly recommended!! Great Job Manmiet ji and Team! Thank you for everything!"</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Zeeshan</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>
      
      <div class="testimonial slide">
        <h3>"It has been a great experience dealing with luckee properties appreciate the good work reccomend highly if you  are searching for a property in your budget being it on  rent or buying a property thank you"</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Mahesh Ajabe</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>
      
      <div class="testimonial slide">
        <h3>"All the staff were Very Professional and understanding....They were courteous and very adjustable..Helped me in finding flat according to requirement and shown me atleast 8 to 10 flats out of which I finalized one...Great Team effort from top to bottom"</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Renuka Suryavanshi</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>



<div class="testimonial slide">
        <h3>"I thank Manmiet and his team for helping us to purchase our flat in Pune. He runs a most professional agency and was very responsive to all my queries. He made sure that I got the best deal and ensured that all formalities were completed in the limited time available to me to complete the deal.
Thanks and God bless"</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Edson rebello</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>
      
      
      
      <div class="testimonial slide">
        <h3>"I was looking for office space on rental basis , was searching all over the net but was not able get it through, den somebody recommended me Luckee Properties, and dey showed me office space according to my requirement and need and was able to finalize the deal.. Good Service , cooperative staff , overall good experience"</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Rudrayani Shedjale</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>
      
      <div class="testimonial slide">
          <h3>"Excellent service !! Keep up the good work , Luckee properties youtube Channel is really a professional way to advertise properties u get a glimpse of the flat and decide if you would want to visit it  anybody wanting to  rent out a property or buy a property luckee properties is a place to all your property requirements and mainly get a property in your budget"</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Yasmin Dhanani</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>
      
      <div class="testimonial slide">
          <h3>"It was  very good experience with Luckee properties,  I sold my 2bhk at NIBM threw luckee properties, Mr manmeit and his entire team was so professional  in entire process, I got good price for my flat and the paperwork execution  was so skilled, the overall service was  excellent,  I  m directing all my know people friends n relatives to Luckee properties. For outright sale or rental.  they have given me rental apartment which is so nice and exactly the way I wanted.  Thanyou Manmeit and the entire time for ur kind help."</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Ahswini Lodhii</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>
      
      <div class="testimonial slide">
          <h3>"Excellent service, very good staff, Mr. Manmeet is a smart n decent personality and his staff Mr. Ram is a geniun n hardworking person, they both helped me in getting home loan n purchasing my dream home in my budget........a very good n satisfactory experience......GOD BLESS YOU ALL....all the best"</h3>
        <div class="testimonial-details">
          <!--<img class="testimonial-img" src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/testimonial-img.png" alt="Best Property dealers " />-->
          <p class="testimonial-name"><strong>Sadaf Sayed</strong></p>
          <span class="testiomnial-title"></span>
        </div>
      </div>
      
      
      
      
    </div><!-- end slider -->
  </div><!-- end container -->
</section>

<section class="module properties">
  <div class="container">

    <div class="module-header">
      <h2>Commercial Office And Shop Available for Rent And Sale.</h2>
      
     
    </div>

    <div class="row">
        
        <?php $__currentLoopData = $com_rentsell_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crp => $com_rentsell_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($crp < 3): ?>
        <div class="col-lg-4 col-md-4">
          <div class="property shadow-hover">
            <a href="<?php echo e(route('front-properties-detail', $com_rentsell_property->cat_slug, $com_rentsell_property->slug)); ?>" class="property-img">
              <div class="img-fade"></div>
              <div class="property-color-bar"></div>
              <img src="<?php echo e($com_rentsell_property->property_images); ?>" alt="Best real-estate agent" />
            </a>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </div><!-- end row -->

   

  </div><!-- end container -->
</section>

<style>

.featured-properties-carousel {
    background: #fff;
    overflow: hidden;
    padding: 10px 0 30px;
}

  
img {

  max-width: 100%;
    width: auto\9;
    height: auto;
    vertical-align: middle;
    border: 0;
    -ms-interpolation-mode: bicubic;
}

</style>




<script>
   function newTabOpen() {
        //alert('kjfjfkdjg')
        window.location.href = "commResi.php";
    }
</script>

<script>
   function newTabOpen1() {
        //alert('kjfjfkdjg')
        window.location.href = "rentalcomres.php";
    }
</script>

</body>
</html>
<?php echo $__env->make('frontend.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/frontend/home.blade.php ENDPATH**/ ?>