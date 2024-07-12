

@extends('frontend.layouts.main')


@section('main.container')

        <!-- page-title -->
        
        
        
        <!--<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" >-->
        <div class="shadow text-dark bg-cover bg-light pt-10" style="background-image: url(public/assets/img/banner/hero-background.jpg); padding: 80px  40px;"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>gallery</h1>
                    <ul class="bg-transparent breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active"> / gallery </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- page-title end-->
   <!-- Star Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="magnific-mix-gallery masonary">
                <div id="portfolio-grid" class="gallery-items colums-3">
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/1.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/1.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/2.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/2.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/3.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/3.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/4.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/4.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/5.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/5.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/6.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/6.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                     <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/7.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/7.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                    
                     <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/8.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/8.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                     <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/9.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/9.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                      <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="public/assets/img/gallery/10.jpg" alt="Thumb">
                            <div class="effect-info">
                                <a href="public/assets/img/gallery/10.jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
    @endsection   