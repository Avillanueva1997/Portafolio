<?php 
$conec = mysql_connect('localhost','root','angel') or die('Problemas al conectarse');

$db = mysql_select_db('contactos',$conec) or die('No existe las BD');

 ?>