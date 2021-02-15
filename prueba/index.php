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
<meta name="keywords" content="tesis huancayo, tesis, huancayo, catedratesis, contabilidad legal, asesoria, desarrollo de tesis, investigacion" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
<?php include('acceso.php') ?>
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
<!-- /css -->
</head>
<body>
<!-- banner section -->
<section class="banner-w3ls">
	
	<div class="navbar-wrapper" style="background-color: rgba(100,100,100,0.5); padding-bottom: 15px; margin-top: -10px;">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><h1><img src="images/logo.png" alt="" style="width:50px;" >Catedra Tesis</h1></a>

				</div>
				<div id="navbar" class="navbar-collapse collapse menu--valentine">
					<ul class="nav navbar-nav navbar-right cl-effect-5">
						<li class="active"><a href="index.html" class="page-scroll"><span data-hover="Inicio">Inicio</span></a></li>
						<li><a href="#service" class="page-scroll"><span data-hover="Servicios">Servicios</span></a></li>
						<li><a href="#about" class="page-scroll"><span data-hover="Nosotros">Nosotros</span></a></li>
						<li><a href="#gallery" class="page-scroll"><span data-hover="Galería">Galería</span></a></li>
						<li><a href="#noticias" class="page-scroll"><span data-hover="Noticias">Noticias</span></a></li>
						<li><a href="#contact" class="page-scroll"><span data-hover="Contactenos">Contactenos</span></a></li>
						<li><a href="blog.php" class="page-scroll"><span data-hover="Blog">Blog</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
	<div class="pogoSlider" id="js-main-slider">
		<?php $query=mysqli_query($connection, "SELECT * FROM publicacion WHERE publicacionPortada='1' AND publicacionEstado='ACTIVO' ORDER BY publicacionFecha DESC");
		while ($rowPublicacion=mysqli_fetch_array($query)) {
			$image='images/publicacion/'.$rowPublicacion['publicacionImagen'];
			$titulo=utf8_encode($rowPublicacion['publicacionTitulo']);
		?>
		<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(<?php echo $image ?>);">
			<div class="pogoSlider-slide-element" style="">
				<a href="publicacion.php/publicacion=<?php echo $rowPublicacion['publicacionId'] ?>"><h3><?php echo $titulo; ?></h3></a>
			</div>
		</div>
		<?php
		
		}
		?>

	</div><!-- .pogoSlider -->	
</section>
<!-- /banner section -->
<!-- about section -->
<section class="about-agileits" id="about">
	<div class="container-fluid">
		<div class="col-lg-6 col-md-6 col-sm-6 about-agile1 slideanim">
			<div class="hover01 column">
				<div>
					<figure><img src="images/about-img.jpg" alt="w3layouts" class="img-responsive"></figure>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 about-agile2">
			<div class="about-wthree">
				<h2 class="text-center slideanim">Nosotros</h2>
				<p class="slideanim">Catedra Tesis es un Centro de Asesoría y Elaboración de Tesis, especializados en tesis de pregrado y postgrado, para diferentes universidades del Perú, tenemos mas de 4 años asesorando a muchas estudiantes y contamos con un equipo muldisciplinario, que son catedráticos universitarios con experiencia.</p>
				<a data-toggle="modal" href="#aboutlink" class="about-link slideanim" title="Click">Leer más</a>
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="modal fade" id="aboutlink" tabindex="-1" role="dialog" aria-labelledby="aboutlink" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Cátedra Tesis</h4>
				</div>
				<div class="modal-body">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="hover01 column">
							<div>
								<figure><img src="images/about-img.jpg" alt="w3layouts" class="img-responsive"></figure>
							</div>
						</div>	
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<p>VISION: Al 2024, ser la empresa de asesoría y elaboración de tesis líder en Perú, reconocida por la calidad de servicio educativo brindado, preferida por estudiantes y profesionales peruanos.</p><br>
						<p>MISION: Somos una organización comprometida con el desarrollo profesional de nuestros asesorados logrando que sus investigaciones contribuyan a la sociedad.</p>
						<p>VALORES:<br>-Integridad. <br>-Excelencia. <br>-Comprommiso.</p>
					</div>
					<div class="clearfix"></div>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</section>
