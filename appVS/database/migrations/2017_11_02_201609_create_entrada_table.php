<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->increments('identrada');
            $table->integer('suplidor_id')->unsigned();
            $table->integer('materiaprima_id')->unsigned();
            $table->float('precio', 11, 2);
            $table->float('cantidad', 7, 2);
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('materiaprima_id')->references('idmateriaPrima')->on('materiaPrima');
            $table->foreign('suplidor_id')->references('idsuplidor')->on('suplidor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada');
    }
}
