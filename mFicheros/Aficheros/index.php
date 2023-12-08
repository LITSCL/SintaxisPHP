<?php
//Abrir archivo.
$archivo = fopen("fichero.txt", "a+"); //El primer parámetro indica la ruta del archivo a abrir y el segundo parámetro indica los permisos que se poseen sobre el archivo (a+ = Read + Write).

//Leer archivo.
while (!feof($archivo)) { //El bucle recorre cada línea del archivo.
    $contenido = fgets($archivo); //El método fgets permite leer el contenido del archivo entregado por parámetro.
    echo $contenido . "<br/>";
}

//Escribir en un archivo.
fwrite($archivo, "Hola soy una linea generada por PHP");

//Cerrar archivo.
fclose($archivo);;
?>