<?php

include("database.php");

$ingreso = false;

if (isset($_POST['login'])) {
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
 
  $query = "SELECT * FROM usuario";
  $result_quejas = mysqli_query($conn, $query);    

  while($row = mysqli_fetch_assoc($result_quejas)) {
     
      if ($row['nombre_usuario'] == $usuario && $row['clave_usuario']==$contraseña) {
         $ingreso = true;
      } 
      
  }

  $_SESSION['message'] = 'Ingreso fallido';

  if ($ingreso) {
   

    header("Location: ../pages/admin.php");
  }else{
    header("Location: ../pages/sesion.php");
  }
  
  

}

?>