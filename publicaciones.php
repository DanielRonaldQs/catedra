<?php include('acceso.php') ?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="es">
<head>
<title>Tesis Huancayo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="tesis huancayo, tesis, huancayo, catedratesis, contabalidad legal, asesoria, desarrollo de tesis, catedra tesis" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cousine&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" >
<style>
	@keyframes latido {
  0% {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }
  70% {
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3);
  }
  100% {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }
}
.latido{
  -webkit-animation: latido 1s infinite;
   animation-name: latido 1s infinite;
  }
  
	

	.person-info{
		background-image: url('images/logo-fondo-p.png');
		background-repeat: no-repeat;
		background-position: center;
	}
	.person-info p{
		text-align:justify;
		
	}
</style>
<!-- /css -->
<!-- /css -->
</head>
<body>
<!-- banner section -->
<section class="banner-w3ls">
	
	<div class="navbar-wrapper" style="background-color: rgba(10,10,10,0.8); padding-bottom: 15px; margin-top: -10px;">
		<div class="container">
			<div>
				<ul class="social-icons3">
					<li><a href="https://www.facebook.com/pg/AsesoriaElaboracionDeTesis/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li ><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li ><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<li ><a href="https://api.whatsapp.com/send?phone=51964619886&text=Hola%20quiero%20más%20información%20sobre%20el%20servicio%20de%20Tesis"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://www.catedratesis.com.pe"><h1><img src="images/logo.png" alt="logo tesis huancayo" style="width:50px;" >Cátedra Tesis</h1></a>

				</div>
				<div id="navbar" class="navbar-collapse collapse menu--valentine">
					<ul class="nav navbar-nav navbar-right cl-effect-5">
						<li class="active"><a href="http://www.catedratesis.com.pe" class="page-scroll"><span data-hover="Inicio">Inicio</span></a></li>
						<li><a href="#service" class="page-scroll"><span data-hover="Servicios">Servicios</span></a></li>
						<li><a href="#about" class="page-scroll"><span data-hover="Nosotros">Nosotros</span></a></li>
						<li><a href="#gallery" class="page-scroll"><span data-hover="Galería">Galería</span></a></li>
						<li><a href="#noticias" class="page-scroll"><span data-hover="Publicaciones">Publicaciones</span></a></li>
						<li><a href="#contact" class="page-scroll"><span data-hover="Contactenos">Contactenos</span></a></li>
						<li><a href="libros.php" class="page-scroll"><span data-hover="Libros">Libros</span></a></li>
						
					</ul>
				</div>
				
			</nav>
		</div>
	</div>

</section>
<!-- /banner section -->

<!-- /gallery section -->
<!-- publicacion section -->
<section class="portfolio-agileinfo jarallax" id="noticias">
	<div class="container">
        
        <?php $query2=mysqli_query($connection, "SELECT * FROM publicacion WHERE publicacionEstado='ACTIVO' ORDER BY publicacionFecha DESC ");
        	$i=0;
			while ($rowPublicacion2=mysqli_fetch_array($query2)) {
				$image2='images/publicacion/'.$rowPublicacion2['publicacionImagen'];
				$titulo2=utf8_encode($rowPublicacion2['publicacionTitulo']);
				$idPublicacion=$rowPublicacion2['publicacionId'];
				$publicacionFecha=$rowPublicacion2['publicacionFecha'];
				$query3=mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM tesisparrafo WHERE parrafoPublicacion='$idPublicacion' AND parrafoOrden=1"));
				$i++;
				if ($i==1) {
					echo "<div class='row'>";
				}
				?>
			            
			       
			            <div class="col-lg-4 col-md-4 col-sm-4 team-w3l" >
			                <div class="team-info" style="background-color: rgba(10,10,10,0.8);">
			                	<a href="publicacion-detalle.php?publicacionId=<?php echo $idPublicacion; ?>">
			                		<div class="hover15 column"><figure><img src="<?php echo $image2; ?>" alt="w3layouts" class="img-responsive"></figure></div>
			                	</a><br>
			                    <h4 style="text-align: center;"><strong><a href="publicacion-detalle.php?publicacionId=<?php echo $idPublicacion; ?>" style="color: white;"><?php echo $titulo2; ?></a></strong></h4>
			                	<p style="position: absolute; bottom: 37px; right: 30px; color: #fff;"><?php echo $publicacionFecha; ?></p>
			                </div>
			            </div>
			        <?php
				
			
        	if ($i==3) {
        		echo "</div><br>";
        	}
         }
        ?>
        
    </div>
    <div class=" " style="position: relative; float: left; width: 100%; text-align: center;">
				<a href="publicaciones.php" class="enlace-publicaciones" title="Click">Leer más</a>
        </div>
