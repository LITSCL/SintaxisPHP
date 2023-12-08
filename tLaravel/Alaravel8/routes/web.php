<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FrutaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//GET: M�todo para conseguir datos.
//POST: M�todo para guardar datos.
//PUT: M�todo para actualizar datos.
//DELETE: M�todo para eliminar datos.

//NOTA: Todos los m�todos son est�ticos y perteneen a la clase Route.

//1. Establecer la ruta (Ruta "Ra�z").
Route::get("/", function() { 
	//2. Cargar la vista.
	return view("home");
});

//1. Establecer la ruta (Ruta "mostrar-fecha").
Route::get("/mostrar-fecha", function() {
	//2. Generar variables necesarias para la vista.
	$pagina = "mostrar_fecha.blade.php";
	
	//3. Cargar la vista.
	return view("mostrar_fecha", array("variablePagina" => $pagina)); //Las variables se entregan en un array asociativo, donde el nombre del indice corresponde al nombre que tendr� la variable en la vista.
});

//1. Establecer la ruta (Ruta "pelicula" con par�metro obligatorio), si no se entrega el par�metro, no se encontrar� la p�gina "NOT FOUND 404".
Route::get("/pelicula/{parametro}", function($parametro) { //En la ruta al entregar "{parametro}", se est� especificando que se recibe un par�metro obligatorio. En la funci�n se debe declarar una variable la cual almacena el par�metro recibido.
 
	//2. Cargar la vista.
	return view("mostrar_pelicula", array("parametro" => $parametro)); //Enviando el parametro recibido a la vista.
});
	
//1. Establecer la ruta (Ruta "juego" con par�metro opcional).
Route::get("/juego/{parametro?}", function($parametro = "No enviaste el parametro opcional") { //En la ruta al entregar "{parametro?}", se est� especificando que se recibe un par�metro opcional. En la funci�n se debe declarar una variable la cual almacena el par�metro recibido.

	//2. Cargar la vista.
	return view("mostrar_juego", array("parametro" => $parametro)); //Enviando el parametro recibido a la vista.
});

//1. Establecer la ruta (Ruta "anime" con condicionales en los par�metros).
Route::get("/anime/{nombre}/{year}", function($nombre, $year) { 
	//2. Cargar la vista.
	return view("mostrar_anime", array("nombre" => $nombre, "year" => $year)); 
	})->where(array( //El m�todo "where" permite a�adir condiciones mediante expresiones regulares a los par�metros entregados, esto se realiza mediante un array asociativo, donde la clave indica el nombre del par�metro y el valor es la expresi�n regular. Si no se llegan a cumplir las condiciones se generar� un error "404 NOT FOUND".
		"nombre" => "[a-zA-Z]+", //El par�metro "nombre", debe solo poseer letras mayusculas y minusculas.
		"year" => "[0-9]+" // El par�metro "year" solo puede ser un n�mero.
));

Route::get("/listado-paises", function() {
	return view("listado-paises")->with("primerPais", "Chile")->with("segundoPais", "Argentina"); //La funci�n "with" es otra manera de enviar variables a la vista (Se pueden encadenar infinitamente).
});

Route::get("/listado-canciones", function() {
	return view("musica.listado_canciones"); //Para retornar una vista que se encuentra en una sub-carpeta, se debe utilizar la nomenclatura del punto.
});

Route::get("/interpolacion/{variable0?}", function($variable0 = "Mi variable 0 (Enviada desde el enrutador)") {
	return view("interpolacion")->with("variable0", $variable0); 
});
	
Route::get("/comentario", function() {
	return view("comentario");
});

Route::get("/mostrar-variables-solo-si-existen", function() {
	return view("mostrar_variables_solo_si_existen");
});

Route::get("/estructuras-control", function() {
	return view("estructuras_control");
});

Route::get("/utilizando-includes", function() {
	return view("utilizando_includes");
});

Route::get("/plantilla-1", function() {
	return view("plantilla_1");
});

Route::get("/plantilla-2", function() {
	return view("plantilla_2");
});

//Estableciendo las rutas de controladores (Todas las rutas deben pertenecer a un controlador, con excepci�n del index).
Route::get("/peliculas/{pagina?}", [PeliculaController::class, "index"]); //Para cargar un m�todo del controlador, se debe entregar como segundo par�metro un array, donde el primer indice indica la clase controlador y el segundo indice indica el m�todo.
Route::get("/detalle/{year?}", [PeliculaController::class, "detalle"])->middleware("VerificaYear"); //Aqu� se esta a�adiendo un middleware (Instrucciones que se realizan antes de que se ejecute el controlador).
Route::resource("usuario", UsuarioController::class); //Utilizar una ruta de tipo "Resource", permite que no sea necesario crear una ruta independiente para cada m�todo del controlador (En este caso las rutas ser�an: usuario/metodo).
Route::get("/redirigir", [PeliculaController::class, "redirigir"]);
Route::get("/formulario", [PeliculaController::class, "formulario"]);
Route::get("/recibir-datos", [PeliculaController::class, "recibirDatos"]);

//Rutas CRUD Frutas.
Route::prefix("fruta")->group(function () //Creando grupo "fruta", significa que las rutas que est�n dentro de este grupo necesitan el prefijo "fruta" antes, ejemplo: www.localhost/fruta/listado.
{ 
	Route::get("listar", [FrutaController::class, "listar"]);
	Route::get("buscar/{id}", [FrutaController::class, "buscar"]);
	Route::get("crear", [FrutaController::class, "crear"]);
	Route::post("create", [FrutaController::class, "create"]);
	Route::get("borrar/{id}", [FrutaController::class, "borrar"]);
	Route::get("editar/{id}", [FrutaController::class, "editar"]);
	Route::post("update", [FrutaController::class, "update"]);
});
