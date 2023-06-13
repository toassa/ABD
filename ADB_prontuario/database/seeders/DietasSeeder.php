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
    'tipo' => 'Restringe apenas açúcar e doce',
    'Segue dieta' => true,
    'Dificuldade dieta' => 'Deixar de comer doces',
    'Número de consultas com nutricionista no último ano' => 3,
    'Consulta nutricionista?' => true,
    'Orientador' => 'Nutricionista',
    'Consome dietéticos?' => true,
    'Quais dietéticos consome?' => 'Gelatina'
]);

    }
}
