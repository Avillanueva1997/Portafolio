<?php 
include("php/sesion.php");
include("header.php");

$namefinal = $_POST['nombre'];
$tipo = $_POST['tipo'];
$tamaño = $_POST['tamaño'];
 ?>

<section id="contenedor">
	<section id="principal">
		<article>
			<center>
			
			<fieldset id="archivo">
			<form action="php/insertArchivos.php" method="post" enctype="multipart/form-data">
			<label class="cargar">
				+ Subir Archivo
				<span>
					<input  type="file" id="archivo" name="fichero">
				</span>
			</label>
			<br><br>
				
				<p><input class="input" type="text" name="nombreArchivo" placeholder="Nombre" required></p>
				<p><input class="submit" type="submit" name="submit" value="Upload!"></p>

			</form>
			<?php 
			echo "<b>Upload exitoso!. Datos: </b><br>";
			echo "Nombre: <i>".$namefinal."</i><br>";
			echo "Tipo MIME: <i>".$tipo."</i><br>";
			echo "Peso: <i>".$tamaño." bytes</i><br>";
			echo "<br><hr><br>";

			 ?>
			</fieldset>
			<img id="img" src="images/Cloud.jpg">
			</center>
		</article>
	</section>
	<aside>
	<nav id="menu">
		<ul>
			<li><a href="index.php" id="enlaces" class="inicio">Inicio</a></li>
			<li><a href="subirArchivos.php" id="enlaces" class="inicio">Cargar Archivo</a></li>
			<li><a href="listarArchivos.php" id="enlaces" class="inicio">Ver Archivos</a></li>
			<li><a href="php/salir.php" id="enlaces" class="inicio">Salir</a></li>
		</ul>
	</nav>
	</aside>
</section>
<?php 
include("footer.php"); 
?>