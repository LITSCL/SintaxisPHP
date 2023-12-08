<?php
Class Usuario {
	
	public const CUENTA = "MelchioT"; //Constante como atributo de la clase (No se le pueden crear Getters y Setters).
	public $clave = "123";
	
	public function getClave()
    {
        return $this->clave;
    }

	public function setClave($clave)
    {
        $this->clave = $clave;
    }
}
?>

<?php 
$usuario = new Usuario();
echo $usuario::CUENTA; //Mostrando el valor de la constante.
?>