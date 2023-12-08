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
//Las funciones predefinidas son funciones que vienen creadas por defecto en php.

$nombre = "Daniel";
$numero = 15;
$frase = "            Hola como estas             ";
$frase2 = "Yo soy hackerman";

echo 'La variable $nombre es de tipo ' . gettype($nombre) . "<br/>"; //La funci�n gettype() retorna el tipo de dato de la variable.

if (is_string($numero)) { //La funci�n is_string() comprueba si el valor entregado por par�metro es un string, si lo es retorna true y de lo contrario retorna false.
    echo 'La variable $numero es de tipo string' . "<br/>";
}
else {
    echo 'La variable $numero es de tipo integer' . "<br/>";
}

if (isset($holaMundo)) { //La funci�n isset() Comprueba si la variable entregada pro par�metro existe, en caso de que exista retorna true y en caso contrario retorna false.
    echo 'La variable $holaMundo si existe' . "<br/>";
}
else {
    echo 'La variable $holaMundo no existe' . "<br/>";
}

echo "La frase sin espacios es: " . trim($frase) . "<br/>"; //La funci�n trim() elimina los espacios que hay al principio y al final de una cadena de texto.

echo "La posicion de la frase entregada por parametro es: " . strpos($frase2, "soy") . "<br/>"; //La funci�n strpos recibe 2 par�metros, el primero indica la cadena de caracteres y el segundo la palabra a buscar, retorna la posici�n de la primera letra de la palabra encontrada.

echo str_replace("hackerman", "programador", $frase2); //La funci�n str_replace() cambia una palabra en una cadena de texto, el primer argumento indica la palabra a cambiar, el segundo argumento indica la nueva palabra y el tercero indica la variable que contiene esa palabra.
?>