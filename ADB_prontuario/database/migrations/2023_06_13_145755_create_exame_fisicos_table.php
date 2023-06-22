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
            $table->string('num_USP')->primary();
            $table->foreign('num_USP')->references('num_USP')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');

            $table->double('peso');
            $table->double('altura');
            $table->integer('pressao_arterial');
            $table->string('pulso_arterial');
            $table->integer('frequencia_cardiaca');
            $table->string('apecto_geral');
            $table->string('cabeca_pescoco');
            $table->double('circunferencia_quadril');
            $table->double('circunferencia_pescoco');
            $table->string('sistema_venoso');
            $table->string('sistema_digestivo');
            $table->string('sistema_respiratorio');
            $table->string('sistema_cardiovascular');
            $table->string('consideracoes_outros_sistemas');

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
