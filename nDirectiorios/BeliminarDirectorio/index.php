<?php
if (is_dir("carpeta") == true) { //La funci�n "is_dir", recibe por par�metro la ruta de un directorio, si existe el directorio retorna true, de lo contrario retorna false.
    rmdir("carpeta") or die ("No se puede borrar la carpeta"); //La funci�n "mkdir" permite eliminar un directorio, por par�metro recibe la carpeta a eliminar.
}
else {
    echo "Error, la carpeta no existe.";
}
?>