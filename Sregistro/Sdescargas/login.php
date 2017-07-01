<?php 
include("header.php");
 ?>

<section id="contenedor">
	<section id="principal">
		<article>
			<center>
			<h3>Iniciar Sesión</h3>
			<fieldset>
			<form action="php/control.php" method="post">
				<p><input class="input" type="email" name="email" placeholder="Email" required></p>
				<p><input class="input" type="password" name="password" placeholder="Contraseña" required></p>

				
				<?php 

				if (isset($_POST['email'])) {
					echo "Email incorrecto!";
				} else {

					if (isset($_POST['password'])) {
					echo "Contraseña incorrecta!";
				}

				}



				 ?>
				 <p><input class="submit" type="submit" value="Ingresar"></p>
			</form>
			</fieldset>
			</center>
		</article>
	</section>
	<aside>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-page" data-href="https://www.facebook.com/DeliSpecial" data-tabs="timeline" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/DeliSpecial" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DeliSpecial">Deli &amp; Special</a></blockquote></div>
	</aside>
</section>
<?php 
include("footer.php"); 
?>