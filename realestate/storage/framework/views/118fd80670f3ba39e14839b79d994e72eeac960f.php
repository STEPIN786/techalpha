<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('head'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/dist/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/dist/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/mohithg-switchery/dist/switchery.min.css')); ?>">

<?php $__env->stopPush(); ?>
<div class="container-fluid">
   <div class="page-header">
      <div class="row align-items-end">
         <div class="col-lg-8">
            <div class="page-header-title">
               <i class="ik ik-edit bg-blue"></i>
               <div class="d-inline">
                  <h5><?php echo e($page_title); ?></h5>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="<?php echo e(route('dashboard')); ?>"><i class="ik ik-home"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a><?php echo e($page_title); ?></a></li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h3><?php echo e($page_title); ?></h3>
            </div>
            <div class="card-body">
               <form class="forms-sample" method="POST" action="<?php echo e(route('product.update')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="id" value="<?php echo e(App\Http\Controllers\Controller::view_enc($product->id)); ?>">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cat_id">Category<span class="text-red">*</span></label>
                            <select class="form-control" name="cat_id" id="cat_id">
                                <?php $__currentLoopData = $productCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>" <?php echo e(($product->cat_id == $cat->id) ? 'selected' : ''); ?>>
                                        <?php echo e($cat->title); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="listed_for">Listed For<span class="text-red">*</span></label>
                            <select class="form-control" name="listed_for" id="listed_for">
                                <option value="buy" <?php echo e(($product->listed_for == 'buy') ? 'selected' : ''); ?>>Buy</option>
                                <option value="sell" <?php echo e(($product->listed_for == 'sell') ? 'selected' : ''); ?>>Sell</option>
                                <option value="rent" <?php echo e(($product->listed_for == 'rent') ? 'selected' : ''); ?>>Rent</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" type="text" class="form-control phonefilter" name="phone" value="<?php if(isset($product)): ?> <?php echo e($product->phone); ?> <?php endif; ?>" placeholder="Enter phone">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="<?php if(isset($product)): ?> <?php echo e($product->email); ?> <?php endif; ?>" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Title<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control" name="title" value="<?php if(isset($product)): ?> <?php echo e($product->title); ?> <?php endif; ?>" placeholder="Enter Title" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="map_link">Map Link</label>
                            <input id="map_link" type="text" class="form-control" name="map_link" value="<?php if(isset($product)): ?> <?php echo e($product->map_link); ?> <?php endif; ?>" placeholder="Map Link">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="video_link">Video Link</label>
                            <input id="video_link" type="text" class="form-control" name="video_link" value="<?php if(isset($product)): ?> <?php echo e($product->video_link); ?> <?php endif; ?>" placeholder="Video Link">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="price">Rate / Rent <span class="text-red"><small>(INR)</small></span></label>
                            <input id="price" type="text" class="form-control pricefilter" name="price" value="<?php if(isset($product)): ?> <?php echo e($product->price); ?> <?php endif; ?>" placeholder="Rate / Rent">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                           <label for="address">Address</label>
                           <textarea class="form-control" type="text" id="address" name="address" rows="4">
                                <?php if(isset($product)): ?> <?php echo e($product->address); ?> <?php endif; ?>
                           </textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                           <label for="description">Description</label>
                           <textarea class="form-control txteditor" type="text" id="description" name="description" rows="4">
                                <?php if(isset($product)): ?> <?php echo e($product->description); ?> <?php endif; ?>
                           </textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                           <label for="additional_details">Additional Details</label>
                           <textarea class="form-control txteditor" type="text" id="additional_details" name="additional_details" rows="4">
                                <?php if(isset($product)): ?> <?php echo e($product->additional_details); ?> <?php endif; ?>
                           </textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="amenities">Amenities</label>
                            <div class="border-checkbox-section">
                                <?php $__currentLoopData = $amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(in_array($amen->id, $product->amenities)): ?>
                                        <div class="border-checkbox-group border-checkbox-group-primary ml-3">
                                            <input class="border-checkbox" name="amenities[<?php echo e($amen->id); ?>]" type="checkbox" id="am<?php echo e($amen->id); ?>" checked>
                                            <label class="border-checkbox-label" for="am<?php echo e($amen->id); ?>"><?php echo e($amen->name); ?></label>
                                        </div>
                                    <?php else: ?>
                                        <div class="border-checkbox-group border-checkbox-group-primary ml-3">
                                            <input class="border-checkbox" name="amenities[<?php echo e($amen->id); ?>]" type="checkbox" id="am<?php echo e($amen->id); ?>">
                                            <label class="border-checkbox-label" for="am<?php echo e($amen->id); ?>"><?php echo e($amen->name); ?></label>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="features">Features</label>
                            <div class="border-checkbox-section">
                                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(in_array($feat->id, $product->features)): ?>
                                        <div class="border-checkbox-group border-checkbox-group-primary ml-3">
                                            <input class="border-checkbox" name="features[<?php echo e($feat->id); ?>]" type="checkbox" id="fea<?php echo e($feat->id); ?>" checked>
                                            <label class="border-checkbox-label" for="fea<?php echo e($feat->id); ?>"><?php echo e($feat->name); ?></label>
                                        </div>
                                    <?php else: ?>
                                        <div class="border-checkbox-group border-checkbox-group-primary ml-3">
                                            <input class="border-checkbox" name="features[<?php echo e($feat->id); ?>]" type="checkbox" id="fea<?php echo e($feat->id); ?>">
                                            <label class="border-checkbox-label" for="fea<?php echo e($feat->id); ?>"><?php echo e($feat->name); ?></label>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="product_image">Property Images<span class="text-red"><small>(Jpg, Png Only)</small>*</span></label>
                            <input type="file" class="form-control" name="product_image[]" id="product_image" multiple>
                        </div>
                        <div id="preview" class="mb-4"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="attachments">Attachments<span class="text-red"><small>(Jpg, Png, PDF Only)</small>*</span></label>
                            <input type="file" class="form-control" name="attachments[]" id="attachments" multiple>
                        </div>
                        <div id="preview1" class="mb-4"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="floor_plan">Floor Plan<span class="text-red"><small>(Jpg, Png Only)</small>*</span></label>
                            <input type="file" class="form-control" name="floor_plan" id="floor_plan">
                        </div>
                        <div id="preview2" class="mb-4"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-danger" onclick="window.location='<?php echo e(route("product.list")); ?>'">Cancel</button>
                        </div>
                    </div>
                </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- push external js -->
<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('plugins/select2/dist/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/summernote/dist/summernote-bs4.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery.repeater/jquery.repeater.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/mohithg-switchery/dist/switchery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/form-advanced.js')); ?>"></script>

