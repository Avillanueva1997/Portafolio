<?php 
include('conexion.php');
include('sesion.php');

$consulta = mysql_query("SELECT * FROM datos ORDER BY nombre");
//Almacenara la cantidad de registros de la tabla datos
$numRegistros = mysql_num_rows($consulta);

if ($numRegistros==0) {
	echo "No se han encontrado registros para mostrar";
} 

$reg_por_pag =  12;

if (isset($_GET['num'])) {
	$num_pagina = $_GET['num'];
} else {
	$num_pagina = 1;
}

if (is_numeric($num_pagina))

	$inicio = ($num_pagina - 1 ) * $reg_por_pag;
	 else

	$inicio = 0;


$consulta = mysql_query("SELECT * FROM datos ORDER BY nombre LIMIT $inicio,$reg_por_pag");

//ceil ->redondear
$can_pagina = ceil($numRegistros/$reg_por_pag);
 ?>
 <!DOCTYPE html>
 <html lang="es-ES">
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
 	<link rel="stylesheet" type="text/css" href="../css/estilobuscar.css">
 	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
 	<script type="text/javascript" src="../js/jquery-latest.js"></script>
 	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
 	<?php 
 	//consulta para seleccionar las palabras a buscar email
 	$con = "SELECT * FROM datos";
 	$query = mysql_query($con);
 	while ($row = mysql_fetch_array($query)) {
 		//arreglo que recibe el valor email
 	    $elemento[] = '"'.$row['email'].'"';
 	}

 	//Se juntan los valores del array en una sola cadena de texto
 	/*implode — Une elementos de un array en un string
 	string implode ( string $glue , array $pieces )
 	$array = array('apellido', 'email', 'teléfono');
    $separado_por_comas = implode(",", $array);
    echo $separado_por_comas; // apellido,email,teléfono*/
 	$arreglo = implode(",",$elemento);

 	 ?>

 	 <script>
 	 	$(function(){
 	 		//Imprime el arreglo dentro de un array de js
 	 		var imprime = new Array(<?php echo $arreglo; ?>);
 	 		$('#buscar').autocomplete({
 	 			source:imprime
 	 		})
 	 	})
 	 </script>
 </head>
 <body>
 <header>
 	<img src="../img/administrador.png" id="img1" height=50 width=50>
 	<a href="salir.php" id="salir"><b>Salir</b></a>
 </header>
 <nav>
 	<center>
 	<!--Formulario para la busqueda autocompletado-->
 		<form action="detalles.php" method="post" >
 		<tr>
 		</tr>
 		<td><input type="email" name="email" id="buscar" placeholder="Buscar" required></td>
 		<input type="submit" class="button" name="aceptar" value="Buscar">
 		</form>
 		<!--Form para mostrar el boton que agregara datos a la bd-->
 		

 		<form action="agregar.php" method="">
 		<input type="submit" class="button" id="boton" value="Agregar">
 		</form>
 	</center>
 </nav>

 <section id="contenedor">
 	<center>
 		<div class="contenedor">
 			<?php
            
 			//while que recorre las filas id,imagen,nombre de la tabla datos
 			while ($fila =mysql_fetch_array($consulta)) {
 			 	$id = $fila['id'];
 			 	$imagen = $fila['imagen'];
 			 	$nombre = $fila['nombre'];	 	
 			 	
 			 ?>
 			 <!--Caja que muestra el nombre y la imagen de la bd-->
 			 <div class="caja">
 			 	<h5> <?php echo $nombre ?> </h5>
 			 	<img  id="foto" src="<?php echo "../fotos/".$imagen; ?>" width="140" height="250">
 			 	<form action="detalles.php" method="post" >
 			 	<!--input de tipo oculto-->
 			 	<input type="hidden" name="id" value="<?php echo $id ?>">
 			 	<input type="submit" class="button" value="Detalles">
 			 	<br><br><br>
 			 	</form>
 			 </div>
 			 <?php 
 			}

 			  ?>
 		</div>
 		<div id="paginador">
 			<?php 
 			if ($num_pagina > 1) {
 				echo "<a id='paginas1' href='buscardatos.php?num=1'>Primero</a>	";
 				echo "<a id='paginas1' href='buscardatos.php?num=".($num_pagina-1)."'>Anterior</a>	";
 			}
            //Muestra la pagina donde estoy  y la cant de paginas que hay
 			echo "<strong id='pagina2'>".($num_pagina).'de'.($can_pagina)."</strong>";

 			if ($num_pagina < $can_pagina) {
 				echo "<a id='paginas1' href='buscardatos.php?num=".($num_pagina + 1)."'>Siguiente</a>";
 				echo "<a id='paginas1' href='buscardatos.php?num=".($can_pagina)."'>Ultimo</a>";
 			}
 			 ?>
 		</div>
 	</center>
 </section>
<footer>
	<p><b>&copy;Programador Angel</b></p>
</footer>
 </body>
 </html>