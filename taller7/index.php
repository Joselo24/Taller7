<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset = "utf-8">
	<title>Formulario</title>
</head>
<body>

	<?php
		if (isset($_SESSION['nombre'])) {
			echo "<p> Hola usuario: (" . $_SESSION['nombre'] . ") [<a href= 'logout.php'>Salir</a>]</p>";
		}
		else {
?>
<form action="datos.php" method="post">

		<fieldset>
			
			<label>Nombre</label>
			<input type="text" name="Nombre"><br>

			<label>Apellido</label>
			<input type="text" name="Apellido"><br>

			<button type="Submit">Enviar</button>

		</fieldset>

	</form>
			
	<?php	}
	?>

	

</body>
</html>