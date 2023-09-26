<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Diagnostico;

class DiagnosticosSeeder extends Seeder
{
    public function run(): void
    {
        Diagnostico::create([
            'num_registro'=>'11111',
            'sintomas'=>json_encode(['Polaciúria', 'Outros']),
            'libido_alterado'=>'Não se aplica',
            'num_USP' => '11111',
        ]);
    }
}
