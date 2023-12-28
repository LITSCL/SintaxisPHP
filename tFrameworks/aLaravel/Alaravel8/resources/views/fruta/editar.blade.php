<h1>Editar una fruta</h1>
<form action="{{ url('/fruta/update') }}" method="POST">
	{{ csrf_field() }} <!-- El método "csrf_field" es necesario para que los datos viajen seguros (Si no se usa no se pueden enviar los datos en Laravel). -->
	<input type="hidden" name="id" value="{{ $fruta->id ?? 'Valor por defecto' }}"/>
	
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" value="{{ $fruta->nombre ?? 'Valor por defecto' }}"/>
	
	<label for="descripcion">Descripcion</label>
	<input type="text" name="descripcion" value="{{ $fruta->descripcion ?? 'Valor por defecto' }}"/>
	
	<label for="precio">Precio</label>
	<input type="text" name="precio" value="{{ $fruta->precio ?? '1' }}"/>
	
	<input type="submit" value="Editar"/>
</form>