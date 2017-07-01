<?php 
include("php/sesion.php");
include("header.php");


 ?>
 <section id="form">
 	<form action="crearPreguntas.php" class="contact_form" method="post">
 
 	
 		    <p><h2>Crear Encuesta</h2></p>
 		
 	
 		    <p><label for="titulo">Encuesta:</label></p>
 		    <p><input type="text" name="titulo" id="titulo" placeholder="Encuesta" required></p>
 		
 	
 		    <p><label for="preguntas">Número de preguntas:</label></p>
 		    <p><input type="number" name="preguntas" id="preguntas" placeholder="Preguntas" min="0" max="5" required></p>
 		
 	
 		    <p><input type="submit"  class="submit" value="Crear"></p>
 	</form>
 </section>	
 <?php
 include("footer.php");  ?>