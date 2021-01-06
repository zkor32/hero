<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToHeroes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('heroes', function (Blueprint $table) {
            $table->biginteger('level_id')->unsigned(); //se asinga  el nombre de la calve foreanea (level_id) y luego indicar que es unsigned, osea que no es un numero negativo

            $table->foreign('level_id')->references('id')->on('levels');//se apunta a que campo referencia la clave foranea , en este caso a id en la tabla levels
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('heroes', function (Blueprint $table) {
            //
        });
    }
}
