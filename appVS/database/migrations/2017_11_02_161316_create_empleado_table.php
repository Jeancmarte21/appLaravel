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
            $table->string('cedula', 13)->collation('utf8_spanish_ci')->unique();
            $table->string('nombre', 25)->collation('utf8_spanish_ci');
            $table->string('apellidos', 45)->collation('utf8_spanish_ci');
            $table->string('telefono', 12)->nullable();
            $table->date('fecha_nacimiento');
            $table->longText('direccion')->collation('utf8_spanish_ci')->nullable();
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
