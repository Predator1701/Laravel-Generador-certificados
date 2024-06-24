<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 250);
            $table->string('plantilla')->unique();
            $table->integer('numero_pagina');
            $table->string('configuracion_correo', 250);
            $table->string('copia_correo', 250);
            $table->string('password');
            $table->string('servidor');
            $table->string('puerto');
            $table->string('criptografia');
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
        Schema::dropIfExists('proyectos');
    }
}
