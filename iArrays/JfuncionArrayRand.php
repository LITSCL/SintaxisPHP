<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?php 
$nombres = array("Daniel", "Esteban", "Maria", "Mabel", "Andy");

$indice = array_rand($nombres); //La función array_rand(), permite obtener un indice aleatorio del array entregado por parámetro.

echo $nombres[$indice];
?>