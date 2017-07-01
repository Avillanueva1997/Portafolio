<?php 
require_once("conexion.php");

$id=$_POST['id'];

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
 	<a href="buscardatos.php"><img src="../img/administrador.png" id="img" height=50 width=50></a>
 </header>
 	
 <section id="contenedor">
 	<center>
 			 <center>
 			 <?php 
 			 	$consulta = "DELETE FROM datos WHERE id='$id'";
 			 	$ejecutar_consulta = mysql_query($consulta);

 			 	if ($ejecutar_consulta) {
 			 		echo "<p><b>Se ha borrado el contacto satisfactoriamente</b></p>";
 			 	
 			 	}

 			  ?>


 			 
 			 </center>
 		</div>
 		<script>
 			(function(){

 				function Regresar(){
 				setTimeout(Home,5000);
 			}

 			function Home(){
 				window.location='buscardatos.php';

 			}

 			Regresar();

 		}());
 		</script>
 	</center>
 </section>
 <footer>
 <p>&copy;Angel Villanueva</p>
 </footer>


 
 </body>
 </html>
