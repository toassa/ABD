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
            $table->string('num_USP')->primary();
            $table->foreign('num_USP')->references('num_USP')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('tipo_dieta', ['Restringe apenas açúcar e doce','Dieta de calorias','Contagem de carboidratos','Índice glicêmico','Outros']);
            $table->integer('segue_dieta');
            $table->boolean('realiza');
            $table->string('dificuldade_dieta');
            $table->integer('frequencia_nutricionista');
            $table->boolean('consulta_nutricionista');
            $table->string('orientador');
            $table->boolean('consome_dieteticos');
            $table->string('produtos_dieteticos');

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
