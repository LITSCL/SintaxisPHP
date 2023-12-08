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
    $query = mysqli_query($conexion, "SELECT * FROM persona"); //Esta funci�n permite realizar una consulta SQL a una base de datos, el primer par�metro es la configuraci�n de la conexi�n y el segundo par�metro es la sentencia SQL.
    
    echo "<br>";
    
    //2. Mostrar los datos que contiene el resultado de la consulta.
    while ($persona = mysqli_fetch_assoc($query)) { //Esta funci�n convierte el resultado de la consulta en un array asociativo (Similar a un ResulSet de Java).
        echo $persona["id"] . " " . $persona["nombre"] . "<br/>";
    } 
}
?>