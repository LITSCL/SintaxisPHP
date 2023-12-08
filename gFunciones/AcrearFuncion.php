<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>

</body>
</html>
	
<?php
//Ejemplo de función sin return.
function imprimeHolaMundo() { //Se crea una función.
    echo "Hola Mundo" . "<br/>"; //Contenido de la función.
}

imprimeHolaMundo(); //Llamando a la función.

//Ejemplo de función con return.
function imprimeHelloWorld() { //Se crea una función.
    return "Hello World"; //Contenido de la función.
}

 echo imprimeHelloWorld(); //Llamando a la función.
?>