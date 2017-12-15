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

        if(!Schema::hasTable('suplidor')){
            Schema::create('suplidor', function (Blueprint $table) {
            $table->increments('idsuplidor');
            $table->string('nombre', 45)->collation('utf8_spanish_ci');
            $table->string('telefono', 12)->collation('utf8_spanish_ci')->nullable();
            $table->string('correo', 40)->collation('utf8_spanish_ci')->nullable();
            $table->longText('direccion')->collation('utf8_spanish_ci')->nullable();
            $table->string('pais', 30)->collation('utf8_spanish_ci');
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
        Schema::dropIfExists('suplidor');
    }
}
