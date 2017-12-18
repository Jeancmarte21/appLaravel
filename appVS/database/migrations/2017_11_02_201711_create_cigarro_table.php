<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCigarroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            if(!Schema::hasTable('cigarro')){
            Schema::create('cigarro', function (Blueprint $table) {
            $table->increments('idcigarro');
            $table->string('nombre', 45)->collation('utf8_spanish_ci');
            $table->enum('tipo', ['Fumas AMF', 'Fumas Arenco']);
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
        Schema::dropIfExists('cigarro');
    }
}
