<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosCampanhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_campanhas', function (Blueprint $table) {
            $table->increments('idprodutos_campanhas');
            $table->integer('idproduto')->unsigned();
            $table->foreign('idproduto')->references('idproduto')->on('produtos');
            $table->integer('idcampanha')->unsigned();
            $table->foreign('idcampanha')->references('idcampanha')->on('campanhas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_campanhas');
    }
}
