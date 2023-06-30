<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('neuropatico_comprometimentos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('reflexo_aquileu_direito', ['Presente', 'Presente ao esforço', 'Ausente']);
            $table->enum('reflexo_aquileu_esquerdo', ['Presente', 'Presente ao esforço', 'Ausente']);
            $table->enum('sensibilidade_vibratoria_direita', ['Presente', 'Ausente']);
            $table->enum('sensibilidade_vibratoria_esquerda', ['Presente', 'Ausente']);
            $table->enum('sensibilidade_dolorosa_direita', ['Presente', 'Ausente']);
            $table->enum('sensibilidade_dolorosa_esquerda', ['Presente', 'Ausente']);
            $table->enum('sensibilidade_termica_direita', ['Presente', 'Ausente']);
            $table->enum('sensibilidade_termica_esquerda', ['Presente', 'Ausente']);
            $table->enum('total_pontos', ['Sinais leves', 'Sinais moderados', 'Sinais graves']);
            $table->boolean('diagnostico_neuropatia_periferica');
            $table->string('observacoes')->nullable();


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('neuropatico_comprometimentos');
    }
};
