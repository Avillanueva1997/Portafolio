<?php 
//capturamos la variable que viene por post del archivor verEncuesta

error_reporting(E_ALL ^ E_DEPRECATED);



require("php/conexion.php");

include("header.php");

$consulta = "SELECT * from encuestas ORDER BY fecha";

$consulta = mysql_query($consulta);

while ($row=mysql_fetch_array($consulta)) {
	$titulo=$row['titulo'];
	$fecha=$row['fecha'];
	$id=$row['id'];
	$opcion = $row['id'];
}

?>
<section id="form">
	<form action="php/insertVotacion.php" class="contact_form" method="post" name="form1">
	<table>
		<tr>
			<td colspan="2"><h3><?php  echo $titulo; ?></h3></td>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
		</tr>
		<?php
		$sql = "SELECT texto, id FROM respuesta WHERE idenc='$id'";
		$sql = mysql_query($sql);

		while ($row=mysql_fetch_array($sql)) {
			$texto=$row['texto'];
			$idres = $row['id'];
		?>
		<tr>
			<td width="50"><input type="radio" name="opcion" value="<?php echo $idres; ?>" required></td>
			<td width="470"><?php echo $texto; ?></td>
		</tr>
		<?php } ?>
		<tr>
			<td> <input type="submit" class="submit" value="Votar"></td>
			<td>
				Esta encuesta está del <?php echo $fecha; ?>
			</td>
		</tr>
	</table>		
	</form>
</section>
<center>
	<div id="paginador">
		<form action="graficos.php" method="post">
		<a  id="paginas1" href="javascript:window.history.back();">&laquo; Volver atrás</a>
		<input type="hidden" name="opcion" value="<?php echo $opcion; ?>">
		<input type="submit" class="submit" value="Ver">
			
		</form>
	</div>
</center>
<?php 
include("footer.php");
 ?>

