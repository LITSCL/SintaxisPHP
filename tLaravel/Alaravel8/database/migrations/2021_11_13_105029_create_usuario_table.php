<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration //Las migraciones permiten crear la estructura de la base de datos del programa (Sentencias DDL).
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Este método permite crear la tabla.
    {
    	//Creación de tabla mediante Schema Builder (Clase PHP).
    	/*
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments("id"); //Se define el columna "id" INT autoincremental.
            $table->string("nombre", 255); //Se define la columna "nombre" VARCHAR con soporte de 255 caracteres (Primer parámetro indica el nombre de la columna y el segundo indica la cantidad de caracteres soportada).
            $table->integer("edad"); //Se define la columna "edad" VARCHAR.
            $table->timestamps();
        });
        */
    	
    	//Creación de tabla mediante SQL.
    	DB::statement("
			Create TABLE usuario(
    			id INT auto_increment PRIMARY KEY NOT NULL,
    			nombre VARCHAR(255),
    			edad INT
			);"
    	);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //Este método permite borrar la tabla.
    {
        Schema::dropIfExists('usuario');
    }
}
