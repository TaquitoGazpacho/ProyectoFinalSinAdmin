<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepartosForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repartos', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->integer('empresa_id')->unsigned();
            $table->integer('oficina_id')->unsigned();
            $table->integer('taquilla_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresa_repartos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('oficina_id')->references('id')->on('oficinas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('taquilla_id')->references('id')->on('taquillas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repartos', function (Blueprint $table) {
            $table->dropForeign('repartos_usuario_id_foreign');
            $table->dropForeign('repartos_empresa_id_foreign');
            $table->dropForeign('repartos_oficina_id_foreign');
            $table->dropForeign('repartos_taquilla_id_foreign');
            $table->dropColumn('usuario_id');
            $table->dropColumn('empresa_id');
            $table->dropColumn('oficina_id');
            $table->dropColumn('taquilla_id');
        });
    }
}
