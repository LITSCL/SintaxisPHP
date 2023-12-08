<?php
require_once "../vendor/autoload.php";

use Dompdf\Dompdf;

$html = '
	<!doctype html>
	<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Document</title>
		<style>
			h1 {
				color: green;
			}
		</style>
	</head>
	<body>
		<h1>Esta es una plantilla HTML</h1>
	</body>
	</html>
';

$dompdf = new Dompdf();
$dompdf->load_html($html); //Aqu� se carga la plantilla HTML al PDF.
$dompdf->render(); //Aqu� se renderiza la plantilla HTML.
$dompdf->stream("documento.pdf", array("Attachment" => "0")); //Aqu� se muestra el PDF en el navegador.
?>