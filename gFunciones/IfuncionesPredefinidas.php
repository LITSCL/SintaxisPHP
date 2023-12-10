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
//Las funciones predefinidas son funciones que vienen creadas por defecto en php.

//Funciones de fechas.
echo "La fecha es: " . date("d-m-Y") . "<br/>"; //La función date() permite sonseguir la fecha en el formato especificado por parámetro.

//Funciones matemáticas.
echo "La raiz cuadrada de 9 es: " . sqrt(9) . "<br/>"; //La función sqrt() permite calcular la raíz cuadrada del número que se entrega por parámetro.
echo "Numero aleatorio entre 10 y 40: " . rand(10, 40) . "<br/>"; //La función rand() permite calcular un valor aleatorio entre el primer y segundo parámetro entregado.
echo "El numero pi es: " . pi() . "<br/>"; //La función pi obtiene el número pi().
echo "El nuemero 5.891234 redondeado es: " . round(5.891234) . "<br/>"; //Esta función permite redondear un número entregado por parámetro.
?>