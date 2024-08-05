<?php $__env->startSection('title', $page_title); ?>
<?php $__env->startSection('content'); ?>

<!-- push external head elements to head -->
<?php $__env->startPush('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('plugins/DataTables/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

    <div class="card-body">
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('message')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                </button>
            </div>
        <?php endif; ?>
    </div>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e($page_title); ?></h5>
                            <span><?php echo e($page_title); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('dashboard')); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="JavaScript:void(0)"><?php echo e($page_title); ?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3><?php echo e($page_title); ?></h3>
                        <div class=""><a class="btn btn-primary" href="<?php echo e(route('product.add')); ?>">Add Property</a></div>
                    </div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Property</th>
                                    <th>Type</th>
                                    <th class="nosort text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($list)): ?>
                                    <?php $i = 1; ?>

                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($i, $i++); ?></td>
                                            <td>
                                                <?php echo e($row->cattitle); ?>

                                            </td>
                                            <td>
                                                <a title="Detail" href="<?php echo e(route('product.edit', App\Http\Controllers\Controller::view_enc($row->id))); ?>">
                                                    <?php echo e($row->title); ?>

                                                </a>
                                            </td>
                                            <td>
                                                <?php echo e($row->listed_for); ?>

                                            </td>
                                            <td>
                                                <div class="table-actions text-center">
                                                    <a title="Detail" href="<?php echo e(route('product.edit', App\Http\Controllers\Controller::view_enc($row->id))); ?>">
                                                        <i class="ik ik-eye-2 f-16 mr-15 text-green"></i>
                                                    </a>                                                    
                                                    <a title="Edit" href="<?php echo e(route('product.edit', App\Http\Controllers\Controller::view_enc($row->id))); ?>" >
                                                        <i class="ik ik-edit-2 f-16 mr-15 text-green"></i>
                                                    </a>
                                                    <a title="Delete" data-href="<?php echo e(route('product.delete', App\Http\Controllers\Controller::view_enc($row->id))); ?>" class="delete">
                                                        <i class="ik ik-trash-2 f-16 text-red"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
        <script src="<?php echo e(asset('plugins/DataTables/datatables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/datatables.js')); ?>"></script>
        <script src="<?php echo e(asset('js/form-components.js')); ?>"></script>
        <script src="<?php echo e(asset('js/confirm/jquery-confirm.min.js')); ?>"></script>
        <script type="text/javascript">
            $("body").on( "click", ".delete", function() {
                var link = $(this).attr("data-href");
                $.confirm({
                icon: 'fa fa-trash',
                title: 'Confirm!!',
                content: 'Are You Sure to Delete this Record?',
                draggable: true,
                buttons: {
                    confirm: function () {
                        window.location.href = link;
                    },
                    cancel: function () {
                    },
                }
            });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/admin/product/list.blade.php ENDPATH**/ ?>