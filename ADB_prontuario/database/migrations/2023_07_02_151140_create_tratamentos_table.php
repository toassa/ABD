<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tratamentos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->string('medicamento_diabetes')->nullable();
            $table->boolean('uso_insulina');
            $table->string('tipos_insulinas')->nullable();
            $table->string('nome_insulina')->nullable();
            $table->string('frequencia_insulina')->nullable();
            $table->string('dose_insulina')->nullable();
            $table->string('origem_insulinas')->nullable();
            $table->string('origem_utensilho')->nullable();
            $table->boolean('reuso_seringas_insulina')->nullable();
            $table->integer('quantia_reuso_seringas')->nullable();
            $table->string('aderencia')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tratamentos');
    }
};
