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
function calculadora($numero1, $numero2) { //Creaci�n de funci�n con dos parametros.
    echo "La suma de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 + $numero2) ."<br/>"; //Contenido de la funci�n.
    echo "La resta de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 - $numero2) ."<br/>"; //Contenido de la funci�n.
    echo "La multiplicacion de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 * $numero2) ."<br/>"; //Contenido de la funci�n.
    echo "La division de " . $numero1 . " entre " . $numero2 . " es: " . ($numero1 / $numero2) ."<br/>"; //Contenido de la funci�n.
}

calculadora(20, 20); //Llamada de la funci�n entregando dos par�metros.
?>