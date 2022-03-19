
<?php 
include('../dbcontroller/database.php');
if ($_POST['enviar']) {
    $destino = "carcelenjorge17@gmail.com";
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nAsunto: ".$asunto."\nMensaje: ".$mensaje;

    $mail= mail($destino,"Contacto",$contenido);

    if ($mail) {
        $_SESSION['enviado'] = 'enviado';
        header("Location: contacto.php");
    }

}
?>

