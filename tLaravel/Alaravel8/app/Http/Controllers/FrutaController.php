<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
	public function listar()
	{
		$frutas = DB::table("fruta")->get(); //El método "get" retorna un array con los registros de la base de datos (Array con objetos).
		//$frutas = DB::table("fruta")->orderBy("id", "desc")->get(); //Al utilizar el método "orderBy", se puede ordenar los registros (Primer parámetro indica la columna, segundo parámetro indica el orden).
		return view("fruta.listar", ["frutas" => $frutas]); //Retornando una vista y enviando el array de registros.
	}
	
	public function buscar($id)
	{
		$fruta = DB::table("fruta")->where("id", "=", $id)->first(); //El método "where" permite traer registros en base a una condición (Primer parámetro = nombre de columna; Segundo parámetro es el signo de comparación; Tercer parámetro es el valor de la columna), el método first retorna un objeto (Si se utilizara get, retornaria un array con un único elemento).
		return view("fruta.buscar", ["fruta" => $fruta]); //Retornando una vista y enviando el array de registros.
	}
	
	public function crear()
	{
		return view("fruta.crear");
	}
	
	public function create(Request $request)
	{
		DB::table("fruta")->insert(array( //El método "insert", recibe como parámetro un array asociativo que representa el registro a almacenar en la base de datos.
			"nombre" => $request->input("nombre"),
			"descripcion" => $request->input("descripcion"),
			"precio" => $request->input("precio"),
			"fecha" => date("Y-m-d")
		));
		return redirect()->action("App\Http\Controllers\FrutaController@listar")->with("estado", "Fruta creada exitosamente"); //Cuando se usa el método "with" en el método "action", los datos se envían en forma de sesión flash (Son sesiones que se eliminan luego de ser cargada la vista).
	}
	
	public function borrar($id)
	{
		$fruta = DB::table("fruta")->delete($id); //El método "delete" permite borrar un registro entregando como parámetro la clave primaria.
		//$fruta = DB::table("fruta")->where("id", $id)->delete(); //Esta es otra forma de borrar un registro.
		return redirect()->action("App\Http\Controllers\FrutaController@listar")->with("estado", "Fruta borrada exitosamente"); 
	}
	
	public function editar($id)
	{
		$fruta = DB::table("fruta")->where("id", "=", $id)->first();
		return view("fruta.editar", ["fruta" => $fruta]);
	}
	
	public function update(Request $request)
	{
		$id = $request->input("id");
		$fruta = DB::table("fruta")->where("id", "=", $id)->update(array( //Para actualizar un registro primero se debe buscar con el método "where", luego aplicar el método "update" y entregar un array asociativo con los valores de las columnas.
				"nombre" => $request->input("nombre"),
				"descripcion" => $request->input("descripcion"),
				"precio" => $request->input("precio"),
				"fecha" => date("Y-m-d")
		));
		return redirect()->action("App\Http\Controllers\FrutaController@listar")->with("estado", "Fruta actualizada exitosamente");
	}
}
