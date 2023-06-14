<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
        $table->string('nome');
        $table->string('valor');
        $table->string('quantidade');
        $table->string('imagem');
        $table->unsignedBigInteger('fornecedor_cnpj');
        $table->timestamps();

        $table->foreign('fornecedor_cnpj')->references('cnpj')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};