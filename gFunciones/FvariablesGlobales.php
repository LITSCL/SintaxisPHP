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
//NOTA: Las variables globales son aquellas que se declaran fuera de una funci�n y est�n disponibles dentro y fuera de las funciones.

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres"; //Esta variable puede ser global.

function imprimeFrase() {
    global $frase; //Aqu� se indica que la variable se global (Es una variable que no pertenece a la funci�n, pero de todas formas se puede utilizar).
    echo "<h3>$frase</h3>";
}

imprimeFrase();
?>