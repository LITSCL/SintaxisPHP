<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<a href="crear_cookies.php">Crear cookies</a><br/>
	<a href="ver_cookies.php">Ver cookies</a><br/>
	<a href="borrar_cookies.php">Borrar cookies</a>
</body>
</html>

<?php
if ($_COOKIE["miCookie1"]) {
    setcookie("miCookie1", "", time() - 100); //Aqu� se cadua la cookie (Al caducarla el servidor ya no la toma en cuenta).
}

if ($_COOKIE["miCookie2"]) {
    setcookie("miCookie2", "", time() - 100);
}
?>