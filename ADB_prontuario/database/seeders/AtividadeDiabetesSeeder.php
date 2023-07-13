<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AtividadeDiabete;

class AtividadeDiabetesSeeder extends Seeder
{
    public function run(): void
    {
        AtividadeDiabete::create([
            'num_registro'=>'11111',
            'quantia_consultas_enfermagem'=>0,
            'finalidade_consulta'=>null,
            'reunioes_diabeticos'=>3,
            'programas_educacao_diabeticos'=>1,
            'conhece_hba1c'=>true,
            'significado_hba1c'=>'Controle do diabetes dos últimos 3 meses',
            'valor_maximo_hba1c'=>8,
            'conhece_valor_ultima_hba1c'=>false,
            'valor_ultima_hba1c'=>null,
        ]);
    }
}
