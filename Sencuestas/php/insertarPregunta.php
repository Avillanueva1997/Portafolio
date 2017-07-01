<?php 

$titulo = $_POST['titulo'];
$preguntas = $_POST['preguntas'];

require("conexion.php");

$fechaActual = date("Y-m-d");

$sql = "INSERT INTO encuestas(titulo, fecha) VALUES('$titulo','$fechaActual')";

$sql = mysql_query($sql);

//ahora obtenemos la id de la encuesta  que acabamamos de insertar

$sql = "SELECT id FROM encuestas ORDER BY fecha";

$sql = mysql_query($sql);

while ($row = mysql_fetch_array($sql)) {
	$id = $row["id"];
}

//recorre todas las preguntas
for ($i=1; $i <=$preguntas; $i++) { 
	$preg = p.$i;
	$pas = $_POST[$preg];
	$texto = $pas;

	//insertando

	$sql = "INSERT INTO respuesta(texto, votos, idenc) VALUES ('$texto', 0, '$id')";
	$sql=mysql_query($sql);
}

header("Location: ../crearEncuesta.php");

 ?>