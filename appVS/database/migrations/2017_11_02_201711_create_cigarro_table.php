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
            $table->string('nombre', 45)->collation('utf8_spanish_ci');
            $table->$table->enum('tipo', ['Fumas', 'Vitolas']);
            $table->int('saborizante')->unsigned()->nullable();
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
