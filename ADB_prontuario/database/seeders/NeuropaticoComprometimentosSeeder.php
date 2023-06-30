<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\NeuropaticoComprometimento;

class NeuropaticoComprometimentosSeeder extends Seeder
{
    public function run(): void
    {
        NeuropaticoComprometimento::class([
            'num_registro'=>'11111',
            'reflexo_aquileu_direito'=>'Presente',
            'reflexo_aquileu_esquerdo'=>'Presente ao esforço',
            'sensibilidade_vibratoria_direita'=>'Ausente',
            'sensibilidade_vibratoria_esquerda'=>'Ausente',
            'sensibilidade_dolorosa_direita'=>'Presente',
            'sensibilidade_dolorosa_esquerda'=>'Presente',
            'sensibilidade_termica_direita'=>'Ausente',
            'sensibilidade_termica_esquerda'=>'Ausente',
            'total_pontos'=>'Sinais moderados',
            'diagnostico_neuropatia_periferica'=>true,
            'observacoes'=>null,
        ]);
    }
}
