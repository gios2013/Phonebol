@extends('index.index')
@section('container')
<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

	<h1 id="fh5co-logo"><a href="index.html"><img src="images/logo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
	<nav id="fh5co-main-menu" role="navigation">
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Telefonos <i class="fas fa-chevron-down"></i></a>
		    <div class="dropdown-menu">
		      <a class="dropdown-item" href="#">Samsung</a>
		      <a class="dropdown-item" href="#">Huawei</a>
		    </div>
		  </li>
			<li><a href="portfolio.html">Negociar</a></li>
			<li><a href="contact.html">Contactanos</a></li>
		</ul>
	</nav>

	<div class="fh5co-footer">
		<p><small>&copy; 2018 Todos los derechos reservados Phonebol.</small></p>
		<ul>
			<li><a href="#"><i class="icon-facebook"></i></a></li>
			<li><a href="#"><i class="icon-twitter"></i></a></li>
			<li><a href="#"><i class="icon-instagram"></i></a></li>
			<li><a href="#"><i class="icon-linkedin"></i></a></li>
		</ul>
	</div>

</aside>

<div id="fh5co-main">

	<div class="fh5co-narrow-content">
		<div class="row">
			<div class="col-lg-12">
	            <div id="sync1" class="owl-carousel owl-theme">
	                <div class="item">
	                    <div class="text-center"> Carousel box 1 </div>
	                </div>
	                <div class="item">
	                    <div class="text-center"> Carousel box 2 </div>
	                </div>
	                <div class="item">
	                    <div class="text-center"> Carousel box 3 </div>
	                </div>
	                <div class="item">
	                    <div class="text-center"> Carousel box 4 </div>
	                </div>
	                <div class="item">
	                    <div class="text-center"> Carousel box 5 </div>
	                </div>
	                <div class="item">
	                    <div class="text-center"> Carousel box 6 </div>
	                </div>
	            </div>
	        </div>
			<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
				<figure class="text-center">
					<img src="images/work.jpg" alt="Free HTML5 Bootstrap" class="img-responsive">
				</figure>
			</div>

			
			<div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">
				
				<div class="col-md-9 col-md-push-3">
					<h1>Samsung S9</h1>
					<h3 class="fh5co-work-title">Pantalla:</h3>
					<p>5.8 Pulgadas</p>
					<h3 class="fh5co-work-title">Almacenamiento:</h3>
					<p>64GB, 128GB y 256GB (varía según el mercado. Por ejemplo, en EE.UU. solo se vende la versión con 64GB).</p>
					<h3 class="fh5co-work-title">Batería:</h3>
					<p>3,000mAh (no removible).</p>
					<h3 class="fh5co-work-title">Cámara trasera:</h3>
					<p>12 megapixeles con estabilización de imagen óptica y apertura variable de f/1.5 a f/2.4.</p>
					<h3 class="fh5co-work-title">Cámara frontal:</h3>
					<p>8 megapixeles con apertura f/1.7.</p>
					<p><a href="work2.html#nore" class="btn btn-md btn-primary">Ver Más</a></p>
				</div>

				<div class="col-md-3 col-md-pull-9 fh5co-services">
					<h3>Precio</h3>
					<ul>
						<li style="color: #000000">520 $us</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
			<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">

				<div class="col-md-4 col-sm-4 col-xs-4 text-center">
					
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 text-center">
					<a href="#"><i class="icon-th-large"></i></a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 text-center">
				
				</div>
			</div>
		</div>

	</div>
</div>
@endsection