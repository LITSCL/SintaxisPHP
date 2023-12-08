<?php require_once "Nhelpers/autoload.php"; //Al usar el autoload se puede requerir todas las clases de una ruta sin necesidad de requerirlas una por una. ?> 

<?php //require_once "Nclases/Categoria.php"; ?>
<?php //require_once "Nclases/Persona.php"; ?>
<?php //require_once "Nclases/TarjetaGrafica.php"; ?>

<?php 
$persona = new Persona();
echo $persona->nombre;

echo "<br/>";

$categoria = new Categoria();
echo $categoria->nombre;

echo "<br/>";

$tarjetaGrafica = new TarjetaGrafica();
echo $tarjetaGrafica->marca;
?>