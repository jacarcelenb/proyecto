<?php
include("database.php");
$titulo ="";
$descripcion ="";
$tipo ="";
$autor ="";
$enlace="";


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM blog WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $titulo =$row['titulo'];
    $descripcion =$row['descripcion'];
	$tipo = $row['tipodeblog'];
    $autor = $row['autor'];
    $enlace= $row['enlace'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $tipo = $_POST['tipo'];
  $autor = $_POST['autor'];
  $enlace = $_POST['enlace'];


  try { 

 $query = "UPDATE `blog` SET titulo='$titulo',tipodeblog='$tipo',autor='$autor',descripcion='$descripcion',enlace='$enlace' WHERE id=$id";

 mysqli_query($conn, $query);
  
  $_SESSION['message'] = 'Blog actualizado exitosamente';
  $_SESSION['message_type'] = 'warning';

  header('Location: ../pages/listarblogs.php');
   } catch (mysqli_sql_exception $e) { 
	var_dump($e);
	exit; 
 } 
}

?>
<?php include('../html_components/headerforms.php'); ?>

      <form action="../dbcontroller/editarblog.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="mg-contact-form-input">
								<label for="full-name">Titulo</label>
								<input type="text" class="form-control" id="full-name" name="titulo" 
								value="<?php echo $titulo; ?>"
								required>
							</div>
							<div class="mg-contact-form-input">
								<label for="full-name">Descripcion</label>
								<input type="text" class="form-control" id="full-name" name="descripcion" 
								value="<?php echo $descripcion; ?>"
								required>
							</div>

							<div class="form-group">
                                <label>Tipo</label>
								<input class="form-control" type="text" name="tipo" value="<?php echo $tipo; ?>"
								 required>
                            </div>
							<div class="form-group">
                                <label>Autor</label>
								<input class="form-control" type="text" name="autor" 
								value="<?php echo $autor; ?>" required>
                            </div>

							<div class="form-group">
                                <label>Enlace</label>
								<input class="form-control" type="text" name="enlace" 
								value="<?php echo $enlace; ?>" required>
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