<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>

<?php 
//NOTA: Incluir con require es lo mismo que un include, la diferencia esta en los errores, si llega a ocurrir un error al incluir con require PHP no ejecutará la página y mostrará los errores.
//NOTA: Incluir con require_once, permite que solo una vez se incluya un fichero (Ideal si se desea que en bucles se incluya solo una vez).
require_once "includes/cabecera.py"; //Esta instrucción fallará, pero require no ejecutará ninguna instrucción y solo mostrará el error en el navegador.
require_once "includes/cabecera.py"; //Ese require no funcionará.
?>
	<div>
	   <?php 
	   echo $mensaje; //Al incluir un fichero PHP, también se puede hacer uso de sus variables.
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
