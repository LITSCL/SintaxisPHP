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
echo "La fecha es: " . date("d-m-Y") . "<br/>"; //La funci�n date() permite sonseguir la fecha en el formato especificado por par�metro.

//Funciones matem�ticas.
echo "La raiz cuadrada de 9 es: " . sqrt(9) . "<br/>"; //La funci�n sqrt() permite calcular la ra�z cuadrada del n�mero que se entrega por par�metro.
echo "Numero aleatorio entre 10 y 40: " . rand(10, 40) . "<br/>"; //La funci�n rand() permite calcular un valor aleatorio entre el primer y segundo par�metro entregado.
echo "El numero pi es: " . pi() . "<br/>"; //La funci�n pi obtiene el n�mero pi().
echo "El nuemero 5.891234 redondeado es: " . round(5.891234) . "<br/>"; //Esta funci�n permite redondear un n�mero entregado por par�metro.
?>