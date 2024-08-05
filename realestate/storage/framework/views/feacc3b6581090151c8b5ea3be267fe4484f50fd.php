<header class="header-top" header-theme="light">

    <div class="container-fluid">

        <div class="d-flex justify-content-between">

            <div class="top-menu d-flex align-items-center">

                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>

                <button class="nav-link" title="clear cache">

                    <a>

                        <i class="ik ik-battery-charging"></i>

                    </a>

                </button> &nbsp;&nbsp;

                <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>

            </div>

            <div class="top-menu d-flex align-items-center">

                

                

                

                <div class="dropdown">

                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"

                        aria-haspopup="true" aria-expanded="false">

                        <img class="avatar" src="<?php echo e(asset('img/user.png')); ?>" alt=""></a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="<?php echo e(route('admin-logout')); ?>">

                            <i class="ik ik-power dropdown-icon"></i>

                            <?php echo e(__('Logout')); ?>


                        </a>

                    </div>

                </div>



            </div>

        </div>

    </div>

</header>

<?php /**PATH /home1/mujahidenterpris/public_html/realestate/resources/views/include/header.blade.php ENDPATH**/ ?>