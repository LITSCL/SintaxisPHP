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
//Para mostrar el valor de una cookie, se debe usar la variable superglobal $_COOKIE (Esta variable es un Array asociativo).

if (isset($_COOKIE["miCookie1"])) {
    echo "<h1>" . $_COOKIE["miCookie1"] . "</h1>";
}
else {
    echo "<br>No existe la cookie con nombre 'miCookie1'";
}

if (isset($_COOKIE["miCookie2"])) {
    echo "<h1>" . $_COOKIE["miCookie2"] . "</h1>";
}
else {
    echo "<br>No existe la cookie con nombre 'miCookie2'";
}
?>