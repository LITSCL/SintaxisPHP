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
$error = "";
$exito = "";

if (isset($_POST["nombre"]) && 
    isset($_POST["apellido"]) &&
    isset($_POST["edad"]) &&
    isset($_POST["email"]) &&
    isset($_POST["clave"])) {
        $exito = "Envio exitoso";
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $email = $_POST["email"];
        $clave = $_POST["clave"];
        
        //Validar el nombre.
        if (empty(trim($nombre))) {
            $error = "El nombre esta vacio";          
        }
        
        if (empty(trim($apellido))) {
            $error = "El apellido esta vacio";
        }
        
        if (empty(trim($edad)) || is_numeric($edad) == false || strlen($edad) < 3) {
            if (empty(trim($edad))) {
                $error = "La edad esta vacia";
            }
            elseif (is_numeric($edad) == false) {
                $error = "La edad no es un numero";
            }
            else {
                $error = "La clave es demasiado corta";
            }
        }
        
        if (empty(trim($clave))) {
            $error = "La clave esta vacia";
        }
        
        if ($error != "") {
            header("Location:index.php?error=$error");
        }
        else {
            header("Location:index.php?exito=$exito");
        }       
        
    }
?>
