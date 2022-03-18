
<?php 
include('../dbcontroller/database.php');
$destino="secretaria.lifeir@gmail.com";
$nombre =$_POST["nombre"];
$correo =$_POST["correo"];
$asunto =$_POST["asunto"];
$mensaje =$_POST["mensaje"];
$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nAsunto: ".$asunto."\nMensaje: ".$mensaje;
mail($destino,"Contacto",$contenido);

$_SESSION['message'] = 'Correo enviado exitosamente';
$_SESSION['message_type'] = 'success';

header("contacto.php");

?>
