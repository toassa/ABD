<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dietas', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('realiza');
            $table->enum('tipo_dieta', ['Restringe apenas açúcar e doce','Dieta de calorias','Contagem de carboidratos','Índice glicêmico','Outros'])->nullable();
            $table->integer('segue_dieta')->nullable();
            $table->string('dificuldade_dieta')->nullable();
            $table->string('orientador')->nullable();

            $table->boolean('consulta_nutricionista');
            $table->integer('frequencia_nutricionista')->nullable();
            
            $table->boolean('consome_dieteticos');
            $table->string('produtos_dieteticos')->nullable();

            $table->string('num_USP');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dietas');
    }
};
