<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ExercicioFisico;

class ExercicioFisicosSeeder extends Seeder
{
    public function run(): void
    {
        ExercicioFisico::create([
            'num_registro'=>'11111',
            'exercicios_rotineiros'=>true,
            'tipo_atividades'=>'Ballet',
            'frequencia_periodo'=>'2 vezes na semana e 45 minutos por dia',
        ]);
    }
}
