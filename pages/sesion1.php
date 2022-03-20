<?php

include("../dbcontroller/database.php");

$ingreso = false;
$loginfallido = false;



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

  if ($ingreso) {
    header("Location: ../pages/admin1.php");
  }
  else{
	  $loginfallido= true;
  }
  
  
  

}

?>		 
	  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Incio de sesion</title>
    <link rel="stylesheet" href="../css/estiloslogin.css">
  </head>
  <body>
    <div class="center">
      <h1>Incio de Sesión</h1>
	  <?php if ($loginfallido==true) {
				include('../html_components/loginfallido.php');
			 } ?>

<?php if (isset($_SESSION['login'])) { ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>  <?= $_SESSION['login']?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <form  method="POST"  action="../pages/sesion1.php">
        <div class="txt_field">
          <input type="text" id="full-name" name="usuario" required>
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="txt_field">
          <input type="password" id="full-name" name="contraseña" required>
          <span></span>
          <label>Contraseña</label>
        </div>
        <input type="submit"  value="Iniciar Sesion" name="login">
        <div class="signup_link">
       <a href="../index.php">Ir al Inicio</a>
        </div>
      </form>
    </div>

  </body>
</html>

