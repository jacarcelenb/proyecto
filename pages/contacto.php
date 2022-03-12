<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LIFE FORCE PANDO</title>
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">

		<link href="../css/owl.carousel.css" rel="stylesheet">
		<link href="../css/owl.theme.css" rel="stylesheet">
		<link href="../css/owl.transitions.css" rel="stylesheet">
		<link href="../css/cs-select.css" rel="stylesheet">
		<link href="../css/bootstrap-datepicker3.min.css" rel="stylesheet">
		<link href="../css/freepik.hotels.css" rel="stylesheet">
		<link href="../css/nivo-lightbox.css" rel="stylesheet">
		<link href="../css/nivo-lightbox-theme.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">




		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

		<script src="../js/modernizr.custom.min.js"></script>
	</head>
	<body>
		<div class="preloader"></div>
		<header class="header transp sticky"> <!-- available class for header: .sticky .center-content .transp -->
			<nav class="navbar navbar-inverse">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="../images/logo3.png" alt="logo"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li ><a href="index.php">Inicio</a>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="iniciarsesion.php">Iniciar Sesion</a></li>
								</ul>
						</li> 
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="historia.php">Nosotros</a></li>
									<li ><a href="independencia.php">Independencia</a></li>
									<li ><a href="misionvision.php">Mision/Vision</a></li>
                                    <li ><a href="directiva.php">Asamblea</a></li>
									<li ><a href="acercade.php">Acerca de</a></li>
									<li ><a href="gobierno.php">Gobierno</a></li>
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="proyectos.php?tipo_noticia=Proyectos">Proyectos</a></li>
									<li ><a href="proyectosNuevos.php?tipo_noticia=Nuevos Proyectos">Ingresar Nuevos Proyectos</a></li>
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restauración<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="salud.php">Cuidado de la Salud</a></li>
									<li ><a href="educacion.php">Educación</a></li>
                                    <li ><a href="comunicacion.php">Medios de Comunicación</a></li>
									<li ><a href="finanza.php">Sistema Financiero</a></li>
									<li ><a href="web.php">Plataforma Web</a></li>
									<li ><a href="gia.php">GIA</a></li>
									<li ><a href="alimentos.php">Alimentos</a></li>
									<li ><a href="asambleas.php">Asambleas</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Noticias <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="noticias.php?tipo_noticia=Noticias">Noticias</a></li>
									<li ><a href="noticiasAc.php">Actividades</a></li>
                                    <li ><a href="noticiasBlog.php">Blogs</a></li>
								</ul>
							</li>
						   <li ><a href="videos.php">Videos</a></li>
						<li ><a href="galeria.php?tipo_fotos=Galeria">Galeria</a></li>
                           <li ><a href="contacto.php">Contacto</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
					
				</div><!-- /.container-fluid -->
			</nav>
		</header>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>contacto</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<!--    INICIO CONTENIDO     -->		<div class="mg-page">
			<div class="container">
				<div class="row">
					
					<div class="col-md-5">
						<h2 class="mg-sec-left-title" >Envie un mensaje</h2>
						<form class="clearfix" method="POST"  action="formcontacto.php" >
							<div class="mg-contact-form-input">
								<label for="full-name">Su Nombre</label>
								<input type="text" class="form-control" id="full-name">
							</div>
							<div class="mg-contact-form-input">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" id="email">
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Asunto</label>
								<input type="text" class="form-control" id="subject">
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Mensaje</label>
								<textarea class="form-control" id="subject" rows="5"></textarea>
							</div>
							<input type="submit" class="btn btn-dark-main pull-right" value="Enviar">
						</form>
					</div>
                    <div class="col-md-7">
						<h2 class="mg-sec-left-title">Telefonos y Direcciones</h2>
						<p>Puede comunicarse en las siguientes Telefonos y Celulares.</p>
						
					</div>
                    
					<div class="col-md-6"> 
							<p>
									<!-------<strong><i class="fa fa-home"></i> Dirección:</strong> Av. Ayacuho #633, Edificio Arcangel piso 2 of. 201<BR>--->
									<!---------<strong><i class="fa fa-phone"></i> Telefono:</strong> 591-4-4528646<BR>
									<strong><i class="fa fa-mobile-phone"></i> Celular:</strong> 591-70798095<BR>
									<strong><i class="fa fa-whatsapp"></i> WhatsApp:</strong> 591-70798095<BR><BR>------>
									Cochabamba - Bolivia
								</p>
				
								<p>
									<a href="mailto:lifeforce.pando@gmail.com">lifeforce.pando@gmail.com</a>
								</p>
					</div>
                    <!------
                    <div class="col-md-7">
						<h2 class="mg-sec-left-title">Mapa de Ubicacion</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3807.738343411652!2d-66.15884513499071!3d-17.376319268472898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d-17.3762729!2d-66.1566042!4m3!3m2!1d-17.376262699999998!2d-66.1566364!5e0!3m2!1ses!2sbo!4v1538431420328" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
                    ----------->
				</div>
			</div>
		</div>
