<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>
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
               <form class="forms-sample" method="POST" action="<?php echo e(route('product.category.store')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="row">

                  <div class="col-md-12">
                        <div class="form-group">
                            <label for="cat_id">Category<span class="text-red">*</span></label>
                            <select class="form-control" name="cat_id" id="cat_id">
                                 <option value="0" selected>Main Category</option>
                                <?php $__currentLoopData = $productCategoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>">
                                        <?php echo e($cat->title); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                  <div class="col-sm-12">
                     <div class="form-group">
                         <label for="title">Title<span class="text-red">*</span></label>
                         <input id="title" type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="" placeholder="Enter Title" required>
                         <div class="help-block with-errors"></div>

                         <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <span class="invalid-feedback" role="alert">
                                 <strong><?php echo e($message); ?></strong>
                             </span>
                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>
                  </div>

                  <div class="col-md-12">
                        <div class="form-group">
                            <label for="product_banner_image">Image For Category</label>
                            <input id="product_banner_image" type="file" class="form-control <?php $__errorArgs = ['product_banner_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="product_banner_image" value="" id="product_banner_image">
                            <div class="help-block with-errors" ></div>

                            <?php $__errorArgs = ['product_banner_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                  </div>
                  <div id="preview" class="p-3"></div>

                  <div class="col-md-12">
                     <div class="form-group">
                         <button type="submit" class="btn btn-success">Submit</button>
                         <button type="button" class="btn btn-danger" onclick="window.location='<?php echo e(route("product.category.list")); ?>'">Cancel</button>
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
<script src="<?php echo e(asset('js/form-components.js')); ?>"></script>
<script type="text/javascript">
    function imagePreview(fileInput) {
        if (fileInput.files && fileInput.files[0]) {
            var fileReader = new FileReader();
            fileReader.onload = function (event) {
                $('#preview').html('<img src="'+event.target.result+'" width="300" height="300"/>');
            };
            fileReader.readAsDataURL(fileInput.files[0]);
        }
    }

    $("#product_banner_image").change(function () {
        imagePreview(this);
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/admin/productcategory/create.blade.php ENDPATH**/ ?>