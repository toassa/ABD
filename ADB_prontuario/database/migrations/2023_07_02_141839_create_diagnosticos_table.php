<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->json('sintomas');
            $table->enum('libido_alterado', ['Sim', 'Não', 'Não sabe ou não quis responder', 'Não se aplica']);
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diagnosticos');
    }
};
