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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->string('num_registro')->primary();

            $table->string('nome');
            $table->string('data_nascimento');
            $table->integer('idade');
            $table->enum('sexo', ['Feminino', 'Masculino', 'Não declarado']);
            $table->string('cor');
            $table->string('estado_civil');
            $table->string('profissao');
            $table->string('escolaridade');
            $table->double('renda_mensal', 7, 2);
            $table->integer('dependentes_renda');
            $table->string('transporte');
            $table->boolean('plano_saude');
            $table->string('telefone');
            $table->string('segundo_telefone');
            $table->string('pertence_segundo_telefone');
            $table->string('data_entrada');

            $table->boolean('ativo');

            $table->string('FK_num_USP');
            $table->foreign('FK_num_USP')->references('num_USP')->on('pessoas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
