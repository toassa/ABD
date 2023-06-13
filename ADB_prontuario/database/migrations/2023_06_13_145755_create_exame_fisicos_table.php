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
        // Schema::create('exame_fisicos', function (Blueprint $table) {
        //     $table->string('num_registro');
        //     $table->double('circunferencia_pescoco');
        //     $table->string('sistema_digestivo');
        //     $table->text('consideracoes_outros_sistemas');
        //     $table->int('pressao_arterial');
        //     $table->double('circunferencia_quadril');
        //     $table->string('sistema_venoso');
        //     $table->string('pulso_arteriais');
        //     $table->double('altura');
        //     $table->string('sistema_cardiovascular');
        //     $table->int('frequencia_cardiaca');
        //     $table->string('cabeca_pescoco');
        //     $table->string('sistema_respiratorio');
        //     $table->string('apecto_geral');
        //     $table->double('peso');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exame_fisicos');
    }
};
