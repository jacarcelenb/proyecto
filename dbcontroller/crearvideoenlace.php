<?php

include('database.php');

if (isset($_POST['crear_videoenlace'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $enlace = $_POST['enlace'];
  


   try { 
    $query = "INSERT INTO videoenlace(titulo,descripcion,enlace) VALUES ('$titulo','$descripcion' ,'$enlace')";
    $result = mysqli_query($conn, $query);
    
    if(!$result) {
      die("Query Failed.");
    }
    
    $_SESSION['message'] = 'Video ingresado exitosamente';
    $_SESSION['message_type'] = 'success';
    
     header("Location: ../pages/listarvideosenlace.php");

  } catch (mysqli_sql_exception $e) { 
      var_dump($e);
      exit; 
   } 


}

?>
