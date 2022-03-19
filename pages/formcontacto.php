
<?php 

if ($_POST['enviar']) {
    $destino = "secretaria.lifeir@gmail.com";
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nAsunto: ".$asunto."\nMensaje: ".$mensaje;

    mail($destino,"Contacto",$contenido);

}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>A-life Imbabura Renaciente</title>
		
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
		<link href="../css/style15.css" rel="stylesheet">
       




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
		
        <div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Correo Enviado Exitosamente</h2>
						<p></p>
                        <br>
                        <center>  <a href="contacto.php" class="btn btn-main">Regresar</a></center>
					</div>
				</div>
			</div>
		</div>
<!--    FIN CONTENIDO     -->
<footer class="mg-footer">
		
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