<!-- Extender de una plantilla permite reutilizar codigo generico, el cual puede ser modificado desde donde se esté importando. -->

@extends('layouts.master') <!-- Aquí se incluye el layout. -->

@section('titulo', 'Mi titulo (Plantilla 2)') <!-- Aquí se está iniciando la variable "titulo". -->

@section('header') <!-- Aquí se está iniciando la variable "header" (Si ya habian valores, se sustituyen por los nuevos). -->
	<h2>CABECERA DE LA PAGINA (Plantilla 2)</h2>
@stop

@section('contenido') <!-- Aquí se está iniciando la variable "contenido" la cual pertenece al layout "Master" (Todo dentro de esta etiqueta se reemplaza) -->
	CONTENIDO DE LA PAGINA (Plantilla 2)
	<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed tincidunt ex, at ornare lorem. Quisque blandit tempus fringilla. Nulla feugiat eu purus ornare aliquet. Donec eget nulla iaculis, lobortis leo et, dapibus nisl.
	</p>
@stop

@section('footer')
	@parent() <!-- La etiqueta "parent" permite agregar datos a la variable (Sin necesidad de que se borren los datos previos). -->
	Esto fue agregado (Plantilla 2)
@stop