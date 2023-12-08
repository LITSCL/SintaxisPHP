<?php
$variable1 = "Mi variable 1"; 
$variable2 = "Mi variable 2";
?>
<h1>{{ $variable0 }}</h1>
<h1>{{ $variable1 }}</h1> <!-- Aquí se esta imprimiendo el dato utilizando la interpolación de variables que permite blade. -->
<h1>{{ $variable2 }}</h1> <!-- Aquí se esta imprimiendo el dato utilizando la interpolación de variables que permite blade. -->
<h1>{{ date("Y") }}</h1> <!-- También se pueden imprimir resultados de funciones. -->