
<?php 
if ($_POST['enviar']) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $header="From: carcelenjorge17@gmail.com"."\r\n";
    $header.="Reply-To: carcelenjorge17@gmail.com"."\r\n";
    $header.="X-Mailer: PHP/".phpversion();

    $mail = mail($correo,$asunto,$mensaje,$header);

    if ($mail) {
    header('contacto.php');
    }

}
?>
