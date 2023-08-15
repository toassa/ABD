<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('automonitorizacao_glicemias', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('realiza_automonitorizacao');
            $table->string('frequencia_medicoes')->nullable();
            $table->string('origem_fitas')->nullable();
            $table->enum('contagem_carboidratos', ['Sim', 'Não', 'Não sabe'])->nullable();
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('automonitorizacao_glicemias');
    }
};
