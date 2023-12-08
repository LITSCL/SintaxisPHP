<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrutaSeeder extends Seeder //Los seeders permite realizar sentencias CRUD sobre la base de datos del programa.
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i <= 20; $i++) {
    		DB::table("fruta")->insert(array( //El método "table" permite seleccionar una tabla, al aplicar el método "insert" se puede insertar un registro en la tabla.
    			"nombre" => "Cereza" . $i,
    			"descripcion" => "Descripcion" . $i,
    			"precio" => $i,
    			"fecha" => date("Y-m-d")
    		));
    	}
    	$this->command->info("La tabla de frutas ha sido actualizada"); //Mostrando un mensaje en la consola.
    }
}
