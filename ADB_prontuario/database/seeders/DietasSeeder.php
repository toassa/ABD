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
            'tipo_dieta' => 'Restringe apenas açúcar e doce',
            'segue_dieta' => 2,
            'realiza' => true,
            'dificuldade_dieta' => 'Deixar de comer doces',
            'frequencia_nutricionista' => 3,
            'consulta_nutricionista' => true,
            'orientador' => 'Nutricionista',
            'consome_dieteticos' => true,
            'produtos_dieteticos' => 'Gelatina',
        ]);

    }
}
