<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

            if(!Schema::hasTable('salida')){
            Schema::create('salida', function (Blueprint $table) {
            $table->increments('idsalida');
            $table->integer('materiaprima_id')->unsigned();
            $table->float('cantidad', 7, 2);
            $table->date('fecha');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('materiaprima_id')->references('idmateriaPrima')->on('materiaPrima');
        });
        }
         

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salida');
    }
}
