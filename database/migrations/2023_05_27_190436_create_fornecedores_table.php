<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->unsignedBigInteger('cnpj')->primary();
        $table->string('nome');
        $table->string('logradouro');
        $table->string('numero');
        $table->string('bairro');
        $table->string('cidade');
        $table->string('telefone');
        $table->string('imagem');
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
}
