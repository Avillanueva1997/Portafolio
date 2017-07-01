<?php 
error_reporting(E_ALL ^ E_NOTICE);
$id	= $_POST['id'];
$imagen	= $_POST['imagen'];
$nombre	= $_POST['nombre'];
$apellido = $_POST['apellido'];
//$sexo = $_POST['sexo'];
$telcel	= $_POST['telcel'];
$email = $_POST['email'];
$fecha = $_POST['fecha'];
$profesion = $_POST['profesion'];


?>				

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/estiloForm.css">
	<link rel="stylesheet" type="text/css" href="../css/edicion.css">
</head>
<body>
<header>
	<img src="../img/administrador.png" id="img1" height=50 width=50>
</header>
<section id="contenedor">
	<form action="editar.php" enctype="multipart/form-data" method="post">
	<center>
	<fieldset>
	<input type="hidden" name="id" value="<?php echo $id ?>">
		<div class="archivo">
			<label for="imagen"><h4>+Nueva Foto
			</h4></label>
			<input type="file" id="imagen" name="imagen">
		</div>
		<div>
			<img src="<?php echo '../fotos/'.$imagen; ?>" id="foto" name="imagen" width="150" height="160">
			<input type="hidden"  class="text" name="imagen" id="imagen" value="<?php echo ''.$imagen; ?>">
		</div>
		<div>
			<label for="nombre"><h4>Nombre:
			</h4></label>
			<input type="text" class="text" id="nombre" name="nombre" value="<?php echo $nombre ?>">
		</div>
		<div>
			<label for="apellido"><h4>Apellido:
			</h4></label>
			<input type="text" class="text" id="apellido" name="apellido" value="<?php echo $apellido ?>">
		</div>
		<div>
			<label for="telcel"><h4>Tel/Cel:
			</h4></label>&nbsp;&nbsp;
			<input type="text" class="text" id="telcel" name="telcel" value="<?php echo $telcel ?>">
		</div>
		<div>
			<label for="email"><h4>Email:
			</h4></label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="email" class="text" id="email" name="email" value="<?php echo $email ?>">
		</div>
		<div>
			<label for="profesion">Profesión:</label>
			<input type="text" class="text" id="profesion" name="profesion" value="<?php echo $profesion ?>" >
		</div>
		<div>
			<label for="m">Sexo:
			</label>&nbsp;&nbsp;
			<input type="radio" class="cambio" id="m" name="sexo" value="Masculino" required>&nbsp;<label>Masculino</label>&nbsp;
			<input type="radio" class="cambio" id="f" name="sexo" value="Femenino" required>&nbsp;<label>Femenino</label>
		</div>
		<div>
			<label for="fecha">Fecha:</label>
			<input type="date" class="text" id="fecha" name="fecha" required>
		</div>
		<div>
			<input type="submit" class="button" id="enviar-alta" name="enviar" value="Actualizar">
		</div>
		
		<?php
		if(isset($_GET["mensaje"])) {

			$mensaje= $_GET["mensaje"];

			echo "<br><span class= 'mensaje'>$mensaje</span><br>";

		}


		 ?>
		 <!--Hace que regrese a la pag anterior-->
		 </fieldset>
		 <a href="javascript:window.history.back();">&laquo; Volver atrás</a>
	</center>
		
	</form>
</section>
<footer>
	<p><b>&copy;Angel Villanueva</b></p>
</footer>

</body>
</html>