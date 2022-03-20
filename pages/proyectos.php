
<?php include('../dbcontroller/database.php');
?>
<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>PROYECTOS</h2>
						<p> .</p>
					</div>
				</div>
			</div>
		</div>
<div class="mg-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mg-booking-form">

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="select-room">
									
									<div class="mg-available-rooms">
										<h2 class="mg-sec-left-title">Nuestros Proyectos</h2>
										<?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
	  <strong> <?= $_SESSION['message']?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
										<div class="mg-avl-rooms">

										<?php
          $query = "SELECT * FROM proyectos";
          $result_proyectos = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_proyectos)) { ?>
            <div class="mg-avl-room">
												<div class="row">
													<div class="col-sm-5">
														<a href="#"><img src="data:<?php echo $row['tipoimagen1']; ?>;base64,<?php echo  base64_encode($row['ruta_foto1']); ?>"alt="" class="img-responsive"></a>
													</div>
													<div class="col-sm-7">
														<h3 class="mg-avl-room-title"><a href="#"><?php echo $row['titulo']; ?></a> <span><?php echo $row['fecha']; ?></span></h3>
														<p> <?php echo $row['contenido']; ?></p>
														<div class="row mg-room-fecilities">
															<div class="col-sm-4">
																<ul>
																	<li>  &#9830; <?php echo $row['departamento']; ?> </li>
																	
																</ul>
															</div>
															<div class="col-sm-8">
																<ul>
																	<li>  &#9830; <?php echo $row['provincia']; ?></li>
																	
																</ul>
															</div>
														</div>
														<a href="../pages/proyectosDetalles.php?id=<?php echo $row['id']?>" class="btn btn-main">Mas información</a>
														
													</div>
												</div>
											</div>
        
          <?php } ?>
							
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><BR><BR>        
<!--    FIN CONTENIDO     -->
<?php include('../html_components/footer.php'); ?>