<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
	public function listar()
	{
		$frutas = DB::table("fruta")->get(); //El m�todo "get" retorna un array con los registros de la base de datos (Array con objetos).
		//$frutas = DB::table("fruta")->orderBy("id", "desc")->get(); //Al utilizar el m�todo "orderBy", se puede ordenar los registros (Primer par�metro indica la columna, segundo par�metro indica el orden).
		return view("fruta.listar", ["frutas" => $frutas]); //Retornando una vista y enviando el array de registros.
	}
	
	public function buscar($id)
	{
		$fruta = DB::table("fruta")->where("id", "=", $id)->first(); //El m�todo "where" permite traer registros en base a una condici�n (Primer par�metro = nombre de columna; Segundo par�metro es el signo de comparaci�n; Tercer par�metro es el valor de la columna), el m�todo first retorna un objeto (Si se utilizara get, retornaria un array con un �nico elemento).
		return view("fruta.buscar", ["fruta" => $fruta]); //Retornando una vista y enviando el array de registros.
	}
	
	public function crear()
	{
		return view("fruta.crear");
	}
	
	public function create(Request $request)
	{
		DB::table("fruta")->insert(array( //El m�todo "insert", recibe como par�metro un array asociativo que representa el registro a almacenar en la base de datos.
			"nombre" => $request->input("nombre"),
			"descripcion" => $request->input("descripcion"),
			"precio" => $request->input("precio"),
			"fecha" => date("Y-m-d")
		));
		return redirect()->action("App\Http\Controllers\FrutaController@listar")->with("estado", "Fruta creada exitosamente"); //Cuando se usa el m�todo "with" en el m�todo "action", los datos se env�an en forma de sesi�n flash (Son sesiones que se eliminan luego de ser cargada la vista).
	}
	
	public function borrar($id)
	{
		$fruta = DB::table("fruta")->delete($id); //El m�todo "delete" permite borrar un registro entregando como par�metro la clave primaria.
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
		$fruta = DB::table("fruta")->where("id", "=", $id)->update(array( //Para actualizar un registro primero se debe buscar con el m�todo "where", luego aplicar el m�todo "update" y entregar un array asociativo con los valores de las columnas.
				"nombre" => $request->input("nombre"),
				"descripcion" => $request->input("descripcion"),
				"precio" => $request->input("precio"),
				"fecha" => date("Y-m-d")
		));
		return redirect()->action("App\Http\Controllers\FrutaController@listar")->with("estado", "Fruta actualizada exitosamente");
	}
}
