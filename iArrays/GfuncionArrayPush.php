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

array_push($nombres, "Nicolas"); //La función array_push(), permite agregar un nuevo valor al array (El valor ocupará el último indice).

foreach ($nombres as $nombre) {
    echo $nombre . "<br/>";
}
?>