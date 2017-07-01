<?php  
include('conexion.php');

$consulta = mysql_query('SELECT * FROM login');
//devuelve los registro de la tabla login
$fila = mysql_fetch_array($consulta);

$usuario = $fila['usuario'];
$pass = $fila['pass'];

if ($_POST['user'] == $usuario && $_POST['pass'] == $pass ) {
	//Inciamos la sesion con la funcion
	session_start();
	//declaramos variables de sesion que permita autenticar al usuario

	$_SESSION['autentificado'] = true;
	$_SESSION['usuario'] = $_POST['user'];

	header('location: buscardatos.php');
} else{
	//esto indica que si no se autentica el usuario sale en la url el error
	header('location: ../index.php?error=no');
}


?>