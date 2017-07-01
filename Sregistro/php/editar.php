<?php 

/*Capturamos los valores que vienen por post del formulario del archivo agregar.php*/

$id	= $_POST['id'];
$imagen=$_POST['imagen'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$sexo=$_POST['sexo'];
$telcel=$_POST['telcel'];
$email=$_POST['email'];
$fecha=$_POST['fecha'];
$profesion=$_POST['profesion'];



$imagen_default = $imagen;

include("conexion.php");

	include("funciones-img.php");
	$tipo = $_FILES["imagen"]["type"];
	$archivo = $_FILES["imagen"]["tmp_name"];
	$imagen_cargada =cargar_imagen($tipo,$archivo,$email);

	/*Si en el formulario no viene la imagen, entonces le asignamos el valor de la imagen predeterminada*/
	$imagen = empty($archivo)?$imagen_default:$imagen_cargada;
	//Consulta que inserta los valores que viene por POST

	$consulta = "UPDATE datos SET imagen ='".$imagen."',nombre='".$nombre."',apellido='".$apellido."',sexo='".$sexo."',telcel='".$telcel."',email='".$email."',fecha='".$fecha."', profesion='".$profesion."'WHERE id='".$id."'";

	
	$ejecutar_consulta = mysql_query(utf8_decode($consulta));

	if ($ejecutar_consulta) {

		$mensaje = "Se actualizo el contacto $email con exito<br><img src='../img/feliz.jpg' class='img2' height=50 width=50 />";
	}

header("location: edicion.php?op=alta&mensaje=$mensaje");


 ?>
