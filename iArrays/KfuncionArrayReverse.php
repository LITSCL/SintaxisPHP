<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?php 
$nombres = array("Daniel", "Esteban", "Maria", "Mabel", "Andy");

$nombresReverse = array_reverse($nombres); //La función array_reverse(), retorna el array entregado por parámetro pero ordenado al revés.

foreach ($nombresReverse as $nombre) {
    echo $nombre . "<br/>";
}
?>