<?php
if ($directorio = opendir("./carpeta")) { //La función "opendir" permite abrir un directorio (En caso de que se pueda abrir se almacenan todos los archivos dentro de la variable).
    echo $directorio . "<br/>";
    echo "<hr>";
    while (($archivo = readdir($directorio))) { //Este bucle se repite dependiendo de los ficheros que se encuentren dentro del directorio (Se repite mientras hayan ficheros que iterar).
        if ($archivo != "." && $archivo != "..") { //Esto es necesario porque hay 2 ficheris ocultos (Uno con el nombre . y otro con el nombre ..).
            echo $archivo . "<br/>";
        }
    }
}
?>