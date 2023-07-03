<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tratamento;

class TratamentosSeeder extends Seeder
{
    public function run(): void
    {
        Tratamento::create([
            'num_registro'=>'11111',
            'medicamento_diabetes'=>'NSOCA',
            'uso_insulina'=>false,
            'tipos_insulinas'=>null,
            'nome_insulina'=>null,
            'origem_insulinas'=>null,
            'origem_utensilho'=>null,
            'reuso_seringas_insulina'=>null,
            'quantia_reuso_seringas'=>null,
            'aderencia'=>null,
        ]);
    }
}
