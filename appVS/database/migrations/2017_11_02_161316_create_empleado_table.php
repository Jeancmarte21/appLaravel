<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('idempleado');
            $table->string('cedula', 13)->charset('utf8')->unique();
            $table->string('nombre', 25)->charset('utf8');
            $table->string('apellidos', 45)->charset('utf8');
            $table->string('telefono', 12)->nullable();
            $table->date('fecha_nacimiento');
            $table->longText('direccion')->charset('utf8')->nullable();
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
        Schema::dropIfExists('empleado');
    }
}
