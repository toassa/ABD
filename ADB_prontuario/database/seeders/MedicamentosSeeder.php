<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Medicamento;

class MedicamentosSeeder extends Seeder
{
    public function run(): void
    {
        Medicamento::create([
            'num_registro'=>'11111',
            'HAS'=>null,
            'dislipidemia'=>null,
            'anticoagulantes'=>null,
            'tireoide'=>null,
            'ansiedade_depressao'=>null,
            'outros'=>null,
            'aderencia'=>null,
        ]);
    }
}
