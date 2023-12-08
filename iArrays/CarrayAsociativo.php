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
//NOTA: Un array es una colección de datos, basicamente una variable que puede almacenar muchos datos distintos.

//Declaración e iniciación de un array unidimensional.
$personas = array("nombre" => "Daniel", "apellido" => "Alvarez"); //Un Array asociativo permite utilizar "Claves" en vez de "Indices".

echo $personas["nombre"]; //Imprimiendo el valor del indice nombre.

//NOTA: Cuando se envían datos desde la url (GET), lo que llega es un array asociativo.
?>