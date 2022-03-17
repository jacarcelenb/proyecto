<?php include('../dbcontroller/database.php'); ?>
<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Nuevos Proyectos</h2>
						<p> .</p>
					</div>
				</div>
			</div>
		</div>
	<div class="mg-page">
			<div class="container">
				<div class="row">
                    <div class="col-lg-9">
						<h2 class="mg-sec-left-title" >Ingrese nuevo proyecto</h2>
						
						<?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
	  <strong> <?= $_SESSION['message']?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

                        <form role="form" method="POST" action="../dbcontroller/crearproyecto.php" accept-charset="UTF-8" class="form-horizontal"  enctype="multipart/form-data">
							
							
							
							<div class="form-group">
                                <label>Canton </label>
								<SELECT name="departamento" required>
	      							<OPTION SELECTED VALUE="Cotacachi">Cotacachi
	        						<OPTION VALUE="Otavalo">Otavalo
	          						<OPTION VALUE="Santa Cruz">Santa Cruz
									<OPTION VALUE="Pimampiro">Pimampiro
									<OPTION VALUE="Antonio Ante">Antonio Ante
									<OPTION VALUE="Ibarra">Ibarra 
									<OPTION VALUE="Urcuqui">Urcuqui 
	            				</SELECT>
	                         </div>
							<div class="form-group">
                                <label>Provincia</label>
								<input class="form-control" placeholder="Ejemplo: Cercado"  name="provincia" required>
                                
                            </div>
							
							<div class="form-group">
                                <label>Tipo de Proyecto </label>
								<SELECT name="tipoproyecto" required>
	      							<OPTION value="Individual">Individual</OPTION>
									<OPTION value="Comunal">Comunal </OPTION>
									<OPTION value="Empresarial">Empresarial </OPTION>
	            				</SELECT>
	                         </div>
										
							<div class="form-group">
                                <label>Titulo </label>
								<input class="form-control" type="text" name="titulo" required >
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
							
							<div class="form-group">
                                <label>Contenido </label>
								<textarea class="form-control" rows="10" name="contenido"  required></textarea>
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
									
							
							<div class="form-group">
                                <label>Foto de 1 </label>
								<input type="file" name="foto1" accept=".jpg, .jpeg, .png">
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
							<div class="form-group">
                                <label>Foto de 2 </label>
								<input type="file" name="foto2" accept=".jpg, .jpeg, .png">
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
							
					        	<button type="submit" value="Ingresar" name="crear_proyecto" class="btn btn-dark-main pull-center">Ingresar</button> 
                            
							
						</form>
					</div>
				</div>
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>