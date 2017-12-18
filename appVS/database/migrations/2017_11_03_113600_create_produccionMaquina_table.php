<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduccionMaquinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('produccionMaquina', function (Blueprint $table) {
            $table->increments('idproduccionmaquina');
            $table->integer('maquina_id')->unsigned();
            $table->integer('cigarro_id')->unsigned();
            $table->integer('configuracion_id')->unsigned();
            $table->integer('cantidad');
            $table->datetime('fecha')->unique();
            $table->float('cantidad_sobrante', 7, 2);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('maquina_id')->references('idmaquina')->on('maquina');
            $table->foreign('cigarro_id')->references('idcigarro')->on('cigarro');
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
        Schema::dropIfExists('produccionMaquina');
    }
}
