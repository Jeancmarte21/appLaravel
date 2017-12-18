<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
            Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('idconfiguracion');
            $table->integer('cigarro_id')->unsigned();
            $table->string('nombre', 45)->collation('utf8_spanish_ci');
            $table->date('fecha');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('cigarro_id')->references('idcigarro')->on('cigarro');
        });
         

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracion');
    }
}
