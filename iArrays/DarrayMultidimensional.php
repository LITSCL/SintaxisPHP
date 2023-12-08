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
//En esta caso se creará un Array multidimensional, el cual contiene 3 Arrays asociativos.
$contactos = array( //Un Array multidimensional es un array de arrays.
    array(
        "nombre" => "Daniel",
        "email" => "daniel@protonmail.com"
    ),
    array(
        "nombre" => "Luis",
        "email" => "luis@protonmail.com"
    ),
    array(
        "nombre" => "Esteban",
        "email" => "esteban@protonmail.com"
    )
);

echo $contactos[2]["nombre"]; //Eligiendo el Array con indice 2 y mostrando el valor del indice "nombre".

echo "<hr><h4>Recorriendo Array en bucle foreach anidado</h4>";

foreach ($contactos as $arrayContacto) {
    foreach ($arrayContacto as $contacto) {
        echo $contacto . "<br/>";
    }
}
?>