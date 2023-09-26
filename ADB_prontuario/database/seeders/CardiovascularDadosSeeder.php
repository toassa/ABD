<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CardiovascularDado;

class CardiovascularDadosSeeder extends Seeder
{
    public function run(): void
    {
        CardiovascularDado::create([
            'num_registro'=>'11111',
            'saude_cardiaca'=>json_encode(['Doença coronariana', 'Angina']),
            'dor_peito'=>json_encode(['Não sente dor no peito', 'Piora com esforço']),
            'exames_doenca_coronariana'=>json_encode(['ECG de repouso', 'Teste ergométrico']),
            'num_USP' => '11111',
        ]);
    }
}
