<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('atividade_diabetes', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('quantia_consultas_enfermagem');
            $table->string('finalidade_consulta')->nullable();
            $table->integer('reunioes_diabeticos');
            $table->integer('programas_educacao_diabeticos');
            $table->boolean('conhece_hba1c');
            $table->enum('significado_hba1c', ['Controle do diabetes atual', 'Controle do diabetes dos últimos 3 meses', 'Controle do diabetes no último ano']);
            $table->integer('valor_maximo_hba1c');
            $table->boolean('conhece_valor_ultima_hba1c');
            $table->integer('valor_ultima_hba1c')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('atividade_diabetes');
    }
};
