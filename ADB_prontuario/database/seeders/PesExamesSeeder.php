<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PesExame;

class PesExamesSeeder extends Seeder
{
    public function run(): void
    {
        PesExame::create([
            'num_registro'=>'11111',
            'casos_ulceras'=>true,
            'regioes_ulceras'=>json_encode(['região plantar no pé D']),
            'caracteristicas_ulceras'=>json_encode(['são dolorosas no pé D']),
            'alteracoes'=>json_encode(['unhas atróficas ou micóticas no pé E']),
            'deformidades'=>json_encode(['hallux valgus (joanette) no pé E']),
            'pulsos'=>json_encode(['pedioso esquerdo']),
            'alteracoes_neuropaticas'=>json_encode(['pérda de sensibilidade térmica (teste quente/frio) no pé E']),
            'demais_alteracoes'=>json_encode(['alteração na caminhada com calcanhares']),
            'observacoes'=>null,
            'num_USP' => '11111',
        ]);
    }
}
