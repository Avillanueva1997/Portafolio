<?php 
require("conexion.php");

$ruta= $_POST['ruta'];
$id= $_POST['id'];

if (file_exists($ruta)) {
	//eliminamos ese archivo si exista esa ruta
	unlink($ruta);
}

//consulta para eliminar los datos de la tabla archivos

$consulta = "DELETE FROM archivos WHERE id='$id'";
$sql= mysqli_query($conexion, $consulta);

 ?>

 <meta http-equiv="refresh" content="0;url=../listarArchivos.php">