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

$busqueda = array_search("Esteban", $nombres); //La funci�n array_search(), retorna el indice del valor a buscar (El primer par�metro es el valor a buscar y el segundo par�metro es el Array que contiene el valor).

echo $busqueda;
?>