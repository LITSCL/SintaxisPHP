<?php
class Usuario {
	public $nombre;
	public $email;
	
	public function __construct() {
		echo "Creando el objeto";
	}
	
	public function __destruct() { //Este m�todo se ejecuta si existe un objeto perteneciente a esta clase y si se ley� la �ltima instrucci�n de la p�gina.
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