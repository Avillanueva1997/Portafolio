<?php 
$opcion = $_POST['opcion'];

require("conexion.php");

if (!empty($opcion)) {
	$consulta = "SELECT votos FROM respuesta WHERE id='$opcion'";
	$consulta = mysql_query($consulta);
	while ($row = mysql_fetch_array($consulta)) {
		$votos = $row['votos'];
	}

	$votos = $votos + 1;

	$consulta = "UPDATE respuesta SET votos = '$votos' WHERE id = '$opcion'";

	mysql_query($consulta);

}

header("location: ../verEncuesta.php")




 ?>