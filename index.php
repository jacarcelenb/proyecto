 
<?php include('dbcontroller/database.php');
?>
 
 <!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/esolog.png">
		<title>A-Life Imbabura Renaciente</title>
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">

		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.css" rel="stylesheet">
		<link href="css/owl.transitions.css" rel="stylesheet">
		<link href="css/cs-select.css" rel="stylesheet">
		<link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
		<link href="css/freepik.hotels.css" rel="stylesheet">
		<link href="css/style15.css" rel="stylesheet">


		<script src="js/modernizr.custom.min.js"></script>
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
						<a class="navbar-brand" href="#">
						<img src="images/logoc1.png" alt="logo">
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li ><a href="index.php">Inicio</a></li> 
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="pages/historia.php">Nosotros</a></li>
									<li ><a href="pages/independencia.php">Independencia</a></li>
									<li ><a href="pages/misionvision.php">Mision/Vision</a></li>
                                    <li ><a href="pages/directiva.php">Asamblea</a></li>
									<li ><a href="pages/acercade.php">Acerca de</a></li>
									<li ><a href="pages/gobierno.php">Gobierno</a></li>
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="pages/proyectos.php">Proyectos</a></li>
									<li ><a href="pages/proyectosNuevos.php">Ingresar Nuevos Proyectos</a></li>
									<li ><a href="pages/formatoproyecto.php">Formulario para Proyectos</a></li>
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">¿Qué restauramos?<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="pages/salud.php">Salud y Bienestar</a></li>
									<li ><a href="pages/educacion.php">Educación</a></li>
                                    <li ><a href="pages/comunicacion.php">Comunicaciones</a></li>
									<li ><a href="pages/finanza.php">Finanzas</a></li>
									<li ><a href="pages/gia.php">GIA</a></li>
									<li ><a href="pages/alimentos.php">LIFE FORCE Ecuador</a></li>
									<li ><a href="pages/asambleas.php">Asamblea Life Imbabura Renaciente</a></li>
									<li ><a href="pages/ambiente.php">Ambiente</a></li>
									<li ><a href="pages/serviciosfamilia.php">Servicios de la familia</a></li>
									<li ><a href="pages/seguridad.php">Seguridad</a></li>
									<li ><a href="pages/infraestructura.php">Infraestructura y Obras públicas</a></li>
									<li ><a href="pages/gestion.php">Gestión de proyectos</a></li>
									<li ><a href="pages/restauracion.php">Restauración</a></li>



								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Noticias <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="pages/noticias.php">Noticias</a></li>
									<li ><a href="pages/noticiasAc.php">Actividades</a></li>
                                    <li ><a href="pages/noticiasBlog.php">Blogs</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Videos<span class="caret"></span></a>
								<ul class="dropdown-menu">
								    <li ><a href="pages/videos.php">Videos Subidos</a></li>
									<li ><a href="pages/videoslinks.php">Videos - Enlace</a></li>
								
								</ul>
							</li>
						 
						<li ><a href="pages/galeria.php">Galeria</a></li>
						<li ><a href="pages/contacto.php">Contacto</a></li>
                          
						</ul>
					</div><!-- /.navbar-collapse -->
					
				</div><!-- /.container-fluid -->
			</nav>
		</header>


		<div id="mega-slider" class="carousel slide " data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#mega-slider" data-slide-to="0" class="active"></li>
				<li data-target="#mega-slider" data-slide-to="1"></li>
				<li data-target="#mega-slider" data-slide-to="2"></li>
				<li data-target="#mega-slider" data-slide-to="3"></li>
				<li data-target="#mega-slider" data-slide-to="4"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item beactive">
					<img src="images/funda8.jpg" alt="...">
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Prueba de paternidad en ausencia del padre </h2>
						<p>Madre, niño/s, supuestos abuelos paternos </p>---->
					</div>
				</div>
				
				<div class="item">
					<img src="images/cfoto2.jpg" alt="..." >
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Estudios forenses, (violación, asesinato) </h2>
						<p>Muestras de evidencia, muestras del sospechoso, muestras de la víctima</p>---->
					</div>
				</div>
				<div class="item">
					<img src="images/cfoto3.jpeg" alt="...">
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Estudios forenses, (violación, asesinato) </h2>
						<p>Muestras de evidencia, muestras del sospechoso, muestras de la víctima</p>---->
					</div>
				</div>
				<div class="item">
					<img src="images/cfoto4.jpeg" alt="...">
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Estudios forenses, (violación, asesinato) </h2>
						<p>Muestras de evidencia, muestras del sospechoso, muestras de la víctima</p>---->
					</div>
				</div>
				<div class="item">
					<img src="images/cfoto5.jpeg" alt="...">
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Prueba de paternidad en ausencia del padre </h2>
						<p>Madre, niño/s, supuestos abuelos paternos </p>---->
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#mega-slider" role="button" data-slide="prev">
			</a>
			<a class="right carousel-control" href="#mega-slider" role="button" data-slide="next">
			</a>
		</div>

		<div class="mg-book-now">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&nbsp;
					</div>
				</div>
			</div>
		</div>

        
