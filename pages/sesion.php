<?php

include("../dbcontroller/database.php");

$ingreso = false;
$useradmin= "";
$loginfallido = false;
$admin1= false;
$admin2=false;
$admin3=false;

if (isset($_POST['login'])) {
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
 
  $query = "SELECT * FROM usuario";
  $result_quejas = mysqli_query($conn, $query);    

  while($row = mysqli_fetch_assoc($result_quejas)) {
     
      if ($row['nombre_usuario'] == $usuario && $row['clave_usuario']==$contraseña && $row['nombre_usuario'] =="administrador001") {
         $ingreso = true;
		 $admin1=true;
      }
	  if ($row['nombre_usuario'] == $usuario && $row['clave_usuario']==$contraseña && $row['nombre_usuario'] =="Administrador002") {
		$ingreso = true;
		$admin2=true;
	 }
	 if ($row['nombre_usuario'] == $usuario && $row['clave_usuario']==$contraseña && $row['nombre_usuario'] =="Administrador003") {
		$ingreso = true;
		$admin3=true;
	 } 
	 
      
  }

  if ($ingreso && $admin1) {
	$_SESSION['message'] = "administrador001";
    header("Location: ../pages/admin.php");
  }if ($ingreso && $admin2) {
	$_SESSION['message'] = "Administrador002";
    header("Location: ../pages/admin.php");
  }if ($ingreso && $admin3) {
	$_SESSION['message'] = "Administrador003";
    header("Location: ../pages/admin.php");
  }
  else{
	  $loginfallido= true;
  }
  
  

}

?>



<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Iniciar Sesion</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<!--    INICIO CONTENIDO     -->		<div class="mg-page">
			<div class="container">
				<div class="row">
					<!----<form class="form-horizontal" method="POST" action="productosInsertando.php" enctype="multipart/form-data">--->
						
					<div class="col-md-2"></div>
					<div class="col-md-7">
						<h2 class="mg-sec-left-title" >Iniciar Sesion</h2>
						<br>
		
			<?php if ($loginfallido==true) {
				include('../html_components/loginfallido.php');
			 } ?>
				
						<form  method="POST"  action="../pages/sesion.php" >
							<div class="mg-contact-form-input">
								<label for="full-name">Usuario</label>
								<input type="text" class="form-control" id="full-name" name="usuario" required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Contraseña</label>
								<input type="password" class="form-control" id="full-name" name="contraseña" required >
							</div>
							
							<input type="submit" class="btn btn-dark-main pull-right" value="Iniciar Sesion" name="login">
						</form>
					</div>
                    
				</div>
			
			</div>
			
			
		</div>
<BR><BR>        
<!--    FIN CONTENIDO     -->
<?php include('../html_components/footer.php'); ?>