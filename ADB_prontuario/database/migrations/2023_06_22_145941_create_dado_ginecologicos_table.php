<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dado_ginecologicos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('idade_menopausa');
            $table->integer('idade_menstruacao');
            $table->boolean('menopausa_cirurgica');
            $table->string('historico_obstetrico');
            $table->boolean('uso_metodos_contraceptivos');
            $table->string('metodos_contraceptivos');
            $table->boolean('mamografia');
            $table->boolean('papanicolau');
            $table->string('frequencia_ginecologica');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dado_ginecologicos');
    }
};
