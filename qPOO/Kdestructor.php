<?php
class Usuario {
	public $nombre;
	public $email;
	
	public function __construct() {
		echo "Creando el objeto";
	}
	
	public function __destruct() { //Este método se ejecuta si existe un objeto perteneciente a esta clase y si se leyó la última instrucción de la página.
		echo "Destruyendo el objeto";
	}
}
?>

<?php 
$usuario = new Usuario();

for ($i = 0; $i < 10; $i++) {
	echo $i + 1;
}
?>