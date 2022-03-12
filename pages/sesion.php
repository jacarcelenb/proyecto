<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Iniciar Sesion</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<!--    INICIO CONTENIDO     -->		<div class="mg-page">
			<div class="container">
				<div class="row">
					<!----<form class="form-horizontal" method="POST" action="productosInsertando.php" enctype="multipart/form-data">--->
					<form class="form-horizontal" method="POST" action="admin.php">
						
					<div class="col-md-2"></div>
					<div class="col-md-7">
						<h2 class="mg-sec-left-title" >Iniciar Sesion</h2>
				
						<form  method="POST"  action="admin.php" >
							<div class="mg-contact-form-input">
								<label for="full-name">Usuario</label>
								<input type="text" class="form-control" id="full-name" name="usuario" >
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Contraseña</label>
								<input type="text" class="form-control" id="full-name" name="contraseña" >
							</div>
							
							<input type="submit" class="btn btn-dark-main pull-right" value="Iniciar Sesion">
						</form>
					</div>
                    
				</div>
				</form>
			</div>
		</div>
<BR><BR>        
<!--    FIN CONTENIDO     -->
<?php include('../html_components/footer.php'); ?>