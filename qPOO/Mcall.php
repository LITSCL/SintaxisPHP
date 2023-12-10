<?php
class Persona {
	private $nombre;
	private $edad;
	private $ciudad;
	
	public function __construct($nombre, $edad, $ciudad) {
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->ciudad = $ciudad;
	}
	
	public function __call($nombre, $argumento) { //Este método se ejecuta cuando se utiliza un método que no existe.
		echo "El metodo " . $nombre . " no existe";
	}
}
?>

<?php 
$persona = new Persona("Daniel", "23", "Cartagena");

echo $persona->getNombre();
?>