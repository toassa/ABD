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

            $table->string('aderencia');
            $table->boolean('uso_medicamentos');
            $table->boolean('uso_insulina');
            $table->string('tipos_insulinas');
            $table->string('nome_insulinas');
            $table->string('frequencia');
            $table->string('dose');
            $table->string('origem_insulinas');
            $table->string('origem_utensilho');
            $table->enum('aplicacao', ['Caneta', 'Seringa']);
            $table->boolean('reuso_seringas_insulina');
            $table->integer('quantia_reuso_seringas')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tratamentos');
    }
};
