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

array_push($nombres, "Nicolas"); //La funci�n array_psuh(), permite agregar un nuevo valor al Array (El valor ocupar� el �ltimo indice).

foreach ($nombres as $nombre) {
    echo $nombre . "<br/>";
}
?>