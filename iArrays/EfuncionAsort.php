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

asort($nombres); //La función asort(), permite ordenar alfabeticamente de forma ascendente los indices de un array.

foreach ($nombres as $nombre) {
    echo $nombre . "<br/>";
}
?>