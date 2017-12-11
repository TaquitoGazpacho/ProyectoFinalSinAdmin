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

            $table->foreign('id_oficina')->references('id')->on('oficinas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('taquillas', function (Blueprint $table) {
            $table->dropForeign('taquillas_id_oficina_foreign');
            $table->dropColumn('id_oficina');
        });
    }
}
