<?php  
include('conexion.php');

$consulta = mysqli_query($conexion, 'SELECT * FROM login');
//devuelve los registro de la tabla login
$fila = mysqli_fetch_array($consulta);

$usuario = $fila['email'];
$pass = $fila['pass'];

if ($email=$_POST['email'] != $usuario) {
	$email=$_POST['email'];
	?>
	
	<form name="formulario" method="post" action="../login.php">
		<input type="hidden" name="email" value="<?php echo $email; ?>">
	</form>
	<?php 
} else {
	if ($password=$_POST['password'] != $pass) {
		
		?>
		
		<form name="formulario" method="post" action="../login.php">
			<input type="hidden" name="password" value="<?php echo $password; ?>">
		</form>
		<?php 
	} else {

		session_start();

		$_SESSION['autentificado'] = true;
	    $_SESSION['usuario'] = $_POST['email'];

	    header('location: ../subirArchivos.php');
	}

}

?>
<script type="text/javascript">
//Simula un btn submit para el envio del form
	document.formulario.submit();
</script>

	