<?php
if (file_exists("fichero.txt") == true) { //La funci�n "file_exists" recibe por par�metro una ruta con un fichero, si el fichero existe retorna true, de lo contrario retorna false.
    echo "El fichero si existe";
}
else {
    echo "El fichero no existe";
}
?>