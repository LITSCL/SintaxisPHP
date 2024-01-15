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
//NOTA: Las variables globales son aquellas que se declaran fuera de una función y están disponibles dentro y fuera de las funciones.

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres"; //Esta variable puede ser global.

function imprimeFrase() {
    global $frase; //Aquí se indica que la variable es global (Es una variable que no pertenece a la función, pero de todas formas se puede utilizar).
    echo "<h3>$frase</h3>";
}

imprimeFrase();
?>