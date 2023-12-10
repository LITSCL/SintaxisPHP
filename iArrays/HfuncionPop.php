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

array_pop($nombres); //Esta función elimina el último elemento del Array entregado por parámetro.

foreach ($nombres as $nombre) {
    echo $nombre . "<br/>";
}
?>