<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TratamentoMedicamento;

class TratamentoMedicamentoSeeder extends Seeder
{
    public function run(): void
    {
        TratamentoMedicamento::create([
            'num_registro'=>'11111',
            'nome'=>'AAS',
            'tipo'=>'HAS',
            'posologia'=>'49',
            'origem'=>'Hospital Estadual',
            'aderencia'=>'NSOCA',
            'num_USP' => '11111',
        ]);
    }
}
