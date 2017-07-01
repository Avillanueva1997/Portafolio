<!DOCTYPE html>
<html lang="es Es">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilologin.css">
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="js/animacionlogin.js"></script>
</head>
<body>
<div id="content">
<a href="../index.html"><img id="img1" src="img/administrador.png" height=50 width=50></a>
	<div id="login">
		<a id="showlogin" href="#">Usuario
		<span id="down">&#9660;</span>
		<span id="up" style="display: none;">&#9650;</span></a>
		<div id="loginpanel" style="display:none;">
		<?php 
		error_reporting(E_ALL ^ E_NOTICE);
		if ($_GET['error'] == 'no') {
			echo "<img src='img/triste.jpg' height=50 width=50 class='img2' />";
		} else {
			echo "<img src='img/feliz.jpg' height=50 width=50 class='img2'/>";
		}

		 ?>
		<!--<form enctype="value"> solo en post 
		Value 	Description
        application/x-www-form-urlencoded 	Default. All characters are encoded before sent (spaces are converted to "+" symbols, and special characters are converted to ASCII HEX values)
        multipart/form-data 	No characters are encoded. This value is required when you are using forms that have a file upload control
        text/plain 	Spaces are converted to "+" symbols, but no special characters are encoded-->
		<form id="frm" action="php/control.php" name="frm" method="post" enctype="aplication/x-www-form-urlencoded">
		<input id="user" type="text" name="user" placeholder="Usuario">
		<input id="pass" type="password" name="pass" placeholder="Contraseña">
		<button type="submit" id="submit">Ingresar</button>
			
		</form>
			
		</div>
	</div>
</div>

</body>
</html>