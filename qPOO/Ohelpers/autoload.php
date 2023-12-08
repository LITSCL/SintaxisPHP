<?php
function app_autoloader($clase) { //1. Se debe crear una funci�n que reciba un par�metro (Dicho par�metro hace referencia al nombre random que tiene la clase). Dentro del bloque de instrucciones se debe requerir la clase (La clase a requerir es el par�metro entregado).
	require_once "Oclases/" . $clase . ".php";
}

spl_autoload_register("app_autoloader"); //2. A esta funci�n se le debe entregar como par�metro la funci�n que requiere las clases (Se ejecutar� la funci�n "app_autoloader" cambiando el valor de su variable dependiendo del nombre que tenga el archivo que contiene la clase).
?>