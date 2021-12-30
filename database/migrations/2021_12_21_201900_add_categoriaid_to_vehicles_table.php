<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriaidToVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {

            $table->unsignedInteger('categoria_id');
            $table->unsignedInteger('cambio_id');
            $table->unsignedInteger('direcao_id');
            $table->unsignedInteger('cores_id');
            $table->unsignedInteger('combustivel_id');
            $table->unsignedInteger('opcionais_id');

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('cambio_id')->references('id')->on('cambios');
            $table->foreign('direcao_id')->references('id')->on('direcaos');
            $table->foreign('cores_id')->references('id')->on('colors');
            $table->foreign('combustivel_id')->references('id')->on('combustivels');
            $table->foreign('opcionais_id')->references('id')->on('opcionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            //
        });
    }
}
