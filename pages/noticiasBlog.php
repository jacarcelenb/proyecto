<?php include('../dbcontroller/database.php');
?>
<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>BLOGS</h2>
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
										<h2 class="mg-sec-left-title">Nuestros Blogs</h2>
										<div class="mg-avl-rooms">

										<?php
          $query = "SELECT * FROM blog";
          $result_proyectos = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_proyectos)) { ?>
            <div class="mg-avl-room">
												<div class="row">
													<div class="col-sm-7">
														<h3 class="mg-avl-room-title"><a href="#"><?php echo $row['titulo']; ?></a> <span><?php echo date("Y-m-d"); ?></span></h3>
														<p> <?php echo $row['descripcion']; ?></p>
													
														<a href="../pages/blogsDetalles.php?id=<?php echo $row['id']?>" class="btn btn-main">Mas información</a>
														
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