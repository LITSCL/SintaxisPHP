<h1>{{ $fruta->nombre }}</h1>
<p>
	{{ $fruta->descripcion }}
</p>

<a href="{{ url('/fruta/borrar', ['id' => $fruta->id]) }}">Eliminar</a> <!-- El segundo parámetro es un array asociativo el cual indica los parámetros que se envían. -->
<a href="{{ url('/fruta/editar', ['id' => $fruta->id]) }}">Actualizar</a>