<!-- team section -->
<section class="team-agileinfo jarallax">
	<div class="container">
		<h3 class="text-center slideanim">Nuestro Equipo</h3>
		<div class="col-lg-2 col-md-2 col-sm-6 team-w3l">
			<div class="team-info">
				<div class="hover06 column slideanim">
					<div>
						<figure><img src="images/jesus_mantari.jpg" alt="w3layouts" class="img-responsive"></figure>
					</div>
				</div>
				<h4 class="slideanim">Jesus Mantari</h4>
				<p class="slideanim">Asesor</p>
				<ul class="social-icons1">
					<li class="slideanim"><a href="https://www.facebook.com/jesus.mantarimantari.1" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#" ><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					
				</ul>	
			</div>
		</div>	
		<div class="col-lg-2 col-md-2 col-sm-6 team-w3l">
			<div class="team-info">
				<div class="hover06 column slideanim">
					<div>
						<figure><img src="images/geancarlo.jpg" alt="w3layouts" class="img-responsive"></figure>
					</div>
				</div>
				<h4 class="slideanim">Gian C. Mantari</h4>
				<p class="slideanim">Asesor</p>
				<ul class="social-icons1">
					<li class="slideanim"><a href="https://www.facebook.com/giancarlos.mantarimantari" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					
				</ul>
			</div>
		</div>	
		<div class="col-lg-2 col-md-2 col-sm-6 team-w3l">
			<div class="team-info">
				<div class="hover06 column slideanim">
					<div>
						<figure><img src="images/paulpalacios.jpg" alt="w3layouts" class="img-responsive"></figure>
					</div>	
				</div>
				<h4 class="slideanim">Paul Palacios</h4>
				<p class="slideanim">Administrador</p>
				<ul class="social-icons1">
					<li class="slideanim"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					
				</ul>
			</div>	
		</div>
		<div class="col-lg-2 col-md-2 col-sm-6 team-w3l">
			<div class="team-info">
				<div class="hover06 column slideanim">
					<div>
						<figure><img src="images/michael.jpg" alt="w3layouts" class="img-responsive"></figure>
					</div>
				</div>
				<h4 class="slideanim">Michael Vidalon</h4>
				<p class="slideanim">Marketing</p>	
				<ul class="social-icons1">
					<li class="slideanim"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					
				</ul>
			</div>	
		</div>
		<div class="col-lg-2 col-md-2 col-sm-6 team-w3l">
			<div class="team-info">
				<div class="hover06 column slideanim">
					<div>
						<figure><img src="images/mayte.jpg" alt="w3layouts" class="img-responsive"></figure>
					</div>
				</div>
				<h4 class="slideanim">Maythe Santiago</h4>
				<p class="slideanim">Facilitadora</p>	
				<ul class="social-icons1">
					<li class="slideanim"><a href="https://www.facebook.com/smile99Sm" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					
				</ul>
			</div>	
		</div>
		<div class="col-lg-2 col-md-2 col-sm-6 team-w3l">
			<div class="team-info">
				<div class="hover06 column slideanim">
					<div>
						<figure><img src="images/jorge_molina.jpg" alt="w3layouts" class="img-responsive"></figure>
					</div>
				</div>
				<h4 class="slideanim">Jorge Molina</h4>
				<p class="slideanim">Tics</p>	
				<ul class="social-icons1">
					<li class="slideanim"><a href="https://www.facebook.com/jorge.molinazenteno" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					
				</ul>
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /team section -->
<!-- infraestructura section -->
<section class="testimonial-wthree">
	<div class="container">
		<h3 class="text-center slideanim">Infraestructura adecuada</h3>
		<div class="content-w3ls">
			<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
				<a href="images/infraestructura2.jpg" class="lightninBox" data-lb-group="1">
					<div class="hover15 column">
						<div>
							<figure>
								<img src="images/infraestructura2.jpg" alt="w3layouts" class="img-responsive"/>
							</figure>
						</div>
					</div>
				</a>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
				<a href="images/infraestructura3.jpg" class="lightninBox" data-lb-group="1">
					<div class="hover15 column">
						<div>
							<figure>
								<img src="images/infraestructura3.jpg" alt="w3layouts" class="img-responsive"/>
							</figure>
						</div>
					</div>
				</a>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
				<a href="images/infraestructura4.jpg" class="lightninBox" data-lb-group="1">
					<div class="hover15 column">
						<div>
							<figure>
								<img src="images/infraestructura4.jpg" alt="w3layouts" class="img-responsive"/>
							</figure>
						</div>
					</div>
				</a>	
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
				<a href="images/infraestructura5.jpg" class="lightninBox" data-lb-group="1">
					<div class="hover15 column">
						<div>
							<figure>
								<img src="images/infraestructura5.jpg" alt="w3layouts" class="img-responsive"/>
							</figure>
						</div>
					</div>
				</a>	
			</div>
		</div>
	</div>
