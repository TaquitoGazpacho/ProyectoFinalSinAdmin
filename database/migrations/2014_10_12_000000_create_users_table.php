<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidRelacion tablas oficinas y taquillas - HECHO
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->integer('phone')->default(000000000);
            $table->string('sex')->default('androgino');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->default("https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png");
            $table->boolean('verified')->default(false);
            $table->string('email_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
