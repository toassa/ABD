<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PrimeiroDiagnostico;

class PrimeiroDiagnosticosSeeder extends Seeder
{
    public function run(): void
    {
        PrimeiroDiagnostico::create([
            'num_registro'=>'11111',
            'ano'=>2000,
            'idade'=>30,
            'sintomas'=>'Tosse',
            'como_foi_feito'=>'Internação sem cetoacidose diabética',
            'infeccoes_seis_meses'=>false,
            'quais_infeccoes'=>null,
            'periodo_sintomas_diagnostico'=>5,
            'fator_emocional'=>false,
            'qual_fator_emocional'=>null,
            'num_USP' => '11111',
        ]);
    }
}
