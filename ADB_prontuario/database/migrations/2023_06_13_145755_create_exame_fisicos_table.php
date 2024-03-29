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
        Schema::create('exame_fisicos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->double('peso');
            $table->double('altura');
            $table->string('pressao_arterial');
            $table->string('pulso_arterial');
            $table->integer('frequencia_cardiaca');
            $table->string('aspecto_geral');
            $table->string('cabeca_pescoco');
            $table->double('circunferencia_quadril');
            $table->double('circunferencia_pescoco');
            $table->double('circunferencia_abdominal');
            $table->string('sistema_venoso');
            $table->string('sistema_digestivo');
            $table->string('sistema_respiratorio');
            $table->string('sistema_cardiovascular');
            $table->string('consideracoes_outros_sistemas');

            $table->string('num_USP');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exame_fisicos');
    }
};
