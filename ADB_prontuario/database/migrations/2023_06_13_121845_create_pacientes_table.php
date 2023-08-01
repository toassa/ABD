<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Paciente;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->string('num_registro')->primary();

            $table->string('nome');
            $table->string('data_nascimento');
            $table->integer('idade');
            $table->enum('sexo', ['Feminino', 'Masculino', 'Prefiro não dizer']);
            $table->enum('cor', ['Amarelo', 'Branco', 'Indígena', 'Pardo', 'Preto', 'Prefiro não dizer']);
            $table->enum('estado_civil', ['Casado', 'Solteiro', 'Separado', 'Divorciado', 'Viúvo']);
            $table->boolean('desempregado_aposentado_diabetes');
            $table->string('profissao');
            $table->string('escolaridade');
            $table->double('renda_mensal', 7, 2);
            $table->integer('dependentes_renda');
            $table->enum('transporte', ['Ônibus', 'Trem', 'Metrô', 'Van', 'Carro', 'Taxi', 'Uber', 'A pé', 'Outros']);
            $table->boolean('plano_saude');
            $table->string('telefone');
            $table->string('segundo_telefone');
            $table->string('pertence_segundo_telefone');
            // $table->string('data_entrada');

            $table->string('CEP');
            $table->string('numero_moradia');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('complemento')->nullable();

            $table->string('estado_nascimento');
            $table->string('cidade_nascimento');

            $table->boolean('ativo');

            $table->string('num_USP');
            $table->foreign('num_USP')->constrained()->references('num_USP')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('pacientes', function (Blueprint $table) {
        //     $table->dropForeign(['num_USP']);
        // });

        Schema::dropIfExists('pacientes');
    }

    // Método para remover um usuário e atualizar os pacientes relacionados
    // public function removeUserAndRelatedPatients($num_USP): void
    // {
    //     // Passo 1: Obter o valor de num_USP do usuário que será excluído
    //     $user = User::table('users')->where('num_USP', $num_USP)->first();

    //     if ($user) {
    //         // Passo 2: Atualizar a coluna num_USP na tabela pacientes para NULL (ou para um novo valor válido)
    //         Paciente::table('pacientes')->where('num_USP', $num_USP)->update(['num_USP' => null]);

    //         // Passo 3: Excluir o usuário
    //         User::table('users')->where('num_USP', $num_USP)->delete();
    //     }
    // }
};
