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
//NOTA: Un array es una colección de datos, basicamente una variable que puede almacenar muchos datos distintos.

//Declaración de un array unidimensional.
$array1 = array();

//Iniciación de los indices del array.
$array1[0] = "PHP";
$array1[1] = 50;
$array1[2] = true; //En PHP no se pueden mostrar los boolean así.
$array1[3] = false; //En PHP no se pueden mostrar los boolean así.
$array1[4] = 15.5;

//Forma 1: Proceso de muestreo en consola del contenido del array1.
echo $array1[0] . "<br/>";
echo $array1[1] . "<br/>";
echo $array1[2] . "<br/>";
echo $array1[3] . "<br/>";
echo $array1[4] . "<br/>";

//Forma 2: Proceso de muestreo en consola del contenido del array1.
var_dump($array1);

echo "<hr/>";

//Declaración de iniciación de un array unidimensional en una línea.
$array2 = ["PHP", 50, true, false, 15.5]; //En esta instrucción se esta creando el array y entregando 5 elementos.

//Proceso de muestreo en consola del contenido del array2.
echo $array2[0] . "<br/>";
echo $array2[1] . "<br/>";
echo $array2[2] . "<br/>";
echo $array2[3] . "<br/>";
echo $array2[4] . "<br/>";

//Forma 2: Proceso de muestreo en consola del contenido del array2.
var_dump($array2);
?>
