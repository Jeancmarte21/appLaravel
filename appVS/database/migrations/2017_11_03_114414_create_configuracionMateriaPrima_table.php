<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionMateriaPrimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        
            Schema::create('configuracionMateriaPrima', function (Blueprint $table) {
            $table->increments('idconfiguracionmateriaprima');
            $table->integer('materiaprima_id')->unsigned();
            $table->integer('configuracion_id')->unsigned();
            $table->float('cantidad', 7,2);
            $table->tinyInteger('envoltura')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('materiaprima_id')->references('idmateriaPrima')->on('materiaPrima');
            $table->foreign('configuracion_id')->references('idconfiguracion')->on('configuracion');
        });
         

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracionMateriaPrima');
    }
}
