<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
	//Todos los métodos son acciones del controlador (Dicos métodos se acceden desde una ruta configurada).
	public function index($pagina = 1) //Los parámetros del método almacenan los parámetros entregados por la URL.
	{ 
		$titulo = "Listado de mis peliculas";
		return view("pelicula.index", ["titulo" => $titulo, "pagina" => $pagina]);
	}
	
	public function detalle($year = null) 
	{
		return view("pelicula.detalle"); //Retornando una vista.
	}
	
	public function redirigir() 
	{
		return redirect()->action("App\Http\Controllers\PeliculaController@detalle"); //La función "redirect->action" recibe como parámetro una ruta a a la cual redirigir (Es una función de Laravel).
	}
	
	public function formulario() 
	{
		return view("pelicula.formulario");
	}
	
	public function recibirDatos(Request $request) //Se necesita un objeto de tipo Request para recibir datos desde formularios.
	{ 
		$nombre = $request->input("nombre"); //Recibiendo datos del formulario.
		$email = $request->input("email"); //Recibiendo datos del formulario.
		return $nombre . "<br/>" . $email;
	}
}
