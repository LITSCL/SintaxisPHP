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
$numero2 = -5;

//Operador l�gico and (&&).
echo "Operador logico and (&&):<br/>";

if ($numero1 > 0 && $numero2 < 0) {
    echo "Ambas condiciones se cumplen<br/>"; //Si ambas condiciones se cumplen se ejecuta la instrucci�n.
}
else {
    echo "Una condicion o ambas no se estan cumpliendo<br/>";
}

//Operador l�gico or (||).
echo "Operador logico or (||):<br/>";

if ($numero1 > 0 || $numero2 < 0) {
    echo "Una o ambas condiciones se estan cumpliendo<br/>"; //Con que una condici�n se cumpla se ejecuta la instrucci�n.
}
else {
    echo "Ninguna condicion se esta cumpliendo";
}
?>