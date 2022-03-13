<?php

include("database.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM queja WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: ../pages/listarquejas.php');
}

?>