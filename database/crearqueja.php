<?php

include('database.php');

if (isset($_POST['guardar_queja'])) {
  $nombre = $_POST['nombrecompleto'];
  $miembro = $_POST['miembro'];
  $departamento = $_POST['departamento'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $query = "INSERT INTO queja(nombres, esmiembro , departamento , asunto , mensaje) VALUES ('$nombre'
  , '$miembro' ,'$departamento' ,'$asunto' ,'$mensaje')";
  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Queja registrada exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