<script src="<?php echo e(asset('js/form-components.js')); ?>"></script>
<script>
    document.getElementById('product_image').addEventListener('change', handleFileSelect);
    document.getElementById('attachments').addEventListener('change', handleFileSelect1);
    document.getElementById('floor_plan').addEventListener('change', handleFileSelect2);

    function handleFileSelect(event) {
        var files = event.target.files;
        var preview = document.getElementById('preview');

        preview.innerHTML = ''; // Clear previous previews

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px'; // Set a fixed width for the preview images
                img.style.marginRight = '10px'; // Add some spacing between images
                preview.appendChild(img);
            };

            reader.readAsDataURL(file);
        }
    }

    function handleFileSelect1(event) {
        var files = event.target.files;
        var preview = document.getElementById('preview1');

        preview.innerHTML = ''; // Clear previous previews

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px'; // Set a fixed width for the preview images
                img.style.marginRight = '10px'; // Add some spacing between images
                preview.appendChild(img);
            };

            reader.readAsDataURL(file);
        }
    }

    function handleFileSelect2(event) {
        var files = event.target.files;
        var preview = document.getElementById('preview2');

        preview.innerHTML = ''; // Clear previous previews

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px'; // Set a fixed width for the preview images
                img.style.marginRight = '10px'; // Add some spacing between images
                preview.appendChild(img);
            };

            reader.readAsDataURL(file);
        }
    }
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>