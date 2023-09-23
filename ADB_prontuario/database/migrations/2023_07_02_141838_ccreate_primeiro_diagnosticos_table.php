<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('primeiro_diagnosticos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('ano');
            $table->integer('idade_diagnostico');
            $table->string('sintomas');
            $table->enum('como_foi_feito', ['Internação com cetoacidose diabética', 'Internação sem cetoacidose diabética', 'Glicemia de jejum', 'Curva glicêmica', 'Glicemia ao acaso', 'Outros']);
            $table->boolean('infeccoes_seis_meses');
            $table->string('quais_infeccoes')->nullable();
            $table->integer('periodo_sintomas_diagnostico');
            $table->boolean('fator_emocional');
            $table->string('qual_fator_emocional')->nullable();
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('primeiro_diagnosticos');
    }
};
