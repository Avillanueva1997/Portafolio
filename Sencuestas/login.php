<?php 
include("header.php");
isset($_POST['email']);
$email = $_POST['email'];

 ?>
 <section id="form">
 	<form class="contact_form" action="php/control.php" method="post">
 
 		<p>
 			<h2>Iniciar Sesión</h2>
 		</p>
 		<p>
 		<label for="email">Email</label>
 		</p>
 		<p>
 			<input type="email" name="email" placeholder="Email" id="email" required value="<?php echo $email; ?>">
 		</p>
 		<p>
 		<label for="pass">Password</label>
 		</p>
 		<p>
 			<input type="password" name="pass" placeholder="Contraseña" id="pass" required>
 		</p>
 		<?php 
 		if (isset($_POST['email'])) {
 			echo "Email Incorrecto";
 		} else {
 			if (isset($_POST['pass'])) {
 			echo "Password Incorrecto";

 		}
 	    }  

 		 ?>
 		<p>
 			<input type="submit" class="submit" value="Ingresar">
 		</p>
 		<p>
 		<a href="javascript:window.history.back();" id="paginas1">&laquo; Volver atrás</a>
 		</p>
 	
 	</form>
 </section>	
 <?php 
    include("footer.php");
  ?>