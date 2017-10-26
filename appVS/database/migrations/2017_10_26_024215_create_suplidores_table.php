<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplidores', function (Blueprint $table) {
            $table->increments('idSuplidor');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo');
            $table->string('pais');
            $table->longText('direccion');
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
        Schema::dropIfExists('suplidores');
    }
}
