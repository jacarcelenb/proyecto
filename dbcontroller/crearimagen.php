<?php

include('database.php');

if (isset($_POST['crear_imagen'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  

  if ($_FILES['foto1']) {
    $tipoArchivo1 = $_FILES['foto1']['type'];
    $permitido1=array("image/png","image/jpeg" ,"image/jpg");
    if( in_array($tipoArchivo1,$permitido1) ==false ){
        die("Archivo no permitido");
    }
    $nombreArchivo1 = $_FILES['foto1']['name'];
    $tamanoArchivo1 = $_FILES['foto1']['size'];
    $imagenSubida1 = addslashes(file_get_contents($_FILES['foto1']['tmp_name']));

  }


   try { 
    $query = "INSERT INTO foto(titulo,descripcion,tipoimagen,imagen) VALUES ('$titulo' 
    , '$descripcion' ,'$tipoArchivo1' ,'$ImagenSubida1')";
    $result = mysqli_query($conn, $query);
    
    if(!$result) {
      die("Query Failed.");
    }
    
    $_SESSION['message'] = 'Foto subida exitosamente';
    $_SESSION['message_type'] = 'success';
    
     header("Location: ../pages/listarfotos.php");

  } catch (mysqli_sql_exception $e) { 
      var_dump($e);
      exit; 
   } 


}

?>
