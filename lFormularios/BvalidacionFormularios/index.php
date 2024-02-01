<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Formulario</h1>
	<form action="recibir.php" method="POST">
		<label for="nombre">Nombre</label><br/>
		<input type="text" name="nombre" required/><br/>
		
		<label for="apellido">Apellido</label><br/>
		<input type="text" name="apellido" required/><br/>
		
		<label for="edad">Edad</label><br/>
		<input type="text" name="edad" required/><br/>
		
		<label for="email">Email</label><br/>
		<input type="email" name="email" required/><br/>
		
		<label for="clave">Clave</label><br/>
		<input type="password" name="clave"/><br/>
		
		<input type="submit" value="Enviar" />	
	</form>
</body>
</html>
<?php
if (isset($_GET["error"])) {
    $error = $_GET["error"];
    if ($error == "Faltan datos") {
        echo "<strong style='color: red'>Introduce todos los datos</strong>";
    }
    
    if ($error == "El nombre esta vacio") {
        echo "<strong style='color: red'>El nombre esta vacio</strong>";
    }
    
    if ($error == "El apellido esta vacio") {
        echo "<strong style='color: red'>El apellido esta vacio</strong>";
    }
    
    if ($error == "La edad esta vacia") {
        echo "<strong style='color: red'>La edad esta vacia</strong>";
    }
    
    if ($error == "La edad no es un numero") {
        echo "<strong style='color: red'>La edad no es un numero</strong>";
    }
    
    if ($error == "La clave esta vacia") {
        echo "<strong style='color: red'>La clave esta vacia</strong>";
    }
    
    if ($error == "La clave es demasiado corta") {
        echo "<strong style='color: red'>La clave es demasiado corta</strong>";
    }
}
if (isset($_GET["exito"])) {
    $exito = $_GET["exito"];
    if ($exito == "Envio exitoso") {
        echo "<strong style='color: green'>Envio exitoso</strong>";
    }
}
?>
