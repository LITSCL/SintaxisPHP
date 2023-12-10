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

unset($nombres[2]); //Esta función elimina el elemento ubicado en un indice especifico de un Array.

foreach ($nombres as $nombre) {
    echo $nombre . "<br/>";
}
?>