<!-- alert box start -->
<?php if(session()->has('success')): ?>
    <div class="card-body" id="alert-box">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ik ik-x"></i>
            </button>
        </div>
    </div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <div class="card-body" id="alert-box">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('error')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ik ik-x"></i>
            </button>
        </div>
    </div>
<?php endif; ?>
<?php if(session()->has('message')): ?>
    <div class="card-body" id="alert-box">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <?php echo e(session('message')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ik ik-x"></i>
            </button>
        </div>
    </div>
<?php endif; ?>
<!-- alert box end --><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/include/alertmessage.blade.php ENDPATH**/ ?>