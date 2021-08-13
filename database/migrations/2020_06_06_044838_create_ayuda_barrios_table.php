<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyudaBarriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayuda_barrios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_barrio');
            $table->string('nombre_grupo');
            $table->integer('num_ayudas');
            $table->string('lider_grupo');
            $table->integer('num_familias');
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
        Schema::dropIfExists('ayuda_barrios');
    }
}
