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
//NOTA: Las variables locales son las que se definen dentro de una funci�n y no pueden ser usadas fuera de la funci�n (A menos que se retorne en la funci�n).

function imprimeFrase() {
    $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres"; //Esta variable es local (No se puede utilizar afura de la funci�n).
    echo "<h3>$frase</h3>";
}

//echo $frase; //Esto no se puede hacer si la variable es local.
imprimeFrase();
?>