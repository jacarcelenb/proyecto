<?php

include('database.php');

if (isset($_POST['crear_blog'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $tipo = $_POST['tipo'];
  $autor = $_POST['autor'];
  $enlace = $_POST['enlace'];
  


   try { 
    $query = "INSERT INTO blog(titulo,tipodeblog,autor ,descripcion,enlace) VALUES ('$titulo' 
    ,'$tipo' ,'$autor' ,'$descripcion' ,'$enlace')";
    $result = mysqli_query($conn, $query);
    
    if(!$result) {
      die("Query Failed.");
    }
    
    $_SESSION['message'] = 'Blog ingresado exitosamente';
    $_SESSION['message_type'] = 'success';
    
     header("Location: ../pages/listarblogs.php");

  } catch (mysqli_sql_exception $e) { 
      var_dump($e);
      exit; 
   } 


}

?>
