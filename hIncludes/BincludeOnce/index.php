<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>

<?php 
include_once "includes/cabecera.php"; //Al utilizar include_once, se indica que el fichero no se puede volver a incluir (Sirve cuando un include se encuentra en un bucle y deseas que se coloque una sola vez).
include_once "includes/cabecera.php";
//include "includes/cabecera.php"; //Esto si funcionar�, si se incluye en "once", se podr� volver a incluir el fichero.
?>
	<div>
	   <?php 
	   echo $mensaje; //Al incluir un fichero PHP, tambi�n se puede hacer uso de sus variables.
	   ?>
	</div>
	
	<div>
		<h2>Esta es la pagina de inicio</h2>
		<p>Texto de prueba de la pagina de inicio</p>
	</div>
	
	<footer>
		Todos los derechos reservados &copy; Daniel Alvarez <?php date("Y"); ?>
	</footer>
</body>
</html>
