<?php 

include("../dbcontroller/database.php");


$titulo = "";
$descripcion = "";
$rutafoto1 = "";
$tipofoto1 = "";
$fecha = "";


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM noticia WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
	$titulo =$row['titulo'];
	$descripcion =$row['descripcion'];
	$rutafoto1 = $row['foto'];
	$tipofoto1 = $row['tipofoto'];
  }
}
$detalle = "Detalles de la noticia ".$titulo;

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
						<a href="#"><img src="data:<?php echo $tipofoto1; ?>;base64,<?php echo  base64_encode($rutafoto1); ?>"alt="" class="img-responsive"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mg-single-room-txt">
							<h2 class="mg-sec-left-title">Detalles de la noticia</h2>
							<p><?php echo $descripcion ?></p>
						</div>
					</div>
				</div>
				
				<div class="row">
							<h2 class="mg-sec-left-title">Galeria de Fotos</h2>
							<figure class="col-md-4 mg-gallery-item" data-groups='["classic"]'>
								<a href="#" data-lightbox-gallery="rooms"> <img src="data:<?php echo $tipofoto1; ?>;base64,<?php echo  base64_encode($rutafoto1); ?>" class="img-responsive" alt="" width="250" height="250" /><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a>
							</figure>
							
						</div>
				
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>