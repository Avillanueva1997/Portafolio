<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "angel";
$db = "sistema_encuestas";

$conexion = mysql_connect($host,$user,$pass) or die("Problemas con la conexión a la BD!");
mysql_select_db($db, $conexion) or die("No existe la BD");

 ?>