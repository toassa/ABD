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
            $table->enum('internacao_complicacao', [true, false, null])->nullable();
            $table->string('causa_internacao')->nullable();
            $table->enum('episodio_hipoglicemia', ['Sim', 'Não', 'Não lembra']);
            $table->enum('episodio_assintomatico', [true, false, null])->nullable();
            $table->enum('nivel_episodio', ['Leve/moderado', 'Grave'])->nullable();
            $table->enum('periodo_frequente_hipoglocemia', ['Manhã', 'Tarde', 'Noite', 'Não sabe'])->nullable();
            $table->integer('episodios_ultimo_mes')->nullable();
            $table->string('alimento_tratar_hipoglicemia')->nullable();
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('complicacaos');
    }
};
