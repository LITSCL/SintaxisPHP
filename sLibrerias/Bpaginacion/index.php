<?php require_once "../vendor/autoload.php"; ?>

<?php
//1. Conectarse a la base de datos.
$host = "localhost";
$usuario = "root";
$clave = "root";
$baseDeDatos = "dbbpaginacion";
$puerto = 3306;
	
$db = new mysqli($host, $usuario, $clave, $baseDeDatos, $puerto);
$db->query("SET NAMES 'utf8'");
?>

<?php
//2. Obtener la cantidad de registros totales.
$query = $db->query("SELECT * FROM producto");
$cantidadElementos = $query->num_rows;
$cantidadElementosPorPagina = 3;
?>

<?php 
//3. Crear una instancia de "Zebra_Pagination".
$zebraPagination = new Zebra_Pagination();

//4. Asignar la cantidad de registros a paginar.
$zebraPagination->records($cantidadElementos);

//5. Asignar la cantidad de registros por pagina. 
$zebraPagination->records_per_page($cantidadElementosPorPagina);

//6. Obtener la pagina de la URL.
$paginaActual = $zebraPagination->get_page(); //Si no llega dato por defecto es 1.

$paginaAMostrar = ($paginaActual - 1) * $cantidadElementosPorPagina;
$productos = $db->query("SELECT * FROM producto LIMIT $paginaAMostrar, $cantidadElementosPorPagina");

echo "<link rel='stylesheet' href='../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css' type='text/css'>";

while ($producto = $productos->fetch_object()) {
	echo "<h1>{$producto->nombre}</h1>";
}

$zebraPagination->render();
?>
