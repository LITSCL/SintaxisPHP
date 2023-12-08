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
//NOTA: Las variables super globales son variables brinda PHP y pueden ser accedidas desde cualquier script PHP.
echo $_SERVER["SERVER_ADDR"]; //Esta variable super global obtiene la dirección IP del servidor.
echo "<br/>";
echo $_SERVER["SERVER_NAME"]; //Esta variable super global obtiene el nombre de dominio del servidor.
echo "<br/>";
echo $_SERVER["SERVER_SOFTWARE"]; //Esta variable super global obtiene el software que esta utilizando el servidor.
echo "<br/>";
echo $_SERVER["HTTP_USER_AGENT"]; //Esta variable super global obtiene el navegador que esta utilizando el cliente.
echo "<br/>";
echo $_SERVER["REMOTE_ADDR"]; //Esta variable super global obtiene la dirección IP del cliente.
?>