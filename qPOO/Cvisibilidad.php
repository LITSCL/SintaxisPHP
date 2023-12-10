<?php
class Auto {
    
    public $color; //PUBLIC: Se puede acceder al atributo/método desde cualquier parte del programa.
    protected $marca; //PROTECTED: Se puede acceder al atributo/método desde la clase que los definen o las clases que heredan de esta clase.
    private $modelo; //PRIVATE: Se puede acceder al atributo/método solamente desde esta clase.
    public $velocidad;
    
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
$miAuto = new Auto("Rojo", "Ferrari", "488", "300Km");

$miAuto->color = "Amarillo";
//$miAuto->marca = "Audi"; //Esto no funciona porque marca es "protected".
//$miAuto->modelo = "R8"; //Esto no funciona porque modelo es "private".
$miAuto->setMarca("Audi");
$miAuto->setModelo("R8");

var_dump($miAuto);
?>