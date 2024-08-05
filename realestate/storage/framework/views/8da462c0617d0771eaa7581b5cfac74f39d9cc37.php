<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <meta http-equiv="Expires" content="30" />
  <meta name="author" content="luckee Properties">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Residential Properties in Kondhwa, Pune | Residential Projects in Kondhwa, Pune | Projects in Pune</title>
  <link rel="shortcut icon" href="images/fav1.png" />
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <meta name="Keywords" content=" Residential Properties in Kondhwa Pune, Residential Projects in Kondhwa Pune, Projects in Pune, Real Estate Consultant in Kondhwa Pune, Real Estate Agents in Pune, Property Dealers, Brokers in Pune, Property Consultants in Pune, Real Esate Broker in Kondhwa, Pune ">
  <meta name="description" content="Get information and details about the best residential projects in Kondhawa, residentials projects in NIBM Road, residentials projects in Undri Pune">
  <?php echo $__env->make('frontend.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <body>
    <section class="subheader">
      <div class="container">
        <h1>Residential Projects</h1>
        <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i>
          <a href="#" class="current">Residential Projects</a>
        </div>
        <div class="clear"></div>
      </div>
    </section>
    <section class="module" style="background-color:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="property-listing-header">
              <span class="property-count left"><?php echo e($property_count); ?> properties found</span>
              <form action="" method="get" class="right">
                <select name="sort_by" onchange="this.form.submit();">
                  <option value="recent" <?php echo e(($sortby == 'recent') ? 'selected' : ''); ?>>Recent</option>
                  <option value="old" <?php echo e(($sortby == 'old') ? 'selected' : ''); ?>>Old</option>
                </select>
              </form>
              <div class="clear"></div>
            </div>
            <!-- end property listing header -->
            <div class="row">
              <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-6 col-md-6">
                <div class="property shadow-hover">
                  <a href="<?php echo e($row->detail_link); ?>" class="property-img">
                    <div class="img-fade"></div>
                    <!--<div class="property-price">RS. 1.45cr nego </div>-->
                    <div class="property-color-bar"></div>
                    <img src="<?php echo e($row->property_images); ?>" alt="Rental properties" />
                  </a>
                  <a href="callto:+91<?php echo e($row->phone); ?>" class="btn default_btn">call us to get price</a>
                  <div class="property-content">
                    <div class="property-title">
                      <h4>
                        <a href="<?php echo e($row->detail_link); ?>"><?php echo e($row->title); ?> </a>
                      </h4>
                      <p class="property-address">
                        <i class="fa fa-map-marker icon"></i><?php echo e($row->address); ?>

                      </p>
                    </div>
                    <?php if(false): ?>
                    <table class="property-details">
                      <tr>
                        <td>
                          <i class="fa fa-bed"></i> 2 Beds
                        </td>
                        <!--<td><i class="fa fa-tint"></i> 2 Baths</td>-->
                        <td>
                          <i class="fa fa-expand"></i> 1480 Sq Ft
                        </td>
                      </tr>
                    </table>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
          <!-- end listing -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
  </body>
</html>
<?php echo $__env->make('frontend.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/frontend/property_list.blade.php ENDPATH**/ ?>