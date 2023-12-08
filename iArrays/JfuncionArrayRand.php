<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?php 
$nombres = array("Daniel", "Esteban", "Maria", "Mabel", "Andy");

$indice = array_rand($nombres); //La función array_rand(), permite obtener un indice aleatorio del Array entregado por parámetro.

echo $nombres[$indice];
?>