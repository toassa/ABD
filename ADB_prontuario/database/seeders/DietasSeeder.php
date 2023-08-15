<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Dieta;

class DietasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dieta::create([
            'num_registro' => '11111',
            'realiza' => true,
            'tipo_dieta' => 'Restringe apenas açúcar e doce',
            'segue_dieta' => 2,
            'dificuldade_dieta' => 'Deixar de comer doces',
            'orientador' => 'Nutricionista',
            'consulta_nutricionista' => true,
            'frequencia_nutricionista' => 3,
            'consome_dieteticos' => false,
            'produtos_dieteticos' => null,
            'num_USP' => '11111',
        ]);

    }
}
