<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'fundacion_proyecto'
) or die(mysqli_erro($mysqli));

?>