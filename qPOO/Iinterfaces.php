<?php
//Una interface permite definir m�todos para luego implementarlos en una o varias clases.
interface Notebook {
	public function encender(); //Definiendo m�todo de la interface.
	public function apagar();
}
?>

<?php 
class NotebookLenovo implements Notebook { //Esta clase implementa la interface "Notebook".
	private $modelo;
	
	public function getModelo() {
        return $this->modelo;
    }

	public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
	public function encender() { //Iniciando m�todo de la interface.
		return "Notebook encendido";
	}

	public function apagar() {
		return "Notebook encendido";
	}
}
?>

<?php 
$notebook = new NotebookLenovo();

echo $notebook->encender();
?>