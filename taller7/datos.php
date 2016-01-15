<?php
	session_start();
?>

<?php

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];

echo "Usuario: " . $nombre;
echo "<br>";
echo "Apellido: " . $apellido;

$_SESSION['nombre']=$_POST['Nombre'];
echo "variable" . $_SESSION['Nombre'];
echo "<a href='index.php'>Volver</a>";

?>

