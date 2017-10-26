<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasprimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiasprimas', function (Blueprint $table) {
            $table->increments('idMateriaPrima');
            $table->string('nombre');
            $table->string('categoria');
            $table->float('porcentajePesoHumedo');
            $table->float('existenciaMinima');
            $table->float('existenciaReal');
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
        Schema::dropIfExists('materiasprimas');
    }
}
