<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nascimento_dados', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('amamentacao_exclusiva');
            $table->string('tempo_amamentacao');
            $table->enum('ordem', ['Primeiro filho', 'Segundo filho', 'Terceiro filho', 'Quarto filho', 'Quinto filho', 'Sexto filho', 'Sétimo filho', 'Oitavo filho', 'Nono filho', 'Décimo filho ou maior']);
            $table->enum('tipo_parto', ['Normal', 'Cesárea', 'Não sabe']);
            $table->enum('peso', ['<2Kg', '2,1Kg - 2,5Kg', '2,6Kg - 3 Kg', '3,1Kg - 3,5Kg', '3,6Kg - 4Kg', '> 4Kg', 'Não sabe']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nascimento_dados');
    }
};
