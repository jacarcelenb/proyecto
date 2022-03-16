<?php
include("database.php");

$nombre = '';
$miembro = false;
$departamento = '';
$asunto = '';
$mensaje = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM queja WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombres'];
    $miembro = $row['esmiembro'];
    $departamento = $row['departamento'];
    $asunto = $row['asunto'];
    $mensaje = $row['mensaje'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombrecompleto'];
  $miembro = $_POST['miembro'];
  $departamento = $_POST['departamento'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  if ($miembro=="SI") {
	$miembro = 1;
  } else {
	$miembro = 0;
	
  }

  $query = "UPDATE queja set nombres = '$nombre', esmiembro = '$miembro' ,
  departamento = '$departamento' , asunto='$asunto' ,mensaje ='$mensaje' WHERE id=$id";
  mysqli_query($conn, $query);

  
  $_SESSION['message'] = 'Queja actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';

  header('Location: ../pages/listarquejas.php');
}

?>
<?php include('../html_components/headerforms.php'); ?>
      <form action="../dbcontroller/editarqueja.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="mg-contact-form-input">
								<label for="full-name">Nombre completo</label>
								<input type="text" class="form-control" id="full-name" name="nombrecompleto"
                                value="<?php echo $nombre; ?>" required>
							</div>
							
							
							<div class="mg-contact-form-input">
								<label for="subject">Es miembro?</label>
								<select  class="form-control"  name="miembro" 
                                required>
					                <option value="<?php
								if ($miembro==true) {
									echo true;
								} else {
									echo $miembro;
								} ?>"><?php
								if ($miembro==true) {
									echo "SI";
								} else {
									echo "NO";
								} ?></option>
									<option value="<?php
								if ($miembro==true) {
									echo false;
								} else {
									echo $miembro;
								} ?>"><?php
								if ($miembro==true) {
									echo "NO";
								} else {
									echo "SI";
								} ?></option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Departamento o Provincia/Region en que Reside?</label>
								<input type="text" class="form-control" id="subject" name="departamento"
                                value="<?php echo $departamento; ?>" required>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Asunto?</label>
								<select  class="form-control"  name="asunto" 
								required>
					                <option  value="<?php 
								if ($asunto=="Queja") {
									echo $asunto;
								} else {
									echo "Sugerencia";
								}
								
								 ?>"><?php 
								 if ($asunto=="Queja") {
									 echo $asunto;
								 } else {
									 echo "Sugerencia";
								 }
								 
								  ?></option>
									<option value="<?php 
								if ($asunto=="Queja") {
									echo "Sugerencia";
								} else {
									echo "Queja";
								}
								
								 ?>"><?php 
								 if ($asunto=="Queja") {
									 echo "Sugerencia";
								 } else {
									 echo "Queja";
								 }
								 
								  ?></option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Mensaje</label>
								<textarea class="form-control" id="subject" rows="5" name="mensaje"
								required><?php echo $mensaje; ?></textarea>
							</div>
        <button class="btn btn-dark-main pull-right" name="update">
          Editar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<br>
<?php include('../html_components/footer.php'); ?>