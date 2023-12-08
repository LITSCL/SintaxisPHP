<!-- Las plantillas son similares a los includes, permiten generar estructuras importables, con la diferencia en que se pueden generar variables las cuales se inician en la vista. -->

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Titulo - @yield('titulo')</title> <!-- La etiqueta "yield" permite declarar una variable la cual se debe iniciar en donde se incluya el layout. -->
</head>
<body>
	@section('header') <!-- La etiqueta "section" permite agrupar una sección de código HTML para luego importarlo en la página donde se incluya este layout. -->
		<h2>CABECERA DE LA PAGINA (Master)</h2>
	@show
	
	<hr/>
	
	<div class="contenedor" style="border: 1px solid gray; width: 300px">
		@yield('contenido')
	</div>
	
	<hr/>
	
	@section('footer')
		<h2>FOOTER DE LA PAGINA (Master)</h2>
	@show
</body>
</html>