<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<section id=!"sidebar"></section>
	<?php
		if (isset($_SESSION['nombre'])) {
			session_destroy();
			echo "Se ha destruido sesion exisatosamente <br>";
			echo "a href='index.php'>volver</a>";
	}
	else {
		echo "Error<br/>";
		echo "<a href='index.php'>Volver</a>";
	}
	
	?>

</body>
</html>
