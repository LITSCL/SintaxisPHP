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
function buenosDias() {
    return "Hola! Buenos días";
}

function buenasTardes() {
    return "Hola! Buenas tardes";
}

function buenasNoches() {
    return "Hola! Buenas noches";
}

$horario = "buenasNoches"; //Almacenando un String normal en una variable (Nada extraño).
echo $horario(); //Aquí se esta llamando a la función buenasNoches().
?>