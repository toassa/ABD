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
            $table->string('regioes_ulceras')->nullable();
            $table->string('caracteristicas_ulceras')->nullable();
            $table->string('alteracoes')->nullable();
            $table->string('deformidades')->nullable();
            $table->string('pulsos')->nullable();
            $table->string('alteracoes_neuropaticas')->nullable();
            $table->string('demais_alteracoes')->nullable();
            $table->string('observacoes')->nullable();
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pes_exames');
    }
};
