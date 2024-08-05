@extends('frontend.layouts.main')
@section('main-container')



<style>
    .gallery-block.grid-gallery{
  padding-bottom: 60px;
  padding-top: 60px;
}

.gallery-block.grid-gallery .heading{
    margin-bottom: 50px;
    text-align: center;
}

.gallery-block.grid-gallery .heading h2{
    font-weight: bold;
    font-size: 1.4rem;
    text-transform: uppercase;
}

.gallery-block.grid-gallery a:hover{
  opacity: 0.8;
}

.gallery-block.grid-gallery .item img{
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
  transition: 0.4s;
}

.gallery-block.grid-gallery .item{
  margin-bottom: 20px;
}

@media (min-width: 576px) {

  .gallery-block.grid-gallery .scale-on-hover:hover{
    transform: scale(1.05);
    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
  }
}


</style>
 <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/4.jpg);">
        <div class="auto-container">
            <h1>Gallery</h1>
        </div>
        
    </section>
    <!--End Page Title-->
    
    <section class="gallery-block grid-gallery">
	<div class="container">
		
		<div class="row">
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/1.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/1.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/2.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/2.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/3.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/3.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/4.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/1.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/5.png">
					<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/5.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/6.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/6.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/7.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/7.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/8.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/8.png">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/9.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/9.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/10.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/10.png">
        </a>
			</div>
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/11.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/11.png">
        </a>
			</div>
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/12.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/12.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/13.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/13.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/14.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/14.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/15.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/15.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/16.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/9.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/16.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/9.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/17.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/17.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/18.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/18.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/19.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/19.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/20.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/20.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/21.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/21.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/22.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/22.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/23.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/23.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/24.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/24.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/25.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/25.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/26.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/26.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/27.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/27.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/28.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/28.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/29.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/29.png">
        </a>
			</div>
			
				<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" href="public/assets/images/gallery/30.png">
        	<img class="img-fluid image scale-on-hover" src="public/assets/images/gallery/30.png">
        </a>
			</div>
			
			
			
		</div>
	</div>
	
	<script> 
	baguetteBox.run('.grid-gallery', {
		animation: 'slideIn'
	});
	</script>
</section>
   

    @endsection