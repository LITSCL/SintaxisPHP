<?php
//1. Establecer datos necesarios para la conexi�n.
$host = "localhost";
$usuario = "root";
$clave = "root";
$baseDeDatos = "dbmysql";
$puerto = 3306;

//2. Conectarse a la base de datos.
$conexion = mysqli_connect($host, $usuario, $clave, $baseDeDatos, $puerto);

//3. Comprobar si la conexi�n fue exitosa.
if (mysqli_connect_errno()) {
    echo "Error al conectarse a la base de datos: " . mysqli_connect_error(); //Esta funci�n almacena el error ocurrido.
}
else {
    echo "Conexion a la base de datos exitosa";
}
?>