<?php

include("database.php");

if (isset($_POST['guardar_inscripcion'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $tipomiembro = $_POST['tipomiembro'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $profesion = $_POST['profesion'];
  $oficio = $_POST['oficio'];
  $departamento = $_POST['departamento'];
  $provincia = $_POST['provincia'];

  $query = "INSERT INTO `inscripciones`( nombre, apellido, correo, tipomiembro, direccion, telefono, profesion, oficio, departamento, provincia) 
  VALUES ('$nombre','$apellido','$correo','$tipomiembro','$direccion','$telefono','$profesion','$oficio',
  '$departamento','$provincia')";

  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Inscripcion registrada exitosamente';
  $_SESSION['message_type'] = 'success';
  
   header("Location: ../pages/inscripcion.php");

}

?>
