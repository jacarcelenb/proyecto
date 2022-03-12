<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>inscripcion</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<!--    INICIO CONTENIDO     -->		<div class="mg-page">
			<div class="container">
				<div class="row">
					<!----<form class="form-horizontal" method="POST" action="productosInsertando.php" enctype="multipart/form-data">--->
					<form class="form-horizontal" method="POST" action="inscripcionform.php" enctype="multipart/form-data">
						
					<div class="col-md-2"></div>
					<div class="col-md-7">
						<h2 class="mg-sec-left-title" >Inscribase ahora mismo</h2>
						<p>Este formulario usted se podrá inscribirse para ser voluntario o miembre de Life Force Boliva y poder ser en un futuro parte nuestra. La información puesta por usted será solo de uso interno de Life Force Bolivia.</p>
						<form class="clearfix" method="POST"  action="formcontacto.php" >
							<div class="mg-contact-form-input">
								<label for="full-name">Su Nombre</label>
								<input type="text" class="form-control" id="full-name" name="Nombre" >
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Su Apellido</label>
								<input type="text" class="form-control" id="full-name" name="Apellido" >
							</div>
							<div class="mg-contact-form-input">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="Correo" >
							</div>
							<div class="mg-contact-form-input">
								<label for="email">Quiere ser?</label>
								<select id="disabledSelect" class="form-control"  NAME="Quiere ser">
					                <option VALUE="Miembro">Miembro</option>
									<option VALUE="Voluntario">Voluntario</option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Su Dirección</label>
								<input type="text" class="form-control" id="full-name" name="Direccion" >
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Numero de Teléfono o Celular</label>
								<input type="text" class="form-control" id="full-name" name="Celular o telefono" >
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Profesión</label>
								<input type="text" class="form-control" id="full-name" name="Profesion" >
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Oficio</label>
								<input type="text" class="form-control" id="full-name" name="Oficio" >
							</div>
							
							<div class="mg-contact-form-input">
								<label for="subject">Departamento en que Reside?</label>
								<select id="disabledSelect" class="form-control"  NAME="Departamento">
					                <option VALUE="La Paz">La Paz</option>
									<option VALUE="Cochabamba">Cochabamba</option>
									<option VALUE="Santa Cruz">Santa Cruz</option>
									<option VALUE="Tarija">Tarija</option>
									<option VALUE="Potosi">Potosi</option>
									<option VALUE="Oruro">Oruro</option>
									<option VALUE="Chuquisaca">Chuquisaca</option>
									<option VALUE="Beni">Beni</option>
									<option VALUE="Pando">Pando</option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Provincia o Comunidad en que Reside?</label>
								<input type="text" class="form-control" id="subject" name="Provincia o Comunidad" >
							</div>
							<div class="mg-contact-form-input">
								
								<label for="subject"><input type="checkbox" class="form-control" id="full-name">Políticas de incorporación de miembros a la asamblea nacional de Bolivia. <a href="POLITICAS DE INCORPORACION DE MIEMBROS A LA ASAMBLEA NACIONAL DE BOLVIA.pdf" target="_blank"><strong> español</strong></a>/ <a href="POLITICAS DE INCORPORACION DE MIEMBROS A LA ASAMBLEA NACIONAL DE BOLVIA INGLES.pdf" target="_blank"><strong>ingles</strong></a></label>
							</div>
							<input type="submit" class="btn btn-dark-main pull-right" value="Aceptar y Enviar">
						</form>
					</div>
                    
				</div>
				</form>
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>