<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplidor', function (Blueprint $table) {
            $table->increments('idsuplidor');
            $table->string('nombre', 45);
            $table->string('telefono', 12);
            $table->string('correo', 40);
            $table->longText('direccion');
            $table->string('pais', 30);
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
        Schema::dropIfExists('suplidor');
    }
}
