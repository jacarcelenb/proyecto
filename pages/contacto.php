
<?php 
include('../dbcontroller/database.php');
include('../html_components/header.php');

 ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Contacto</h2>
						<p></p>
					</div>
				</div>
			</div>
			</div>
				<div class="mg-page">
					
			<div class="container">
			<?php if (isset($_SESSION['enviado'])) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Correo enviado exitosamente</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
	<div>
				<div class="row">
					
					<div class="col-md-5">
						<h2 class="mg-sec-left-title" >Envie un mensaje</h2>
						<form method="POST" action="formcontacto.php">
							<div class="mg-contact-form-input">
								<label for="full-name">Nombre</label>
								<input type="text" class="form-control" id="full-name" name="nombre">
							</div>
							<div class="mg-contact-form-input">
								<label for="email">Correo</label>
								<input type="text" class="form-control" id="email" name="correo">
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Asunto</label>
								<input type="text" class="form-control" id="subject" name="asunto">
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Mensaje</label>
								<textarea class="form-control" id="subject" rows="5" name="mensaje"></textarea>
							</div>
							<input type="submit" class="btn btn-dark-main pull-right" value="Enviar" name="enviar">
						</form>
					
					</div>
                    <div class="col-md-7">
						<h2 class="mg-sec-left-title">Teléfonos y Direcciones</h2>
						<p>Puede comunicarse en las siguientes Teléfonos y Celulares.</p>
						
					</div>
                    
					<div class="col-md-6"> 
							<p>
									<strong><i class="fa fa-home"></i> Dirección:</strong> Av. Jaime Roldos y Sánchez y Cifuentes<BR>
									<strong><i class="fa fa-phone"></i>Teléfono:</strong> 062558009<BR>
									<strong><i class="fa fa-mobile-phone"></i> Celular:</strong> 0997693293 - 0986176366<BR>
									<strong><i class="fa fa-whatsapp"></i> WhatsApp:</strong> 0997693293 - 0986176366<BR><BR>
									Ibarra - Ecuador
								</p>
				
								<p>
									<a href="mailto:secretaria.lifeir@gmail.com " style="color:darkgreen">secretaria.lifeir@gmail.com </a>
								</p>
					</div>
                    <!------
                    <div class="col-md-7">
						<h2 class="mg-sec-left-title">Mapa de Ubicacion</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3807.738343411652!2d-66.15884513499071!3d-17.376319268472898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d-17.3762729!2d-66.1566042!4m3!3m2!1d-17.376262699999998!2d-66.1566364!5e0!3m2!1ses!2sbo!4v1538431420328" width="100%" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
                    ----------->
				</div>
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>