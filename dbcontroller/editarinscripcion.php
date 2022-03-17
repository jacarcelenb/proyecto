<?php
include("database.php");

$nombre = "";
$apellido = "";
$correo = "";
$tipomiembro = "";
$direccion = "";
$telefono = "";
$profesion = "";
$oficio = "";
$departamento = "";
$provincia = "";

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM inscripciones WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
	$nombre = $row['nombre'];
	$apellido = $row['apellido'];
	$correo = $row['correo'];
	$tipomiembro = $row['tipomiembro'];
	$direccion =$row['direccion'];
	$telefono = $row['telefono'];
	$profesion = $row['profesion'];
	$oficio = $row['oficio'];
	$departamento = $row['departamento'];
	$provincia = $row['provincia'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $tipomiembro = $_POST['tipomiembro'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $profesion = $_POST['profesion'];
  $oficio = $_POST['oficio'];
  $departamento = $_POST['departamento'];
  $provincia = $_POST['provincia'];

  $query = "UPDATE `inscripciones` SET nombre ='$nombre', apellido ='$apellido',correo ='$correo',tipomiembro ='$tipomiembro'
  ,direccion ='$direccion', telefono ='$telefono', profesion='$profesion',oficio='$oficio'
  , departamento='$departamento', provincia='$provincia' WHERE  id=$id";

   mysqli_query($conn, $query);
  
  $_SESSION['message'] = 'Inscripcion actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';

  header('Location: ../pages/listarinscripciones.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>A-life Imbabura Renaciente</title>
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">

		<link href="../css/owl.carousel.css" rel="stylesheet">
		<link href="../css/owl.theme.css" rel="stylesheet">
		<link href="../css/owl.transitions.css" rel="stylesheet">
		<link href="../css/cs-select.css" rel="stylesheet">
		<link href="../css/bootstrap-datepicker3.min.css" rel="stylesheet">
		<link href="../css/freepik.hotels.css" rel="stylesheet">
		<link href="../css/nivo-lightbox.css" rel="stylesheet">
		<link href="../css/nivo-lightbox-theme.css" rel="stylesheet">
		<link href="../css/style15.css" rel="stylesheet">
       




		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

		<script src="../js/modernizr.custom.min.js"></script>
	</head>
	<body>
		<div class="preloader"></div>
		<header class="header transp sticky"> <!-- available class for header: .sticky .center-content .transp -->
			<nav class="navbar navbar-inverse">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="../images/logoone.png" alt="logo"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">

                        <li ><a href="../pages/admin1.php">Menu</a>
                    
                        </li> 

                        <li ><a href="salir.php">Cerrar Sesion</a>
                    
                        </li> 
							
                          
						</ul>
					</div><!-- /.navbar-collapse -->
					
				</div><!-- /.container-fluid -->
			</nav>
		</header>
        <div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Inscripciones</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
	  <h2>Editar Inscripciones</h2>

      <form action="../dbcontroller/editarinscripcion.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="mg-contact-form-input">
								<label for="full-name">Nombre</label>
								<input type="text" class="form-control" id="full-name" name="nombre" 
								value="<?php echo $nombre; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Apellido</label>
								<input type="text" class="form-control" id="full-name" name="apellido" 
								value="<?php echo $apellido; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="correo" 
								value="<?php echo $correo; ?>"
								required >
							</div>
							<div class="mg-contact-form-input">
								<label for="email">Quiere ser?</label>
								<select id="disabledSelect" class="form-control"  NAME="tipomiembro" required>
					                <option value="<?php 
									if ($tipomiembro=="Miembro") {
										echo "Miembro";
									} else {
										echo "Voluntario";
									} ?>"><?php 
									if ($tipomiembro=="Miembro") {
										echo "Miembro";
									} else {
										echo "Voluntario";
									} ?></option>
									<option  value="<?php 
									if ($tipomiembro=="Miembro") {
										echo "Voluntario";
									} else {
										echo "Miembro";
									} ?>"><?php 
									if ($tipomiembro=="Miembro") {
										echo "Voluntario";
									} else {
										echo "Miembro";
									} ?></option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Dirección</label>
								<input type="text" class="form-control" id="full-name" name="direccion" 
								value="<?php echo $direccion; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Numero de Teléfono o Celular</label>
								<input type="text" class="form-control" id="full-name" name="telefono"
								value="<?php echo $telefono; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Profesión</label>
								<input type="text" class="form-control" id="full-name" name="profesion" 
								value="<?php echo $profesion; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Oficio</label>
								<input type="text" class="form-control" id="full-name" name="oficio" 
								value="<?php echo $oficio; ?>"
								required>
							</div>
							
							<div class="mg-contact-form-input">
								<label for="subject">Departamento en que Reside?</label>
								<input type="text" class="form-control" id="full-name" name="departamento" 
								value="<?php echo $departamento; ?>"
								required>
							
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Provincia o Comunidad en que Reside?</label>
								<input type="text" class="form-control" id="subject" name="provincia" 
								value="<?php echo $provincia; ?>"
								required>
							</div>
        <button class="btn btn-dark-main pull-right" name="update">
          Editar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<br>
<?php include('../html_components/footer.php'); ?>