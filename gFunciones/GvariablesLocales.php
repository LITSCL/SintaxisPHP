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
//NOTA: Las variables locales son las que se definen dentro de una función y no pueden ser usadas fuera de la función (A menos que se retorne en la función).

function imprimeFrase() {
    $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres"; //Esta variable es local (No se puede utilizar afura de la función).
    echo "<h3>$frase</h3>";
}

//echo $frase; //Esto no se puede hacer si la variable es local.
imprimeFrase();
?>