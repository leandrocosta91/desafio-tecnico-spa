<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_cidades', function (Blueprint $table) {
            $table->increments('idgrupo_cidade');
            $table->string('descricao', 45);
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
        Schema::dropIfExists('grupo_cidades');
    }
}
