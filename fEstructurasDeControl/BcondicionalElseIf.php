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

if ($numero1 < $numero2) { //En esta instrucci�n se eval�a la condici�n (Si se cumple se ejecuta este c�digo y se ignora el proximo else if).
    echo $numero1 . " es menor que " . $numero2; 
}
else if ($numero1 > $numero2) { //Si la condici�n anterior no se cumple, se eval�a la de este else if, si se cumple se ejecuta y se ignoran los proximos else if o else.
    echo $numero1 . " es mayor que " . $numero2; 
}
else { //Si ninguna condici�n se cumpli�, se ejecuta este else.
    echo "Ambos numeros son iguales";
}
?>
