<?php

include("database.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM noticia WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

    
  $_SESSION['message'] = 'Noticia eliminada exitosamente';
  $_SESSION['message_type'] = 'danger';

  header('Location: ../pages/listarnoticias.php');
}

?>