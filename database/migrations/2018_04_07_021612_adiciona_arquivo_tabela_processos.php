<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaArquivoTabelaProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processos', function (Blueprint $table) {
            $table->integer('arquivo_id')
                    ->unsigned()
                    ->nullable();
            $table->foreign('arquivo_id')
                    ->references('id')
                    ->on('arquivo');
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
            $table->dropForeign('processos_arquivo_id_foreign');
            $table->dropCollumn('arquivo_id');
        });
    }
}
