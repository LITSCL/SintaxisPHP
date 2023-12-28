<h1>Listado de frutas</h1>

@if (session("estado")) {{-- Verificando que exista la sesión "estado". --}}
	<p style="background: green; color: white; width: 178px">
		{{ session("estado") }} {{-- Mostrando el valor de la sesión --}}
	</p>
@endif
<ul>
@foreach($frutas as $fruta) <!-- Estas frutas vienen de la base de datos. -->
	<li>
	<a href="{{ url('/fruta/buscar', ['id' => $fruta->id]) }}">{{ $fruta->nombre }}</a>		
	</li>
@endforeach
</ul>