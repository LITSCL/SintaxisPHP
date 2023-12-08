<?php
// La estructura Try-Catch permite capturar una excepci�n.
try {
	throw new Exception("Hay un error de logica"); //NOTA: Aqu� se est� lanzando una excepci�n a proposito.
} catch (Exception $ex) { //En caso de que ocurra una excepci�n se ejecuta el c�digo del catch.
	echo "Ocurrio un error";
} finally { //El c�digo del "finally" se ejecuta haya ocurrido o no una excepci�n.
	echo "<br>Yo me voy a ejecutar igual";
}

