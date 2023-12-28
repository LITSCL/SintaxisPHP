{{-- Condicional IF en Blade --}}
<h1>Condicional If</h1>
<?php $titulo = "Django"; ?>
@if ($titulo == "Avatar")
	El titulo es Avatar
@elseif ($titulo == "Django")
	El titulo es Django
@else
	El titulo no existe
@endif

{{-- Bucle For en Blade --}}
<h1>Bucle For</h1>
@for ($i = 0; $i <= 20; $i++)
	El numero es: {{ $i }} <br/>
@endfor

{{-- Bucle While en Blade --}}
<h1>Bucle While</h1>
<?php $contador = 0; ?>
@while ($contador <= 50)
	El numero es: {{ $contador }} <br/>
	<?php $contador++ ?>
@endwhile

{{-- Bucle ForEach en Blade --}}
<h1>Bucle ForEach</h1>
<?php $animes = array("1" => "Mushoku Tensei", "2" => "Grimgar") ?>
@foreach($animes as $anime)
	{{ $anime }} <br/>
@endforeach


