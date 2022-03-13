<?php

include("database.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM inscripciones WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

    
  $_SESSION['message'] = 'Inscripcion eliminada exitosamente';

  header('Location: ../pages/listarinscripciones.php');
}

?>