<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaquillaForeignKey extends Migration
{

    public function up()
    {
        Schema::table('taquillas', function (Blueprint $table) {
            $table->integer('id_oficina')->unsigned();

            $table->foreign('id_oficina')->references('id')->on('oficinas');
        });
    }

    public function down()
    {
        //
    }
}
