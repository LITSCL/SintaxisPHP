<?php
class Usuario {
	public $nombre;
	public $email;
	
	public function __construct() {
		$this->nombre = "Daniel Alvarez";
		$this->email = "daniel@ejemplo.local";
	}
	
	public function __toString() { //El m�todo m�gico "toString" permite mostrar una cadena de texto cuando se intenta imprimir una instancia.
		return "Nombre: " . $this->nombre . "<br>" . "Email: " . $this->email;
	}
}
?>

<?php 
$usuario = new Usuario();
echo $usuario; //Aqu� se ejecuta el m�todo m�gico "toString".
?>