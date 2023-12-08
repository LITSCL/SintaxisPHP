<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php
//A continuación se verifica que existan los 4 primeros campos del formulario y se muestran.
if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["clave"]) && isset($_POST["genero"])) {
    echo $_POST["nombre"] . "<br/>";
    echo $_POST["apellido"] . "<br/>";
    echo $_POST["clave"] . "<br/>";
    foreach ($_POST["genero"] as $genero) {
        echo $genero . "<br/>";
    }
}
?>
