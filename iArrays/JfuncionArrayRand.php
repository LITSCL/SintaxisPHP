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

$indice = array_rand($nombres); //La funci�n array_rand(), permite obtener un indice aleatorio del Array entregado por par�metro.

echo $nombres[$indice];
?>