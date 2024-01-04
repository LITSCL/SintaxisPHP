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
$numero = 10;

switch ($numero) { //Valor a tomar en consideración.
    case 7: //Si el valor a tomar en consideración es igual a 7, se ejecuta el código.
        echo "Se ejecuto el primer case";
        break;
    case 8: //Si el valor a tomar en consideración es igual a 8, se ejecuta el código.
        echo "Se ejecuto el segundo case";
        break;
    case 9: //Si el valor a tomar en consideración es igual a 9, se ejecuta el código.
        echo "Se ejecuto el tercer case";
        break;
    case 10: //Si el valor a tomar en consideración es igual a 10, se ejecuta el código.
        echo "Se ejecuto el cuarto case";
        break;
    default: //Si ningun case resulta, se ejecuta el código del default.
        echo "Se ejecuto el default";
        break;
}
?>
