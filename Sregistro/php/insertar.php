<?php 

/*Capturamos los valores que vienen por post del formulario del archivo agregar.php*/

$imagen=$_POST['imagen'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$sexo=$_POST['sexo'];
$telcel=$_POST['telcel'];
$email=$_POST['email'];
$fecha=$_POST['fecha'];
$profesion=$_POST['profesion'];


//Dependiendo del sexo que se elija colocamos una imagen predeterminada
//esta declaracion es como un tipo if? else:
$imagen_default=($sexo=="Masculino")?"masculino.png":"femenino.png";
//Comprobamos que no exista el email del nuevo usuario que se va agregar en la bd

include("conexion.php");

$consulta = mysql_query("SELECT * FROM datos WHERE email='$email'");
//Condicion que evaluara la variable $consulta
if(mysql_num_rows($consulta) == 0){
	//Funciones que carga la imagen
	include("funciones-img.php");
	$tipo = $_FILES["imagen"]["type"];
	$archivo = $_FILES["imagen"]["tmp_name"];
	$imagen_cargada =cargar_imagen($tipo,$archivo,$email);

	/*Si en el formulario no viene la imagen, entonces le asignamos el valor de la imagen predeterminada*/
	$imagen = empty($archivo)?$imagen_default:$imagen_cargada;
	//Consulta que inserta los valores que viene por POST

	$consulta = "INSERT INTO datos(imagen,nombre,apellido,sexo,telcel,email,fecha,profesion) VALUES ('$imagen','$nombre','$apellido','$sexo','$telcel','$email','$fecha','$profesion')";
	$ejecutar_consulta = mysql_query(utf8_decode($consulta));

	if ($ejecutar_consulta) {

		$mensaje = "Se agrego el contacto $email con exito<br><img src='../img/feliz.jpg' class='img2' height=50 width=50 />";
	}

	} else {

	$mensaje = "Ya existe el contacto con el email: $email<br><img src='../img/triste.jpg' class='img2' height=50 width=50/>";

	
	
}

header("location: agregar.php?mensaje=$mensaje");
exit;

 ?>