<!--servicios -->
		<div class="mg-rooms-cols">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-sec-title">
							<h2>¿QUÉ RESTAURAMOS? </h2>
							<p>"Restaurando los derechos inherentes de los seres humanos" </p>
						</div>
                     </div>   
                    <div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta1.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2 style="color: #258e49;
    background-color: #CADA2A;">GIA</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>La Agencia de Inteligencia Global fue controlada anteriormente por diferentes entidades y desde entonces ha sido depurada y reestructurada para operar como la Agencia de Aplicación del Repositorio Global. </p>
								<a href="pages/gia.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta2.png" alt="img11" class="img-responsive" witdh="750" height="500">
							<figcaption>
								<h2 
								style="color: #258e49;
    background-color: #CADA2A;">LIFE FORCE ECUADOR</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Une personas de honor, con discernimiento, responsabilidad integridad para propiciar el desarrollo armónico de la sociedad</p>
								<a href="pages/alimentos.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta3.png" alt="img11" class="img-responsive" witdh="750" height="500">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Asamblea Life Imbabura Renaciente</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>La Asamblea cumple la función de Organizar y velar por el cumplimiento de los mandatos de ASAMBLEA IMBABURA RENACIENTE,  en los respectivos países.</p>
								<a href="pages/asambleas.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta4.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Salud y Bienestar</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>	Atención médica diseñada para enseñar a las personas cómo mantener una salud óptima.</p>
								<a href="pages/salud.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta5.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Finanzas</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>El sistema finaciero global ha sido monopolizado y manipulado por menos del 1% de la poblacion durante mucho tiempo.</p>
								<a href="pages/finanza.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta6.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Educación</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Ante los actuales desafíos principalmente los resultados de la pandemia en la calidad de la educación en nuestros niños y jóvenes.</p>
								<a href="pages/educacion.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta7.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Ambiente</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Hoy en día estamos aconteciendo a lo que se denominaría como una crisis ambiental global.</p>
								<a href="pages/ambiente.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta8.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Servicios de la familia</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>la familia es una sociedad natural, que existe antes que el Estado o cualquier otra comunidad, y que posee derechos propios e inalienables.</p>
								<a href="pages/serviciosfamilia.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta9.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Seguridad</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Este comité actuara cuando exista una emergencia, crisis o desastre de carácter antropogénico o natural.</p>
								<a href="pages/seguridad.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta10.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Comunicaciones</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Los gobiernos han tratado de reprimir la voz de la gente bloqueando a quienes están dispuestos a decir la verdad.</p>
								<a href="pages/comunicacion.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta11.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Infraestructura y Obras públicas</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Los responsables de formular, implementar y evaluar políticas, regulaciones, planes, programas y proyectos.</p>
								<a href="pages/infraestructura.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta12.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Gestión de proyectos</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Este comité de gestión de proyectos es el encargado de la planificación, ejecución y seguimiento de un proyecto desde el inicio hasta el fin .</p>
								<a href="pages/gestion.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>

					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/resta13.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2
								style="color: #258e49;
    background-color: #CADA2A;">Restauración</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Es responsable de evaluar las necesidades de las personas y las comunidades en las que viven,</p>
								<a href="pages/restauracion.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					
					
					

				</div>
				

				</div>


		<!-- <div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
		</div> -->
		<div class="mg-about parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-7" align="justify">
						<h2 class="mg-sec-left-title">Acerca de Nosotros </h2>
						<p> <strong>ASAMBLEA IMBABURA RENACIENTE, </strong> 
						Apoyamos proyectos que busquen el desarrollo integral de los ciudadanos Imbabureños, especialmente sectores vulnerables y excluidos de los procesos económicos y sociales, respetando el medio ambiente. </p>
					</div>
					<div class="col-md-5">
						<div class="video-responsive">
				
						<div class="mapouter">
						<div class="gmap_canvas">
							<iframe width="500" height="281" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.%20Jaime%20Roldos%20y%20S%C3%A1nchez%20y%20Cifuentes&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<a href="https://www.whatismyip-address.com"></a>
							<br>
							<style>.mapouter{position:relative;text-align:right;height:281px;width:500px;}</style>
							<a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:281px;width:500px;}</style>
						</div>
					</div>
                            
						</div>
					</div>
				</div>
				
			</div>
		</div>
				
