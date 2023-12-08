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

function retornarNombre($nombre) {
    return "El nombre es: " . $nombre;
}

function retornarApellido($apellido) {
    return "El apellido es: " . $apellido;
}

function retornarNombreAndApellido($nombre, $apellido) {
     $nombreAndApellido = retornarNombre($nombre) . "<br/>" . retornarApellido($apellido); //En esta instrucción se estan llamando funciones que estan afuera.
     return $nombreAndApellido;
}

echo retornarNombreAndApellido("Daniel", "Alvarez");
?>