<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="<?php echo e(route('dashboard')); ?>">
            <div class="logo-img d-flex">
                <img height="40" src="<?php echo e(asset('img/logo.png')); ?>" class="header-brand-img ml-4" title="Expoloop">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <?php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
        $segment3 = request()->segment(3);
    ?>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item <?php echo e($segment2 == 'dashboard' ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>"><i class="ik ik-bar-chart-2"></i><span><?php echo e(__('Dashboard')); ?></span></a>
                </div>

                <?php if(false): ?>
                   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_user')): ?>
                   <div class="nav-item <?php echo e(($segment1 == 'users' || $segment1 == 'roles'||$segment1 == 'permission' ||$segment1 == 'user'||$segment2 == 'log') ? 'active open' : ''); ?> has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>Adminstrator</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        <a href="<?php echo e(url('users')); ?>" class="menu-item <?php echo e(($segment1 == 'users') ? 'active' : ''); ?>">Users</a>
                    </div>
                    </div>
                    <?php endif; ?>


                    <div class="nav-item <?php echo e($segment2 == 'homebanner' ? 'active open' : ''); ?>">
                        <a href="<?php echo e(route('homebanner.list')); ?>"><i class="fa fa-image"></i><span><?php echo e(__('Home Banner')); ?></span></a>
                    </div>

                    <div class="nav-item <?php echo e($segment2 == 'gallery' ? 'active open' : ''); ?>">
                        <a href="<?php echo e(route('gallery.list')); ?>"><i class="fa fa-camera-retro"></i><span><?php echo e(__('Gallery')); ?></span></a>
                    </div>
                
                    <div class="nav-item <?php echo e($segment2 == 'blog' ? 'active open' : ''); ?>">
                        <a href="<?php echo e(route('blog.list')); ?>"><i class="fa fa-book"></i><span><?php echo e(__('Blog')); ?></span></a>
                    </div>

                    <div class="nav-item <?php echo e($segment2 == 'inquiry' ? 'active open' : ''); ?> has-sub">
                        <a href="javascript:void(0)"><i class="fa fa-comments"></i><span><?php echo e(__('Inquiry')); ?></span></a>
                        <div class="submenu-content">
                            <a href="<?php echo e(route('contact-list')); ?>" class="menu-item <?php echo e($segment3 == 'contact' ? 'active' : ''); ?>"><?php echo e(__('Contact')); ?></a>
                        </div>
                    </div>
                    <div class="nav-item <?php echo e($segment2 == 'inquiry' ? 'active open' : ''); ?>">
                        <a href="<?php echo e(route('product.list')); ?>"><i class="fa fa-comments"></i><span><?php echo e(__('Inquiry')); ?></span></a>
                    </div>
                <?php endif; ?>

                <div class="nav-item <?php echo e($segment2 == 'productcategory' ? 'active open' : ''); ?>">
                    <a href="<?php echo e(route('product.category.list')); ?>"><i class="fa fa-box"></i><span><?php echo e(__('Category')); ?></span></a>
                </div>

                <div class="nav-item <?php echo e($segment2 == 'product' ? 'active open' : ''); ?>">
                    <a href="<?php echo e(route('product.list')); ?>"><i class="fa fa-box"></i><span><?php echo e(__('Property')); ?></span></a>
                </div>

        </div>
    </div>
</div><?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/include/sidebar.blade.php ENDPATH**/ ?>