<!------------------------------------->	
				
<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="select-room">
									<div class="mg-saerch-room">
										<div class="mg-book-now mt80">
												<div class="row">
													<div class="col-md-3">
														<h2 class="mg-bn-title">Asambleas <span class="mg-bn-big">Reuniones de Asambleas de Ecuador</span> </h2>
														<p style="color:white"> <strong>ASAMBLEA IMBABURA RENACIENTE, </strong> ASAMBLEA LIFE IMBABURA RENACIENTE mantiene reuniones públicas, a las cuales esta cordialmente invitado. </p>
														
														<p style="color:white">Fechas de asambleas:</p>
														<p style="color:white">
														-Sábado 22 de enero de 2022, ya realizada.
														<br>
														-Domingo 06 de febrero de 2022, ya realizada.
														<br>
														-Sábado 19 de febrero, ya realizada.
														<br>
														-Sábado 19 de marzo del 2022.
			
													</p>
														<p style="color:white">Horario de eventos o reuniones: primer sábado de cada mes </p>
														
														<p style="color:white">Reunión por Zoom ID de reunión:</p>
													
														<p style="color:white">Código de acceso:</p>
									
													</div>
													<div class="col-md-3">
														<h2 class="mg-bn-title">Inscripción  <span class="mg-bn-big">Formulario de Inscripción a nuevos Miembros</span></h2>
														<p style="color:white"> <strong>ASAMBLEA IMBABURA RENACIENTE, </strong> En este formulario puede inscribirse , para poder ser miembro de este y participar.</p>
														<a href="pages/inscripcion.php" class="btn btn-main">Inscripción</a>
													</div>
													<div class="col-md-3">
														<h2 class="mg-bn-title">Quejas  <span class="mg-bn-big">Formulario de Quejas y Sugerencias</span></h2>
														<p style="color:white"> <strong>ASAMBLEA IMBABURA RENACIENTE, </strong> En este formulario puede ingresar alguna queja o sugerencia.</p>
														<a href="pages/quejas.php" class="btn btn-main">Formulario</a>
													</div>

													<div class="col-md-3">
														<h2 class="mg-bn-title">Login</h2>
														<a href="pages/sesion1.php" class="btn btn-main">Iniciar Sesion</a>
													</div>
												</div>
										</div>
									</div>
									
								</div>
								
								
								
							</div>				
<!--------------------------------------->
				
<!----------- PROYECTOS -------------->
<div class="mg-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-booking-form">

									
									<div class="mg-available-rooms">
										<h2 class="mg-sec-left-title">Nuestros Proyectos</h2>
										<div class="mg-avl-rooms">
										 
										<?php
          $query = "SELECT * FROM proyectos";
          $result_proyectos = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_proyectos)) { ?>
            <div class="mg-avl-room">
												<div class="row">
													<div class="col-sm-5">
														<a href="#"> <img src="data:<?php echo $row['tipoimagen1']; ?>;base64,<?php echo  base64_encode($row['ruta_foto1']); ?>" alt="" class="img-responsive" width="320" height="240" ></a>
													</div>
													<div class="col-sm-7">
														<h3 class="mg-avl-room-title"><a href="#"><?php echo $row['titulo']; ?></a> <span><?php echo $row['fecha']; ?></span></h3>
														<p> <?php echo $row['contenido']; ?></p>
														<div class="row mg-room-fecilities">
															<div class="col-sm-4">
																<ul>
																	<li>  &#9830; <?php echo $row['departamento']; ?> </li>
																	
																</ul>
															</div>
															<div class="col-sm-8">
																<ul>
																	<li>  &#9830; <?php echo $row['provincia']; ?></li>
																	
																</ul>
															</div>
														</div>
														<a href="pages/proyectosDetalles.php?id=<?php echo $row['id']?>" class="btn btn-main">Mas información</a>
														
													</div>
												</div>
											</div>
        
          <?php } ?>
							
									  </div>
									</div>
								</div>
						 	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!----------- PROYECTOS  ----------->
