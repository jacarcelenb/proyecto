<?php include('../dbcontroller/database.php'); ?>
<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Inscripcion</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<!--    INICIO CONTENIDO     -->		<div class="mg-page">
			<div class="container">
				<div class="row">
					<!----<form class="form-horizontal" method="POST" action="productosInsertando.php" enctype="multipart/form-data">--->
						
					<div class="col-md-2"></div>
					<div class="col-md-7">
						<h2 class="mg-sec-left-title" >Formulario de inscripcion</h2>

						
						<?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
       <strong> <?= $_SESSION['message']?>  </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
					
						<form  method="POST"  action="../dbcontroller/crearinscripcion.php" >
							<div class="mg-contact-form-input">
								<label for="full-name">Nombre</label>
								<input type="text"  class="form-control" id="full-name" name="nombre" required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Apellido</label>
								<input type="text" class="form-control" id="full-name" name="apellido" required>
							</div>
							<div class="mg-contact-form-input">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="correo" required >
							</div>
							<div class="mg-contact-form-input">
								<label for="email">Quiere ser?</label>
								<select id="disabledSelect" class="form-control"  NAME="tipomiembro" required>
					                <option VALUE="Miembro">Miembro</option>
									<option VALUE="Voluntario">Voluntario</option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Dirección</label>
								<input type="text" class="form-control" id="full-name" name="direccion" required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Numero de Celular</label>
								<input type="text" class="form-control" id="full-name" name="telefono" required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Profesión</label>
								<input type="text" class="form-control" id="full-name" name="profesion" required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Oficio</label>
								<input type="text" class="form-control" id="full-name" name="oficio" required>
							</div>
							
							<div class="mg-contact-form-input">
								<label for="subject">Cantón</label>
								<input type="text" class="form-control" id="full-name" name="departamento" required>
							
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Provincia</label>
								<input type="text" class="form-control" id="subject" name="provincia" required>
							</div>
							<input type="submit" class="btn btn-dark-main pull-right" value="Enviar" name="guardar_inscripcion">
						</form>
					</div>
                    
				</div>
			
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>