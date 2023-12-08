<?php 
trait Utilidades { //Un trait permite generar métodos que pueden ser vinculados en varias clases (Similar a la herencia pero sin llegar a implementarla).
	public function mostrarNombre() {
		echo "<h1> El nombre es " . $this->nombre . "</h1>";
	}
}
?>

<?php
class Auto {
	use Utilidades; //Añadiendo el trait a la clase "Auto";
	
	public $nombre;
	public $marca;
}

class Persona {
	use Utilidades;
	
	public $nombre;
	public $apellido;
}

class Juego {
	use Utilidades;
	
	public $nombre;
	public $year;
}
?>

<?php 
$auto = new Auto();
$auto->nombre = "Ferrari 458";

$persona = new Persona();
$persona->nombre = "Daniel";

$juego = new Juego();
$juego->nombre = "Age of Empires 2";

$auto->mostrarNombre(); //Utilizando el método del trait.
$persona->mostrarNombre();
$juego->mostrarNombre();
?>