<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaquillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taquillas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_taquilla');
            $table->string('tamanio');
            $table->boolean('ocupada')->default(false);
            $table->string('estado')->default('Funcionando');
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
        Schema::dropIfExists('taquillas');
    }
}
