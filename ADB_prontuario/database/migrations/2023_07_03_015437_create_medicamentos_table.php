<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->string('HAS')->nullable();
            $table->string('dislipidemia')->nullable();
            $table->string('anticoagulante')->nullable();
            $table->string('tireoide')->nullable();
            $table->string('ansiedade_depressao')->nullable();
            $table->string('outros')->nullable();
            $table->string('aderencia')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
