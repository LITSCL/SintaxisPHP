<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Subir Archivo</h1>
	<form action="subir.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo"/>
		<input type="submit" value="Enviar"/>
	</form>
	<h1>Listado de imagenes</h1>
	<?php 
	$directorio = opendir("./imagenes"); //Aquí se almacena todo el contenido dentro del directorio.
	
	if ($directorio == true) { //Se verifica que se pudo acceder al directorio (Que hay archivos).
	    while (($imagen = readdir($directorio)) != false) { //Aquí se recorren todos los archivos del directorio (Siempre que haya un archivo que recorrer, el valor de la variable será true). La variable también contiene el archivo.
	        if ($imagen != "." && $imagen != "..") {
	            echo "<img src='imagenes/$imagen' width='200px'/><br/>";
	        }
	    }
	}
	?>
</body>
</html>