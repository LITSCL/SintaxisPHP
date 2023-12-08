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
$nombres = array("Daniel", "Esteban", "Maria", "Mabel", "Andy");

arsort($nombres); //La función asort(), permite ordenar alfabeticamente de forma descendente los indices de un Array.

foreach ($nombres as $nombre) {
    echo $nombre . "<br/>";
}
?>