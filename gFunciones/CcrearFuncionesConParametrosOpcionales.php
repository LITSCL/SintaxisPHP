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
function calculadora($numero1, $numero2, $negrita = false) { //Al inicializar el parámetro, se considera que es opcional y no es necesario entregarlo en la llamada.
    if ($negrita != false) {
        echo "<h4>";
    }
    echo "La suma de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 + $numero2) ."<br/>"; 
    echo "La resta de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 - $numero2) ."<br/>"; 
    echo "La multiplicacion de " . $numero1 . " con " . $numero2 . " es: " . ($numero1 * $numero2) ."<br/>"; 
    echo "La division de " . $numero1 . " entre " . $numero2 . " es: " . ($numero1 / $numero2) ."<br/>"; 
    if ($negrita != false) {
        echo "</h4>";
    }
}

calculadora(20, 20); //Llamada de la función entregando dos parámetros.
?>