</section>
<!-- services section -->
<section class="service-w3ls" id="service">
	<div class="container">
		<h3 class="text-center slideanim">Nuestros Servicios</h3>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<ul class="gallery-wrap list">
					<li class="gallery-item slideanim" class="ch-info">
						<div class="gallery-link">
							<img class="headshot img-responsive"  src="images/serv1.jpg" alt="w3layouts">
							<div class="hidden person-info-wrap">
								<ul class="person-info">
									<li class="filter-full_name">Elaboración de tesis</li>
									<li><p style="color:#222;">La tesis es un trabajo de investigación sistemática y exhaustivo acerca de un tópico -que es elegido por el investigador- y que, en la mayoría de los sistemas de educación formal, es el paso obligado para obtener un título universitario de grado o posgrado, y dependiendo del rango que se quiera alcanzar (licenciaturas, maestrías, doctorados, posdoctorados) la tesis a realizar tendrá un nivel de exigencia menor o mayor. Cátedra te ayuda en este paso tan importante para tu carrera, ofreciendote la elaboración (partiendo desde la concepción hasta la fase exposición) de una investigación que impulsará tu vida profesional.</p></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<h4 class="slideanim">Elaboración de tesis</h4>
			<p class="serv-w3 slideanim">Te ayudamos a elaborar tu tesis, iniciando desde el plan de tesis hasta la sustentación</p>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<ul class="gallery-wrap list">
					<li class="gallery-item slideanim" class="ch-info">
						<div class="gallery-link">
							<img class="headshot img-responsive"  src="images/serv2.jpg" alt="w3layouts">
							<div class="hidden person-info-wrap">
								<ul class="person-info">
									<li class="filter-full_name">Asesoría de Tesis</li>
									<li><p style="color:#222;">Cuando un estudiante elabora su proyecto de tesis atraviesa por una serie de dificultades dada la importancia del trabajo, en cuanto a dedicación, esfuerzo y contribución académica. Por tal, es recomendable que no la realice solo, sino que se apoye en un asesor. Cátedra de brinda ese asesoramiento que necesitarás y te ayude a desarrollar de la mejor manera y con mayor rapídez tu tesis de grado. </p></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<h4 class="slideanim">Asesoría de tesis</h4>
			<p class="serv-w3 slideanim">Te asesoramos y guíamos para que el desarrollo de tu tesis sea rápida, innovadora y correcta.</p>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<ul class="gallery-wrap list">
					<li class="gallery-item slideanim" class="ch-info">
						<div class="gallery-link">
							<img class="headshot img-responsive"  src="images/serv3.jpg" alt="w3layouts">
							<div class="hidden person-info-wrap">
								<ul class="person-info">
									<li class="filter-full_name">Reducción de similitud</li>
									<li><p style="color:#222;">Al momento de elaborar tu tesis, es importante que esta no sea semejante a otras investigaciones ya presentadas. Ahora, toda tesis pasa por el software de verificación de "plagio" TURNITING, y caer en plagio es muy grave tanto para tu proyecto de tesis y tu carrera. Cátedra te da soporte para que tu tesis no sea similar a otras y puedas pasar los controles de plagio sin problema.</p></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<h4 class="slideanim">Reducción de similitud</h4>
			<p class="serv-w3 slideanim">Te ayudamos a que tu tesis no sean similares a otras con ayuda del software Turniting.</p>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  col-md-offset-2 serv-w3layouts">
			<div class="ch-grid slideanim">
				<ul class="gallery-wrap list">
					<li class="gallery-item slideanim" class="ch-info">
						<div class="gallery-link">
							<img class="headshot img-responsive"  src="images/serv4.jpg" alt="w3layouts">
							<div class="hidden person-info-wrap">
								<ul class="person-info">
									<li class="filter-full_name">Tratamiento Estadístico</li>
									<li><p style="color:#222;">Una correcta aplicación de estadística descriptiva e inferencial en los datos de tu tesis o investigación, dan fidelidad y corroboran altamente la veracidad y aprobación en la presentación de tu documento presentado. En Cátedra contamos con profesionales que manejan y procesan tus datos estadísticos de la forma correcta, y se realizen adecuadamente las pruebas que son necesarias.</p></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<h4 class="slideanim">Tratamiento Estadístico</h4>
			<p class="serv-w3 slideanim">Apoyamos en el manejo de datos, elaboración de tablas, pruebas y validación del tema estadístico de tu tesis..</p>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<ul class="gallery-wrap list">
					<li class="gallery-item slideanim" class="ch-info">
						<div class="gallery-link">
							<img class="headshot img-responsive"  src="images/serv5.jpg" alt="w3layouts">
							<div class="hidden person-info-wrap">
								<ul class="person-info">
									<li class="filter-full_name">Correción de estilo</li>
									<li><p style="color:#222;">Además de los datos estadísticos, un buen formato y estilo (de acuerdo a las normas APA o Vancouver), hacen que tu documento esté de acuerdo a las normas establecidas en las univesidades, así como el de una correcta redacción y presentación. Confía en Cátedra, y tu tesis obtendra el formato correcto para su presentación.</p></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<h4 class="slideanim">Correción de estilo</h4>
			<p class="serv-w3 slideanim">Editamos y corregimos el tema de formatos que establece la presentación de tu tesis</p>
		</div>

		<div class="clearfix"></div>
	</div>
