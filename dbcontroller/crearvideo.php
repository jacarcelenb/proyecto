<?php

include('database.php');

if (isset($_POST['crear_noticia'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  

  if ($_FILES['video1']) {
    $tipoArchivo1 = $_FILES['video1']['type'];
    $permitido1=array("video/*");
    if( in_array($tipoArchivo1,$permitido1) ==false ){
        die("Archivo no permitido");
    }
    $nombreArchivo1 = $_FILES['video1']['name'];
    $tamanoArchivo1 = $_FILES['foto1']['size'];
    $imagenSubida1 = addslashes(file_get_contents($_FILES['video1']['tmp_name']));

  }


   try { 
    $query = "INSERT INTO video(titulo,descripcion,tipovideo ,video) VALUES ('$titulo' 
    , '$descripcion' ,'$tipoArchivo1' ,'$imagenSubida1')";
    $result = mysqli_query($conn, $query);
    
    if(!$result) {
      die("Query Failed.");
    }
    
    $_SESSION['message'] = 'Video subido exitosamente';
    $_SESSION['message_type'] = 'success';
    
     header("Location: ../pages/listarvideos.php");

  } catch (mysqli_sql_exception $e) { 
      var_dump($e);
      exit; 
   } 


}

?>
