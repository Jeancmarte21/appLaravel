<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCigarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cigarros', function (Blueprint $table) {
            $table->increments('idCigarro');
            $table->string('nombre');
            $table->string('tipoCigarro');
            $table->integer('materiaprima_id')->unsigned();
            $table->foreign('materiaprima_id')->references('idMateriaPrima')->on('materiasprimas'); 
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
        Schema::dropIfExists('cigarros');
    }
}
