<?php
abstract class Computador { //Esto es una clase abstracta (Significa que solo se puede utilizar para que sea heredada por otras clases).
	public $encendido;
	
	abstract public function encender(); //Todos lo métodos de una clase abstracta deben ser abstractos también (Solo se deben definir pero no iniciar, ya que deben ser iniciados por la clase hija).
	
	abstract public function apagar();
}
?>

<?php 
class ComputadorLenovo extends Computador {
	public $nombre;
	
	public function encender() { //Todos los métodos abstractos de la clase padre se deben iniciar obligatoriamente.
		$this->encendido = true;
	}
	
	public function apagar() {
		$this->encendido = false;
	}
}
?>

<?php 
$computador = new ComputadorLenovo();
$computador->nombre = "PC Ryzen 7";
$computador->encender();

var_dump($computador);
?>