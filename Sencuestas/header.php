<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema de Encuestas</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="onepiece.ico">
	<i class="fa fa-rocket" aria-hidden="true"></i>


	<link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/styleSlider.css">
	<link rel="stylesheet" type="text/css" href="css/estilofooter.css">
	<link rel="stylesheet" type="text/css" href="css/estiloform.css">
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script>
	$(function(){
		var pull = $('#pull');
		var menu = $('nav ul');
		var menuHeight = menu.height();

		$(pull).on('click',function(e){
			e.preventDefault();
			menu.slideToggle();

		});

	});
		
	</script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

</head>
<header>
	<nav id="menu">
	<ul>
		<li><a href="../index.html" id="logo">&nbsp;</a></li>
		<li><a href="index.php" id="enlaces" class="inicio">Inicio</a></li>
		<li><a href="verEncuesta.php" id="enlaces">Encuestas</a></li>
		<li><a href="votarEncuesta2.php" id="enlaces">Responder</a></li>
		<li>
			<?php 
			error_reporting(E_ALL ^ E_NOTICE);
			session_start();
			/*Evaluo que la sesion continue verificando una de las variables creadas en control.php*/
			if ($_SESSION["usuario"]) {
				echo "<a href='crearEncuesta.php' id='enlaces'>Crear</a>";
		    ?>
		</li>
		<?php 
		       echo "<li><a id='enlaces' href='php/salir.php'>Salir</a></li>";


			}else{
				echo "<li><a id='enlaces' href='login.php'>Login</a></li>";
			 	
			}
	    ?>
			
	</ul>
	<a id="pull">&nbsp;</a>
</nav>
</header>