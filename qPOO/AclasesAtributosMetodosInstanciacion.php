<?php
//1. Nombre de la clase.
class Auto {
    
    //Atributos de la clase.
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    
    //2. Métodos de la clase.
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
//3. Creando un objeto tipo "Auto".
$miAuto = new Auto(); 

//4. Seteando el objeto.
$miAuto->color = "Rojo";
$miAuto->marca = "Ferrari";
$miAuto->modelo = "488";
$miAuto->velocidad ="300Km";

var_dump($miAuto); //Mostrando los datos del objeto.

echo "<br/>";

var_dump($miAuto->getColor()); //Llamando un método de la clase.
?>