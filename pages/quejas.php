<?php include('../dbcontroller/database.php'); ?>
<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>quejas</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<div class="mg-page">
			<div class="container">
	
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-7">

	
						<h2 class="mg-sec-left-title" >Formulario de Quejas o Sugerencias</h2>

						<?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
	  <strong> <?= $_SESSION['message']?> </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>


										
						<!---------<p>Este formulario usted se podrá inscribirse para ser voluntario o miembre de ASAMBLEA IMBABURA RENACIENTE,  Boliva y poder ser en un futuro parte nuestra. La información puesta por usted será solo de uso interno de ASAMBLEA IMBABURA RENACIENTE, .</p>----->
						<form  method="POST"  action="../dbcontroller/crearqueja.php" >
							
							<div class="mg-contact-form-input">
								<label for="full-name">Nombre completo</label>
								<input type="text" class="form-control" id="full-name" name="nombrecompleto"
								required>
							</div>
							
							
							<div class="mg-contact-form-input">
								<label for="subject">Es miembro?</label>
								<select  class="form-control"  name="miembro">
					                <option value="SI">SI</option>
									<option value="NO">NO</option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Canton en  el que Reside?</label>
								<input type="text" class="form-control" id="subject" name="departamento" 
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Asunto?</label>
								<select  class="form-control"  name="asunto">
					                <option value="Queja">Queja</option>
									<option value="Sugerencia">Sugerencia</option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Mensaje</label>
								<textarea class="form-control" id="subject" rows="5" name="mensaje"
								required></textarea>
							</div>

							<input type="submit" name="guardar_queja"class="btn btn-dark-main pull-right" value="Enviar">

				
						</form>

						
					
		
					
				
					</div>
		
                    
				</div>
		
				
		
		</div>
			</div>

			
<BR><BR>        
<!--    FIN CONTENIDO     -->
<?php include('../html_components/footer.php'); ?>