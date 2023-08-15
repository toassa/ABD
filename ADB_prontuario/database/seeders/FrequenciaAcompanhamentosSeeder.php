<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\FrequenciaAcompanhamento;

class FrequenciaAcompanhamentosSeeder extends Seeder
{
    public function run(): void
    {
        FrequenciaAcompanhamento::create([
            'num_registro'=>'11111',
            'dentista'=>'1 vez no mês',
            'cardiologista'=>null,
            'oftalmologista'=>'2 vezes ao ano',
            'urologista'=>'nunca',
            'exame_toque_urologista'=>false,
            'num_USP' => '11111',
        ]);
    }
}
