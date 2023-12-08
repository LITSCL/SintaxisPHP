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
$numero1 = 10;
$numero2 = 10;

if ($numero1 < $numero2) { //En esta instrucción se evalúa la condición (Si se cumple se ejecuta este código y se ignora el proximo else if).
    echo $numero1 . " es menor que " . $numero2; 
}
else if ($numero1 > $numero2) { //Si la condición anterior no se cumple, se evalúa la de este else if, si se cumple se ejecuta y se ignoran los proximos else if o else.
    echo $numero1 . " es mayor que " . $numero2; 
}
else { //Si ninguna condición se cumplió, se ejecuta este else.
    echo "Ambos numeros son iguales";
}
?>
