<?php
include("database.php");


$titulo = " ";
$descripcion = "";


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM foto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titulo =$row['titulo'];
    $descripcion =$row['descripcion'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $titulo = $_POST['titulo'];
  $contenido = $_POST['descripcion'];




 $query = "UPDATE `foto` SET titulo ='$titulo',descripcion='$contenido' WHERE id=$id";

 mysqli_query($conn, $query);
  
  $_SESSION['message'] = 'Foto actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';

  header('Location: ../pages/listarfotos.php');
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
						<h2>Fotos</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
	  <h2>Editar Fotos</h2>

      <form action="../dbcontroller/editarimagen.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="mg-contact-form-input">
								<label for="full-name">Titulo</label>
								<input type="text" class="form-control" id="full-name" name="titulo" 
								value="<?php echo $titulo; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Descripcion</label>
								<textarea class="form-control" rows="10" name="descripcion"  required>
								<?php echo $descripcion; ?>
								</textarea>
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