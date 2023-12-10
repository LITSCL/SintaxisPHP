<?php
class Persona {
    public $nombre;
    public $altura;
    public $edad;

    public function getNombre() {
        return $this->nombre;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function hablar() {
        return "Estoy hablando";
    }
    
    public function caminar() {
        return "Estoy caminando";
    }
}

class Informatico extends Persona { //La clase "Informatico" hereda de la clase "Persona" (Hereda atributos y métodos).
    
    public $lenguajeFavorito;

	public function programar() {
        return "Estoy programando";
    }
    
    public function formatear() {
        return "Estoy formateando";
    }
    
    public function getLenguajeFavorito() {
    	return $this->lenguajeFavorito;
    }
    
    public function setLenguajeFavorito($lenguajeFavorito) {
    	$this->lenguajeFavorito = $lenguajeFavorito;
    }
}
?>

<?php
$persona = new Persona();

$persona->setNombre("Esteban");
$persona->setAltura("1.70cm");
$persona->setEdad(22);

var_dump($persona);

echo "<br/>";

$informatico = new Informatico();

$informatico->setNombre("Daniel"); //Este atributo se hereda de la clase "Persona".
$informatico->setAltura("1.75cm"); //Este atributo se hereda de la clase "Persona".
$informatico->setEdad(23); //Este atributo se hereda de la clase "Persona".
$informatico->setLenguajeFavorito("Java");

var_dump($informatico);

echo "<br/>";

echo $informatico->caminar(); //Este método se hereda de la clase "Persona".
?>