<?php
namespace MisClases; //Asignando "namespace" a la clase.

class Persona {
	public $nombre;
	public $edad;
	
	public function __construct() {
		$this->nombre = "Daniel";
		$this->edad = 23;
	}
}
?>