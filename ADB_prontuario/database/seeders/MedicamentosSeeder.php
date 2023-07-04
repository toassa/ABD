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
            'nome'=>'Dorflex',
        ]);
    }
}
