<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('frequencia_acompanhamentos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->string('dentista')->nullable();
            $table->string('cardiologista')->nullable();
            $table->string('oftalmologista')->nullable();
            $table->string('urologista')->nullable();
            $table->boolean('exame_toque_urologista');
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('frequencia_acompanhamentos');
    }
};
