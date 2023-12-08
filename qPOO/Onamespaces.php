<?php require_once "Ohelpers/autoload.php"; //Para importar utilizando namespace, también es necesario utilizar el require_once. ?>

<?php
//Importar con "namespace" se utiliza en los frameworks, además, permite importar 2 clases con el mismo nombre.

use MisClases\Categoria; //Importando una primera clase llamada "Categoria" utilizando el namespace.
use MisClases\Persona;
use MisClases\TarjetaGrafica; 

class Principal {
	public $categoria;
	public $persona;
	public $tarjetaGrafica;
	
	public function __construct() {
		$this->categoria = new Categoria();
		$this->persona = new Persona();
		$this->tarjetaGrafica = new TarjetaGrafica();
	}
}
?>

<?php 
$principal = new Principal();
var_dump($principal->categoria->nombre);

echo "<br/>";

$categoria = new \OtrasClases\Categoria(); //Importando una segunda clase llamada "Categoria" utilizando el namespace.
var_dump($categoria->nombre);
?>