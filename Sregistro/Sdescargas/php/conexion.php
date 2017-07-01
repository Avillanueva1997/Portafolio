<?php 
$servidor = "localhost";
$usuario = "root";
$pass = "angel";
$bd = "sdescargas";

//php 5.5 para adelante
$conexion = mysqli_connect($servidor,$usuario,$pass,$bd);

if (mysqli_connect_errno()) {

	echo "Error al conectarse con MySQL: " . mysqli_connect_error();
}


 ?>