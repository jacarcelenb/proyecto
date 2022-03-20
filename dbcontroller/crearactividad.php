<?php

include('database.php');

if (isset($_POST['crear_actividad'])) {
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

  if ($tamanoArchivo1 < 16000000) {
    try { 
      $query = "INSERT INTO actividad(titulo,descripcion,tipoimagen ,imagen) VALUES ('$titulo' 
      , '$descripcion' ,'$tipoArchivo1' ,'$imagenSubida1')";
      $result = mysqli_query($conn, $query);
      
      if(!$result) {
        die("Query Failed.");
      }
      
      $_SESSION['message'] = 'Actividad ingresada exitosamente';
      $_SESSION['message_type'] = 'success';
      
       header("Location: ../pages/listaractividades.php");
  
    } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
     } 
  }else{
    $_SESSION['message'] = 'No se puede subir el tamaño de la imagen es mayor a 16 MB';
    $_SESSION['message_type'] = 'danger';

  }
   


}

?>
