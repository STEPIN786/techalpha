<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ route('dashboard') }}">
            <div class="logo-img d-flex">
                <img height="40" src="{{ asset('img/logo-certificate.png') }}"  style="height: 52px " class="header-brand-img ml-4" title="Expoloop">
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

                <div class="nav-item {{ ($segment2 == 'certificate' && $segment2 == 'add') ? 'active' : '' }}">
                    <a href="{{ route('certificate.add') }}"><i class="ik ik-bar-chart-2"></i><span>{{ __('Create Certificate') }}</span></a>
                </div>

                <div class="nav-item {{ ($segment2 == 'certificate' && $segment2 == 'list') ? 'active' : '' }}">
                    <a href="{{ route('certificate.list') }}"><i class="fa fa-box"></i><span>{{ __('Certificate List') }}</span></a>
                </div>
        </div>
    </div>
</div>