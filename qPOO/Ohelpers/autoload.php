<?php
function app_autoloader($clase) { //1. Se debe crear una función que reciba un parámetro (Dicho parámetro hace referencia al nombre random que tiene la clase). Dentro del bloque de instrucciones se debe requerir la clase (La clase a requerir es el parámetro entregado).
	require_once "Oclases/" . $clase . ".php";
}

spl_autoload_register("app_autoloader"); //2. A esta función se le debe entregar como parámetro la función que requiere las clases (Se ejecutará la función "app_autoloader" cambiando el valor de su variable dependiendo del nombre que tenga el archivo que contiene la clase).
?>