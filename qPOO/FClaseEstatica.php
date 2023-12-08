<?php
//Las clases estaticas permiten acceder a los atributos y métodos de la clase sin necesidad de instanciar un objeto.
class Persona {
	public static $nombre; //Atributo estatico.
	public static $altura;
	public static $edad;
	
	public static function getNombre() { //método estatico.
        return Persona::$nombre; //El código "Persona::" es equivalente a "this->".
    }

	public static function getAltura() {
        return Persona::$altura;
    }

	public static function getEdad() {
        return Persona::$edad;
    }

	public static function setNombre($nombre) {
        Persona::$nombre = $nombre;
    }

	public static function setAltura($altura) {
        Persona::$altura = $altura;
    }

	public static function setEdad($edad) {
        Persona::$edad = $edad;
    }
}
?>

<?php 
//Seteando los atributos.
Persona::setNombre("Daniel");
Persona::setAltura("175cm");
Persona::setEdad("23");

//Mostrando los atributos.
echo Persona::$nombre . "<br/>";
echo Persona::$altura . "<br/>";
echo Persona::$edad . "<br/>";

echo "<br/>";

//Creando un objeto.
$persona = new Persona();
$persona::$nombre = "Esteban";
$persona::$altura = "165cm";
$persona::$edad = "22";

//Mostrando los atributos del objeto.
echo $persona::$nombre . "<br/>";
echo $persona::$altura . "<br/>";
echo $persona::$edad . "<br/>";
?>