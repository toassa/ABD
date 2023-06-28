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
            'regioes_ulceras'=>'região plantar no pé D',
            'caracteristicas_ulceras'=>'são dolorosas no pé D',
            'alteracoes'=>'unhas atróficas ou micóticas no pé E',
            'deformidades'=>'hallux valgus (joanette) no pé E',
            'pulsos'=>'pedioso esquerdo',
            'alteracoes_neuropaticas'=>'pérda de sensibilidade térmica (teste quente/frio) no pé E',
            'demais_alteracoes'=>'alteração na caminhada com calcanhares',
            'observacoes'=>null,
        ]);
    }
}
