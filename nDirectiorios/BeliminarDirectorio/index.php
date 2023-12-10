<?php
if (is_dir("carpeta") == true) { //La función "is_dir", recibe por parámetro la ruta de un directorio, si existe el directorio retorna true, de lo contrario retorna false.
    rmdir("carpeta") or die ("No se puede borrar la carpeta"); //La función "mkdir" permite eliminar un directorio, por parámetro recibe la carpeta a eliminar.
}
else {
    echo "Error, la carpeta no existe.";
}
?>