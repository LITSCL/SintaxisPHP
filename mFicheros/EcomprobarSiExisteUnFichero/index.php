<?php
if (file_exists("fichero.txt") == true) { //La función "file_exists" recibe por parámetro una ruta con un fichero, si el fichero existe retorna true, de lo contrario retorna false.
    echo "El fichero si existe";
}
else {
    echo "El fichero no existe";
}
?>