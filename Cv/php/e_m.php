<!DOCTYPE html>
<html>
<head>
	<title>Correo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<section class="jumbotron jumbotron-av">
	<div class="container">
		<h1 style="text-align:center;"><a  style="text-decoration:none;" id="home" href="cv.html">Angel David Villanueva Cajas</a></h1>
		<p id="cv"><em>Estudiante de Ingeniería de Sistemas cursando el 4to año de estudios en la Universidad Inca Garcilaso de la Vega, con disposición para integrar equipos de trabajo, con responsabilidad, dinamismo y creatividad. Empático, con valores éticos, morales y un excelente trato. Inglés a nivel básico, intermedio y avanzado (en curso).</em></p>
	</div>
</section>
	</div>
</div>
<?php 
if(isset($_POST['asunto']) && !empty($_POST['asunto']) &&
	isset($_POST['mensaje']) && !empty($_POST['mensaje']))
{
	$destino = "a_ngel_456@hotmail.com";
	$desde = "From:". "CV";
	$asunto = $_POST['asunto'];
	$mensaje =$_POST['mensaje'];
	mail($destino, $asunto, $mensaje, $desde);

	echo "Correo Enviado...";
	
} else {
	echo "Problemas al enviar";
} 
 ?>
 <div class="row">
		<div class="col-md-12">
			<footer class="pie-pagina"><p>Redes Sociales: <a  id="fb" target="_blank" href="https://www.facebook.com/angel.villanueva.520">Facebook <span class="glyphicon glyphicon-user"></span></a> 	Programador <a href="mensaje.html">Angel </a><span class="glyphicon glyphicon-copyright-mark"></span></p></footer>
		</div>
	</div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </body>
 </html>