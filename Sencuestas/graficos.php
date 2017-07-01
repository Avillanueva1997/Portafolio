<?php

include("header.php");
require("php/conexion.php");

$opcion = $_POST['opcion'];

 ?>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script>
 	google.load('visualization', '1.0', {'packages': ['corechart']});

 	google.setOnLoadCallback(dibujaGrafico);

 	function dibujaGrafico(){
 		//Crear la tabla de datos

 		var datos = new google.visualization.DataTable();
 		datos.addColumn('string', 'Nombre');
 		datos.addColumn('number', 'Id');
 		datos.addRows([
 			<?php 

 			$consulta = "SELECT titulo from encuestas WHERE id = $opcion";
 			$consulta = mysql_query($consulta);
 			while ($row=mysql_fetch_array($consulta)) {
 				$titulo = $row['titulo'];
 			}

 			$consulta = "SELECT texto, votos FROM respuesta WHERE idenc='$opcion'";
 			$resultado = mysql_query($consulta);
 			$numeroFilas = mysql_num_rows($resultado);

 			$i = 0;

 			while ($fila = mysql_fetch_array($resultado)) {
 				$i++;
 				if ($i <  $numeroFilas) {
 					echo "['".$fila['texto']."',".$fila['votos']."], \n";
 				} else {
 					echo "['".$fila['texto']."',".$fila['votos']."], \n";
 				}
 			}

 			mysql_close($conexion);



 		  ?>]);

 		var opciones = {'title': 'Votaciones',
 		'max-width': 630,
 		'max-height': 350
 	};

    var grafico  = new google.visualization.PieChart(document.getElementById('capaGrafico'));
    grafico.draw(datos, opciones);

 	}
 </script>
 <section id="form">
 	<h3><?php echo $titulo; ?></h3>
 	<div id="capaGrafico"></div>
 </section>
 <style>
 	#center{
 		margin: -10px;
 		padding: 0px 0px 20px;
 	}
 </style>
 <center id="center">
 	<a href="javascript:window.history.go(-2);">&laquo; Volver atrás</a>
 </center>
 <?php 
 include("footer.php"); ?>