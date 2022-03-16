<?php
include("database.php");


$titulo = " ";
$descripcion = "";


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM noticia WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titulo =$row['titulo'];
    $descripcion =$row['descripcion'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $titulo = $_POST['titulo'];
  $contenido = $_POST['descripcion'];




 $query = "UPDATE `noticia` SET titulo ='$titulo',descripcion='$contenido' WHERE id=$id";

 mysqli_query($conn, $query);
  
  $_SESSION['message'] = 'Noticia actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';

  header('Location: ../pages/listarnoticias.php');
}

?>
<?php include('../html_components/headerforms.php'); ?>

      <form action="../dbcontroller/editarnoticia.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="mg-contact-form-input">
								<label for="full-name">Titulo</label>
								<input type="text" class="form-control" id="full-name" name="titulo" 
								value="<?php echo $titulo; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Descripcion</label>
								<textarea class="form-control" rows="10" name="descripcion"  required>
								<?php echo $descripcion; ?>
								</textarea>
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