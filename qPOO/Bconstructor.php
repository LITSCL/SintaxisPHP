<?php
class Auto {
    
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    
    //1. Creación del constructor.
    public function __construct($color, $marca, $modelo, $velocidad) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function getMarca() {
        return $this->marca;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }
}
?>

<?php
//2. Instanciando un objeto utilizando el constructor.
$miAuto = new Auto("Rojo", "Ferrari", "488", "300Km");

var_dump($miAuto);
?>