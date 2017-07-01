<?php 
include("php/sesion.php");
include("header.php");
require("php/conexion.php");

$id = $_POST['id'];

$sql = "SELECT * FROM archivos WHERE id=$id";
$result = mysqli_query($conexion,$sql);

while ($row=mysqli_fetch_array($result)) {
	$idbd = $row['id'];
	$archivo = $row['ruta'];
	$size = $row['size'];
	
}

$size = $size / 1048576;
$link = "http://localhost/Sistemas/Sdescargas/NOTHING!".
$idbd;

 ?>

<section id="contenedor">
	<section id="principal">
		<article>
			<center>
			
			<fieldset id="descargar">
			<label for="">Archivo:<br><?php echo $archivo; ?></label><br>
			<label for="">Tamaño:<br><?php echo $size. " MB"; ?></label>
			</fieldset><br>
			<label for="">Link:</label><input type="text" name="" class="link" value="<?php echo $link; ?>"><br>
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