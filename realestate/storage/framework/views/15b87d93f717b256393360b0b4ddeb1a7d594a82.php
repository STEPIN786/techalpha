<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <meta http-equiv="Expires" content="30" />
  <meta name="author" content="luckee Properties">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate News & Insights - A Complete Guide for Real Estate Market Updates</title>
  <link rel="shortcut icon" href="images/fav1.png"/>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src='js/nouislider.min.js'></script>
  <meta name="Keywords" content="Residential Properties in Kondhwa, Residential Properties in Salunke vihar, Residential Properties in NIBM, Commercial Properties in Kondhwa, Commercial Properties in Salunke vihar, Commercial Properties in NIBM, Rental Properties in Kondhwa, Residential Pune Property for rent, Pune Property for rent, Property for rent in Kondhwa, Flat on rent Kondhwa, Flat on rent Salunke vihar, Flat on rent NIBM, Office on rent Kondhwa, Office on rent Salunke vihar, Office on rent NIBM ">
  <meta name="description" content="Luckee Properties Best real-estate agent at Kondhwa, Undri, Fatima Nagar in Pune based reputed real-estate broker engaged in Buying, Sale, Renting Leasing Property.">
  <?php echo $__env->make('frontend.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

<section class="subheader">
  <div class="container">
    <h1>Properties For <?php echo e(ucfirst($detail->listed_for)); ?></h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a class="current">Properties For <?php echo e(ucfirst($detail->listed_for)); ?></a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module" style="background-color:#fff;">
  <div class="container">
  
	<div class="row">
	<div class="col-lg-8 col-md-8">
		
			<div class="property-single-item property-main">
				<div class="property-header">
					<div class="property-title">
						<h4><?php echo e($detail->title); ?></h4>
            <a href="callto:+91<?php echo e($detail->phone); ?>" class="btn default_btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a>
						<p class="property-address"><i class="fa fa-map-marker icon"></i><?php echo e($detail->address); ?></p>
            <div class="clear"></div>
					</div>
					<div class="property-single-tags">
					
						<div class="property-type right">Property Type: <a href="#"><?php echo e($detail->cattitle); ?></a></div>
					</div>
				</div>

				<?php if(false): ?>
				<table class="property-details-single">
					<tr>
						<td><i class="fa fa-bed"></i> <span>3</span> Beds</td>
						<td><i class="fa fa-expand"></i> <span>1480</span> Sq Ft</td>
						<td><i class="fa fa-car"></i> <span>1</span> Parking</td>
					</tr>
				</table>
				<?php endif; ?>

        <div class="property-gallery">
          <div class="slider-nav slider-nav-property-gallery">
            <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
            <span class="slider-next"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="slide-counter"></div>
          <div class="slider slider-property-gallery">
          	<?php $__currentLoopData = $property_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          	<?php if($property_image->property_image): ?>
            	<div class="slide"><img style="height:492px !important;" src="<?php echo e($property_image->property_image); ?>" alt="Properties for sale" /></div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          
          <div class="slider property-gallery-pager">
          	<?php $__currentLoopData = $property_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          	<?php if($property_image->property_image): ?>
            	<a class="property-gallery-thumb"><img src="<?php echo e($property_image->property_image); ?>" alt="Rental properties" /></a>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          
        </div>

			</div>

			<div class="widget property-single-item property-description content">
				<h4>
					<span>Description</span> 
					<div class="divider-fade"></div>
				</h4>

				<?php echo $detail->description; ?>


				<div class="tabs">
		        <ul>
		          <li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Additional Details</a></li>
		          <li><a href="#tabs-2"><i class="fa fa-crop icon"></i>Floor Plans</a></li>
		          <li><a href="#tabs-3"><i class="fa fa-files-o icon"></i>Attachments</a></li>
		        </ul>
		        <div id="tabs-1" class="ui-tabs-hide">
		          <?php echo $detail->additional_details; ?>

		        </div>
		        <div id="tabs-2" class="ui-tabs-hide">
		        	<?php if($detail->floor_plan): ?>
		          	<a href="#"><img src="<?php echo e($detail->floor_plan); ?>" alt="Property consultant" /></a>
		          <?php endif; ?>
		        </div>
		        <div id="tabs-3" class="ui-tabs-hide">
		        	<?php $file_count = 1; ?>
		        	<?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        	<?php if($attachment->attachment): ?>
		          	<a href="<?php echo e($attachment->attachment); ?>" download="<?php echo e($attachment->attachment); ?>"><i class="fa fa-file-o icon"></i> File <?php echo e($file_count); ?></a><br/><br/>
		          <?php endif; ?>
		        	<?php $file_count++; ?>
		          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </div>
		    </div>
			</div>
			<?php if(false): ?>
			<div class="widget property-single-item property-description content">
				<h4>
					<span>Description</span> 
					<div class="divider-fade"></div>
				</h4>
						<p><b>Quick overview of Aura Solis</b></p>

            <p>Aura Solis is sited at the foothills of a green hillock, bordered on two sides by a reserved forest zone, Aura Solis is more than an up-market home, it is a haven of peace and exclusivity, spread across two acres of green serenity.</p><br>
            <p>Comprising just 82 Multistorey Apartment of 2 & 3 BHK configurations in five towers that curve around the perimeter, Aura Solis lives up to its name, offering residents a bright and sunny view of life.</p>
            
            <p><b>About Aura Solis</b></p>
            
            <p>Aura Solis is a well-planned project that is ideally positioned in Wanowrie, Pune. Spread over 4 Acre, this project is impressive in its coverage. A total of 120 are present in the project.</p><br>
            <p>This skillfully crafted project has Ready To Move units. The design of the project is such that it is classified into 5 towers. The launch date of this grand project is 01 January 2012. The estimated possession date of the project is 01 March 2015.</p><br>
            <p>The beautiful Aura Solis's commencement certificate has not been granted. In addition to this, the occupancy certificate not granted. Aura Solis has been developed by the well-known builder Eminent Spaces. Aura Solis is creating a benchmark with top-in-class amenities including Power Back Up, Multipurpose Courts, Kids Play Area, Indoor Games Room, Jogging and Strolling Track, Waste Disposal, Maintenance Staff, Visitor Parking, Service/Goods Lift, Water Storage. Aura Solis At Wanawari Near Naren Hills Opp Mohammadwadi Road, Near Rims School Wanawari Annex Pune is the official address of this project. 411040 is the area pincode under which this project falls. Aura Solis is where fine living meets seamless connectivity to provide you comfort living.</p>
                
					<div class="tabs">
			        <ul>
			          <li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Additional Details</a></li>
			          <li><a href="#tabs-2"><i class="fa fa-crop icon"></i>Floor Plans</a></li>
			          <li><a href="#tabs-3"><i class="fa fa-files-o icon"></i>Attachments</a></li>
			        </ul>
			        <div id="tabs-1" class="ui-tabs-hide">
			          <ul class="additional-details-list">
			          	<li>Price: <span>1.45cr nego </span></li>
			          	<li>Carpet Area: <span>1480 SQFT</span></li>
			          	<li>Parking: <span>Yes</span></li>
			          	<li>Year of Built: <span>2001</span></li>
			          	<li>Bedrooms: <span>2</span></li>
			          	<li>Bathroom: <span>1</span></li>
			          	<li>Property Status: <span>For Sell</span></li>
			          	<li><a href="callto:+919890239777" class="btn new-btn"><i class="fa fa-phone" aria-hidden="true"></i>Call Us To Get Price</a></li>
			          	
			          </ul>
			        </div>
			        <div id="tabs-2" class="ui-tabs-hide">
			          <a href="#"><img src="<?php echo e(env('ASSET_URL1')); ?>/public/frontend/images/floor-plan1.jpg" alt="Property consultant" /></a>
			        </div>
			        <div id="tabs-3" class="ui-tabs-hide">
			          <a href="#"><i class="fa fa-file-o icon"></i> Lease Agreement</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Brochure</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Property Details</a>
			        </div>
			    </div>
			</div>
			<?php endif; ?>

			<div class="widget property-single-item property-amenities">
				<h4>
					<span>Amenities</span> 
					<div class="divider-fade"></div>
				</h4>
				<ul class="amenities-list">
					<?php $__currentLoopData = $amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if(in_array($amen->id, $detail->amenities)): ?>
						<li><i class="fa fa-check icon"></i> <?php echo e(ucfirst($amen->name)); ?></li>
					<?php else: ?>
						<li><i class="fa fa-close icon"></i> <?php echo e(ucfirst($amen->name)); ?></li>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			
			<div class="widget property-single-item property-amenities">
				<h4>
					<span>Features</span> 
					<div class="divider-fade"></div>
				</h4>
				<ul class="amenities-list">
					<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if(in_array($feat->id, $detail->features)): ?>
						<li><i class="fa fa-check icon"></i> <?php echo e(ucfirst($feat->name)); ?></li>
					<?php else: ?>
						<li><i class="fa fa-close icon"></i> <?php echo e(ucfirst($feat->name)); ?></li>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>

			<div class="widget property-single-item property-location">
				<h4>
					<span>Location</span>
					 <?php echo $detail->map_link; ?>

					<div class="divider-fade"></div>
				</h4>
			</div><!-- end location -->

		</div><!-- end col -->
		
		<div class="col-lg-4 col-md-4 sidebar">
		
			<div class="widget widget-sidebar sidebar-properties advanced-search">
			  <h4><span>Quick Enquiry</span></h4>
			  <div class="widget-content box mt30px" >
				<form id="inquiryForm">
				 
				  <div class="form-block">
					<input type="text" name="name" class="area-filter border" placeholder="Name" required />
					<input type="hidden" name="product_id" value="<?php echo e($detail->id); ?>" required />
					<input type="hidden" name="subject" value="" />
				  </div>
				  <div class="form-block">
					<input type="text" name="mobile" class="area-filter border phonefilter" placeholder="Phone Number" required />
				  </div>
				  <div class="form-block">
					<input type="text" name="email" class="area-filter border" placeholder="email" />
				  </div>
				  <div class="form-block">
					<textarea name="message" class="area-filter border" placeholder="Message" ></textarea>
				  </div>				 
				  <div class="form-block">
					<input type="button" class="button inquiry-form" value="Find Properties" />
				  </div>
				</form>
			  </div><!-- end widget content -->
			</div><!-- end widget -->
			

          </div><!-- end widget content -->
      </div><!-- end widget -->
      
		
		</div><!-- end sidebar -->
		
	</div><!-- end row -->

  </div><!-- end container -->
</section>


</body>
</html>
<?php echo $__env->make('frontend.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    $(document).ready(function() {
        $('.inquiry-form').click(function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route("front-save-inquiry")); ?>',
                data: $('#inquiryForm').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                	 $('#inquiryForm')[0].reset();
                },
                error: function(error) {
                }
            });
        });
    });

    $(document).ready(function () {
        // Attach a keyup event handler to the input field
        $(".phonefilter").on("input", function () {
            // Get the current input value
            var inputValue = $(this).val();

            // Remove non-numeric characters
            var numericValue = inputValue.replace(/[^0-9]/g, '');

            // Limit to 10 digits
            numericValue = numericValue.slice(0, 10);

            // Update the input field value
            $(this).val(numericValue);
        });
    });
</script><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/frontend/property_detail.blade.php ENDPATH**/ ?>