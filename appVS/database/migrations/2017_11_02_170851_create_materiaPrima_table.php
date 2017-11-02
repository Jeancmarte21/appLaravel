<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaPrimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiaPrima', function (Blueprint $table) {
            $table->increments('idmateriaPrima');
            $table->string('nombre', 35);
            $table->string('categoria', 25);
            $table->float('porcentaje_pesohumedo', 5,2);
            $table->float('existencia_minima', 7,2);
            $table->float('existencia_real', 7,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiaPrima');
    }
}
