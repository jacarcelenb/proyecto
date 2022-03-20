<?php

include('database.php');

if (isset($_POST['crear_video'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  

  if ($_FILES['video1']) {
    $tipoArchivo1 = $_FILES['video1']['type'];
    $nombreArchivo1 = $_FILES['video1']['name'];
    $tamanoArchivo1 = $_FILES['video1']['size'];
    $videoSubido1 = addslashes(file_get_contents($_FILES['video1']['tmp_name']));

  }

  if ($tamanoArchivo1 < 16000000) {
    try { 
      $query = "INSERT INTO video(titulo,descripcion,tipovideo ,video) VALUES ('$titulo' 
      , '$descripcion' ,'$tipoArchivo1' ,'$videoSubido1')";
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
  }else{
    $_SESSION['message'] = 'No se puede subir el tamaño del video es mayor a 16 MB';
    $_SESSION['message_type'] = 'danger';

  }

   


}

?>
