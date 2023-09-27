<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pes_exames', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('casos_ulceras');
            $table->json('regioes_ulceras')->nullable();
            $table->json('caracteristicas_ulceras')->nullable();
            $table->json('alteracoes')->nullable();
            $table->json('deformidades')->nullable();
            $table->json('pulsos')->nullable();
            $table->json('alteracoes_neuropaticas')->nullable();
            $table->json('demais_alteracoes')->nullable();
            $table->json('observacoes')->nullable();
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pes_exames');
    }
};
