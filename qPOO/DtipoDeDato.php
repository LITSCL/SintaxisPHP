<?php
class Auto {
    
    public $color; 
    public $marca; 
    public $modelo; 
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
    
    public function mostrarInformacion(Auto $auto) { //Aquí se esta especificando el tipo de dato que debe tener el parámetro (Esto es muy útil en POO).
        $informacion = "<h1>Informacion del Auto:</h1>";
        $informacion.="Color: " . $auto->color . "<br/>";
        $informacion.="Marca: " . $auto->marca . "<br/>";
        $informacion.="Modelo: " . $auto->modelo . "<br/>";
        $informacion.="Velocidad: " . $auto->velocidad . "<br/>";
        return $informacion;
    }
}
?>

<?php
$miAuto = new Auto("Rojo", "Ferrari", "488", "300Km");

echo $miAuto->mostrarInformacion($miAuto);
?>