</section>
<!-- /services section -->
<!-- testimonial section -->
<section class="testimonial-wthree"> 
	<div class="container">
		<h3 class="text-center slideanim">Testimonios de nuestros logros</h3>
		<div id="myCarousel" class="carousel slide slideanim" data-ride="carousel" data-interval="3000" data-pause="none">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/test-img1.jpg" alt="w3layouts" class="img-circle img-responsive">
					<h4>Tatiana Soriano Meza</h4>
					<p>Gracias por mi asesoría fue importante su trabajo </p>
				</div>
				<div class="item">
					<img src="images/test-img2.jpg" alt="w3layouts" class="img-circle img-responsive">
					<h4>Carla Ramírez Santiago</h4>
					<p>Gracias por apoyarme en la redacción de mi tesis para la Universidad Continental. </p>
				</div>    
				<div class="item">
					<img src="images/test-img3.jpg" alt="w3layouts" class="img-circle img-responsive">
					<h4>Diana Romero Salomé</h4>
					<p>Gracias por la ayuda, fue muy importante su apoyo saludos desde La Merced. </p>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>	
<!-- /testimonial section -->

<!-- alianzas section -->
<section class="about-agileits" id="about">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 about-agile2">
			<div class="about-wthree">
				<h2 class="text-center slideanim">Alianzas Estratégicas</h2>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 team-w3l">
				<div class="team-info">
					<div class="hover06 column slideanim">
						<div>
							<figure><img src="images/instituto_investiacion.jpg" alt="w3layouts" class="img-responsive"></figure>
						</div>
					</div>
					<h4 class="slideanim"> Instituto Peruano de Metodología de Investigación Científica.</h4>
						
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 team-w3l">
				<div class="team-info">
					<div class="hover06 column slideanim">
						<div>
							<figure><img src="images/academia_juridica.jpg" alt="w3layouts" class="img-responsive"></figure>
						</div>
					</div>
					<h4 class="slideanim"> Academia Peruana de Ciencias Jurídicas.</h4>
						
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 team-w3l">
				<div class="team-info">
					<div class="hover06 column slideanim">
						<div>
							<figure><img src="images/instituto_investiacion.jpg" alt="w3layouts" class="img-responsive"></figure>
						</div>
					</div>
					<h4 class="slideanim"> Asociación de Investigación en Marketing y Empresas.</h4>
						
				</div>
			</div>	
		</div>
		<br>
		
		<div class="clearfix"></div>
	</div>
	
