<?php
include 'src/libs/incluir.php';
$nivel_dir = 1;
$libs = new librerias($nivel_dir);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<?php
	$libs->defecto();
	?>
</head>
<body>
	<?php $cabeza = new encabezado(1, $nivel_dir);	?>
</body>
</html>