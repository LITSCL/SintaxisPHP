<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<a href="index.php">Ir a Index</a>
	<a href="pagina_1.php">Ir a Pagina 1</a> <!-- Esto generará un error, por que al destruir las sesiones no se pueden mostrar. -->
</body>
</html>

<?php 
session_start(); //Esto es necesario para que el fichero pueda crear, acceder o destruir las variables de sesión.
session_destroy(); //Destruyendo todas las sesiones (Se borran todas las variables de sesión).
?>