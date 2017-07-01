<?php 
include("header.php");

$titulo = $_POST['titulo'];
$preguntas = $_POST['preguntas'];

 ?>
 <section id="form">
 	<form action="php/insertarPregunta.php" class="contact_form" method="post">
 		<h3><?php echo $titulo; ?></h3>
 		<table>
 			<?php 
 			//Ciclo que recorre la cantidad de preguntas ingresada
 			for ($i=1; $i <= $preguntas ; $i++) { 
 				
 		
 			 ?>

 			 <tr>
 			 	<td>Pregunta <?php echo $i; ?>
 			 	<input type="text" name="p<?php echo $i; ?>" size="50" maxlength="50"></td>
 			 </tr>
 			 <?php 
 			 }
 			  ?>
 		</table><br>
 		<input type="submit" class="submit" value="Insertar">
 		<input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
 		<input type="hidden" name="preguntas" value="<?php echo $preguntas; ?>">
 	</form>
 </section>	
 <style>
 	#center{
 		margin: -10px;
 		padding: 0px 0px 20px;
 	}

 </style>

 <center id="center">
 	<a href="javascript:window.history.back();" id="paginas1">&laquo; Volver atrás</a>
 </center>
 <?php 
 include("footer.php");
  ?>