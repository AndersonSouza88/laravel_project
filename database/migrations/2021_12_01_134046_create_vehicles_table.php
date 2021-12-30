<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->integer('codigo')->nullable()->comment('Codigo no portal');
            $table->increments('id');
            $table->string('marca')->comment('Marca do veiculo');
            $table->string('modelo')->comment('Modelo do veiculo');
            $table->string('versao')->comment('Versão do veiculo');
            $table->string('placa')->comment('Placa do veiculo');
            $table->integer('anomodelo')->comment('Ano do veiculo');
            $table->double('preco')->comment('Preço do veiculo');
            $table->integer('km')->comment('Kilometragem');
            $table->longText('imagens')->nullable()->comment('Imagens');
            
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
        Schema::dropIfExists('vehicles');
    }
}