<BR><BR>        
<!--    FIN CONTENIDO     -->
		<footer class="mg-footer">
			<div class="mg-footer-widget">
				<div class="container">
					<div class="row">
                    
						<div class="col-md-6 col-sm-6">
							<div class="widget">
								<h2 class="mg-widget-title">Contactenos</h2>
								<p>
									<!-----<strong><i class="fa fa-home"></i> Dirección:</strong> Av. Ayacuho #633, Edificio Arcangel piso 2 of. 201<BR>----->
									<!--------<strong><i class="fa fa-phone"></i> Telefono:</strong> 591-4-4528646<BR>
									<strong><i class="fa fa-mobile-phone"></i> Celular:</strong> 591-70798095<BR>
									<strong><i class="fa fa-whatsapp"></i> WhatsApp:</strong> 591-70798095<BR><BR>------>
									Pando - Bolivia
								</p>
								
								<h2 class="mg-widget-title">Sitios de Referencia</h2>
								<p> 
								PGSD:  <a href="https://pgovsd.agency/">https://pgovsd.agency/</a><BR>
								Pasorapa:  <a href="https://lifeforcebo-pasorapa.org/">https://lifeforcebo-pasorapa.org/</a><BR>
								Cochabamba:  <a href="https://lifeforcebo-cochabamba.org/">https://lifeforcebo-cochabamba.org/</a><BR>
								Pando:  <a href="https://lifeforcebo-pando.org/">https://lifeforcebo-pando.org/</a><BR>
								Beni:  <a href="https://lifeforcebo-beni.org/">https://lifeforcebo-beni.org/</a><BR>
								Santa Cruz:  <a href="https://lifeforcebo-santacruz.org/">https://lifeforcebo-santacruz.org/</a><BR>	
								Llallagua:  lifeforcebo-llallagua.org<BR>
								Marban:  lifeforcebo-marban.org<BR>
								</p>
				
								<p>
									<a href="mailto:lifeforce.pando@gmail.com">lifeforce.pando@gmail.com</a>
								</p>
							</div> 
						</div>
                        
						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h2 class="mg-widget-title">Suscribete</h2>
								<p>Suscribete a nuestro formulario de contacto para que te mandemos novedades.</p>
								<form class="clearfix" method="POST"  action="formcontacto.php" >
									<p>
										<input type="email" class="form-control" placeholder="Ingresa tu Correo">
									</p>
									<input type="submit" class="btn btn-main" value="Suscribe">
								</form>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h2 class="mg-widget-title">Paginas Sociales</h2>
								<p>Tambien puede encontrarnos en nuestras paginas Sociales, le envitamos a visitarnos.</p>
								<ul class="mg-footer-social">
									<li><a href="https://www.facebook.com/Identigene-1430462793845709/?tn-str=k*F"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mg-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; 2021 Diseño y Desarrollo de Sistemas Web. <a href="http://www.tunari.com"><strong>Lic. Mariela Gomez O.</strong></a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<script src="../js/jssor.slider.mini.js"></script>
		<script src="../js/classie.js"></script>
		<script src="../js/selectFx.js"></script>
		<script src="../js/bootstrap-datepicker.min.js"></script>
		<script src="../js/starrr.min.js"></script>
		<script src="../js/nivo-lightbox.min.js"></script>
		<script src="../js/jquery.shuffle.min.js"></script>
		<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="../js/gmaps.min.js"></script>
		<script src="../js/jquery.parallax-1.1.3.js"></script>
		<script src="../js/script.js"></script>
	</body>
</html>