<?php
if (is_dir("carpeta") == false) { //La funci�n "is_dir", recibe por par�metro la ruta de un directorio, si existe el directorio retorna true, de lo contrario retorna false.
    mkdir("carpeta", 0777) or die ("No se puede crear la carpeta"); //La funci�n "mkdir" permite crear un directorio, por primer par�metro recibe el directorio a crear y como segundo par�metro recibe los permisos.
}
else {
    echo "Error, ya existe la carpeta.";
}   
?>