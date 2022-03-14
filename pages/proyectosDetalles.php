<?php 

include("../dbcontroller/database.php");

$departamento = "";
$provincia = "";
$tipoproyecto = "";
$titulo = "";
$contenido = "";
$rutafoto1 = "";
$rutafoto2 = "";

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM proyectos WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
	$departamento = $row['departamento'];
	$provincia = $row['provincia'];
	$tipoproyecto = $row['tipoproyecto'];
	$titulo =$row['titulo'];
	$contenido =$row['contenido'];
	$rutafoto1 = $row['ruta_foto1'];
	$rutafoto2 = $row['ruta_foto2'];
  }
}
$detalle = "Detalles del Proyecto ".$titulo." EN DISTRITO ".$provincia;
$titulo_detalle = $titulo." EN DISTRITO ".$provincia;
$fecha= date("Y-m-d");
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
					<div class="col-md-7">
						<a href="#"><img src="<?php echo $rutafoto1 ?>" alt="" class="img-responsive"></a>
					</div>
					<div class="col-md-5 mg-room-fecilities">
						<h2 class="mg-sec-left-title"><strong><?php echo $titulo_detalle ?></strong></h2>
						<div class="row">
							<div class="col-xs-8">
								<ul>
									<li><i class="fa fa-cogs"></i><strong>Ciudad:</strong> <?php echo $departamento ?></li>
									<li><i class="fa fa-cogs"></i><strong>Lugar:</strong> <?php echo $provincia ?></li>
									<li><i class="fa fa-cogs"></i><strong>Fecha:</strong> <?php echo $fecha ?></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mg-single-room-txt">
							<h2 class="mg-sec-left-title">Detalles del proyecto</h2>
							<p><?php echo $contenido ?></p>
						</div>
					</div>
				</div>
				
				<div class="row">
							<h2 class="mg-sec-left-title">Galeria de Fotos</h2>
							<figure class="col-md-4 mg-gallery-item" data-groups='["classic"]'>
								<a href="<?php echo $rutafoto1 ?>" data-lightbox-gallery="rooms"><img src="<?php echo $rutafoto1 ?>" class="img-responsive" alt="" width="250" height="250" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
							</figure>
							<figure class="col-md-4 mg-gallery-item" data-groups='["classic"]'>
								<a href="<?php echo $rutafoto2 ?>" data-lightbox-gallery="rooms"><img src="<?php echo $rutafoto2 ?>" class="img-responsive" alt="" width="250" height="250" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
							</figure>
							
						</div>
				
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>