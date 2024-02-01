<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="index.php">Ir a Index</a><br/>
	<a href="logout.php">Cerrar sesion</a><br/>
</body>
</html>

<?php 
//Sesión: Sirven para almacenar y persistir datos del usuario mientras navega en un sitio web.

//Iniciar la sesión.
session_start(); //Esto es necesario para que el fichero pueda crear, acceder o destruir las variables de sesión.

echo $_SESSION["variable_persistente1"]; //Mostrando el valor de la sesión.
echo "<br/>";
echo $_SESSION["variable_persistente2"];
?>