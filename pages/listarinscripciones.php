<?php include('../dbcontroller/database.php');
$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "select * from inscripciones limit ".$start." , ".$perPage." ";
$total = $conn->query("select * from inscripciones")->num_rows;
$pages = ceil($total / $perPage);
$rows = $conn->query($sql);
?>
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

						<li ><a href="admin1.php">Menu</a>
	
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
						<h2>Inscripciones</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<div class="container">
	
<?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
      <strong> <?= $_SESSION['message']?>  </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
	<div>
      <table class="table table-hover">
        <thead> 
          <tr>
            <th  style="background-color:black;color:white">Nombre</th>
            <th  style="background-color:black;color:white">Apellido</th>
            <th  style="background-color:black;color:white">Correo</th>
            <th  style="background-color:black;color:white">Miembro</th>
            <th  style="background-color:black;color:white">Direccion</th>
            <th  style="background-color:black;color:white">Telefono</th>
            <th  style="background-color:black;color:white">Profesion</th>
            <th  style="background-color:black;color:white">Oficio</th>
            <th  style="background-color:black;color:white">Cantón</th>
            <th  style="background-color:black;color:white">Provincia</th>
            <th  style="background-color:black;color:white"></th>
            <th  style="background-color:black;color:white"></th>
          </tr>
        </thead>
        <tbody>

          <?php
        
          while($row = $rows->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['tipomiembro']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['profesion']; ?></td>
            <td><?php echo $row['oficio']; ?></td>
            <td><?php echo $row['departamento']; ?></td>
            <td><?php echo $row['provincia']; ?></td>
            <td>
              <a href="../dbcontroller/editarinscripcion.php?id=<?php echo $row['id']?>" class="btn btn-warning">
                <i class="fa fa-address-book">Editar</i>
              </a>
            </td>
            <td>
              <a href="../dbcontroller/eliminarinscripcion.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="fa fa-trash-alt">Eliminar</i>
              </a>
            </td>
            <i class="fa fa-address-book" aria-hidden="true"></i>
            
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <center>
				<ul class="pagination">
				<?php for($i = 1 ; $i <= $pages; $i++): ?>
				<li><a href="?page=<?php echo $i;?>&per-page=<?php echo $perPage;?>"><?php echo $i; ?></a></li>

			<?php endfor; ?>
				</ul>
	 </center>
  
  
  </div>
  </div>

<!--Colocar el footer-->

<?php include('../html_components/footer.php'); ?>