<?php include('../dbcontroller/database.php'); ?>
<?php include('../html_components/headerformscr.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Nuevas Actividades</h2>
						<p> .</p>
					</div>
				</div>
			</div>
		</div>
	<div class="mg-page">
			<div class="container">
				<div class="row">
                    <div class="col-lg-9">
						<h2 class="mg-sec-left-title" >Ingrese la nueva actividad</h2>
						
						<?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
	  <strong> <?= $_SESSION['message']?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

                        <form role="form" method="POST" action="../dbcontroller/crearactividad.php" accept-charset="UTF-8" class="form-horizontal"  enctype="multipart/form-data">
							
							
							
							<div class="form-group">
                                <label>Titulo</label>
								<input class="form-control" type="text" name="titulo" required>
                                
                            </div>
							
							<div class="form-group">
                                <label>Descripcion</label>
								<textarea class="form-control" rows="10" name="descripcion"  required></textarea>
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
									
							
							<div class="form-group">
                                <label>Foto de la Actividad</label>
								<input type="file" name="foto1" accept=".jpg, .jpeg, .png">
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
						
							
					        	<button type="submit" value="Ingresar" name="crear_actividad" class="btn btn-dark-main pull-center">Ingresar</button> 
                            
							
						</form>
					</div>
				</div>
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>