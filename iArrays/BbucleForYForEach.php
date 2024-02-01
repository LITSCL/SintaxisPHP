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

//Declaración de un array unidimensional.
$array = array();

//Iniciación los indices del array.
$array[0] = "PHP";
$array[1] = "Java";
$array[2] = "JavaScript"; 
$array[3] = "Python"; 
$array[4] = "C#";

//Recorriendo array con bucle For.
for ($i = 0; $i < count($array); $i++) { //El método count retorna la cantidad de indices que tiene el array.
    echo $array[$i] . "<br/>";
}

echo "<hr/>";

//Recorriendo array con bucle Foreach.
foreach ($array as $lenguaje) { //El bucle foreach recibe el array a recorrer y una variable en la cual se almacena el valor del indice del array.
    echo $lenguaje . "<br/>";
}
?>