<h1>Formulario en Laravel</h1>
<form action="{{ action('App\Http\Controllers\PeliculaController@recibirDatos') }}" method="GET">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre"/>
	
	<label for="email">Correo</label>
	<input type="email" name="email"/>
	
	<input type="submit" value="Enviar"/>
</form>