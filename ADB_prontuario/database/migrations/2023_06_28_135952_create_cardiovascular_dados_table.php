<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cardiovascular_dados', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->json('saude_cardiaca');
            $table->json('dor_peito');
            $table->json('exames_doenca_coronariana');
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cardiovascular_dados');
    }
};