<!------------- Galeria --------------->
<div class="mg-about parallax">

					<div class="col-md-1" align="justify"></div>
					<div class="col-md-10" align="justify">
						<h2 class="mg-sec-left-title">NUESTRA DIVERSIDAD </h2>
					</div>

</div>
			
<div class="mg-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-booking-form">
									<div class="mg-available-rooms">
										<div class="mg-avl-rooms">


												<div class="row">
													<div class="col-md-10 col-sm-10">
							<div class="widget">
								
								<ul class="mg-instagram">
									<li><img src="images/diversidad1.png" alt="" width="350"></li>
									<li><img src="images/diversidad2.jpg" alt="" width="350"></li>
									<li><img src="images/diversidad3.jpg" alt="" width="350"></li>

									<li><img src="images/diversidad4.jpg" alt="" width="350"></li>
									<li><img src="images/diversidad5.jpg" alt="" width="350"></li>
									<li><img src="images/diversidad6.jpg" alt="" width="350"></li>
									
									<li><img src="images/diversidad7.jpg" alt="" width="350"></li>
									<li><img src="images/diversidad8.jpg" alt="" width="350"></li>
									<li><img src="images/diversidad9.jpeg" alt="" width="350"></li>
									
								</ul>
							</div>
						</div>
													
												</div>

											
										</div>
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
										

						
<!----- Galeria -------------->

<!----------- VIDEOS --->
<div class="mg-about parallax">

					<div class="col-md-1" align="justify"></div>
					<div class="col-md-10" align="justify">
						<h2 class="mg-sec-left-title">NUESTROS VIDEOS </h2>
					</div>


</div>
			
<div class="mg-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-booking-form">
									<div class="mg-available-rooms">
										<div class="mg-avl-rooms">

												<div class="row">
													 
													<?php
					
					$query = "SELECT * FROM videoenlace";
					$result_proyectos = mysqli_query($conn, $query);    
		  
					while($row = mysqli_fetch_assoc($result_proyectos)) { ?>
					   
					   <div class="col-md-4">  
					   <video width="320" height="240" controls>
  <source src="<?php echo $row['enlace']; ?>" >
  </video>
							  </div>
							  
					<?php } ?>
												
																										
												</div>

											
										</div>
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!----------- VIDEOS --->
<!--    FIN CONTENIDO     -->
		<footer class="mg-footer">
			<div class="mg-footer-widget">
				<div class="container">
					<div class="row">
                    
						<div class="col-md-6 col-sm-6">
							<div class="widget">
								<h2 class="mg-widget-title">Contactenos</h2>
								<p>
									<strong><i class="fa fa-home"></i> Dirección:</strong> Av. Jaime Roldos y Sánchez y Cifuentes<BR>
									<strong><i class="fa fa-phone"></i> Telefono:</strong> 062558009<BR>
									<strong><i class="fa fa-mobile-phone"></i> Celular:</strong> 0997693293 - 0986176366<BR>
									Ibarra -Ecuador 
								</p>
								
									<a href="mailto:secretaria.lifeir@gmail.com ">secretaria.lifeir@gmail.com </a>
								</p>
							</div>
						</div>
                        
						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h2 class="mg-widget-title">Suscribete</h2>
								<p>Suscribete a nuestro formulario de contacto para que te mandemos novedades.</p>
								<form   action="pages/contacto.php" >
									<input type="submit" class="btn btn-main" value="Suscribe">
								</form>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h2 class="mg-widget-title">Paginas Sociales</h2>
								<p>Tambien puede encontrarnos en nuestras paginas Sociales, le envitamos a visitarnos.</p>
								<ul class="mg-footer-social">
									<li><a href="https://www.facebook.com/A-Life-Imbabura-Renaciente-102675249036356/?notif_id=1646186639351565&notif_t=page_invite_accept&ref=notif"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://instagram.com/a.lifeimbaburarenaciente?utm_medium=copy_link "><i class="fa fa-instagram"></i></a></li>
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
							<p>&copy; 2022 A life Imbabura Renaciente.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jssor.slider.mini.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/starrr.min.js"></script>
		<script src="js/nivo-lightbox.min.js"></script>
		<script src="js/jquery.shuffle.min.js"></script>
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<script src="js/script.js"></script>
		<!--Start of Tawk.to Script-->
		<script src="//code.tidio.co/jhuuwsjnqzc9notqy4j3zifzwtpq4q99.js" async></script>
	</body>
</html>