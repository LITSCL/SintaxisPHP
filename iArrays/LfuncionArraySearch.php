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

$busqueda = array_search("Esteban", $nombres); //La función array_search(), retorna el indice del valor a buscar (El primer parámetro es el valor a buscar y el segundo parámetro es el array que contiene el valor).

echo $busqueda;
?>