<?php 

$ruta = $_POST['ruta'];


//explode- Divide una cadena en varias cadenas

$archivo1 = explode("/", $ruta);

$archivo2 = $archivo1[count($archivo1) -1 ];

//Comprueba si existe un archivo o directorio
if (!file_exists($ruta)) {
	die("No existe $ruta");
}

header("Content-Disposition: attachment; filename=".$archivo2."");
header("Content-type: application/octet-stream");
header("Content-Length: ".filesize($ruta)); //header que envia al navegador el tamaño del archivo


 @readfile($ruta);




 ?>