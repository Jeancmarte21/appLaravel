<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            if(!Schema::hasTable('jornada')){
            Schema::create('jornada', function (Blueprint $table) {
            $table->increments('idjornada');
            $table->integer('maquina_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->float('hora_extra', 3,1)->default(0);
            $table->float('extra', 7, 2)->default(0);
            $table->float('incentivo', 7,2)->default(0);
            $table->date('fecha');
            $table->softDeletes();
            $table->tinyInteger('jornada_doble')->default(0);
            $table->timestamps();

            $table->foreign('maquina_id')->references('idmaquina')->on('maquina');
            $table->foreign('empleado_id')->references('idempleado')->on('empleado');
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
        Schema::dropIfExists('jornada');
    }
}
