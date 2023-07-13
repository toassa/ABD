<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ginecologico_dados', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('menopausa');
            $table->integer('idade_menopausa')->nullable();
            $table->boolean('menopausa_cirurgica')->nullable();
            $table->boolean('menstruacao');
            $table->integer('idade_menstruacao')->nullable();
            $table->string('historico_obstetrico');
            $table->boolean('uso_metodos_contraceptivos');
            $table->string('metodos_contraceptivos')->nullable();
            $table->boolean('mamografia');
            $table->boolean('papanicolau');
            $table->string('frequencia_ginecologica');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ginecologico_dados');
    }
};
