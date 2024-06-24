<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos', function (Blueprint $table) {
            $table->increments('id_campo');
            $table->float('positionx');
            $table->float('positiony');
            $table->string('tipografia', 255);
            $table->integer('tamano');
            $table->string('color', 255);
            $table->integer('numeropagina');

            $table->unsignedInteger('id_proyecto');
            $table->foreign('id_proyecto')->references('id')->on('proyectos')->onDelete('cascade');

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
        Schema::dropIfExists('campos');
    }
}
