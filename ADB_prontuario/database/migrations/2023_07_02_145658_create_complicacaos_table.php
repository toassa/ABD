<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('complicacaos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('complicacoes');
            $table->string('quais_complicacoes')->nullable();
            $table->boolean('internacao_complicacao');
            $table->string('causa_internacao')->nullable();
            $table->enum('episodio_hipoglicemia', ['Sim', 'Não', 'Não lembra']);
            $table->boolean('episodio_assintomatico');
            $table->enum('nivel_episodio', ['Leve/moderado', 'Grave'])->nullable();
            $table->enum('periodo_frequente_hipoglocemia', ['Manhã', 'Tarde', 'Noite', 'Não sabe']);
            $table->integer('episodios_ultimo_mes');
            $table->string('alimento_tratar_hipoglicemia');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('complicacaos');
    }
};
