<!DOCTYPE html>
<html lang="es Es">
<head>
	<title>Sistema de Descargas</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="jsjquery.easing.1.3.js"></script>
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">	


</head>
<body>
<header>
	<h1 id="titulo">Sistema de Descargas</h1>
</header>
<?php 
error_reporting(E_ALL ^ E_NOTICE);
require("php/conexion.php");
$id = $_GET['id'];

$sql = "SELECT * FROM archivos WHERE id=$id";
$result = mysqli_query($conexion,$sql);

while ($row=mysqli_fetch_array($result)) {
	$idbd = $row['id'];
	$archivo = $row['ruta'];
	$size = $row['size'];
	
}


 ?>

<section id="contenedor">
	<section id="principal">
		<article>
			<center>
			<fieldset>
				<form action="php/descargar.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="ruta" value="<?php echo '../archivos/'.$archivo ?>">	
			<fieldset id="descargar">
			<label for="">Archivo:<br><?php echo $archivo; ?></label><br>
			<label for="">Tamaño:<br><?php echo $size. " MB"; ?></label>
			</fieldset><br>
			<input type="submit" name="submit" class="submit" value="Descargar!">
			</form>
			<?php 
			if ($idbd != $id) {
			 	echo "No existe el archivo!";
			 } 
			 ?>
			 </fieldset><br>
			 <img src="images/Cloud.jpg" id="img">
			</center>
		</article>
	</section>
	
</section>
<?php 
include("footer.php"); 
?>