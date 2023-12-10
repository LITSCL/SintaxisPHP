<?php
if (is_dir("carpeta") == false) { //La función "is_dir", recibe por parámetro la ruta de un directorio, si existe el directorio retorna true, de lo contrario retorna false.
    mkdir("carpeta", 0777) or die ("No se puede crear la carpeta"); //La función "mkdir" permite crear un directorio, por primer parámetro recibe el directorio a crear y como segundo parámetro recibe los permisos.
}
else {
    echo "Error, ya existe la carpeta.";
}   
?>