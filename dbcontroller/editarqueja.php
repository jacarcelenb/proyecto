<?php
include("database.php");

$nombre = '';
$miembro = false;
$departamento = '';
$asunto = '';
$mensaje = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM queja WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombres'];
    $miembro = $row['esmiembro'];
    $departamento = $row['departamento'];
    $asunto = $row['asunto'];
    $mensaje = $row['mensaje'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombrecompleto'];
  $miembro = $_POST['miembro'];
  $departamento = $_POST['departamento'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  
  if ($miembro=="SI") {
	$miembro = 1;
  } else {
	$miembro = 0;
	
  }

  $query = "UPDATE queja set nombres = '$nombre',
  departamento = '$departamento' , asunto='$asunto' ,mensaje ='$mensaje' WHERE id=$id";
  mysqli_query($conn, $query);

  
  $_SESSION['message'] = 'Queja actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';
  
  header('Location: ../pages/listarquejas.php');

 
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
						<a class="navbar-brand" href="#"><img src="../images/logoc1.png" alt="logo"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">

                        <li ><a href="../pages/admin1.php">Menu</a>
                    
                        </li> 

                        <li ><a href="salir.php">Cerrar Sesión</a>
                    
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
						<h2>Quejas</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
	  <h2>Editar Quejas</h2>
      <form action="../dbcontroller/editarqueja.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="mg-contact-form-input">
								<label for="full-name">Nombre completo</label>
								<input type="text" class="form-control" id="full-name" name="nombrecompleto"
                                value="<?php echo $nombre; ?>" required
								
								pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,100}">
							</div>
							
							<div class="mg-contact-form-input">
								<label for="subject">Cantón en el que Reside?</label>
								<input type="text" class="form-control" id="subject" name="departamento"
                                value="<?php echo $departamento; ?>" required 
								pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,100}">
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Asunto?</label>
								<select  class="form-control"  name="asunto" 
								required>
					                <option  value="<?php 
								if ($asunto=="Queja") {
									echo $asunto;
								} else {
									echo "Sugerencia";
								}
								
								 ?>"><?php 
								 if ($asunto=="Queja") {
									 echo $asunto;
								 } else {
									 echo "Sugerencia";
								 }
								 
								  ?></option>
									<option value="<?php 
								if ($asunto=="Queja") {
									echo "Sugerencia";
								} else {
									echo "Queja";
								}
								
								 ?>"><?php 
								 if ($asunto=="Queja") {
									 echo "Sugerencia";
								 } else {
									 echo "Queja";
								 }
								 
								  ?></option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Mensaje</label>
								<textarea class="form-control" id="subject" rows="5" name="mensaje"
								required><?php echo $mensaje; ?></textarea>
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