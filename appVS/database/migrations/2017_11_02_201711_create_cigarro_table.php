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
        Schema::create('cigarro', function (Blueprint $table) {
            $table->increments('idcigarro');
            $table->string('nombre', 45);
            $table->string('tipo', 20);
            $table->int('saborizante')->unsigned();
            $table->timestamps();

            $table->foreign('saborizante')->references('idmateriaPrima')->on('materiaPrima');
        });
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
