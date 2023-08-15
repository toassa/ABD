<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\InternacoesHistorico;

class InternacoesHistoricosSeeder extends Seeder
{
    public function run(): void
    {
        InternacoesHistorico::create([
            'num_registro' => '11111',
            'internacao_ultimo_ano' => false,
            'frequencia_ultimo_ano' => null,
            'local' => null,
            'motivo' => null,
            'quantidade_dias' => null,
            'fator_desencadeante' => null,
            'num_USP' => '11111',
        ]);
    }
}