</section>
<!-- /about section -->
<!-- admission form -->
<!--
<section class="admission-w3-agileits jarallax">
	<div class="container">
		<h3 class="text-center slideanim">Crea una Cita</h3>
		<div class="content-w3ls">
			<form action="#" method="post">
				<div class="col-lg-6 col-md-6 col-sm-6 admission-w3-agile1">
					<div class="form-group slideanim"> 
						<input class="form-control" type="text" id="firstname" name="firstname" placeholder="Your First Name" title="Please enter your First Name" required="">
					</div>
			
					<div class="form-group slideanim"> 
						<input class="form-control" type="text" id="middlename" name="middlename" placeholder="Your Middle Name" title="Please enter your Middle Name" required="">
					</div>
			
					<div class="form-group slideanim"> 
						<input class="form-control" type="text" id="lastname" name="lastname" placeholder="Your Last Name" title="Please enter your Last Name" required="">
					</div>
			
					<div class="form-group slideanim"> 
						<input class="form-control" type="text" id="address" name="address" placeholder="Your Address" title="Please enter your Address" required="">
					</div>
			
					<div class="form-group slideanim"> 
						<input class="form-control" type="text" id="city" name="city" placeholder="Your City" title="Please enter your City" required="">
					</div>
			
					<div class="form-group slideanim"> 
						<input class="form-control" type="text" id="state" name="state" placeholder="Your State or Province" title="Please enter your State Or Province" required="">
					</div>
		
					<div class="form-group slideanim"> 
						<input class="form-control" type="text" id="zip" name="zip" placeholder="Zip Code" title="Please enter your Zip Code" required="">
					</div>
			
					<div class="form-group slideanim">
						<select>
							<option value="Country" selected>Country</option>
							<option value="USA">USA</option>
							<option value="Germany">Germany</option>
							<option value="Russia">Russia</option>
							<option value="England">England</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 admission-w3-agile2">
					<div class="form-group slideanim">			
						<input class="form-control" type="tel" id="usrtel" name="usrtel" placeholder="Your Phone Number" title="Please enter Your Phone Number" required="">
					</div>	
			
					<div class="form-group slideanim">	
						<input class="form-control" type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
					</div>
					
					<div class="form-group slideanim">
						<input class="form-control" type="text" id="age" name="age" placeholder="Your Age" title="Please enter Your Age" required="">
					</div>
			
					<div class="form-group slideanim">
						<select>
							<option value="Course" selected>Course</option>
							<option value="Graduate">Graduate</option>
							<option value="Under Graduate">Under Graduate</option>
							<option value="Diploma">Diploma</option>
							<option value="Post Graduate">Post Graduate</option>
							<option value="Doctorate">Doctorate</option>
						</select>
					</div>
					
					<div class="form-group slideanim">
						<select>
							<option value="Department" selected>Department</option>
							<option value="Engineering">Engineering</option>
							<option value="Medicine">Medicine</option>
							<option value="Pharmacy">Pharmacy</option>
							<option value="Law">Law</option>
							<option value="Commerce">Commerce</option>
						</select>
					</div>
					
					<div class="form-group slideanim">
						<select>
							<option value="Duration" selected>Duration</option>
							<option value="4 Years">4 Years</option>
							<option value="3 Years">3 Years</option>
							<option value="2 Years">2 Years</option>
							<option value="One Year">One Year</option>
							<option value="6 Months">6 Months</option>
						</select>
					</div>
			
					<div class="form-group slideanim">
						<textarea class="form-control" id="message" name="message" placeholder="Your Queries" title="Please enter Your Comments"></textarea>
					</div>
				</div>
				<div class="clearfix"></div>	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 admission-w3-agile3">
					<div class="form-group slideanim">	
						<input type="submit" class="register" value="Register">
						<input type="reset" class="reset" value="Reset">
					</div>
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
	</div>
</section>
 -->
<!-- /admission form -->
<!-- gallery section -->
<section class="gallery-agileits" id="gallery">
	<div class="container">
		<h3 class="text-center slideanim">Galería de Fotos</h3>
  	<div class="col-lg-12 col-md-12 col-sm-12 ">
					<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
						<a href="images/gallery_photo/img1.jpg" class="lightninBox" data-lb-group="1">
							<div class="hover15 column">
								<div>
									<figure>
										<img src="images/gallery_photo/img1.jpg" alt="w3layouts" class="img-responsive"/>
									</figure>
								</div>
							</div>
						</a>	
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 gallery-agile2 slideanim">
						<a href="images/gallery_photo/img07.jpg" class="lightninBox" data-lb-group="1">
							<div class="hover15 column">
								<div>
									<figure>
										<img src="images/gallery_photo/img07.jpg" alt="w3layouts" class="img-responsive"/>
									</figure>
								</div>
							</div>
						</a>	
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
						<a href="images/gallery_photo/img2.jpg" class="lightninBox" data-lb-group="1">
							<div class="hover15 column">
								<div>
									<figure>
										<img src="images/gallery_photo/img2.jpg" alt="w3layouts" class="img-responsive"/>
									</figure>
								</div>
							</div>
						</a>	
					</div>
					<div class="clearfix"></div><br><br>

					<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
						<a href="images/gallery_photo/img3.jpg" class="lightninBox" data-lb-group="1">
							<div class="hover15 column">
								<div>
									<figure>
										<img src="images/gallery_photo/img3.jpg" alt="w3layouts" class="img-responsive"/>
									</figure>
								</div>
							</div>
						</a>	
					</div>

					<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
						<a href="images/gallery_photo/entrevista.jpg" class="lightninBox" data-lb-group="1">
							<div class="hover15 column">
								<div>
									<figure>
										<img src="images/gallery_photo/entrevista.jpg" alt="w3layouts" class="img-responsive"/>
									</figure>
								</div>
							</div>
						</a>	
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile3 slideanim">
						<a href="images/gallery_photo/tesis_exito.jpg" class="lightninBox" data-lb-group="1">
							<div class="hover15 column">
								<div>
									<figure>
										<img src="images/gallery_photo/tesis_exito.jpg" alt="w3layouts" class="img-responsive"/>	
									</figure>
								</div>
							</div>
						</a>	
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 gallery-agile1 slideanim">
						<a href="images/gallery_photo/gal2.jpg" class="lightninBox" data-lb-group="1">
							<div class="hover15 column">
								<div>
									<figure>
										<img src="images/gallery_photo/gal2.jpg" alt="w3layouts" class="img-responsive"/>
									</figure>
								</div>
							</div>
						</a>	
					</div>
					<div class="clearfix"></div>

					
			</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /gallery section -->
