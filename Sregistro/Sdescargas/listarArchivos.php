<?php 
include("php/sesion.php");
include("header.php");


 ?>

<section id="contenedor">
	<section id="principal">
		<article>
			<center>
			<table id="tabla">
				<thead><tr>
				<th>
				<span>Nombre</span>
				</th>
				<th>
				<span>Generar Link</span>
				
				</th>
				<th>
				<span>Descargar</span>
				</th>
				<th>
				<span>Eliminar</span>
				</th>
				</tr>
				</thead>
				<?php 
				include("php/paginador.php");
				while ($row = mysqli_fetch_array($pag_sqllim)) {
					
				
				 ?>

				 <tbody>
				 	<tr>
				 		<td id="th">
				 			<span><?php echo $row[name]; ?></span>
				 		</td>
				 		<td>
				 		<form action="detalles.php" method="post">
				 			<input type="hidden" name="id" value="<?php echo $row[id] ?>">
				 			<input type="submit" class="enlace" value="Detalle">
				 			</form>

				 		</td>
				 		<td>
				 		<form action="php/descargar.php" method="post">
				 			<input type="hidden" name="ruta" value="<?php echo '../archivos/'.$row[ruta] ?>">
				 			<input type="submit" class="enlace" value="Bajar">
				 			</form>
				 		</td>
				 		<td>
				 			<form action="php/eliminarArchivos.php" method="post">
				 			<input type="hidden" name="ruta" value="<?php echo '../archivos/'.$row[ruta] ?>">
				 			<input type="hidden" name="id" value="<?php echo $row[id] ?>">
				 			<input type="submit" class="enlace" value="Eliminar">
				 			</form>
				 		</td>
				 	</tr>
				 	<?php 
				 	}
				 	?>
				 </tbody>
			</table>
			<?php 

			echo "<p>".$pag_navegacion."</p>";
			echo "<p>Resultados".$pag_info."</p>";

			mysqli_close($conexion);



			?>
			</center>
		</article>
	</section>
	<aside>
	<nav id="menu">
		<ul>
			<li><a href="index.php" id="enlaces" class="inicio">Inicio</a></li>
			<li><a href="subirArchivos.php" id="enlaces" class="inicio">Cargar Archivo</a></li>
			<li><a href="listarArchivos.php" id="enlaces" class="inicio">Ver Archivos</a></li>
			<li><a href="php/salir.php" id="enlaces" class="inicio">Salir</a></li>
		</ul>
	</nav>
	</aside>
</section>
<?php 
include("footer.php"); 
?>