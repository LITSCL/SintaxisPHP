<?php
$host = "localhost";
$usuario = "root";
$clave = "root";
$baseDeDatos = "dbmysql";
$puerto = 3306;

$conexion = mysqli_connect($host, $usuario, $clave, $baseDeDatos, $puerto);

if (mysqli_connect_errno()) {
    echo "Error al conectarse a la base de datos: " . mysqli_connect_error();

}
else {
    echo "Conexion a la base de datos exitosa";
    //1. Realizar la consulta SQL.
    $query = mysqli_query($conexion, "SELECT * FROM persona"); //Esta función permite realizar una consulta SQL a una base de datos, el primer parámetro es la configuración de la conexión y el segundo parámetro es la sentencia SQL.
    
    echo "<br>";
    
    //2. Mostrar los datos que contiene el resultado de la consulta.
    while ($persona = mysqli_fetch_assoc($query)) { //Esta función convierte el resultado de la consulta en un array asociativo (Similar a un ResulSet de Java).
        echo $persona["id"] . " " . $persona["nombre"] . "<br/>";
    } 
}
?>