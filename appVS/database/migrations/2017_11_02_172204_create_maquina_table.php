<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

            if(!Schema::hasTable('maquina')){
            Schema::create('maquina', function (Blueprint $table) {
            $table->increments('idmaquina');
            $table->string('nombre', 20)->collation('utf8_spanish_ci');
            $table->tinyInteger('produccion');
            $table->softDeletes();
            $table->timestamps();
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
        Schema::dropIfExists('maquina');
    }
}
