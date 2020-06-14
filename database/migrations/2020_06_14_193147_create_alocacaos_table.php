<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlocacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocacoes', function (Blueprint $table) {
            //Desenvolvedores
            $table->integer('desenvolvedor_id')->unsigned();
            $table->foreign('desenvolvedor_id')->references('id')->on('desenvolvedores');
            //Projetos
            $table->integer('projeto_id')->unsigned();
            $table->foreign('projeto_id')->references('id')->on('projetos');
            //atributo desta tabela alocação
            $table->integer('horas_semanais');

            $table->primary(['desenvolvedor_id','projeto_id']);
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
        Schema::dropIfExists('alocacoes');
    }
}
