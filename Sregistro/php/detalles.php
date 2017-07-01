<?php 
include("conexion.php");
error_reporting(E_ALL ^ E_NOTICE);
$id= $_POST['id'];
$email= $_POST['email'];

 ?>

 <!DOCTYPE html>
 <html lang="es-ES">
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
 	<link rel="stylesheet" type="text/css" href="../css/estiloForm.css">
 	<link rel="stylesheet" type="text/css" href="../css/detalles.css">
 </head>
 <body>
 <header>
 	<img src="../img/administrador.png" id="img" height=50 width=50>
 </header>
 	<nav>
 		<center>
 			<form action="eliminar.php" method="post" id="eliminar">
 			<input type="hidden" value="<?php echo $id; ?>" name="id">
 			<input type="submit" class="button" value="Eliminar" name="eliminar">
 				
 			</form>
 		</center>
 	</nav>
 <section id="contenedor">
 	<center>
 		<div class="contenedor">
 			<?php

 			$consulta = mysql_query("SELECT * FROM datos WHERE id='$id'|| email= '$email'");
 			while ($filas=mysql_fetch_array($consulta)) {
 				$id = $filas["id"];
 				$imagen = $filas["imagen"];
 				$nombre = $filas["nombre"];
 				$apellido = $filas["apellido"];
 				$sexo = $filas["sexo"];
 				$telcel = $filas["telcel"];
 				$email = $filas["email"];
 				$fecha = $filas["fecha"];
 				$profesion = $filas["profesion"];
 				
 			}


 			 ?>
 			 <center>
 			 	<div class="cajaSola">
 			 		<h4><?php echo $nombre; ?></h4>
 			 		<img src="<?php echo "../fotos/".$imagen;?>" width=280 height=250>

 			 	</div>

 			 	<div class="cajaDes">
 			 		<h3>Descripci&oacute;n</h3>
 			 		<h4><?php echo "Nombre: ".$nombre; ?></h4>
 			 		<h4><?php echo "Apellido: ".$apellido; ?></h4>
 			 		<h4><?php echo "Sexo: ".$sexo; ?></h4>
 			 		<h4><?php echo "Tel/Cel: ".$telcel; ?></h4>
 			 		<h4><?php echo "Email: ".$email; ?></h4>
 			 		<h4><?php echo "Fecha: ".$fecha; ?></h4>
 			 		<h4><?php echo "Profesión: ".$profesion; ?></h4>

 			 		<form action="edicion.php" method="post">
 			 			<input type="hidden" value="<?php echo $id; ?>" name="id">
 			 			<input type="hidden" value="<?php echo $imagen; ?>" name="imagen">
 			 			<input type="hidden" value="<?php echo $nombre; ?>" name="nombre">
 			 			<input type="hidden" value="<?php echo $apellido; ?>" name="apellido">
 			 			<input type="hidden" value="<?php echo $sexo; ?>" name="sexo">
 			 			<input type="hidden" value="<?php echo $telcel; ?>" name="telcel">
 			 			<input type="hidden" value="<?php echo $email; ?>" name="email">
 			 			<input type="hidden" value="<?php echo $fecha; ?>" name="fecha">
 			 			<input type="hidden" value="<?php echo $profesion; ?>" name="profesion">
 			 			<center>
 			 			<input type="submit" class="button" value="Editar" name="editar">
 			 			</center>
 			 			

 			 		</form>
 			 	</div>
 			 </center>
 		</div>
 		<a href="javascript:window.history.back();">&laquo;Volver atrás</a>
 	</center>
 </section>
 <footer>
 <p>&copy;Angel Villanueva</p>
 </footer>


 
 </body>
 </html>