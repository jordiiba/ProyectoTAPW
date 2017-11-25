<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario')->unique();
            $table->string('contraseña');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('correo');
            $table->string('compania');
            $table->string('rfc');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('codigo_postal');
            $table->integer('id_ciudad');
            $table->foreign('id_ciudad')->references('id')->on('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
