<h1>Crear una fruta</h1>
<form action="{{ url('/fruta/create') }}" method="POST">
	{{ csrf_field() }} <!-- El método "csrf_field" es necesario para que los datos viajen seguros (Si no se usa no se pueden enviar los datos en Laravel). -->
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre"/>
	
	<label for="descripcion">Descripcion</label>
	<input type="text" name="descripcion"/>
	
	<label for="precio">Precio</label>
	<input type="text" name="precio"/>
	
	<input type="submit" value="Crear"/>
</form>