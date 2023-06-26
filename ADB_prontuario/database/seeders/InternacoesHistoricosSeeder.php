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
            'local' => 'Unimed Bauru',
            'motivo' => 'NSOCA',
            'quantidade_dias' => 5,
            'frequencia_ultimo_ano' => 2,
            'fator_desencadeante' => 'Erro de administração de insulina'
        ]);
    }
}
