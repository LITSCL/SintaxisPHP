<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<a href="pagina_1.php">Ir a Pagina 1</a><br/>
	<a href="logout.php">Cerrar sesion</a>
</body>
</html>

<?php 
//Sesi�n: Sirven para almacenar y persistir datos del usuario mientras navega en un sitio web.

//Iniciar la sesi�n.
session_start(); //Esto es necesario para que el fichero pueda crear, acceder o destruir las variables de sesi�n.

$texto = "Soy una cadena de texto"; //Variable local.

$_SESSION["variable_persistente1"] = "Soy la primera variable de sesion"; //Variable de sesi�n.
$_SESSION["variable_persistente2"] = "Soy la segunda variable de sesion"; //Variable de sesi�n.
?>