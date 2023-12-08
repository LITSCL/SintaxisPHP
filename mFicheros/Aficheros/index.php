<?php
//Abrir archivo.
$archivo = fopen("fichero.txt", "a+"); //El primer par�metro indica la ruta del archivo a abrir y el segundo par�metro indica los permisos que se poseen sobre el archivo (a+ = Read + Write).

//Leer archivo.
while (!feof($archivo)) { //El bucle recorre cada l�nea del archivo.
    $contenido = fgets($archivo); //El m�todo fgets permite leer el contenido del archivo entregado por par�metro.
    echo $contenido . "<br/>";
}

//Escribir en un archivo.
fwrite($archivo, "Hola soy una linea generada por PHP");

//Cerrar archivo.
fclose($archivo);;
?>