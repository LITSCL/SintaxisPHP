<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<h1>Formulario</h1>
	<form action="recibir.php" method="POST">
		<label for="nombre">Nombre</label><br/>
		<input type="text" name="nombre" autofocus="autofocus"/><br/> <!-- El atributo "autofocus" con valor autofocus, realiza un focus por defecto en el input al cargar la página. -->
		
		<label for="apellido">Apellido</label><br/>
		<input type="text" name="apellido" /><br/>
		
		<label for="edad">Edad</label><br/>
		<input type="text" name="edad" disabled/><br/> <!-- El atributo "disabled" permite deshabilitar un input. -->
		
		<label for="clave">Clave</label><br/>
		<input type="password" name="clave"/><br/>
		
		<label for="genero">Genero</label><br/>
		<p>
			Hombre: <input type="checkbox" name="genero[]"  value="Hombre"/> <!-- Si existen checkbox multiples se debe especificar en el atributo "name" que es un array. -->
			Mujer: <input type="checkbox" name="genero[]" value="Mujer"/>
		</p>
		
		<label for="color">Color</label><br/>
		<input type="color" name="color"/><br/>
		
		<label for="fecha">Fecha</label><br/>
		<input type="date" name="fecha"/><br/>
		
		<label for="archivo">Archivo</label><br/>
		<input type="file" name="archivo" multiple/><br/> <!-- El atributo multiple permite que el usuario pueda subir mas de un archivo a la vez. -->
				
		<label for="idioma">Idioma</label><br/>
		<input type="text" name="idioma" required/><br/> <!-- El atributo required evita que un input se envíe sin datos. -->
		
		<label for="lenguaje">Lenguaje</label>
		<p>
			PHP: <input type="radio" name="lenguaje" value="PHP"/>
			Java: <input type="radio" name="lenguaje" value="Java"/>
			Python: <input type="radio" name="lenguaje" value="Python"/>
		</p>
		
		<textarea name="texto" id="texto" cols="30" rows="10"></textarea><br/>
			
		<select name="peliculas">
			<option value="1">Age of Empires 1</option>
			<option value="2">Age of Empires 2</option>
			<option value="3">Age of Empires 3</option>
		</select><br/>
		
		<input type="submit" value="Enviar" />	
	</form>
</body>
</html>
<?php

?>