</section>
<!-- /portfolio section -->


<!-- contact section -->
<section class="contact-wthree jarallax" id="contact">
	<div class="container">
		<h3 class="text-center slideanim">Contactenos</h3>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-agile1">
			<ul class="address-w3-agile">
				<a href="https://www.google.es/maps/place/C%C3%A1tedra+Tesis+-+Tesis+Huancayo/@-12.0867356,-75.2065518,17z/data=!3m1!4b1!4m5!3m4!1s0x910e971e804bd8c1:0xbcdd00ff1c13b37e!8m2!3d-12.0867409!4d-75.2043631" target="_blank"><li class="slideanim"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="extra">Pasaje Santa María Nro. 164, Chilca - Huancayo</p></li></a>
				<a href="tel:+51964619886"><li class="slideanim"><i class="fa fa-phone" aria-hidden="true"></i><p>964 619 886</p></li></a>
				<li class="slideanim"><i class="fa fa-envelope-o" aria-hidden="true"></i><p><a href="mailto:tesis@catedratesis.com.pe">tesis@catedratesis.com.pe</a></p></li>
			</ul>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-agile2 slideanim">
			<h4 class="slideanim">Visitanos en:</h4>
			<ul class="social-icons2">
				<li class="slideanim"><a href="https://www.facebook.com/pg/AsesoriaElaboracionDeTesis/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				
				<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li class="slideanim"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li class="slideanim"><a href="https://api.whatsapp.com/send?phone=51964619886&text=Hola%20quiero%20más%20información%20sobre%20el%20servicio%20de%20Tesis"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
			</ul>
			<!--<h4>Subscribe To Our News Letter</h4>
			<div class="subscribe">
				<form action="#" method="post">
					<div class="form-group1 slideanim">
						<input class="form-control" id="email1" name="email1" placeholder="Enter Your Email Address" type="email" required>
					</div>
					<div class="form-group2 slideanim">
						<button class="btn btn-outline btn-lg" type="submit">Subscribe</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>-->	
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact section -->
<!-- map section -->
<!--<div class="map slideanim">
	<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1243.308248071965!2d-75.2047981707639!3d-12.086675688089894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA1JzEyLjAiUyA3NcKwMTInMTUuMyJX!5e1!3m2!1ses!2spe!4v1550619550210" style="border:0" allowfullscreen></iframe>

</div>-->
<!-- /map section -->
<!-- copyright section -->
<div class="copyright-w3-agileits">
	<div class="container">
		<p class="copyright">© 2018 Tesis Catedra. Todos los derechos reservados | Diseñado por <a href="https://w3layouts.com/" target="_blank">w3layouts</a> y <a href="www.molidata.net" target="_blank">Molidata</a></p>
	</div>
</div>
<!-- /copyright section -->

<a href="https://api.whatsapp.com/send?phone=51964619886&text=Hola%20quiero%20más%20información%20sobre%20el%20servicio%20de%20Tesis" class="cd-wapp latido" target="Whatsapp" title="Whatsapp"><strong class=""><i class="fa fa-whatsapp"></i></strong></a>

<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->	
</body>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/modernizr.min.js"></script> 
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/top.js"></script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<script src="js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- js for portfolio -->
<script src='js/TweenMax.min.js'></script>
<script src="js/portfolio.js"></script>
<!-- /js for portfolio -->
<!-- js for gallery -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for gallery -->
<!-- js for banner -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js for banner -->
<!-- /js files -->
</html>