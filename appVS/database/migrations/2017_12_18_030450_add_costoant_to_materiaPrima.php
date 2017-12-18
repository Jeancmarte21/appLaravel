<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCostoantToMateriaPrima extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materiaPrima', function (Blueprint $table) {
            //
            $table->float('costo_ant', 11, 2)->after('costo')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiaPrima', function (Blueprint $table) {
            //
        });
    }
}
