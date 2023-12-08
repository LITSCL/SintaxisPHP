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
function calculadora($numero1, $numero2) { //Creación de función con dos parametros.
    echo "La suma de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 + $numero2) ."<br/>"; //Contenido de la función.
    echo "La resta de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 - $numero2) ."<br/>"; //Contenido de la función.
    echo "La multiplicacion de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 * $numero2) ."<br/>"; //Contenido de la función.
    echo "La division de " . $numero1 . " entre " . $numero2 . " es: " . ($numero1 / $numero2) ."<br/>"; //Contenido de la función.
}

calculadora(20, 20); //Llamada de la función entregando dos parámetros.
?>