<?php
$archivo = $_FILES["archivo"]; //Aquí se almacena un array que contiene todos los datos que conforman el archivo (Se almacena el archivo que llega desde index.php).
$nombre = $archivo["name"]; //Aquí se almacena el nombre del archivo.
$tipo = $archivo["type"]; //Aquí se almacen el formato del archivo.

if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png") {
    if (!is_dir("imagenes")) { //Se verifica si no existe la carpeta llamada "imagenes".
        mkdir("imagenes", 0777);
        move_uploaded_file($archivo["tmp_name"], "imagenes/" . $nombre); //La función "move_uploaded_file" recibe un archivo como primer parámetro y como segundo parámetro recibe la ruta en donde guardarlo.
        echo "<h1>Imagen subida correctamente</h1>";
        header("Refresh: 3; URL=index.php"); //Aquí se redirecciona a "index.php" despues de 3 segundos.
    } else {
        move_uploaded_file($archivo["tmp_name"], "imagenes/" . $nombre);
        echo "<h1>Imagen subida correctamente</h1>";
        header("Refresh: 3; URL=index.php");
    }
} else {
    echo "<h1>Sube una imagen por favor...</h1>";
    header("Refresh: 3; URL=index.php"); 
}
?>