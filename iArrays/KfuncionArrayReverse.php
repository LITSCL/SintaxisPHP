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

$nombresReverse = array_reverse($nombres); //La funci�n array_reverse(), retorna el Array entregado por par�metro pero ordenado al rev�s.

foreach ($nombresReverse as $nombre) {
    echo $nombre . "<br/>";
}
?>