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

					

										
						<!---------<p>Este formulario usted se podrá inscribirse para ser voluntario o miembre de Life Force Boliva y poder ser en un futuro parte nuestra. La información puesta por usted será solo de uso interno de Life Force Bolivia.</p>----->
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
								<label for="subject">Departamento o Provincia/Region en que Reside?</label>
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

							<div class="mg-contact-form-input">
								<label for="subject">A leido? 
									<input type="checkbox" class="form-control" id="full-name"  name="leido"
									required >Políticas de Quejas. <a href="POLITICAS DE QUEJAS.pdf" target="_blank"><strong>VER</strong></a></label><BR>
							</div>
							<input type="submit" name="guardar_queja"class="btn btn-dark-main pull-right" value="Enviar">

							<?php if (isset($_SESSION['message'])) { 

                           print("<h1>Queja registrada exitosamente</h1>"); ?>

                          <?php session_unset(); } ?>
				
						</form>
		
					
				
					</div>
		
                    
				</div>
		
				
		
		</div>
			</div>

			
<BR><BR>        
<!--    FIN CONTENIDO     -->
<?php include('../html_components/footer.php'); ?>