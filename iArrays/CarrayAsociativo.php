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
//NOTA: Un array es una colecci�n de datos, basicamente una variable que puede almacenar muchos datos distintos.

//Declaraci�n e iniciaci�n de un array unidimensional.
$personas = array("nombre" => "Daniel", "apellido" => "Alvarez"); //Un Array asociativo permite utilizar "Claves" en vez de "Indices".

echo $personas["nombre"]; //Imprimiendo el valor del indice nombre.

//NOTA: Cuando se env�an datos desde la url (GET), lo que llega es un array asociativo.
?>