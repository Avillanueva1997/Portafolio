<!DOCTYPE html>
<html lang="es-ES">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/estiloForm.css">
</head>
<body>
<header>
	<img src="../img/administrador.png" id="img1" height=50 width=50>
</header>
<section id="contenedor">
	<form action="insertar.php" enctype="multipart/form-data" method="post">
	<center>
	<fieldset>
		<div class="archivo">
			<label for="imagen"><h4>+Nueva Foto
			</h4></label>
			<input type="file" id="imagen" name="imagen">
		</div>
		<div>
			<label for="nombre"><h4>Nombre:
			</h4></label>
			<input type="text" class="text" id="nombre" name="nombre" required>
		</div>
		<div>
			<label for="apellido"><h4>Apellido:
			</h4></label>
			<input type="text" class="text" id="apellido" name="apellido" required>
		</div>
		<div>
			<label for="telcel"><h4>Tel/Cel:
			</h4></label>&nbsp;&nbsp;
			<input type="text" class="text" id="telcel" name="telcel" required>
		</div>
		<div>
			<label for="email"><h4>Email:
			</h4></label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="email" class="text" id="email" name="email" required>
		</div>
		<div>
			<label for="profesion">Profesión:</label>
			<input type="text" class="text" id="profesion" name="profesion" required>
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
			<input type="submit" class="button" id="agregar" name="agregar" value="Agregar">
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