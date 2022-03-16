<?php 

include("../dbcontroller/database.php");


$tipoblog = "";
$titulo = "";
$descripcion = "";
$autor = "";
$enlace = "";



if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM blog WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
	$tipoblog = $row['tipodeblog'];
	$titulo = $row['titulo'];
	$descripcion = $row['descripcion'];
	$autor =$row['autor'];
	$enlace =$row['enlace'];
	
  }
}
$detalle = "Detalle de  ".$titulo;
?>

<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2><?php echo $detalle ?></h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<!--    INICIO CONTENIDO     --><div class="mg-single-room">
			<div class="container">
				<div class="row">
					<div class="col-md-5 mg-room-fecilities">
						<div class="row">
							<div class="col-xs-8">
								<ul>
									<li><i class="fa fa-cogs"></i><strong>Tipo de blog:</strong> <?php echo $tipoblog ?></li>
									<li><i class="fa fa-cogs"></i><strong>Autor:</strong> <?php echo $autor ?></li>
									<li><i class="fa fa-cogs"></i><strong>Enlace:</strong> <?php echo $enlace ?></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mg-single-room-txt">
							<h2 class="mg-sec-left-title">Detalles del blog</h2>
							<p><?php echo $descripcion ?></p>
						</div>
					</div>
				</div>
				
			
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>