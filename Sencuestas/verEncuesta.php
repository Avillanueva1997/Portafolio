<?php 
include('php/conexion.php');
include('header.php');

$consulta = mysql_query("SELECT titulo FROM encuestas");
//Almacenara la cantidad de registros de la tabla datos
$numRegistros = mysql_num_rows($consulta);

if ($numRegistros==0) {
	echo "No se han encontrado registros para mostrar";
} 

$reg_por_pag =  7;

if (isset($_GET['num'])) {
	$num_pagina = $_GET['num'];
} else {
	$num_pagina = 1;
}

if (is_numeric($num_pagina))

	$inicio = ($num_pagina - 1 ) * $reg_por_pag;
	 else

	$inicio = 0;


$consulta2 = mysql_query("SELECT * FROM encuestas ORDER BY fecha LIMIT $inicio,$reg_por_pag");

//ceil ->redondear
$can_pagina = ceil($numRegistros/$reg_por_pag);
 ?>
 <section id="form">
 	<form action="votarEncuesta.php" class="contact_form" name="form" method="post">
 	<table>
 		<?php 
 		while ($row = mysql_fetch_array($consulta2)) {
 			$titulo = $row['titulo'];
 			$idres = $row['id'];

 		 ?>
 		 <tr>
 		 	<td width="50" ><input type="radio" name="opcion" value="<?php  echo $idres;  ?>" required></td>
 		 	<td width="470"><?php echo $titulo; ?></td>
 		 </tr>
 		 <?php 
 		}
 		  ?>
 		  <tr>
 		  	<td> 
 		  	<input type="submit" value="Ver" class="submit">
 		  	</td>
 		  	<td>
 		  		
 		  	</td>
 		  </tr>
 	</table>
 	<center>
 		<div id="paginador">
 			<?php 
 			if ($num_pagina > 1) {
 				echo "<a id='paginas1' href='verEncuesta.php?num=1'>Primero</a>";
 				echo "<a id='paginas1' href='verEncuesta.php?num=".($num_pagina-1)."'>Anterior</a>";
 			}
 			//Muestra las pag que hay y en la que estamos
 			echo "<strong id='paginas2'>".($num_pagina)."de".($can_pagina)."</strong>";

 			if ($num_pagina<$can_pagina) {
 				echo "<a id='paginas1' href='verEncuesta.php?num=".($num_pagina+1)."'>Siguiente</a>";
 				echo "<a id='paginas1' href='verEncuesta.php?num=".($can_pagina)."'>Ultimo</a>";

 			}
 			 ?>

 		</div>
 	</center>
 		
 	</form>
 </section>
<center>
    <a href="paginas1" href="javascript:window.history.back();">&laquo; Volver atrás</a>
</center>
<?php 
include("footer.php");

 ?>
	
