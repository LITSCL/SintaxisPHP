<h1>{{ $fruta->nombre }}</h1>
<p>
	{{ $fruta->descripcion }}
</p>

<a href="{{ url('/fruta/borrar', ['id' => $fruta->id]) }}">Eliminar</a> <!-- El segundo par�metro es un array asociativo el cual indica los par�metros que se env�an. -->
<a href="{{ url('/fruta/editar', ['id' => $fruta->id]) }}">Actualizar</a>