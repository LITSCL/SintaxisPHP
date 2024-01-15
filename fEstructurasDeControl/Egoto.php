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
echo "<p>Hola Mundo</p>";

goto marca; //El operador "goto" permite saltarse una sección de código utilizando una marca (El operador goto busca la marca y al encontrarla se salta todo el código que los separa).

echo "<p>Instruccion 1</p>";
echo "<p>Instruccion 2</p>";
echo "<p>Instruccion 3</p>";
echo "<p>Instruccion 4</p>";

marca:
echo "<p>Se han saltado 4 instrucciones</p>";
?>