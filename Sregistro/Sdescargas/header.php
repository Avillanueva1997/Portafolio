<!DOCTYPE html>
<html lang="es Es">
<head>
	<title>Sistema de Descargas</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="jsjquery.easing.1.3.js"></script>
	<link rel="stylesheet" type="text/css" href="css/head.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">	


</head>
<body>
<header>
	<h1 id="titulo">Sistema de Descargas</h1>
</header>
<?php 
error_reporting(E_ALL ^ E_NOTICE);
if ($_SESSION["autentificado"]) {

}else{

 ?>

<nav>
	<div id="content">
	<div class="navigation" id="nav">
	<div class="item user">
		<img src="images/bg_user.png" id="user" width="100" height="100" class="circle">
		<a href="login.php" class="icon"></a>
		<h2>User</h2>
	</div>
	<div class="item home">
		<img src="images/bg_home.png" id="home" width="100" height="100" class="circle">
		<a href="index.php" class="icon"></a>
		<h2>Home</h2>
	</div>
	<div class="item about">
		<img src="images/bg_about.png" id="about" width="100" height="100" class="circle">
		<a href="#" class="icon"></a>
		<h2>About</h2>
	</div>
	<div class="item contact">
		<img src="images/bg_contact.png" id="contact" width="100" height="100" class="circle">
		<a href="#" class="icon"></a>
		<h2>Contact</h2>
	</div>
	<div class="item descarga">
		<img src="images/bg_descarga.png" id="descarga" width="100" height="100" class="circle">
		<a href="descarga.php" class="icon"></a>
		<h2>Download</h2>
	</div>
	</div>
	</div>
</nav>
<?php 
}
 ?>