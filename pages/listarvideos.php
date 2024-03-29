<?php include('../dbcontroller/database.php');?>

<!DOCTYPE html>
<html lang="en">
<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../images/esolog.png">
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

						<li ><a href="admin1.php">Menú</a>
	
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
						<h2>Videos</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<div class="container">
<?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
	  <strong>  <?= $_SESSION['message']?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      
	<div>
	<br>
	
	<a href="../pages/videosNuevos.php" class="btn btn-success">
                <i class="fa fa-trash-alt">Subir Video</i>
              </a>

			  <br>
			  <br>
      <table class="table table-hover">
        <thead> 
          <tr>
            <th  style="background-color:black;color:white">Titulo</th>
            <th  style="background-color:black;color:white">Descripción</th>
            <th  style="background-color:black;color:white"> </th>
          </tr>
        </thead>
        <tbody>
		<?php
		  $query = "SELECT * FROM video";
          $result_proyectos = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_proyectos)) { ?>
          <tr>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td>
              <a href="../dbcontroller/editarvideo.php?id=<?php echo $row['id']?>" class="btn btn-warning">
                <i class="fa fa-address-book">Editar</i>
              </a>
			  <a href="../dbcontroller/eliminarvideo.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="fa fa-trash-alt">Eliminar</i>
              </a>
            </td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table>
  
  
  </div>
  </div>

<!--Colocar el footer-->

<?php include('../html_components/footer.php'); ?>