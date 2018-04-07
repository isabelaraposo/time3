<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaUnidadeTabelaProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->integer('unidade_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('unidade_id')
                    ->references('id')
                    ->on('unidade');
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->dropForeign('processos_unidade_id_foreign');
            $table->dropCollumn('unidade_id');
        });
    }
}
