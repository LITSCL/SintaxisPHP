<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="#" method="GET">
		<p>
			<label>Nombre</label>
			<input type="text" name="nombre"/>
		</p>
		<p>
			<label>Edad</label>
			<input type="text" name="edad"/>
		</p>
		
		<input type="submit" value="Enviar" />
	</form>
</body>
</html>
	
<?php
//NOTA: Las variables super globales son variables brinda PHP y pueden ser accedidas desde cualquier script PHP.
echo $_GET["nombre"]; //La variable super global "$_GET" permite recibir un parámetro por el método get.
echo "<br/>";
echo $_GET["edad"];

//NOTA: Se generará un error si no se están enviando los datos del formulario (Esto sucede porque se está intentando acceder a un valor que todavía no existe).
?>
