<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Automonitorizacao_glicemia;

class AutomonitorizacaoGlicemiaSeeder extends Seeder
{
    public function run(): void
    {
        Automonitorizacao_glicemia::create([
            'num_registro'=>'11111',
            'realiza_automonitorizacao'=>true,
            'frequencia_medicoes'=>'3 vezes ao dia',
            'origem_fitas'=>'Compra em farmácia comum',
            'contagem_carboidratos'=>'Não'
        ]);
    }
}
