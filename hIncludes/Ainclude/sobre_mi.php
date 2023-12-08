<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>

<?php 
//NOTA: Un include en PHP permite incorporar c�digo de otros ficheros en el fichero actual (Esto es mu �til para crear una cabecera personalizada (Similar a un componente Angular)).
include "includes/cabecera.php"; //Aqu� se esta incluyendo todo el c�digo del fichero "cabecera.php" ubicado en la carpeta includes.
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
