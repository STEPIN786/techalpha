<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ route('dashboard') }}">
            <div class="logo-img d-flex">
                <img height="40" src="{{ asset('img/logo.png') }}" class="header-brand-img ml-4" title="Expoloop">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
        $segment3 = request()->segment(3);
    @endphp

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ $segment2 == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>{{ __('Dashboard') }}</span></a>
                </div>

                @if(false)
                   @can('manage_user')
                   <div class="nav-item {{ ($segment1 == 'users' || $segment1 == 'roles'||$segment1 == 'permission' ||$segment1 == 'user'||$segment2 == 'log') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>Adminstrator</span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        <a href="{{url('users')}}" class="menu-item {{ ($segment1 == 'users') ? 'active' : '' }}">Users</a>
                    </div>
                    </div>
                    @endcan


                    <div class="nav-item {{ $segment2 == 'homebanner' ? 'active open' : '' }}">
                        <a href="{{ route('homebanner.list') }}"><i class="fa fa-image"></i><span>{{ __('Home Banner') }}</span></a>
                    </div>

                    <div class="nav-item {{ $segment2 == 'gallery' ? 'active open' : '' }}">
                        <a href="{{ route('gallery.list') }}"><i class="fa fa-camera-retro"></i><span>{{ __('Gallery') }}</span></a>
                    </div>
                
                    <div class="nav-item {{ $segment2 == 'blog' ? 'active open' : '' }}">
                        <a href="{{ route('blog.list') }}"><i class="fa fa-book"></i><span>{{ __('Blog') }}</span></a>
                    </div>

                    <div class="nav-item {{ $segment2 == 'inquiry' ? 'active open' : '' }} has-sub">
                        <a href="javascript:void(0)"><i class="fa fa-comments"></i><span>{{ __('Inquiry') }}</span></a>
                        <div class="submenu-content">
                            <a href="{{ route('contact-list') }}" class="menu-item {{ $segment3 == 'contact' ? 'active' : '' }}">{{ __('Contact') }}</a>
                        </div>
                    </div>
                    <div class="nav-item {{ $segment2 == 'inquiry' ? 'active open' : '' }}">
                        <a href="{{ route('product.list') }}"><i class="fa fa-comments"></i><span>{{ __('Inquiry') }}</span></a>
                    </div>
                @endif

                <div class="nav-item {{ $segment2 == 'productcategory' ? 'active open' : '' }}">
                    <a href="{{ route('product.category.list') }}"><i class="fa fa-box"></i><span>{{ __('Category') }}</span></a>
                </div>

                <div class="nav-item {{ $segment2 == 'product' ? 'active open' : '' }}">
                    <a href="{{ route('product.list') }}"><i class="fa fa-box"></i><span>{{ __('Property') }}</span></a>
                </div>

        </div>
    </div>
</div>