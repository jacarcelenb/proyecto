<?php

include("database.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM queja WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

    
  $_SESSION['message'] = 'Queja eliminada exitosamente';
  $_SESSION['message_type'] = 'danger';

  header('Location: ../pages/listarquejas.php');
}

?>