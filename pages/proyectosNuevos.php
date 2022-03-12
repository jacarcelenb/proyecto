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
<!--    INICIO CONTENIDO     -->		<div class="mg-page">
			<div class="container">
				<div class="row">
                    <div class="col-lg-9">
						<h2 class="mg-sec-left-title" >Ingrese nuevo proyecto</h2>
                        <form role="form" method="POST" action="#" accept-charset="UTF-8" class="form-horizontal"  enctype="multipart/form-data">
							
							
							
							<div class="form-group">
                                <label>Departamento </label>
								<SELECT NAME="departamento_noticia">
	      							<OPTION SELECTED VALUE="Cochabamba">Cochabamba
	        						<OPTION VALUE="La Paz">La Paz
	          						<OPTION VALUE="Santa Cruz">Santa Cruz
									<OPTION VALUE="Beni">Beni 
									<OPTION VALUE="Pando">Pando 
									<OPTION VALUE="Tarija">Tarija 
									<OPTION VALUE="Oruro">Oruro 
									<OPTION VALUE="Potosi">Potosi 
									<OPTION VALUE="Chuquisaca">Chuquisaca 
	            				</SELECT>
	                         </div>
							<div class="form-group">
                                <label>Provincia o Comunidad </label>
								<input class="form-control" placeholder="Ejemplo: Cercado"  name="lugar_noticia">
                                
                            </div>
							
							<div class="form-group">
                                <label>Tipo de Proyecto </label>
								<SELECT NAME="departamento_noticia">
	      							<OPTION SELECTED VALUE="Individual">Individual</OPTION>
									<OPTION VALUE="Comunal">Comunal </OPTION>
									<OPTION VALUE="Empresarial">Empresarial </OPTION>
	            				</SELECT>
	                         </div>
										
							<div class="form-group">
                                <label>Titulo </label>
								<input class="form-control" type="text" name="titulo_noticia" >
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
							
							<div class="form-group">
                                <label>Contenido <em> (para salto de linea o punto aparte colocar < BR > )</em></label>
								<textarea class="form-control" rows="10" name="contenido_noticia" ></textarea>
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
									
							
							<div class="form-group">
                                <label>Foto de 1 </label>
								<input type="file" name="foto1_noticia" >
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
							<div class="form-group">
                                <label>Foto de 2 </label>
								<input type="file" name="foto2_noticia" >
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
	
							<div class="form-group">
                                <label>Archivo en PDF o otra extensión</label>
								<input type="file" name="docum_noticia" >
                                <!---<p class="help-block">Example block-level help text here.</p>-->
                            </div>
							
							
					        	<button type="submit" value="Asignar" name="Asignar" class="btn btn-dark-main pull-center">Ingresar</button> 
                            	<button type="reset" class="btn btn-dark-main pull-center">Borrar</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
<BR><BR>        
<?php include('../html_components/footer.php'); ?>