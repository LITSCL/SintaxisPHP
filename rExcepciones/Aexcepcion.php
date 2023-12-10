<?php
// La estructura Try-Catch permite capturar una excepción.
try {
	throw new Exception("Hay un error de logica"); //NOTA: Aquí se está lanzando una excepción a proposito.
} catch (Exception $ex) { //En caso de que ocurra una excepción se ejecuta el código del catch.
	echo "Ocurrio un error";
} finally { //El código del "finally" se ejecuta haya ocurrido o no una excepción.
	echo "<br>Yo me voy a ejecutar igual";
}

