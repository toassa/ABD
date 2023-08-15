<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tratamento_medicamentos', function (Blueprint $table) {

            $table->string('num_registro')->unique();
            $table->string('nome')->unique();
            $table->primary(['num_registro', 'nome']);

            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nome')->references('nome')->on('medicamentos')->onUpdate('cascade');

            $table->enum('tipo', ['HAS', 'Dislipidemia', 'Anticoagulante', 'Tireoide', 'Ansiedade ou depressao', 'Outros']);
            $table->string('posologia');
            $table->string('origem');
            $table->string('aderencia');
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tratamento_medicamentos');
    }
};
