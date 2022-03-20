
<?php 

if ($_POST['enviar']) {
    $destino = "secretaria.lifeir@gmail.com";
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nAsunto: ".$asunto."\nMensaje: ".$mensaje;

    $mail = mail($destino,"Contacto",$contenido);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Correo</title>
</head>
<body>
	<?php 
	  if ($mail) {
	   include("../html_components/correovalido.php");
	  }else{
		include("../html_components/correoinvalido.php");
	  }
	?>
</body>
</html>