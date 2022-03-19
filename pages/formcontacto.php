
<?php 
if ($_POST['enviar']) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $header="From: secretaria.lifeir@gmail.com"."\r\n";
    $header.="Reply-To: secretaria.lifeir@gmail.com"."\r\n";
    $header.="X-Mailer: PHP/".phpversion();

    $mail = mail($correo,$asunto,$mensaje,$header);

    if ($mail) {
     include('../html_components/ms_crearinscrip.php');
    }

}





?>
