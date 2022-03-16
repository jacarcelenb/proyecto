<?php
include("database.php");

$nombre = "";
$apellido = "";
$correo = "";
$tipomiembro = "";
$direccion = "";
$telefono = "";
$profesion = "";
$oficio = "";
$departamento = "";
$provincia = "";

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM inscripciones WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
	$nombre = $row['nombre'];
	$apellido = $row['apellido'];
	$correo = $row['correo'];
	$tipomiembro = $row['tipomiembro'];
	$direccion =$row['direccion'];
	$telefono = $row['telefono'];
	$profesion = $row['profesion'];
	$oficio = $row['oficio'];
	$departamento = $row['departamento'];
	$provincia = $row['provincia'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $tipomiembro = $_POST['tipomiembro'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $profesion = $_POST['profesion'];
  $oficio = $_POST['oficio'];
  $departamento = $_POST['departamento'];
  $provincia = $_POST['provincia'];

  $query = "UPDATE `inscripciones` SET nombre ='$nombre', apellido ='$apellido',correo ='$correo',tipomiembro ='$tipomiembro'
  ,direccion ='$direccion', telefono ='$telefono', profesion='$profesion',oficio='$oficio'
  , departamento='$departamento', provincia='$provincia' WHERE  id=$id";

   mysqli_query($conn, $query);
  
  $_SESSION['message'] = 'Inscripcion actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';

  header('Location: ../pages/listarinscripciones.php');
}

?>
<?php include('../html_components/headerforms.php'); ?>

      <form action="../dbcontroller/editarinscripcion.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="mg-contact-form-input">
								<label for="full-name">Nombre</label>
								<input type="text" class="form-control" id="full-name" name="nombre" 
								value="<?php echo $nombre; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Apellido</label>
								<input type="text" class="form-control" id="full-name" name="apellido" 
								value="<?php echo $apellido; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" id="email" name="correo" 
								value="<?php echo $correo; ?>"
								required >
							</div>
							<div class="mg-contact-form-input">
								<label for="email">Quiere ser?</label>
								<select id="disabledSelect" class="form-control"  NAME="tipomiembro" required>
					                <option value="<?php 
									if ($tipomiembro=="Miembro") {
										echo "Miembro";
									} else {
										echo "Voluntario";
									} ?>"><?php 
									if ($tipomiembro=="Miembro") {
										echo "Miembro";
									} else {
										echo "Voluntario";
									} ?></option>
									<option  value="<?php 
									if ($tipomiembro=="Miembro") {
										echo "Voluntario";
									} else {
										echo "Miembro";
									} ?>"><?php 
									if ($tipomiembro=="Miembro") {
										echo "Voluntario";
									} else {
										echo "Miembro";
									} ?></option>
    					        </select>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Dirección</label>
								<input type="text" class="form-control" id="full-name" name="direccion" 
								value="<?php echo $direccion; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Numero de Teléfono o Celular</label>
								<input type="text" class="form-control" id="full-name" name="telefono"
								value="<?php echo $telefono; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Profesión</label>
								<input type="text" class="form-control" id="full-name" name="profesion" 
								value="<?php echo $profesion; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Oficio</label>
								<input type="text" class="form-control" id="full-name" name="oficio" 
								value="<?php echo $oficio; ?>"
								required>
							</div>
							
							<div class="mg-contact-form-input">
								<label for="subject">Departamento en que Reside?</label>
								<input type="text" class="form-control" id="full-name" name="departamento" 
								value="<?php echo $departamento; ?>"
								required>
							
							</div>
							<div class="mg-contact-form-input">
								<label for="subject">Provincia o Comunidad en que Reside?</label>
								<input type="text" class="form-control" id="subject" name="provincia" 
								value="<?php echo $provincia; ?>"
								required>
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