<!-- portfolio section -->
<section class="portfolio-agileinfo" id="portfolio">
	<div class="container">
		<h3 class="text-center slideanim">Nuestras Publicaciones</h3>
		<ul class=" gallery-wrap list">
			<?php $query2=mysqli_query($connection, "SELECT * FROM publicacion WHERE publicacionEstado='ACTIVO' ORDER BY publicacionFecha DESC LIMIT 8");
			while ($rowPublicacion2=mysqli_fetch_array($query2)) {
				$image2='images/publicacion/'.$rowPublicacion2['publicacionImagen'];
				$titulo2=utf8_encode($rowPublicacion2['publicacionTitulo']);
				$idPublicacion=$rowPublicacion2['publicacionId'];
				$query3=mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM parrafo WHERE parrafoPublicacion='$idPublicacion' AND parrafoOrden=1"));
			?>
			<li class="gallery-item slideanim">
				<div class="gallery-link">
					<h4 class="gallery-name"><?php echo $query3['parrafoTexto']; ?></h4>
					<div class="gallery-department" style="font-size: 0.75em; font-family: 'arial'; "><?php echo $titulo2; ?></div>
					<img class="headshot img-responsive" src="<?php echo $image2; ?>" alt="w3layouts" style="width: 250px;">
					<div class="hidden person-info-wrap">
						<ul class="person-info">
							<li class="filter-full_name"><?php echo $titulo2; ?></li>
							<li><p>El 24 de febrero nuestro representante, expuso.... Nullam convallis elit a justo finibus pulvinar. Nulla tempor lacus quis metus eleifend pulvinar. Quisque et justo nulla. Phasellus non convallis augue. Vestibulum euismod, libero quis venenatis vestibulum, dolor ex interdum felis, quis dignissim est lectus nec elit. </p></li>
						</ul>
					</div>
					<ul class="page-link social-icons1">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</li>
			<?php
			
			}
			?>

		</ul>
	</div>
	<div class="lightbox-item hidden"></div>
	<div class="lightbox-bg hidden"></div>
	<div class="lightbox-img hidden"></div>
</section>
<!-- /portfolio section -->


<!-- contact section -->
<section class="contact-wthree jarallax" id="contact">
	<div class="container">
		<h3 class="text-center slideanim">Contactenos</h3>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-agile1">
			<ul class="address-w3-agile">
				<li class="slideanim"><i class="fa fa-map-marker" aria-hidden="true"></i><p class="extra">Pasaje Santa María Nro. 164, Chilca - Huancayo</p></li>
				<li class="slideanim"><i class="fa fa-phone" aria-hidden="true"></i><p>964 619 886</p></li>
				<li class="slideanim"><i class="fa fa-envelope-o" aria-hidden="true"></i><p><a href="mailto:tesis@catedratesis.com.pe">tesis@catedratesis.com.pe</a></p></li>
			</ul>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-agile2 slideanim">
			<h4 class="slideanim">Visitanos en:</h4>
			<ul class="social-icons2">
				<li class="slideanim"><a href="https://www.facebook.com/pg/AsesoriaElaboracionDeTesis/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li class="slideanim"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li class="slideanim"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li class="slideanim"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li class="slideanim"><a href="https://api.whatsapp.com/send?phone=51945896830&text=info%por%favor"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
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

<a href="https://api.whatsapp.com/send?phone=51945896830&text=info%por%favor" class="cd-wapp" target="Whatsapp" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>

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