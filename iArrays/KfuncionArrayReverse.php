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

$nombresReverse = array_reverse($nombres); //La función array_reverse(), retorna el Array entregado por parámetro pero ordenado al revés.

foreach ($nombresReverse as $nombre) {
    echo $nombre . "<br/>";
}
?>