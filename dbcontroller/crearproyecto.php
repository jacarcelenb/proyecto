<?php

include('database.php');

if (isset($_POST['crear_proyecto'])) {
  $departamento = $_POST['departamento'];
  $provincia = $_POST['provincia'];
  $tipoproyecto = $_POST['tipoproyecto'];
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];

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

  if ($_FILES['foto2']) {
    $tipoArchivo2 = $_FILES['foto2']['type'];
    $permitido2=array("image/png","image/jpeg","image/jpg");
    if( in_array($tipoArchivo2,$permitido2) ==false ){
        die("Archivo no permitido");
    }
    $nombreArchivo2 = $_FILES['foto2']['name'];
    $tamanoArchivo2 = $_FILES['foto2']['size'];
    $imagenSubida2 = addslashes(file_get_contents($_FILES['foto2']['tmp_name']));
  
  }

   $fecha= date("Y-m-d");

   if ($tamañoArchivo1 < 16000000 &&  $tamanoArchivo2 < 16000000) {
    try { 
      $query = "INSERT INTO proyectos(departamento, provincia ,tipoproyecto ,titulo ,contenido,ruta_foto1 , ruta_foto2 ,tipoimagen1 , tipoimagen2 ,fecha) VALUES ('$departamento' 
      , '$provincia' ,'$tipoproyecto' ,'$titulo' ,'$contenido' ,'$imagenSubida1' ,'$imagenSubida2' ,
      '$tipoArchivo1' ,'$tipoArchivo2' ,'$fecha')";
      $result = mysqli_query($conn, $query);
      
      if(!$result) {
        die("Query Failed.");
      }
      
      $_SESSION['message'] = 'Proyecto ingresado exitosamente';
      $_SESSION['message_type'] = 'success';
      
       header("Location: ../pages/proyectosNuevos.php");
  
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
