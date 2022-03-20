<?php include('../dbcontroller/database.php');
?>
<?php include('../html_components/header.php'); ?>

		<div class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Videos - Enlaces</h2>
						<p></p>
					</div>
				</div>
			</div>
		</div>
<div class="mg-blog-list">
			<div class="container">
				<div class="row">
					
					<?php
          $query = "SELECT * FROM videoenlace";
          $result_proyectos = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_proyectos)) { ?>
         	
			 <div class="col-md-4">  
			 <iframe src="<?php echo $row['enlace']; ?>" width="320" height="240">
					</iframe>
			 
						<h5 class="mg-post-title" align="center"><?php echo $row['titulo']; ?></h5>
					</div>
					
          <?php } ?>
										
				</div>
			</div>
		</div>

<BR><BR>        
<?php include('../html_components/footer.php'); ?>