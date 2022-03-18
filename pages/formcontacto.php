
<?php 
include('../dbcontroller/database.php');
$destino="secretaria.lifeir@gmail.com";

$_SESSION['message'] = 'Correo enviado exitosamente';
$_SESSION['message_type'] = 'success';

header("contacto.php");

?>
