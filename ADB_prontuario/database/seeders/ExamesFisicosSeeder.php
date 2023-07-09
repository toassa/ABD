<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ExameFisico;

class ExamesFisicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExameFisico::create([
            'num_registro' => '11111',
            'circunferencia_pescoco' => 35.5,
            'sistema_digestivo' => 'Normal',
            'consideracoes_outros_sistemas' => 'Sem alterações',
            'pressao_arterial' => 120,
            'circunferencia_quadril' => 95.2,
            'circunferencia_abdominal' => 44.5,
            'sistema_venoso' => 'Normal',
            'pulso_arterial' => 'Regular',
            'altura' => 170.5,
            'sistema_cardiovascular' => 'Sem alterações',
            'frequencia_cardiaca' => 75,
            'cabeca_pescoco' => 'Normal',
            'sistema_respiratorio' => 'Sem alterações',
            'apecto_geral' => 'Saudável',
            'peso' => 70.2,
        ]);
    }
}
