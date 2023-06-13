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
            $table->enum('sexo', ['Feminino', 'Masculino', 'Prefiro não dizer']);
            $table->enum('cor', ['Amarelo', 'Branco', 'Indígena', 'Pardo', 'Preto', 'Prefiro não dizer']);
            $table->enum('estado_civil', ['Casado', 'Solteiro', 'Separado/divorciado', 'Viúvo']);
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

            $table->string('estado_nascimento');
            $table->string('cidade_nascimento');

            $table->boolean('ativo');

            $table->string('FK_CEP');
            $table->foreign('FK_CEP')->references('CEP')->on('enderecos');

            $table->string('FK_numero');
            $table->foreign('FK_numero')->references('numero')->on('enderecos');

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
