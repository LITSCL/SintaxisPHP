<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
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
//NOTA: Las variables super globales son variables brinda PHP y pueden ser accedidas desde cualquier script PHP.
echo $_POST["nombre"]; //La variable super global "$_POST" permite recibir un par�metro por el m�todo post.
echo "<br/>";
echo $_POST["edad"];

//NOTA: Se generar� un error si no se est�n enviando los datos del formulario (Esto sucede porque se est� intentando acceder a un valor que todav�a no existe).
?>