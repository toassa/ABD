<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\NascimentoDado;

class NascimentoDadosSeeder extends Seeder
{
    public function run(): void
    {
        NascimentoDado::create([
            'num_registro' => '11111',
            'amamentacao_exclusiva' => true,
            'tempo_amamentacao' => '5 anos',
            'ordem' => 'Segundo filho', 
            'tipo_parto' => 'Normal',
            'peso' => '3,1Kg - 3,5Kg',
        ]);
    }
}
