<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaquillaForeignKey extends Migration
{

    public function up()
    {
        Schema::table('taquillas', function (Blueprint $table) {
            $table->integer('oficina_id')->unsigned();

            $table->foreign('oficina_id')->references('id')->on('oficinas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('taquillas', function (Blueprint $table) {
            $table->dropForeign('taquillas_oficina_id_foreign');
            $table->dropColumn('oficina_id');
        });
    }
}
