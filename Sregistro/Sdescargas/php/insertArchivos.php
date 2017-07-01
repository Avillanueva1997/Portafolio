<?php 
require("conexion.php");

if (isset($_POST['submit'])) {
	if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
		$ruta_destino = "../archivos/";
		/*trim — Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena*/
		$nameFinal = trim($_FILES['fichero']["name"]);
		//Reemplaza a espacio vacio por _
		$nameFinal = ereg_replace(" ","_", $nameFinal);
		$uploadFile = $ruta_destino.$nameFinal;

		if (move_uploaded_file($_FILES['fichero'] ['tmp_name'], $uploadFile )) {
			$nombreArchivo = $_POST['nombreArchivo'];

			$consulta = "INSERT INTO archivos VALuES (0, '$nombreArchivo', '".$nameFinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')";

			mysqli_query($conexion, $consulta) or die(mysqli_error());
			mysqli_close($conexion);

		}
	}
}

 ?>

 <form action="../subirArchivos.php" method="post" name="formulario">
 	<input type="hidden" name="nombre" value="<?php echo $nameFinal; ?>">
 	<input type="hidden" name="tipo" value="<?php echo $_FILES['fichero']['type']; ?>">
 	<input type="hidden" name="tamaño" value="<?php echo $_FILES['fichero']['size']; ?>">
 </form>
 <script type="text/javascript">
 	document.formulario.submit();
 </script>