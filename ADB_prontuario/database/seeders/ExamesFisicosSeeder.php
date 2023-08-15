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
            'peso' => 70.2,
            'altura' => 170.5,
            'pressao_arterial' => 120,
            'pulso_arterial' => 'Regular',
            'frequencia_cardiaca' => 75,
            'apecto_geral' => 'Saudável',
            'cabeca_pescoco' => 'Normal',
            'circunferencia_quadril' => 95.2,
            'circunferencia_pescoco' => 35.5,
            'circunferencia_abdominal' => 44.5,
            'sistema_venoso' => 'Normal',
            'sistema_digestivo' => 'Normal',
            'sistema_respiratorio' => 'Sem alterações',
            'sistema_cardiovascular' => 'Sem alterações',
            'consideracoes_outros_sistemas' => 'Sem alterações',
            'num_USP' => '11111',
        ]);
    }
}
