<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="#" method="POST">
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
//NOTA: Las variables super globales son variables brinda PHP por defecto y pueden ser accedidas desde cualquier script PHP.
echo $_POST["nombre"]; //La variable super global "$_POST" permite recibir un parámetro por el método post.
echo "<br/>";
echo $_POST["edad"];

//NOTA: Se generará un error si no se están enviando los datos del formulario (Esto sucede porque se está intentando acceder a un valor que todavía no existe).
?>