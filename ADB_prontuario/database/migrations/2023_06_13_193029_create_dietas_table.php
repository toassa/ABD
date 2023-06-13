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
        // Schema::create('dietas', function (Blueprint $table) {
        //     //$table->enum('tipo', ['Restringe apenas açúcar e doce','Dieta de calorias','Contagem de carboidratos','Índice glicemico','Outros']);
        //     // $table->boolean('Segue dieta');
        //      //$table->enum('Dificuldade dieta', ['Deixar de comer doces', 'Comer verduras, legumes e frutas', 'Respeitar a quantidade de alimentação', 'Respeitar o horário da alimentação', 'Entender lista de substituição de alimentos', 'Outros']);
                //$table->integer('Número de consultas com nutricionista no último ano');
                //$table->boolean('Consulta nutricionista?');
                //$table->enum('Orientador', ['Nutricionista', 'Médico', 'Outro profissional da saúde', 'Leigo', 'Revistas/jornais', 'Internet', 'Outros']);
                //$table->boolean('Consome dietéticos?');
                //$table->enum('Quais dietéticos consome?', ['Adoçante', 'Gelatina', 'Pudim', 'Sorvete', 'Refrigerante', 'Bolo', 'Outros']);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dietas');
    }
};
