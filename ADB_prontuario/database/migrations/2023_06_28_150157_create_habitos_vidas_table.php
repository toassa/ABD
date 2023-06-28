<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('habitos_vidas', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('sobre_etilismo', ['Etilista', 'Ex-etilista', 'Não-etilista']);
            $table->string('periodo_quantia_etilismo')->nullable();
            $table->enum('classificacao_etilismo', ['Leve', 'Moderado', 'Grave'])->nullable();
            $table->enum('sobre_tabagismo', ['Fumante diário', 'Fumante ocasional', 'Ex-fumante', 'Não fumante']);
            $table->string('quantia_tabagismo')->nullable();
            $table->enum('sobre_drogas_ilicitas', ['Usuário', 'Ex-usuário', 'Nunca usou', 'Usou uma vez']);
            $table->string('quais_periodo_drogas')->nullable();
            $table->enum('sobre_anabolizantes', ['Usuário', 'Ex-usuário', 'Nunca usou', 'Usou uma vez']);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('habitos_vidas');
    }
};
