<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="crear_cookies.php">Crear cookies</a><br/>
	<a href="ver_cookies.php">Ver cookies</a><br/>
	<a href="borrar_cookies.php">Borrar cookies</a>
</body>
</html>

<?php
//Cookie: Es un fichero que se almacena en el ordenador del usuario. Todo esto con el fin de persistir datos o rastrear el comportamiendo el mismo en la web.
//Estructura de una Cookie: setcookie("nombreCookie", "Valor que solo puede ser texto", caducidad, ruta, dominio);

//Creación de cookie básica (Nombre y valor).
setcookie("miCookie1", "Valor de mi cookie");

//Creación de cookie intermedia (nombre, valor y caducidad). La cookie al llegar al servidor, este detectará que ya a caducado y no la procesará.
setcookie("miCookie2", "Valor de mi cookie de 365 dias", time() + (60 * 60 * 24 * 365)); //60 segundos por 60 minutos por 24 horas por 365 dias. En otras palabras el ulmito parámetro indica un año.
?>