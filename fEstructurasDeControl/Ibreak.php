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
for ($i = 0; $i < 20; $i++) { //La variable i empieza en 0, se repite mientras sea menor que 20 y en cada iteración se incrementa en una unidad la variable i.
    if ($i == 10) {
        break; //Al leer esta instrucción el programa se sale del bucle.
    }
    echo $i . "<br/>";
}
?>