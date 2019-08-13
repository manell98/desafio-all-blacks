<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorcedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torcedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 256);
            $table->string('documento', 45);
            $table->string('cep', 45);
            $table->string('endereco', 256);
            $table->string('bairro', 256);
            $table->string('cidade', 45);
            $table->string('uf', 2);
            $table->string('telefone', 45);
            $table->string('email')->unique();
            $table->enum('ativo',['1', ''])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('torcedores');
    }
}
