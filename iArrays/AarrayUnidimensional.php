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

//Declaraci�n de un array unidimensional.
$array1 = array();

//Iniciaci�n los indices del array.
$array1[0] = "PHP";
$array1[1] = 50;
$array1[2] = true; //En PHP no se pueden mostrar los boolean as�.
$array1[3] = false; //En PHP no se pueden mostrar los boolean as�.
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

//Declaraci�n e iniciaci�n de un array unidimensional en una l�nea.
$array2 = ["PHP", 50, true, false, 15.5]; //En esta instrucci�n se esta creando el array y entregando 5 elementos.

//Proceso de muestreo en consola del contenido del array2.
echo $array2[0] . "<br/>";
echo $array2[1] . "<br/>";
echo $array2[2] . "<br/>";
echo $array2[3] . "<br/>";
echo $array2[4] . "<br/>";

//Forma 2: Proceso de muestreo en consola del contenido del array2.
var_dump($array2);
?>
