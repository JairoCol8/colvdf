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
	<svg height="400" width="450">
  <path id="path3292" sodipodi:nodetypes="ccccccccccccc" fill="#FFFFFF" stroke="#000000" stroke-width="2" d="M126,724.612
			c11.262,1.512,20.644,1.144,29.25,0l5.25,7.25c22.644,8.583,35.766,7.646,60,21c-3.119,10.486-3.706,21.984-13,30
			c-7.75-6.088-15.5-4.8-23.25-6.75v88.25c-29.128,5.303-58.037,6.666-86.5,0v-88.25c-6.741,0.751-12.342,0.2-23.5,6
			c-8.376-6.985-10.991-18.452-13.5-30c25.954-11.67,39.005-13.262,60.25-19.75L126,724.612z"/>
</svg> 
</body>
</html>