<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('internacoes_historicos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->string('local');
            $table->string('motivo');
            $table->integer('quantidade_dias');
            $table->integer('frequencia_ultimo_ano');
            $table->enum('fator_desencadeante', ['Infecção', 'Erro de administração de insulina', 'Estresse', 'Não hove fator desencadeante', 'Outro']);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('internacoes_historicos');
    }
};
