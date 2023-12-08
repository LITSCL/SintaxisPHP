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

$busqueda = array_search("Esteban", $nombres); //La función array_search(), retorna el indice del valor a buscar (El primer parámetro es el valor a buscar y el segundo parámetro es el Array que contiene el valor).

echo $busqueda;
?>