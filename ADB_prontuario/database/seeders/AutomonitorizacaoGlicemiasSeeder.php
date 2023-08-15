<?php

namespace Database\Seeders;

use App\Models\Automonitorizacao_glicemia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AutomonitorizacaoGlicemia;

class AutomonitorizacaoGlicemiasSeeder extends Seeder
{
    public function run(): void
    {
        AutomonitorizacaoGlicemia::create([
            'num_registro'=>'11111',
            'realiza_automonitorizacao'=>true,
            'frequencia_medicoes'=>'3 vezes ao dia',
            'origem_fitas'=>'Compra em farmácia comum',
            'contagem_carboidratos'=>'Não',
            'num_USP' => '11111',
        ]);
    }
}
