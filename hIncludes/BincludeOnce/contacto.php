<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 
//NOTA: Un include en PHP permite incorporar código de otros ficheros en el fichero actual (Esto es mu útil para crear una cabecera personalizada (Similar a un componente Angular)).
include_once "includes/cabecera.php"; //Aquí se esta incluyendo todo el código del fichero "cabecera.php" ubicado en la carpeta includes.
include_once "includes/cabecera.php"; //Esta inclusión no funcionará.
?>
	
	<div>
		<h2>Esta es la pagina de inicio</h2>
		<p>Texto de prueba de la pagina de inicio</p>
	</div>
	
	<footer>
		Todos los derechos reservados &copy; Daniel Alvarez <?php date("Y"); ?>
	</footer>
</body>
</html>
