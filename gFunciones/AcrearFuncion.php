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
//Ejemplo de funci�n sin return.
function imprimeHolaMundo() { //Se crea una funci�n.
    echo "Hola Mundo" . "<br/>"; //Contenido de la funci�n.
}

imprimeHolaMundo(); //Llamando a la funci�n.

//Ejemplo de funci�n con return.
function imprimeHelloWorld() { //Se crea una funci�n.
    return "Hello World"; //Contenido de la funci�n.
}

 echo imprimeHelloWorld(); //Llamando a la funci�n.
?>