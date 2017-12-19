<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosOficinaForeignKey extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('oficina_id')->unsigned()->nullable();

            $table->foreign('oficina_id')->references('id')->on('oficinas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_oficina_id_foreign');
            $table->dropColumn('oficina_id');
        });
    }
}
