<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
<br>
<div class="row">
<div class="col-md-12">
<h1 style="text-align: center;">Angel David Villanueva Cajas</h1>
<?php 
$operacion = $_POST['option'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$resultado;
/*
isset(): Determina si una variable ha sido definida y no es nula. Devuelve FALSE en caso de le pasemos una variable sin definir, una variable definida pero sin valor o con el valor puesto a null, y en el resto de casos devuelve TRUE.
empty(): Determina si la variable tiene un valor vacío, por llamarlo de alguna forma. En este caso devuelve TRUE en muchos supuestos: una cadena vacía (es decir “”, si es una cadena con un espacio en blanco tal que ” ” devolverá FALSE), un número 0 (sea tanto un entero, un float o una cadena con el número cero tal que “0”), una variable con el valor FALSE, una variable con el valor NULL, una variable definida pero sin valor y un array vacío. Al contrario que isset(), no puede evaluar variables que no hayan sido definidas.
*/

if (isset($n1) && !empty($n1) && isset($n2) && !empty($n2)) {
	echo "El resultado es:";
	switch ($operacion) {
		case 'suma':
			$resultado = $n1 + $n2;
			echo $resultado;
			break;
		case 'resta':
			$resultado = $n1 - $n2;
			echo $resultado;
			break;
		case 'mult':
		    $resultado = $n1 * $n2;
		    echo $resultado;
			break;
		case 'div':
			$resultado = $n1 / $n2;
			echo $resultado;
			break;
		default:
			echo "No se puede calcular lo requerido";
			break;
	}

} else {
	echo "<p>Debes insertar un número mayor a 0 para realizar la operación</p>";
}



 ?>
 
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="../index.html" class="btn btn-success" aria-label="Left Align">
 <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
</a>
<a href="../../index.html" class="btn btn-primary" aria-label="Left Align">
 <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
</a>

</div>
</div>
</div>
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

