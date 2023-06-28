<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\HabitosVida;

class HabitosVidasSeeder extends Seeder
{
    public function run(): void
    {
        HabitosVida::create([
            'num_registro'=>'11111',
            'sobre_etilismo'=>'Etilista',
            'periodo_quantia_etilismo'=>'1 cerveja por dia durante 10 anos',
            'classificacao_etilismo'=>'Grave',
            'sobre_tabagismo'=>'Não fumante',
            'quantia_tabagismo'=>null,
            'sobre_drogas_ilicitas'=>'Usou uma vez',
            'quais_periodo_drogas'=>null,
            'sobre_anabolizantes'=>'Usuário',
        ]);
    }
}
