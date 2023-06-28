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
            'saude_cardiaca'=>'Arritimia cardíaca',
            'dor_peito'=>'Sente dor no peito',
            'exames_doenca_coronariana'=>'Nunca fez',
        ]);
    }
}
