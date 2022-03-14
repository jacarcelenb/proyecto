<?php

include("database.php");

if (isset($_POST['crear_proyecto'])) {
  $departamento = $_POST['departamento'];
  $provincia = $_POST['provincia'];
  $tipoproyecto = $_POST['tipoproyecto'];
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];


  if ($_FILES["foto1"]) {
    $nombre_basef1 = basename($_FILES["foto1"]["name"]);
    $nombre_finalf1 = date("m-d-y")."-".date("H-i-s")."-".$nombre_basef1;
    $rutaf1="../new_images/".$nombre_finalf1;
    $subirfoto1 = move_uploaded_file($_FILES["foto1"]["tmp_name"],$rutaf1);

  }

  if ($_FILES["foto2"]) {
    $nombre_basef2 = basename($_FILES["foto2"]["name"]);
    $nombre_finalf2 = date("m-d-y")."-".date("H-i-s")."-".$nombre_basef2;
    $rutaf2="../new_images/".$nombre_finalf2;
    $subirfoto2 = move_uploaded_file($_FILES["foto2"]["tmp_name"],$rutaf2);
  }

  if ($subirfoto1 && $subirfoto2) {
    $query = "INSERT INTO proyectos(departamento, provincia ,tipoproyecto ,titulo ,contenido,
    ruta_foto1 , ruta_foto2) VALUES ('$departamento'
  , '$provincia' ,'$tipoproyecto' ,'$titulo' ,'$contenido' ,'$rutaf1' ,'$rutaf2')";
  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die("Query Failed.");
  }
  }

  

  $_SESSION['message'] = 'Proyecto ingresado exitosamente';
  $_SESSION['message_type'] = 'success';
  
   header("Location: ../pages/proyectosNuevos.php");

}

?>
