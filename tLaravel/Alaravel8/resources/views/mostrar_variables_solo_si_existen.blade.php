<?php
$variable = "Soy la variable";
?>

<?=isset($variable) ? $variable : "No existe la variable";?>
{{ $variable ?? "No exsiste la variable" }} <!-- Esto es otra forma de mostrar un dato solo si existe (Usando la sintaxis de Blade). -->