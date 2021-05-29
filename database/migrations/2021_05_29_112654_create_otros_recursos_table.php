<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtrosRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otros_recursos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('lineas');
            $table->string('tipo');
            $table->string('recurso');
            $table->string('pathImagen');
            
            $table->timestamps();
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otros_recursos');
    }
}
