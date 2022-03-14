 
<?php include('dbcontroller/database.php');
?>
 
 <!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<link href="css/style.css" rel="stylesheet">

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
						<a class="navbar-brand" href="#"><img src="images/logo1.png" alt="logo"></a>
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
								</ul>
							</li>
                            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restauración<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="pages/salud.php">Cuidado de la Salud</a></li>
									<li ><a href="pages/educacion.php">Educación</a></li>
                                    <li ><a href="pages/comunicacion.php">Medios de Comunicación</a></li>
									<li ><a href="pages/finanza.php">Sistema Financiero</a></li>
									<li ><a href="pages/web.php">Plataforma Web</a></li>
									<li ><a href="pages/gia.php">GIA</a></li>
									<li ><a href="pages/alimentos.php">Alimentos</a></li>
									<li ><a href="pages/asambleas.php">Asambleas</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Noticias <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li ><a href="pages/noticias.php?tipo_noticia=Noticias">Noticias</a></li>
									<li ><a href="pages/noticiasAc.php">Actividades</a></li>
                                    <li ><a href="pages/noticiasBlog.php">Blogs</a></li>
								</ul>
							</li>
						   <li ><a href="pages/videos.php">Videos</a></li>
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
					<img src="images/funda2.jpg" alt="..." >
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Estudios forenses, (violación, asesinato) </h2>
						<p>Muestras de evidencia, muestras del sospechoso, muestras de la víctima</p>---->
					</div>
				</div>
				<div class="item">
					<img src="images/funda4.jpg" alt="...">
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Estudios forenses, (violación, asesinato) </h2>
						<p>Muestras de evidencia, muestras del sospechoso, muestras de la víctima</p>---->
					</div>
				</div>
				<div class="item">
					<img src="images/funda5.jpg" alt="...">
					<div class="carousel-caption">
						<!----<img src="images/stars.png" alt="">
						<h2>Estudios forenses, (violación, asesinato) </h2>
						<p>Muestras de evidencia, muestras del sospechoso, muestras de la víctima</p>---->
					</div>
				</div>
				<div class="item">
					<img src="images/funda1.jpg" alt="...">
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
							<h2>Restauración</h2>
							<p>"Restaurando los derechos inherentes de los seres humanos" </p>
						</div>
                     </div>   
                    <div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/gia-Logo.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2>GIA</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>La Agencia de Inteligencia Global fue controlada anteriormente por diferentes entidades y desde entonces ha sido depurada y reestructurada para operar como la Agencia de Aplicación del Repositorio Global. </p>
								<a href="pages/gia.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/funda9.jpg" alt="img11" class="img-responsive" witdh="750" height="500">
							<figcaption>
								<h2>Asamblea</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>La Asamblea cumple la función de Organizar y velar por el cumplimiento de los mandatos de Life Force en los respectivos países.</p>
								<a href="pages/asambleas.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/salud.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Cuidado de la Salud</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>	Atención médica diseñada para enseñar a las personas cómo mantener una salud óptima.</p>
								<a href="pages/salud.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/educacion.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Educación</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Nosotros, como seres humanos en este planeta, tenemos la responsabilidad de formar la próxima generación.</p>
								<a href="pages/educacion.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/comunicacion.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Medios de Comunicación</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>United Network News (noticias de la Red Unida) es la nueva corriente principal y la única verdad en los medios.</p>
								<a href="pages/comunicacion.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/finanza.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Sistema Financiero</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>El sistema finaciero global ha sido monopolizado y manipulado por menos del 1% de la poblacion durante mucho tiempo.</p>
								<a href="pages/finanza.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/web.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Plataforma Web</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Esta comunidad está formada por emprendedores que participan en debates inteligentes, proponen soluciones viables.</p>
								<a href="pages/web.php" class="btn btn-main">Mas información</a>
							</figcaption>			
						</figure>
					</div>
					
					<div class="col-sm-4">
						<figure class="mg-room mg-room-col-2">
							<img src="images/alimentos.jpg" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Alimentos</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i></div>
								<div class="mg-room-price"></div>
								<p>Desarrollar y fortalecer una cadena alimentaria sostenible. Establecer y apoyar una relación sólida con Agricultores.</p>
								<a href="pages/alimentos.php" class="btn btn-main">Mas información</a>
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
						<p> <strong>LIFE FORCE</strong> 
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
														<h2 class="mg-bn-title">Asambleas <span class="mg-bn-big">Reuniones de Asambleas de Bolivia</span> </h2>
														<p> <strong>LIFE FORCE</strong> ASAMBLEA IMBABURA RENACIENTE le está invitando a una reunión o evento . </p>
														<br>
														<p>Horario de eventos o reuniones: primer sábado de cada mes </p>
									
													</div>
													<div class="col-md-3">
														<h2 class="mg-bn-title">Inscripción  <span class="mg-bn-big">Formulario de Inscripción a nuevos Miembros</span></h2>
														<p> <strong>LIFE FORCE</strong> En este formulario puede inscribirse , para poder ser miembro de este y participar.</p>
														<a href="pages/inscripcion.php" class="btn btn-main">Inscripción</a>
													</div>
													<div class="col-md-3">
														<h2 class="mg-bn-title">Quejas  <span class="mg-bn-big">Formulario de Quejas y Sugerencias</span></h2>
														<p> <strong>LIFE FORCE</strong> En este formulario puede ingresar alguna queja o sugerencia.</p>
														<a href="pages/quejas.php" class="btn btn-main">Formulario</a>
													</div>

													<div class="col-md-3">
														<h2 class="mg-bn-title">Login</h2>
														<a href="pages/sesion.php" class="btn btn-main">Iniciar Sesion</a>
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
														<a href="#"><img src="<?php 
														$reemplazar ="";
														$buscar="../";
														$picture= $row['ruta_foto1'];
														$foto = str_replace($buscar,$reemplazar, $picture);
														echo $foto; ?>" alt="" class="img-responsive"></a>
													</div>
													<div class="col-sm-7">
														<h3 class="mg-avl-room-title"><a href="#"><?php echo $row['titulo']; ?></a> <span><?php echo date("Y-m-d"); ?></span></h3>
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
									<li><img src="images/diversidad9.jpg" alt="" width="350"></li>
									
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
													 
													<div class="col-sm-6">
														<iframe width="560" height="315" src="https://www.youtube.com/embed/LG3MGjAOCq0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><BR><BR>
													</div>
																										
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
									<strong><i class="fa fa-phone"></i> Telefono:</strong> 0625580096<BR>
									<strong><i class="fa fa-mobile-phone"></i> Celular:</strong> 0997693293 - 0986176366<BR>
									Ibarra -Ecuador 
								</p>
								
									<a href="mailto:asamblea_imbaburarenacientee@hotmail.com   ">asamblea_imbaburarenacientee@hotmail.com   </a>
								</p>
							</div>
						</div>
                        
						<div class="col-md-3 col-sm-6">
							<div class="widget">
								<h2 class="mg-widget-title">Suscribete</h2>
								<p>Suscribete a nuestro formulario de contacto para que te mandemos novedades.</p>
								<form class="clearfix" method="POST"  action="pages/formcontacto.php" >
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
							<p>&copy; 2022 Diseño y Desarrollo de Sistemas Web.</p>
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
		<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>