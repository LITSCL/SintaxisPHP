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
    //1. Preparar la consulta SQL.
    $sql = "INSERT INTO persona VALUES(null, 'Jorge', '42', 'amarillo')";
    
    //2. Realizar la consulta SQL.
    $query = mysqli_query($conexion, $sql); //Esta función permite realizar una consulta SQL a una base de datos, el primer parámetro es la configuración de la conexión y el segundo parámetro es la sentencia SQL.
    
    echo "<br>";
    
    //3. Comprobar si la consulta funcionó.
    if ($query) {
        echo "Datos insertados correctamente";
    }
    else {
        echo "Error: " . mysqli_error($conexion); //Imprimiendo en pantalla el error.
    }
}
?>